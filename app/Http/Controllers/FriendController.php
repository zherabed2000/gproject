<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Friend;
use Illuminate\Support\Facades\Session;


class FriendController extends Controller
{

    public function index()
    {
        $data['users'] = User::query()->filter()->get();
        $data['friends'] = Friend::query()
            ->where(function ($q) {
                $q->where('user_id', auth()->id())
                    ->orWhere('user_id', auth()->id());
            })
            ->with('friend')->get();

        return view('friends.index', $data);
    }

    public function add()
    {
        $friends = Friend::query()->where('user_id', auth()->id())->pluck('friend_id')->toArray();
        $data['users'] = User::query()->whereNotIn('id', $friends)->where('id', '<>', auth()->id())->filter()->get();
        return view('friends.add', $data);
    }

    public function send($id)
    {
        $friends = Friend::query()->where('user_id', auth()->id())->pluck('friend_id')->toArray();
        $user = User::query()->whereNotIn('id', $friends)->where('id', '<>', auth()->id())->findOrFail($id);

        Friend::query()->updateOrCreate([
            'user_id' => auth()->id(),
            'friend_id' => $user->id,
        ]);


        Session::flash('alert-success', 'Add Friend Request Send Successfully');
        return redirect()->route('friends.index');
    }

    public function remove($id)
    {
        Friend::query()->where([
            'id' => $id,
        ])->delete();

        Session::flash('alert-success', 'Friend Removed Successfully');
        return redirect()->route('friends.index');
    }

    public function block($id)
    {

        $friend = Friend::query()->find($id);
        $friend->is_blocked = !$friend->is_blocked;
        $friend->save();
        Session::flash('alert-success', 'Block status changed successfully');
        return redirect()->route('friends.index');
    }


    public function accept($id)
    {

        $friend = Friend::query()->find($id);
        $friend->status = 'accepted';
        $friend->save();
        Session::flash('alert-success', 'Request Accepted successfully');
        return redirect()->route('friends.index');
    }

    public function new()
    {
        $data['friends'] = Friend::query()->where('friend_id', auth()->id())
            ->where('status', 'pending')->get();
        return view('friends.new', $data);
    }
}
