<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
// Добавление ролей и пользователей
// 1)       Role::create(['name'=>'writer']);
// 2)       Permission::create(['name'=>'write post']);
// 3)       $role = Role::findById(1);
// 4)       $permission = Permission::findById(1);
// 5)       $role->givePermissionTo($permission);
// 6)       $permission->removeRole($role);
// 7)       $role->revokePermissionTo($permission);

      //  auth()->user()->givePermissionTo('edit post');
      //  auth()->user()->assignRole('writer');
      //  return view('home');
       // $permission = Permission::findById(2);
       // $role = Role::findById(1);
      //  $role->givePermissionTo($permission);
        return auth()->user()->getAllPermissions();
    }
}
