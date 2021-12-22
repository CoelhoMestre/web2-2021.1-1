<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Http\Requests\StoreProdutoRequest;

class ProdutoController extends Controller
{
    //
    public function show(){
        $produtos = Produto::all();
        echo $produtos;
    }

    public function index(){
        $produtos = Produto::all();
        return view('produtos.index', ['produtos'=>$produtos]);
    }
    public function create(){
        return view('produtos.create'); 
    }

    public function store(StoreProdutoRequest $request)
    {
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->icms = $request->icms;
        $produto->ipi = $request->ipi;
        $produto->frete = $request->frete;
        $produto->precofabrica = $request->precofabrica;
        $produto->precocompra = $request->precocompra;
        $produto->precovenda = $request->precovenda;
        $produto->lucro = $request->lucro;
        $produto->desconto = $request->desconto;
        $produto->quantidade = $request->quantidade;
        $produto->save();

        return redirect('produtos.index');
    }

    
    public function edit($id){
        $produto = Produto::findorFail($id);
        return view('produtos.edit', ['produto'=>$produto]);
    }

    public function update(StoreProdutoRequest $request){
        Produto::find($request->id)->update($request->except('_method'));
        return redirect('produtos.index')->with('msg', 'produto atualizado');
    }
    
    public function destroy($id){
        Produto::findorFail($id)->delete();
        return redirect('produtos.index')->with('msg', 'produto excluído com sucesso');
    }

}
