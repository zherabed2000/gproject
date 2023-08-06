<?php

namespace App\Http\Controllers;

use App\Http\Requests\Note\CategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Mockery\Exception;

class CategoriesController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::query()->filter()->latest()->get();

        return view('categories.index', $data);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(CategoryRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = $request->all();
            Category::query()->create($data);
            Session::flash('alert-success', 'Successfully created a new category');
            DB::commit();
        } catch (Exception $exception) {
            Session::flash('alert-danger', 'Failed to create a new category');
            DB::rollBack();
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $data['item'] = Category::query()->findOrFail($id);
        return view('categories.create', $data);
    }

    public function update($id , CategoryRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = $request->all();
            Category::query()->findOrFail($id)->update($data);
            Session::flash('alert-success', 'Successfully  category updated');
            DB::commit();
        } catch (Exception $exception) {
            Session::flash('alert-danger', 'Failed to updated a category');
            DB::rollBack();
        }
        return redirect()->back();
    }

    public function destroy($id)
    {
        //delete category if it has no notes
        $category = Category::query()->find($id);

        if ($category->notes->count() == 0) {
            $category->delete();
            return response()->json([
                'status' => true,
                'message' => 'Category deleted Successfully'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Failed to delete the category'
            ]);
        }
    }

}
