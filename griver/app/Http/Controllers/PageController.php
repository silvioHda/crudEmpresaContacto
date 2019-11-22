<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use DB;
class PageController extends Controller
{
     public function index()
    {
        return view('welcome');
    }

    public function indexEmpresa()
    {
    	$empresa = DB::table('empresa')->get();
        return view('empresa')->with('empresa',$empresa);
    }
    public function indexContacto()
    {
        return view('contacto');
    }

    public function storeEmpresa(Request $request)
    {
    	$empresa = new Empresa();
    	$empresa->nombre = $request->nombre;
    	$empresa->direccion = $request->direccion;
    	$empresa->descripcion=$request->descripcion;
    	$empresa->telefono=$request->telefono;
    	$empresa->save();
        return redirect('/empresa');
    }
    public function showEmpresa($id)
    {	
    	$empresa = DB::table('empresa')->where('id',$id)->first();
        return view('editEmpresa')->with('empresa',$empresa);
    }

     public function updateEmpresa(Request $request,$id)
    {
    	$empresa = Empresa::findOrFail($id);
    	$input = $request->all();
    	$empresa->fill($input)->save();
        return redirect('/empresa');
    }

    public function deleteEmpresa($id)
    {	
    	$empresa = Empresa::findOrFail($id);
    	$empresa->delete();
        return redirect('/empresa');
    }

}
