<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function index()
    {
    	$users = User::orderBy('id', 'desc')->paginate(10);
    	return view('/users/index', compact('users'));
    }

    public function show($id)
    {
      $user = User::find($id);
      return view('users.show', compact('user'));
    }

    public function create()
    {
      return view('users.create');
    }

    public function store(UserRequest $request)
    {
      $user = new User;
      $user->username = $request->input('username');
      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->password = bcrypt($request->input('password'));

      $user->save();

      return Redirect()->route('users.index')
        ->with('info', 'El usuario fue guardado');
    }

    public function edit($id)
    {
      $user = User::find($id);
      return view('users.edit', compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
      $user = User::find($id);

      $user->name = $request->input('name');
      $user->username = $request->input('username');
      $user->email = $request->input('email');
      $user->password = bcrypt($request->input('password'));

      $user->save();

      return Redirect()->route('users.index')
        ->with('info', 'El usuario fue actualizado');
    }

    public function destroy($id)
    {
      $user = User::find($id);
      $user->delete();
      return back()->with('info', 'El Usuario fue eliminado');
    }

}
