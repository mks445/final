<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use Gate;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view ('backend.users.index')-> with ('users', $users);
    }

    public function edit(User $user)
    {
if(Gate::denies('edit-users')){
    return redirect() -> route('welcome');
}
        $roles=  Role::all();

       return view ('backend.users.edit')->with([
           'user'=>$user,
           'roles'=>$roles
       ]);
    }

    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        return redirect() -> route('users.index');
    }

    public function destroy(User $user)
    {

        if(Gate::denies('delete-users')){
            return redirect() -> route('welcome');
        }
        $user->roles()->detach();
        $user->delete();
        return redirect() -> route('users.index');
    }
}
