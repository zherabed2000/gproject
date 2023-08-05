<?php

namespace App\Http\Controllers;

use App\Http\Requests\Note\CreateNoteRequest;
use App\Models\Category;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NotesController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $notes = Note::select('*')
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('content', 'LIKE', "%{$search}%")
            ->get();
        return view('index')->with('notes', $notes);
    }

    public function trash()
    {
        return view('Trash')->with('notes', Note::onlyTrashed()->get());
    }


    public function favorites()
    {
        return view('Favorite')->with('notes', Note::select('*')->where('is_favorite', true)->get());
    }

    public function add()
    {
        return view('AddNote')->with('categories', Category::select('*')->get());
    }

    public function store(CreateNoteRequest $request)
    {
        $name = $request['name'];
        $category_id = $request['category_id'];
        $content = $request['content'];
        // $color = $request['color'];

        $note = Note::create([
            'name' => $name,
            'category_id' => $category_id,
            'content' => $content,
            // 'color' => $color,
        ]);

        $result = $note->save();

        if ($result)
            Session::flash('alert-success', 'Successfully created a new note');
        else
            Session::flash('alert-danger', 'Failed to create a new note');

        return redirect()->route('index');
    }

    public function edit($id)
    {
        $note = Note::select('*')
            ->where('id', $id)
            ->first();

        if ($note == null)
            return redirect()->back()->withErrors(['Note does not exists.']);

        return view('EditNote')->with('note', $note)->with('categories', Category::select('*')->get());
    }

    public function update(CreateNoteRequest $request, $id)
    {
        $note = Note::select('*')
            ->where('id', $id)
            ->first();

        if ($note == null)
            return redirect()->back()->withErrors(['Note does not exists.']);

        $result = $note->update([
            'name' => $request['name'],
            'category_id' => $request['category_id'],
            'content' => $request['content'] ,

        ]);

        if ($result)
            Session::flash('alert-success', 'Successfully updated a note');
        else
            Session::flash('alert-danger', 'Failed to update a note');

        return redirect()->route('index');
    }


    public function favourite($id)
    {
        $note = Note::select('*')
            ->where('id', $id)
            ->first();

        if ($note == null)
            return redirect()->back()->withErrors(['Note does not exists.']);

        $result = $note->update([
            'is_favorite' => !$note->is_favorite
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $note = Note::select('*')
            ->where('id', $id)
            ->first();

        if ($note == null)
            return redirect()->back()->withErrors(['Note does not exists.']);

        $result = $note->delete();

        if ($result)
            Session::flash('alert-success', 'Successfully deleted a note');
        else
            Session::flash('alert-danger', 'Failed to delete a note');

        return redirect()->back();
    }

    public function forceDestroy($id)
    {
        $note = Note::onlyTrashed()
            ->where('id', $id)
            ->first();

        if ($note == null)
            return redirect()->back()->withErrors(['Note does not exists.']);

        $result = $note->forceDelete();

        if ($result)
            Session::flash('alert-success', 'Successfully deleted a note');
        else
            Session::flash('alert-danger', 'Failed to delete a note');

        return redirect()->back();
    }

    public function recover($id)
    {
        $note = Note::onlyTrashed()
            ->where('id', $id)
            ->first();

        if ($note == null)
            return redirect()->back()->withErrors(['Note does not exists.']);

        $result = $note->restore();

        if ($result)
            Session::flash('alert-success', 'Successfully recovered a note');
        else
            Session::flash('alert-danger', 'Failed to recover a note');

        return redirect()->back();
    }
}
