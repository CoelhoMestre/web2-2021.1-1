<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreEntradaRequest;

use App\Models\Entrada;
class EntradaController extends Controller
{
    //
    public function show(){
        $entradas = Entrada::all();
        echo $entradas;
    }

    public function index(){
        $entradas = Entrada::all();
        return view('entradas.index', ['entradas'=>$entradas]);
    }
    public function create(){
        return view('entradas.create'); 
    }

    public function store(StoreEntradaRequest $request)
    {
        $entrada = new Entrada();
        $entrada->idfornecedor = $request->idfornecedor;
        $entrada->valortotal = $request->valortotal;
        $entrada->datacompra = $request->datacompra;
        $entrada->save();

        return redirect('entradas.index');
    }

    
    public function edit($id){
        $entrada = Entrada::findorFail($id);
        return view('entradas.edit', ['entrada'=>$entrada]);
    }

    public function update(StoreEntradaRequest $request){
        Entrada::find($request->id)->update($request->except('_method'));
        return redirect('entradas.index')->with('msg', 'entrada atualizada');
    }
    
    public function destroy($id){
        Entrada::findorFail($id)->delete();
        return redirect('entradas.index')->with('msg', 'entrada excluída com sucesso');
    }

}
