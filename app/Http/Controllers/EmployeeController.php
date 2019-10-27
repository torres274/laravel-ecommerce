<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $user = User::orderBy('id', 'asc')->paginate();
        $role = Role::all();

        return view('employee', compact('role'))->with('user',$user);
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
            'identification' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ));

        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors(),
            ], 422);
        }

        $users = User::find($id);

        $users->role_id = $request->input('role_id');
        $users->identification = $request->input('identification');
        $users->name = $request->input('name');
        $users->phone = $request->input('phone');
        $users->address = $request->input('address');

        $users->save();

        return response()->json([
            'error' => false,
            'users'  => $users,
        ], 200);
    }

    public function destroy($id)
    {
        $users = User::destroy($id);

        return response()->json([
            'error' => false,
            'users'  => $users,
        ], 200);
    }
}
