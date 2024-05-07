<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
Route::get('/', function () {
    return view('welcome');
});
Route::post('cursos/store', [CursoController::class,'store'])->name('cursos.store');
Route::get('cursos/create',[CursoController::class,'create']);
Route::get('cursos/listar',[CursoController::class,'index'])->name('curso.index');
Route::get('curso/{curso}',[CursoController::class,'show'])->name('curso.show');
Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('curso.destroy');
Route::put('curso/{curso}',[CursoController::class,'update'])->name('curso.update');
Route::get('curso/{curso}/editar',[CursoController::class,'edit'])->name('curso.edit');