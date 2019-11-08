<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $user = User::orderBy('id', 'asc')->paginate();
        $role = Role::all();

        return view('/admin/customer', compact('role'))->with('user',$user);
    }

    public function show($id)
    {
        $users = User::find($id);

        return response()->json([
            'error' => false,
            'users'  => $users,
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->input(), array(
            'role_id' => 'required',
        ));

        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors(),
            ], 422);
        }

        $users = User::find($id);

        $users->role_id = $request->input('role_id');

        $users->save();

        return response()->json([
            'error' => false,
            'users'  => $users,
        ], 200);
    }
    
}
