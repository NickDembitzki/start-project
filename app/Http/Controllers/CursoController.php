<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Eixo;
class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data = Curso::with(['eixo'])->get();
        return view('curso.index', compact('data'));
    }

    
    public function create()
    
    {
        $eixos=Eixo::orderBy('name')->get();
        return view('curso.create', compact('eixos'));
    
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eixo = Eixo::find($request->eixo);

        if(isset($eixo)){
            $curso = new Curso();
            $curso->name =  mb_strtoupper($request->name,"UTF-8");
            $curso->abreviatura = mb_strtoupper($request->nickname,"UTF-8");
            $curso->duraçao = $request->duraçao;
            $curso->eixo()->associate('curso.index');
            $curso->save();


            return redirect()->route('curso.index');
        }

        return "<h1>Eixo não encontrado!!</h1>";

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso = Curso::find($id)
        $eixos = Eixo::ordeBy('name')->get();

        if(isset($curso)){
            return view('curso')
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
