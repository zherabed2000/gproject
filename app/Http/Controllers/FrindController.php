<?php

namespace App\Http\Controllers;

use App\Http\Requests\Note\CreateNoteRequest;
use App\Models\Category;
use App\Models\Note;
use App\Models\User;
use App\Models\Friend;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class FrindController extends Controller
{
    public function addFrind(Request $request)
    {

        $users =   User::select('*')->get();
        $frinds  = Friend::where('user_id' , Auth()->user()->id )->get();

        if( $request->search != '')
        {

                $users = User::where('email', $request->search)
                ->Orwhere('name',   $request->search )
                ->Orwhere('name','like',"%$request->search%")
        ->get();

    }   
    


        return view('addfrind' , compact('users' , 'frinds') );
    }

    
    public function addFrindNew(Request $request)
    {

        $users =   User::select('*')->get();
        $frinds  = Friend::where('user_id' , Auth()->user()->id )->get();

        //    dd($request->search);  
        if( $request->search != '')
        {

            // dd("dddd");
                $users = User::where('email', $request->search)
                ->Orwhere('name',   $request->search )
                ->Orwhere('name','like',"%$request->search%")
        ->get();

    }   
    


        return view('addfrindnew' , compact('users' , 'frinds') );
    }



    public function addFrindPost($id , Request $request)
    {

        $Friend = Friend::create([
            // 'user_id' =>  Auth()->user()->id,
            'user_id' =>  Auth()->user()->id,
            'friend_id' => $id ,
            'is_blocked' => 0,
        ]);

        $result = $Friend->save();

        if ($result)
            Session::flash('alert-success', 'Successfully Add Friend ');
        else
            Session::flash('alert-danger', 'Failed Add Friend');

        return redirect()->route('addFrind');
    
    }


    public function blokedFrind($id , Request $request)
    {
        $is_Friend = Friend::where('id' , Auth()->user()->id)->where('friend_id' , $id)->first();
        $Friend = Friend::where('id' , Auth()->user()->id)->where('friend_id' , $id)->first();
      
        if($is_Friend == null){

        $Friend = Friend::create([
            'user_id' =>  Auth()->user()->id,
            // 'user_id' =>  1,
            'friend_id' => $id ,
            'is_blocked' => 1,
        ]);

    }
    $Friend->update([
        'is_blocked' => 1
    ]);

        $result = $Friend->save();


        if ($result)
            Session::flash('alert-success', 'Successfully Bloked Friend ');
        else
            Session::flash('alert-danger', 'Failed Bloked Friend');

        return redirect()->route('addFrind');
    
    }

   
}
