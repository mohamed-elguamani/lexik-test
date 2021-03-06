<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;
use App\Group;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all users
        $users = User::all();

        return view('user.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //get all groups
        $groups= Group::all();

        return view('user.create',['groups'=>$groups]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validation
        $request->validate([
            
            'firstname' => 'bail|required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email',
            'birthday' => 'required',
            'group' => 'required'
        ]);

        // create new user
        $user = new User();
        $user->firstname= $request->firstname;
        $user->lastname= $request->lastname;
        $user->email= $request->email;
        $user->birthday = $request->birthday;
        $user->group_id = $request->group;

        //save user
        $user->save();
        
        Session::flash('success','A new user is added successfully!');
        return redirect('/user/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //find user to show
        $user = User::find($id);
        return view('user.show',['user'=> $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find user to update
        $user = User::find($id);
        //get all groups
        $groups= Group::all();
        return view('user.edit',['user'=> $user,'groups'=>$groups]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       //validation
        $request->validate([
            
            'firstname' => 'bail|required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email',
            'birthday' => 'required',
            'group' => 'required'
        ]);

        // user to update
        $user = User::find($id);
        $user->firstname= $request->firstname;
        $user->lastname= $request->lastname;
        $user->email= $request->email;
        $user->birthday = $request->birthday;
        $user->group_id = $request->group;

        //save user
        $user->save();
        
        Session::flash('success','The user is successfully updated!');
        return redirect('/user/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //find user to delete
        $user=User::find($id);
        $user->delete();

        Session::flash('success','The user is deleted successfully!');
        return redirect('/user/');
    }
}
