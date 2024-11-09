<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index(){
        $user=user::paginate(10);
        return view('user.index',['users'=>$user]);
    }

    public function create(){
        return view('user.create');
    }
    public function show($user){
        $user=user::find($user);
        return view('user.show',compact('user'));
    }

    public function store(Request $request){
        $user=new user();
        $user->name = $request->name;
        $user->p_surname = $request->p_surname;
        $user->m_surname = $request->m_surname;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();
        Alert::success('Usuario guardado','El usuario se creo correctamente');
        return redirect('/usuario');
    }
    
    public function edit($user){
        $user=user::find($user);
        return view('user.edit',compact('user'));
    }

    public function update(Request $request, $user){
        $user=user::find($user);
        $user->name = $request->name;
        $user->p_surname = $request->p_surname;
        $user->m_surname = $request->m_surname;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();
        Alert::success('Usuario editado','Se editó la información del usuario');
        return redirect("/usuario/{$user->id}");
    }
    
    public function destroy($user){
        $user=user::find($user);
        $user->delete();
        Alert::success('Usuario eliminado','El usuario se eliminó correctamente');
        return redirect("/usuario");
    }
}
