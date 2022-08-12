<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User as UserRequest;
use App\User;
use Illuminate\Support\Facades\Storage;
use File;

class UserController extends Controller {

    public function store(UserRequest $request) {
        $userCreate = User::create(
            $request->all()
        );

        if (!empty($request->file('cover'))) {
            $userCreate->cover = $request->file('cover')->store('user');
            $userCreate->save();
        }

        return redirect()->route('admin.login')->withErrors('Usuario criado com sucesso!');
    }

    public function index() {
        $tit_user = 'Usuários';
        $users = User::OrderBy('name')->get();

        return view('admin.users.index', [
            'tit_user' => $tit_user,
            'users' => $users
        ]);
    }

    public function update(UserRequest $request, $id) {
        $user = User::where('id', $id)->first();

        if (!empty($request->file('cover'))) {
            Storage::delete($user->cover);
            $user->cover = '';
        }

        $user->fill($request->all());

        if (!empty($request->file('cover'))) {
            $user->cover = $request->file('cover')->store('user');
        }

        if (!$user->save()) {
            return redirect()->back()->withInput()->withErrors();
        }

        return redirect()->route('admin.users.index')->withErrors('Usuário alterado com sucesso');
    }

    public function destroy($id) {
        $user = User::find($id);
        
        if (!empty($user)) {
         \Storage::delete($user->cover, $user->cover);
         $user->delete();
     }
     
     return redirect()->route('admin.users.index')->withErrors('Usuário deletado com sucesso');
 }

}





