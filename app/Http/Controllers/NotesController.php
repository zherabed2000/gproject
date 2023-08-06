<?php

namespace App\Http\Controllers;

use App\Http\Requests\Note\CreateNoteRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Favourite;
use App\Models\Friend;
use App\Models\Note;
use App\Models\NoteShare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use \Exception;

class NotesController extends Controller
{

    public function index(Request $request)
    {
        $data['notes'] = Note::query()
            ->filter()->visible()
            ->with('user')
            ->latest()
            ->get();
        return view('index', $data);
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

    public function update($id, CreateNoteRequest $request)
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


    public function favourite($id)
    {
        $note = Note::query()->find($id);

        if (!$note) {
            return response()->json([
                'status' => false,
                'message' => 'Note does not exists.',
            ]);
        }

        $credential = [
            'user_id' => auth()->id(),
            'note_id' => $note->id,
        ];
        if (Favourite::query()->where($credential)->exists()) {
            Favourite::query()->where($credential)->delete();
        } else {
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

    public function addAttachment($id, Request $request)
    {
        $note = Note::query()->findOrFail($id);
        if (!$note) {
            Session::flash('alert-danger', 'Note Not Found');
            return back();
        }

        $request->validate([
            'file' => 'required|image'
        ], [], [
            'file' => 'image'
        ]);

        $file = $request->file('file');
        //save format
        $format = $file->getExtension();
        $name = $file->getClientOriginalName();

        $full_name = $name . $format;
        $file->move(public_path('uploads'), $full_name);

        $note->attachment = "uploads/$full_name";
        $note->save();

        Session::flash('alert-success', 'Attachment added successfully');
        return redirect()->route('index');
    }


    public function getComments($id)
    {
        $note = Note::query()->with('comments')->find($id);
        if (!$note) {
            return response()->json([
                'status' => true,
                'html' => ''
            ]);
        }

        $comments = $note->comments;

        $html = view('notes.comment_card', compact('comments'))->render();
        return response()->json([
            'status' => true,
            'html' => $html
        ]);
    }

    public function addComment($id, Request $request)
    {
        $note = Note::query()->find($id);
        if (!$note) {
            Session::flash('alert-danger', 'Note Not Found');
            return back();
        }

        $request->validate([
            'comment' => 'required|string'
        ]);

        Comment::query()->create([
            'note_id' => $id,
            'user_id' => auth()->id(),
            'comment' => $request->get('comment'),
        ]);

        Session::flash('alert-success', 'Comment added successfully');
        return redirect()->route('index');
    }


    /////////////////////////////////////////////

    public function share($id)
    {
        $data['item'] = Note::query()->findOrFail($id);
        $data['friends'] = Friend::query()->where('user_id', auth()->id())
            ->with('friend')->where('status', 'accepted')->get();

        return view('notes.share', $data);
    }

    public function shareStore($id, Request $request)
    {
        $note = Note::query()->find($id);
        if (!$note) {
            Session::flash('alert-danger', 'Note Not Found');
            return back();
        }

        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'required|exists:friends,friend_id,status,accepted,user_id,' . auth()->id(),
        ], [
            'ids.*.exists' => 'Some users are not friends'
        ], [
            'ids' => 'users',
            'ids.*' => 'user',
        ]);

        $ids = $request->get('ids', []);
        foreach ($ids as $user_id) {
            NoteShare::query()->updateOrCreate([
                'note_id' => $id,
                'user_id' => $user_id
            ]);
        }
        Session::flash('alert-success', 'Note shared successfully');
        return redirect()->route('index');

    }

    /////////////////////////////////////////////
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
