<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Contacto;
use DB;
class PageController extends Controller
{
     public function index()
    {
    	$empresa = DB::table('empresa')->get();
        return view('welcome')->with('empresa',$empresa);
    }

    public function indexEmpresa()
    {
    	$empresa = DB::table('empresa')->get();
        return view('empresa')->with('empresa',$empresa);
    }
    public function monitor($id)
    {	
    	$empresa = DB::table('empresa')->where('id',$id)->first();
        return view('monitor')->with('empresa',$empresa);
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
     public function indexContacto()
    {
    	$empresa = DB::table('empresa')->get();
    	$contacto = DB::table('contacto')->get();
        return view('contacto')->with('empresa',$empresa)->with('contacto',$contacto);
    }
    public function storeContacto(Request $request)
    {
    	$contacto = new Contacto();
    	$contacto->nombre = $request->nombre;
    	$contacto->apellidos = $request->apellidos;
    	$contacto->sexo=$request->sexo;
    	$contacto->telefono=$request->telefono;
    	$contacto->email=$request->email;
    	$contacto->idEmpresa=$request->empresa;
    	$contacto->save();
        return redirect('/contacto');
    }

    public function showContacto($id)
    {	
    	$contacto = DB::table('contacto')->where('id',$id)->first();
    	$empresa = DB::table('empresa')->get();
        return view('editContacto')->with('contacto',$contacto)->with('empresa',$empresa);
    }
    public function updateContacto(Request $request,$id)
    {
    	$contacto = Contacto::findOrFail($id);
    	$input = $request->all();
    	$contacto->fill($input)->save();
        return redirect('/contacto');
    }
    public function deleteContacto($id)
    {	
    	$contacto = Contacto::findOrFail($id);
    	$contacto->delete();
        return redirect('/contacto');
    }

}
