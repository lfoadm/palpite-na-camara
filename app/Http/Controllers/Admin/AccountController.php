<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->paginate(9);
        return view('admin.users.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'utype' => 'required',
        ]);

        $user = User::find($request->id);
        $user->name = $request->name;
        $user->utype = $request->utype;
        $user->save();

        return redirect(route('admin.account.index'))->with('status', 'Perfil de usuário atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect(route('admin.account.index'))->with('status', 'Perfil de usuário apagado com sucesso!');
    }
}
