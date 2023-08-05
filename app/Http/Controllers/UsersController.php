<?php

namespace App\Http\Controllers;

use App\Http\Requests\Note\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use \Exception;

class UsersController extends Controller
{
    public function index()
    {
        $data['users'] = User::query()->latest()->get();
        return view('users.index', $data);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = $request->all();
            $data['password'] = Hash::make($data['password']);
            User::query()->create($data);
            Session::flash('alert-success', 'Successfully created a new user');
            DB::commit();
        } catch (Exception $exception) {
            Session::flash('alert-danger', 'Failed to create a new user');
            DB::rollBack();
        }
        return redirect()->back();
    }


    public function edit($id)
    {
        $data['item'] = User::query()->findOrFail($id);
        return view('users.create', $data);
    }

    public function update($id, UserRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = $request->all();
            $user = User::query()->findOrFail($id);
            if (!$request->filled('password')) {
                $data['password'] = $user->password;
            } else {
                $data['password'] = Hash::make($data['password']);
            }
            $user->update($data);
            Session::flash('alert-success', 'Successfully user updated');
            DB::commit();
        } catch (Exception $exception) {
            Session::flash('alert-danger', 'Failed to updated a user');
            DB::rollBack();
        }
        return redirect()->back();
    }

    public function destroy($id)
    {
        //delete category if it has no notes
        $user = User::query()->find($id);

        try {
            if ($user) {
                $user->delete();
                return response()->json([
                    'status' => true,
                    'message' => 'User deleted Successfully'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Failed to delete the user'
                ]);
            }
        } catch (Exception $exception) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to delete the user'
            ]);
        }

    }

}
