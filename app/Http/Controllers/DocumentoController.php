<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentoRequest;
use App\Models\Models\ModelDocumento;
use App\Models\Models\ModelTipo;

class DocumentoController extends Controller
{
    private $objTipo;
    private $objDocumento;

    public function __construct()
    {
        $this->objTipo=new ModelTipo();
        $this->objDocumento=new ModelDocumento();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documento=$this->objDocumento->all();
        return view('index',compact('documento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos=$this->objTipo->all();
        return view('create',compact('tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocumentoRequest $request)
    {
        $cad=$this->objDocumento->create([
            'titulo'=>$request->titulo,
            'nome_arquivo'=>$request->nome_arquivo,
            'tipo_id'=>$request->tipo_id
         ]);
         if($cad){
             return redirect('documentos');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $documento=$this->objDocumento->find($id);
        return view('show',compact('documento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $documento=$this->objDocumento->find($id);
        $tipos=$this->objTipo->all();
        return view('create',compact('documento','tipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DocumentoRequest $request, $id)
    {
        $this->objDocumento->where(['id'=>$id])->update([
            'titulo'=>$request->titulo,
            'nome_arquivo'=>$request->nome_arquivo,
            'tipo_id'=>$request->tipo_id
        ]);
        return redirect('documentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->objDocumento->destroy($id);
        return($del)?"sim":"não";
    }
}
