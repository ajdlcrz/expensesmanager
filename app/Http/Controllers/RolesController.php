<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Roles;

class RolesController extends Controller
{

    public function index(){

        $roles = Roles::all();

        return view('usermanagement.roles')->with('roles', $roles);
    }
    public function store(Request $request)
    {   
        $roles = new Roles();

        $roles->role_name = $request->displaynameR;
        $roles->role_desc = $request->descrole;
        
        $roles->save();
        
        return redirect('/roles');
    }        
    public function edit($id){

        $roles = Roles::find($id);

        return view('modals.Editrole')->with('roles', $roles);

    }

    public function update($id, Request $request){
            $roles = Roles::find($id);

            $roles->role_name = $request->displaynameR;
            $roles->role_desc = $request->descrole;
            $roles->save();

            return redirect('/roles');
    }

    public function destroy($id){
        $roles = Roles::find($id);
        $roles->delete();

        return redirect('/roles');
}
}
