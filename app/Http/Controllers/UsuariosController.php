<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['usuarios']=User::paginate();
        return view('users.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosUsuario=request()->except('_token');
        User::insert($datosUsuario);
        return redirect('users');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id )
    {
        $usuarios=User::findOrFail($id);
        return view('users.edit',compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosUsuario=request()->except(['_token','_method']);
        User::where('id','=',$id)->update($datosUsuario);

        $usuarios=User::findOrFail($id);
        return view('users.edit',compact('usuarios'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('users');
    }

    public function showLoginForm()
    {
        return view('index');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('correo', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            return redirect()->intended('users');
        } else {
            // Autenticación fallida
            return redirect()->back()->withErrors(['correo' => 'Credenciales inválidas']);
        }
    }
}
