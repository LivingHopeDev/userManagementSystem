<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser()
    {
        $Users = User::all();
        return view('users.users')->with('users', $Users);
    }

    public function createUser()
    {
        return view('users.create')->with('flash_message', 'User Created!');
    }

    public function storeUser(Request $request)
    {
        $input = $request->all();
        User::create($input);
        return redirect('user')->with('flash_message', 'User Added!');
    }


    public function editUsers($id)
    {
        $user = User::find($id);
        return view('users.editUser')->with('users', $user);
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect('user')->with('flash_message', 'User Updated!');
    }

    public function deleteUser($id)
    {
        User::destroy($id);
        return redirect('user')->with('flash_message', 'User deleted!');
    }
}
