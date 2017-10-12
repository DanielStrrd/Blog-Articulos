<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function index() {
      $users = User::orderBy('id', 'ASC')->paginate(10);
      return view('admin.users.index')->with('users', $users);
    }

    public function create() {
      return view('admin.users.create');
    }

    public function store(UserRequest $request) {

      $user = new User($request->all());
      $user->password = bcrypt($request->password);
      $user->save();

      Flash::success("Se ha registrado " .$user->name);

      return redirect()->route('users.index');
    }

    public function destroy($id) {
      $user = User::find($id);
      $user->delete();

      Flash::warning("El ususario " .$user->name. " ha sido eliminado");
      return redirect()->route('users.index');
    }

    public function edit($id) {
      $user = User::find($id);
      return view('admin.users.edit')->with('user', $user);
    }

    public function update(Request $request, $id) {
      $user = User::find($id);
      $user->name = $request->name;
      $user->email = $request->email;
      $user->type = $request->type;
      $user->save();

      Flash::success("El ususario " .$user->name. " ha sido editado");
      return redirect()->route('users.index');
    }
}
