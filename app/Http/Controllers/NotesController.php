<?php

namespace App\Http\Controllers;

use App\Http\Requests\Note\CreateNoteRequest;
use App\Models\Category;
use App\Models\Favourite;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use \Exception;

class NotesController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->query('search');
        $data['notes'] = Note::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('content', 'LIKE', "%{$search}%")
            ->latest()
            ->get();
        return view('index' , $data);
    }

    public function create()
    {
        $data['categories'] = Category::query()->get();
        return view('notes.create', $data);
    }

    public function store(CreateNoteRequest $request)
    {

        DB::beginTransaction();
        try {
            $data = $request->all();
            Note::query()->create($data);
            DB::commit();
            Session::flash('alert-success', 'Successfully created a new note');
            return redirect()->route('index');
        } catch (Exception) {
            DB::rollBack();
            Session::flash('alert-danger', 'Failed to create a new note');
            return back();
        }
    }


    public function edit($id)
    {
        $data['categories'] = Category::query()->get();
        $data['item'] = Note::query()->findOrFail($id);
        return view('notes.create', $data);
    }
    public function update($id , CreateNoteRequest $request)
    {

        DB::beginTransaction();
        try {
            $data = $request->all();
            Note::query()->find($id)->update($data);
            DB::commit();
            Session::flash('alert-success', 'Successfully updated a note');
            return redirect()->route('index');
        } catch (Exception) {
            DB::rollBack();
            Session::flash('alert-danger', 'Failed to update a note');
            return back();
        }
    }



    public function trash()
    {
        return view('Trash')->with('notes', Note::onlyTrashed()->get());
    }


    public function favorites()
    {
        return view('Favorite')->with('notes', Note::select('*')->where('is_favorite', true)->get());
    }


//    public function edit($id)
//    {
//        $note = Note::select('*')
//            ->where('id', $id)
//            ->first();
//
//        if ($note == null)
//            return redirect()->back()->withErrors(['Note does not exists.']);
//
//        return view('EditNote')->with('note', $note)->with('categories', Category::select('*')->get());
//    }



    public function favourite($id)
    {
        $note = Note::query()->find($id);

        if (!$note){
            return response()->json([
                'status' => false,
                'message' => 'Note does not exists.',
            ]);
        }

        $credential= [
            'user_id' => auth()->id(),
            'note_id' => $note->id,
        ];
        if (Favourite::query()->where($credential)->exists()){
            Favourite::query()->where($credential)->delete();
        }else{
            Favourite::query()->create($credential);
        }

        return response()->json([
            'status' => true,
            'message' => 'Done Successfully',
        ]);
    }

    public function destroy($id)
    {
        $note = Note::query()->find($id);

        if (isset($note)) {
            $note->delete();

            return response()->json([
                'status' => true,
                'message' => 'Successfully deleted a note'
            ]);
        } else {

            return response()->json([
                'status' => false,
                'message' => 'Failed to delete a note'
            ]);
        }
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
