<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;
use Inertia\Inertia;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return Inertia::render('Role/Index', compact('roles'));
    }


     public function create()
    {
        return Inertia::render('Role/Create');
    }

    public function store(Request $request)
    {
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'description' => 'required|string|max:255',
            ]);

            $input = $request->all();
            $roles = Role::create($input);
            return redirect()->route('roles');
    }


     public function edit($id)
    {
        $roles = Role::find($id);
        return Inertia::render('Role/Edit');
    }

    public function update(Request $request)
    {
        $roles = Role::findorFail($id);
        $roles->update($request->all);
        return redirect()->route('roles');
    }

    public function destroy($id)
    {
        $roles = Role::find($id);
        $roles->delete();
        return redirect()->route('roles');
    }

}
