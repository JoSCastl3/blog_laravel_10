<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\curso;
use Illuminate\Http\Request;
use LaravelLang\Publisher\Console\Update;

class CursoController extends Controller
{
    public function index()
    {
        // $cursos=Curso::all();
        $cursos = Curso::orderBy("id", "desc")->paginate();
        return  view('cursos.index', compact("cursos"));
    }

    public function create()
    {
        return view('cursos.create');
    }
    // public function store(Request $request) antes
    public function store(StoreCurso $request)
    {
         //Se movera a a la carpeta  app/request
         //Así se agregan mensajes y nombres de los parametros
        // $request->validate([
        //     'name'=>'required|min:3', //para agregar más validaciones, hay que poner un scape.
        //     'descripcion'=>'required',
        //     'categoria'=>['required','min:3'], //segunda forma de agregar más validaciones
        // ],[
        //     'name.required'=>'El nombre es obligatorio'
        // ],[
            
        //     'name'=>'Guapon'
        // ]);

            // Otro cambio video20
        // $curso = new Curso();
        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;
        // $curso->save();
        // return redirect()->route("cursos.show", $curso->id); //No es necesario poner el id
        // Llamar al modelo curso
        $curso=Curso::create($request->all());
        //[
            //NO es necesario hacerlo de esta forma
            // 'name'=>$request->name,
            // 'descripcion'=> $request->descripcion,
            // 'categoria'=>$request->categoria
        //]);
        return redirect()->route("cursos.show", $curso); //No es necesario poner el id
    }
    public function show(Curso $curso)
    {
        // return $curso;
        return view('cursos.show', compact("curso"));
    }

    // public function edit($id)
    // {
    //     $curso=Curso::find($id);
    //     return $curso;
    // }
    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact("curso"));
    }
    public  function update(Request $request ,Curso $curso){        
        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;
        // $curso->save();
        // 

        // Actuliza por asignacion masica video 20
        $request->validate([
        'name'=>'required|min:3',
            'descripcion'=>'required',
            'slug'=>'required|unique:cursos,slug,' . $curso->id,
            'categoria'=>['required','min:3'], //La coma al final no deberia de dar problema
        ]);

        $curso->update($request->all());
        return redirect()->route("cursos.show", $curso);
    } 

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route("cursos.index");
    }
}
