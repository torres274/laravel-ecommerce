<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $role = Role::orderBy('id', 'asc')->paginate(3);

        return view('/admin/role')->with('role',$role);
    }
}