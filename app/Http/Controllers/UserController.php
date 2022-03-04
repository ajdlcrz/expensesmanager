<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;
use App\Models\Roles;


class UserController extends Controller
{
    public function index(){

        $users = Users::all();
        $roles = Roles::all();

        return view('usermanagement.users', ['users'=>$users, 'roles'=>$roles]);
    }
    public function store(Request $request)
    {   
    
        $users = new Users();

        $users->user_name = $request->userName;
        $users->user_email = $request->userEmail;
        $users->user_role = $request->userRole;
        
        $users->save();
        
        return redirect('/users');

    }        
    public function edit($id){

        $users = Users::find($id);
        $roles = Roles::all();

        return view('modals.edituser', ['users'=>$users, 'roles'=>$roles]);

    }

    public function update($id, Request $request){
            $users = Users::find($id);

            $users->user_name = $request->userName;
            $users->user_email = $request->userEmail;
            $users->user_role = $request->userRole;
            
            $users->save();

            return redirect('/users');
    }

    public function destroy($id){
        $users = Users::find($id);
        $users->delete();

        return redirect('/users');
}
}
