<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(AddUserRequest $request)
    {
        $data = $request->validated();
        $user = new User();
        $user->email = $data['email'];
        $user->name = $data['name'];
        $user->password = Hash::make($data['password']);
        $user->is_admin = $data['is_admin'];
        $user->save();

        return redirect()->route('users.index')->with('success', 'User is added succssesffuly');
    }


    public function edit(string $id)
    {
        $user = User::findOrFail($id);

        return view('users.edit', compact('user'));

    }

    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $user->update($request->all());

        return redirect('users');

    }


    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect('/users');


    }


    //
}
