<?php

namespace sisEscuela\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use sisEscuela\Http\Requests\PersonaFormRequest;
use Barryvdh\DomPDF\Facade as PDF;
use Alert;
use sisEscuela\Curso;
use sisEscuela\Persona;
//use Illuminate\Http\Requests\UsuarioFormRequest;
use DB;

class EstudianteController extends Controller
{
	    public function index(Request $request)
        {
            if ($request)
            {   
                $cursos=DB::table('curso')
                ->where ('estado','=','Activo')
                ->orderBy('idcurso','desc')
                ->paginate(7);

                $discapacidads=DB::table('discapacidad')
                ->where('estado','=','Activo')
                ->get();

                $estudiantes=DB::table('persona as p')
                ->join('discapacidad as d','p.iddiscapacidad','=','d.iddiscapacidad')
                ->select('p.idpersona','p.iddiscapacidad','p.idcurso','p.nombre','p.apellidos','d.nombre as discapacidad','p.direccion','p.genero','p.genero','p.telefono','p.fecha_nac','p.ci','p.estado')
                ->where ('p.estado','=','Activo')
                ->orderBy('p.idpersona','desc')
                ->paginate(7);

                return view('cursos.estudiante.index',["cursos"=>$cursos,"discapacidads"=>$discapacidads,"estudiantes"=>$estudiantes]);
            }

        }

    
     public function store(PersonaFormRequest $request)
    {
        $persona=new Persona;
        $persona->iddiscapacidad=$request->get('iddiscapacidad');
        $persona->idcurso=$request->get('idcurso');
        $persona->tipo_persona='Estudiante';
        $persona->nombre=$request->get('nombre');
        $persona->apellidos=$request->get('apellidos');
        $persona->direccion=$request->get('direccion');
        $persona->genero=$request->get('genero');
        $persona->telefono=$request->get('telefono');
        $persona->fecha_nac=$request->get('fecha_nac');
        $persona->ci=$request->get('ci');
        $persona->estado='Activo';
        $persona->save(); //almacena los datos en el modelo


        return Redirect::to('cursos/estudiante')->with('success', 'Discapacidad Creado Correctamente');
    }


    public function edit($id)
    {
        $discapacidads=DB::table('discapacidad')
                ->where('estado','=','Activo')
                ->get();
        return view("cursos.estudiante.edit",["estudiante"=>Persona::findOrfail($id),"discapacidads"=>$discapacidads]);
    }

        public function update(Request $request,$id)
    {
        $persona=Persona::findOrfail($id);
        $persona->iddiscapacidad=$request->get('iddiscapacidad');
        $persona->tipo_persona='Estudiante';
        $persona->nombre=$request->get('nombre');
        $persona->apellidos=$request->get('apellidos');
        $persona->direccion=$request->get('direccion');
        $persona->genero=$request->get('genero');
        $persona->telefono=$request->get('telefono');
        $persona->fecha_nac=$request->get('fecha_nac');
        $persona->ci=$request->get('ci');
        $persona->update();
        return Redirect::to('cursos/estudiante')->with('success', 'Estudiante Modificado');
    
    }


    public function destroy($id)
    {
        $persona=Persona::findOrfail($id);
        $persona->estado='Inactivo';
        $persona->update();
        return Redirect::to('cursos/estudiante');
    }


    










}
