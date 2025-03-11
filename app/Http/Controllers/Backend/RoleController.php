<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use DB;

class RoleController extends Controller
{
    public function AllPermission()
    {
        $permissions = Permission::all();
        return view('backend.pages.permission.all_permission', compact('permissions'));
    } // End Method 

    public function AddPermission()
    {
        return view('backend.pages.permission.add_permission');
    } // End Method 

    public function StorePermission(Request $request)
    {

        $role = Permission::create([
            'name' => $request->name,
            'guard_name' => $request->guard_name,
        ]);

        return redirect()->route('all.permission');
    } // End Method 

    public function EditPermission($id)
    {

        $permission = Permission::findOrFail($id);
        return view('backend.pages.permission.edit_permission', compact('permission'));
    } // End Method 

    public function UpdatePermission(Request $request)
    {
        $per_id = $request->id;


        Permission::findOrFail($per_id)->update([
            'name' => $request->name,
            'guard_name' => $request->guard_name,

        ]);

        return redirect()->route('all.permission');
    } // End Method 

    public function DeletePermission($id)
    {

        $permission = Permission::findOrFail($id)->delete();

        return redirect()->route('all.permission');
    } // End Method 

    ///////////////////// All Roles ////////////////////



    public function AllRoles()
    {
        return view('backend.pages.roles.all_roles');
    } // End Method 

    public function AddRoles()
    {
        return view('backend.pages.roles.add_roles');
    } // End Method 




    ///////////////// Add role Permission all method ///////////////


    public function AddRolesPermission()
    {
        return view('backend.pages.roles.add_roles_permission');
    } // End Method 

    public function AllRolesPermission()
    {
        return view('backend.pages.roles.all_roles_permission');
    } // End Method 

}
