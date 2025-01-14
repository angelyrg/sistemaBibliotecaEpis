<?php

namespace App\Http\Controllers;

use App\Models\libros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class reportesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['libros']=Libros::paginate();
        return view('reportes.reportes',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosLibro=request()->except('_token');

        if($request->hasFile('imagen')){
            $datosLibro['imagen']=$request->file('imagen')->store('uploads', 'public');
        }

        Libros::insert($datosLibro);
        return redirect('libros');
    }

    /**
     * Display the specified resource.
     */
    public function show(libros $libros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $libros=Libros::findOrFail($id);
        return view('libros.edit',compact('libros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosLibro=request()->except(['_token','_method']);
        if($request->hasFile('imagen')){
            $libros=Libros::findOrFail($id);
            Storage::delete('public/'.$libros->imagen);
            $datosLibro['imagen']=$request->file('imagen')->store('uploads', 'public');
        }

        Libros::where('id','=',$id)->update($datosLibro);

        $libros=Libros::findOrFail($id);
        return view('libros.edit',compact('libros'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $libros=Libros::findOrFail($id);
        if(Storage::delete('public/'.$libros->imagen)){
            Libros::destroy($id);
        }
        return redirect('libros');
    }
}
