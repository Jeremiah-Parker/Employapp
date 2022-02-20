<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;
use Inertia\Inertia;
class UserController extends Controller
{
    public function index()
    {
            $users = User::with('roles')->get();
            return Inertia::render('User/Index', compact('users'));
    }

    public function create()
    {
        return Inertia::render('User/Create', ['roles' => Role::all()]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email',
            'phone' => 'required|string|max:122|',
            'address' => 'required|string|max:255|',
            'password' => 'required|min:6', 
            'password_confirmation' => 'required|min:6',
            'roles' => 'required|exists:roles,id',
        ]);
       
        
        $user = User::create($request->all());
         $user->roles()->sync($request->roles);
        return redirect()->route('users');

    }

    public function edit($id)
    {
        $users = User::find($id);
        return Inertia::render('User/Edit');
    }

    public function update(Request  $request, $id)
    {
        $users = User::findOrFail($id);
        $users->update($request->all);
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->route('users');
    }
}
