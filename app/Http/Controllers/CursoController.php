<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function create(){
        return view('curso.create');
    }

    public function store(Request $request){
       
        $curso= new Curso();
        $curso->name=$request->name;
        $curso->descripcion=$request->descripcion;
     
        //ADJUNTAR EL PDF
         $file=$request->file("urlPdf");
         $nombreArchivo = "pdf_".time().".".$file->guessExtension();
         
         $request->file('urlPdf')->storeAs('public/imagenes', $nombreArchivo );
         $curso->urlPdf = $nombreArchivo;
         $curso->save();
    }
    public function index(){

        $cursos = Curso::orderBy('id', 'desc')->get();
        return view('curso.listar', compact('cursos'));

    }
    public function show(Curso $curso){

        return view('curso.show',compact('curso'));


    }
    public function destroy (Curso $curso){
           
        $curso->delete();
        return redirect()->route('curso.index');
    }
    public function edit(Curso $curso){//Encuentro el Curso
       
        return view('curso.edit',compact('curso'));
 
      }
      public function update(Request $request, Curso $curso){
           
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->save();
     
        return redirect()->route('curso.index');
     
      }
      
    
}
