<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreClienteRequest;
use App\Models\Cliente;
class ClienteController extends Controller
{
    //
    public function show(){
        $clientes = Cliente::all();
        echo $clientes;
    }

    public function index(){
        $clientes = Cliente::all();
        return view('clientes.index', ['clientes'=>$clientes]);
    }
    public function create(){
        return view('clientes.create'); 
    }

    public function store(StoreClienteRequest $request){

        $cliente= new Cliente();
        $cliente->nome= $request->nome;
        $cliente->sexo= $request->sexo;
        $cliente->endereco= $request->endereco;
        $cliente->debito= $request->debito;
        $cliente->save();
        return redirect('clientes.index');
    }
    public function edit($id){
        $cliente = Cliente::findorFail($id);
        return view('clientes.edit', ['cliente'=>$cliente]);
    }

    public function update(StoreClienteRequest $request){
        Cliente::find($request->id)->update($request->except('_method'));
        return redirect('clientes.index')->with('msg', 'Cliente atualizado');
    }
    
    public function destroy($id){
        Cliente::findorFail($id)->delete();
        return redirect('clientes.index')->with('msg', 'Cliente excluído com sucesso');
    }

}
