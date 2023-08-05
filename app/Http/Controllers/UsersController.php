<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function index()
    {
        return view('users')->with('users', User::select('*')->get());
    }

    public function store(Request $request)
    {
        $title = $request['title'];
        $description = $request['description'];

        $category = Category::create([
            'title' => $title,
            'description' => $description
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
        $user = User::find($id);

        if ($user) {
            // $user->delete();
            Session::flash('alert-success', 'Successfully deleted the category');
        } else {
            Session::flash('alert-danger', 'Failed to delete the category');
        }

        return redirect()->back();
    }
        
}
