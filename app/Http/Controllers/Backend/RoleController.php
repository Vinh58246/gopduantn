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
    public function AllPermission(){

        return view('backend.pages.permission.all_permission');

    } // End Method 

    public function AddPermission(){
        return view('backend.pages.permission.add_permission');
    }// End Method 

 ///////////////////// All Roles ////////////////////



   public function AllRoles(){
        return view('backend.pages.roles.all_roles');

    } // End Method 

    public function AddRoles(){
        return view('backend.pages.roles.add_roles');
    }// End Method 




    ///////////////// Add role Permission all method ///////////////


    public function AddRolesPermission(){
         return view('backend.pages.roles.add_roles_permission');
    }// End Method 

   public function AllRolesPermission(){
        return view('backend.pages.roles.all_roles_permission');
    } // End Method 

}
 