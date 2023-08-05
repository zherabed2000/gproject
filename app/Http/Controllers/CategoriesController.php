<?php

namespace App\Http\Controllers;

use App\Http\Requests\Note\CreateCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('categories')->with('categories', Category::select('*')->get());
    }

    public function store(CreateCategoryRequest $request)
    {
        $title = $request['title'];
        $description = $request['description'];

        $category = Category::create([
            'title' => $title,
            'description' => $description ,
             'color' => $request['color']
        ]);

        $result = $category->save();

        if ($result)
            Session::flash('alert-success', 'Successfully created a new category');
        else
            Session::flash('alert-danger', 'Failed to create a new category');

        return redirect()->back();
    }

    public function destroy($id)
    {
        //delete category if it has no notes
        $category = Category::find($id);

        if ($category->notes->count() == 0) {
            $category->delete();
            Session::flash('alert-success', 'Successfully deleted the category');
        } else {
            Session::flash('alert-danger', 'Failed to delete the category');
        }

        return redirect()->back();
    }

}
