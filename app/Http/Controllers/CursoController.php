<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::orderBy('id', 'desc')->paginate(); // return $cursos;
        // $cursos = Curso::all(); (NO PAGINA LOS REGISTROS)
       
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){ //antes Objeto de tipo Request en versde StoreCurso, Ahora objeto de tipo StoreCurso para establecer los request

        // $curso = new Curso();
        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;
        // $curso->save();

        $curso = Curso::create($request->all()); //Asignacion masiva curso

        return redirect()->route('cursos.show', $curso);    
    }

    public function show(Curso $curso){
        
        // $curso = Curso::find($id); // return $curso;
        
        return view('cursos.show', compact('curso')); // compact o ['curso' => $curso]
    }

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){

        $request->validate([
            'name'=> 'required|min:3',
            'descripcion'=>'required',
            'categoria'=>'required'
        ]);

        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;
        // $curso->save();

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso);    
    }
    
    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
