<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use mysql_xdevapi\CollectionModify;

class UsersController extends Controller
{

    public function index(){


        $users=User::all();

        return view('users.index',compact('users')); }

        public function create(){

            return view ('users.create');

        }

        public function store(Request $request){

        $this->validate($request,[

            'name'=>'required' ,


        ]);

    }

    public function show($id){

        $user=User::findOrFail($id);

        return view ('users.show',compact('user'));


    }

    public function edit($id){

        $user=User::findOrFail($id);

        return view('users.edit',compact('user'));


    }

    public function update(Request $request,string $id){
        $user = User::findOrFail($id);

        $user->update($request->all());

        return redirect('users');




    }

    public function destroy(string $id){

        $user=User::findOrFail($id);

        $user->delete();

        return redirect('/users');




    }









    //
}
