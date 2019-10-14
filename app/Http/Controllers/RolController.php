<?php

namespace sisEscuela\Http\Controllers;

use Illuminate\Http\Request;
use sisEscuela\Rol;
use Illuminate\Support\Facades\Redirect;
use sisEscuela\Http\Requests\RolFormRequest;
use Barryvdh\DomPDF\Facade as PDF;
use sisEscuela\Exports\CategoriasExport;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;
use DB;


class RolController extends Controller
{
     public function __construct()
    {
  
  
    }

    public function index(Request $request)
    {
            if ($request)
            {
                $query=trim($request->get('searchText'));
                $roles=DB::table('rol')->where('nombre','LIKE','%'.$query.'%')
                ->where ('estado','=','Activo')
                ->orderBy('idrol','desc')
                ->paginate(7);
                return view('seguridad.rol.index',["roles"=>$roles,"searchText"=>$query]);
            }

    }
     public function create()
    {
    return view("seguridad.rol.create");

    }

    public function store (RolFormRequest $request)
    {
    	$rol=new Rol;
    	$rol->nombre=$request->get('nombre');
    	$rol->descripcion=$request->get('descripcion');
    	$rol->estado='Activo';
        $rol->save(); //almacena los datos en el modelo
        return Redirect::to('seguridad/rol')->with('success','Rol Guardado');
;

    }

    public function show($id)
    {
    	return view("seguridad.rol.show",["rol"=>Rol::findOrfail($id)]);
    }
    public function edit($id)
    {
    
    	return view("seguridad.rol.edit",["rol"=>Rol::findOrfail($id)]);
    }
    public function update(RolFormRequest $request,$id)
    {
    	$rol=Rol::findOrfail($id);
    	$rol->nombre=$request->get('nombre');
    	$rol->descripcion=$request->get('descripcion'); 
    	$rol->update();
    	return Redirect::to('seguridad/rol')->with('success', 'Rol Modificado');
  	
    }

    public function destroy($id)
    {
    	$rol=Rol::findOrfail($id);
    	$rol->estado='Inactivo';
    	$rol->update();
    	return Redirect::to('seguridad/rol');
    }


    public function generar_pdf()
    {        

        $roles=DB::table('rol')
                ->where ('estado','=','Activo')
                ->get();
        $pdf = PDF::loadView('seguridad.rol.pdf', compact('roles'));
        return $pdf->download('Listado-Roles.pdf');

    }


    public function generar_excel()
    {
 
        return Excel::download(new CategoriasExport, 'categorias.xlsx');

    }
}
