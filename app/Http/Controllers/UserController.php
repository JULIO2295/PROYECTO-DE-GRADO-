<?php

namespace sisEscuela\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use sisEscuela\Http\Requests\UserFormRequest;
use Barryvdh\DomPDF\Facade as PDF;
use Alert;
//use Illuminate\Http\Requests\UsuarioFormRequest;
use sisEscuela\User;
use sisEscuela\Rol;
use DB;

class UserController extends Controller
{

	public function __construct()
    {
    	

	}

	public function index(Request $request)
    {
		if ($request)
            {
   
            	$query=trim($request->get('searchText'));
            	$usuarios=DB::table('users as u')
            	->join('rol as r','u.idrol','=','r.idrol')
            	->select('u.id','r.nombre as rol','u.username','u.nombre','u.apellidos','u.ci','u.direccion','u.telefono','u.genero','u.imagen','u.telefono','u.estado','u.email')
            	->where('u.nombre','LIKE','%'.$query.'%')
            	->orwhere('u.username','LIKE','%'.$query.'%')
            	->orderBy('u.id','desc')
            	->orwhere('u.estado','=','1')
            	->paginate(7);
            	return view('seguridad.usuario.index',["usuarios"=>$usuarios,"searchText"=>$query]);

            }
	}

	public function create()
	{
		$roles=DB::table('rol')->where('estado','=','Activo')->get();
		return view("seguridad.usuario.create",["roles"=>$roles]);
	}
    
	public function store(UserFormRequest $request)
	{

		$user=new User;
		$user->idrol=$request->get('idrol');
		$user->username=$request->get('username');
		$user->nombre=$request->get('nombre');
		$user->apellidos=$request->get('apellidos');
		$user->ci=$request->get('ci');
		$user->direccion=$request->get('direccion');
		$user->telefono=$request->get('telefono');
		$user->genero=$request->get('genero');
		$user->email=$request->get('email');
		$user->password=bcrypt($request->get('password'));
		$user->estado='0';

    	if (Input::hasFile('imagen')){
    		$file=Input::file('imagen');
    		$file->move(public_path().'/imagenes/usuarios/',$file->getClientOriginalName());
    		$user->imagen=$file->getClientOriginalName();
    	}

		$user->save();
		return Redirect::to('seguridad/usuario')->with('success', 'Usuario Guardado');


	}

	public function edit($id)
	{
		$usuario=User::findOrfail($id);
		$roles=DB::table('rol')->where('estado','=','Activo')->get();
		return view("seguridad.usuario.edit",["usuario"=>$usuario,"roles"=>$roles]);
	}


	public function update(UserFormRequest $request,$id)
	{

		$user=User::findOrFail($id);
		$user->idrol=$request->get('idrol');
		$user->username=$request->get('username');
		$user->nombre=$request->get('nombre');
	    $user->apellidos=$request->get('apellidos');
		$user->ci=$request->get('ci');
		$user->direccion=$request->get('direccion');
		$user->telefono=$request->get('telefono');
		$user->genero=$request->get('genero');
		$user->email=$request->get('email');
		$user->password=Hash::make($request->get('password'));
		$user->estado='0';

        if (Input::hasFile('imagen')){
            $file=Input::file('imagen');
            $file->move(public_path().'/imagenes/usuarios/',$file->getClientOriginalName());
            $user->imagen=$file->getClientOriginalName();
        }


		$user->update();
		return Redirect::to('seguridad/usuario')->with('success', 'Usuario Modificado');

	}


	public function destroy($id)
	{
		$usuario = DB::table('users')->where('id','=',$id)->delete();
		return Redirect::to('seguridad/usuario');
	}


	public function generar_pdf()
    {        

        $usuarios=DB::table('users')
            	->get();
        $pdf = PDF::loadView('seguridad.usuario.pdf', compact('usuarios'));
        return $pdf->download('Listado-Clientes.pdf');

    }

    public function perfil($id)
	{
		$usuario=User::findOrfail($id);
		return view("layouts.perfil",["usuario"=>$usuario]);

	}
    
}
