<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Session;

class HomeController extends Controller
{

    //list of users
    public function index(){

        //join users table and groups table
        //order result by group name
        $users = DB::table('users')
                    ->join('groups','users.group_id','=','groups.id')
                    ->select('users.*', 'groups.name as group')
                    ->orderBy('group','asc')
                    ->get();

         //data not filtred           
         $isFiltered =false;            
        // return the result on home page           
        return view('welcome',['users'=>$users,'isFiltered'=>$isFiltered]);

    }
    // filter user by group name or user name
    public function filter(Request $request){
        
        //join users table and groups table
        //order result by group name
        $users = DB::table('users')
                    ->join('groups','users.group_id','=','groups.id')
                    ->select('users.id','users.lastname','users.firstname','users.email', 'groups.name as group')
                    ->orderBy('group','asc')
                    ->where('users.lastname','like','%'.$request->filter.'%')
                    ->orWhere('groups.name','like','%'.$request->filter.'%')
                    ->get();

         // data is filtred           
         $isFiltered =true;           
        // return the result on home page           
        return view('welcome',['users'=>$users,'isFiltered'=>$isFiltered]);

    }

    // bulk delete

    public function bulkDelete(Request $request){

        // delete selected users
        DB::table('users')->whereIn('id', $request->list)->delete();
        
        Session::flash('success','delete is successfully done!');
        return redirect('/');

    }


}
