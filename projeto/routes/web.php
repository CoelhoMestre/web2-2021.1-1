<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\ItensEntradaController;
use App\Http\Controllers\ItensVendaController;
use Illuminate\Support\Facades\Route;
use App\Models\Cliente;
use App\Models\Fornecedor;
use App\Models\Produto;
use App\Models\Endereco;
use App\Models\Entrada;
use App\Models\Venda;
use App\Models\ItensEntrada;
use App\Models\ItensVenda;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('.clientes',[ClienteController::class,'show']);
Route::get('.fornecedores', [ClienteController::class, 'show']);
Route::get('.produtos',[ClienteController::class,'show']);
Route::get('.entradas',[ClienteController::class,'show']);
Route::get('.itensentradas',[ClienteController::class,'show']);
Route::get('.vendas',[ClienteController::class,'show']);
Route::get('.itensvendas',[ClienteController::class,'show']);
Route::get('.endereco',[EnderecoController::class,'show']);

//clientes
Route::group(['prefix'=>'clientes'],function()){
    Route::get('/index', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('/create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/store', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('/edit/{id}', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('/update/{id}', [ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('/delete/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
    });
    
    //enderecos
    Route::group(['prefix'=>'enderecos'],function()){
    Route::get('/index', [EnderecoController::class, 'index'])->name('enderecos.index');
    Route::get('/create', [EnderecoController::class, 'create'])->name('enderecos.create');
    Route::post('/store', [EnderecoController::class, 'store'])->name('enderecos.store');
    Route::get('/edit/{id}', [EnderecoController::class, 'edit'])->name('enderecos.edit');
    Route::put('/update/{id}', [EnderecoController::class, 'update'])->name('enderecos.update');
    Route::delete('/delete/{id}', [EnderecoController::class, 'destroy'])->name('enderecos.destroy');
    });
    
    //fornecedores
    Route::group(['prefix'=>'fornecedores'],function()){
    Route::get('/index', [FornecedorController::class, 'index'])->name('fornecedores.index');
    Route::get('/create', [FornecedorController::class, 'create'])->name('fornecedores.create');
    Route::post('/store', [FornecedorController::class, 'store'])->name('fornecedores.store');
    Route::get('/edit/{id}', [FornecedorController::class, 'edit'])->name('fornecedores.edit');
    Route::put('/update/{id}', [FornecedorController::class, 'update'])->name('fornecedores.update');
    Route::delete('/delete/{id}', [FornecedorController::class, 'destroy'])->name('fornecedores.destroy');
    });
    //produtos
    Route::group(['prefix'=>'produtos'],function()){
    Route::get('/index', [ProdutoController::class, 'index'])->name('produtos.index');
    Route::get('/create', [ProdutoController::class, 'create'])->name('produtos.create');
    Route::post('/store', [ProdutoController::class, 'store'])->name('produtos.store');
    Route::get('/edit/{id}', [ProdutoController::class, 'edit'])->name('produtos.edit');
    Route::put('/update/{id}', [ProdutoController::class, 'update'])->name('produtos.update');
    Route::delete('/delete/{id}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');
    });
    //entradas
    Route::group(['prefix'=>'entradas'],function()){
    Route::get('/index', [EntradaController::class, 'index'])->name('entradas.index');
    Route::get('/create', [EntradaController::class, 'create'])->name('entradas.create');
    Route::post('/store', [EntradaController::class, 'store'])->name('entradas.store');
    Route::get('/edit/{id}', [EntradaController::class, 'edit'])->name('entradas.edit');
    Route::put('/update/{id}', [EntradaController::class, 'update'])->name('entradas.update');
    Route::delete('/delete/{id}', [EntradaController::class, 'destroy'])->name('entradas.destroy');
    });
    //itensentradas 
    Route::group(['prefix'=>'itensentradas'],function()){
    Route::get('/index', [ItensEntradaController::class, 'index'])->name('itensentradas.index');
    Route::get('/create', [ItensEntradaController::class, 'create'])->name('itensentradas.create');
    Route::post('/store', [ItensEntradaController::class, 'store'])->name('itensentradas.store');
    Route::get('/edit/{id}', [ItensEntradaController::class, 'edit'])->name('itensentradas.edit');
    Route::put('/update/{id}', [ItensEntradaController::class, 'update'])->name('itensentradas.update');
    Route::delete('/delete/{id}', [ItensEntradaController::class, 'destroy'])->name('itensentradas.destroy');
    });
    //vendas 
    Route::group(['prefix'=>'vendas'],function()){
    Route::get('/index', [VendaController::class, 'index'])->name('vendas.index');
    Route::get('/create', [VendaController::class, 'create'])->name('vendas.create');
    Route::post('/store', [VendaController::class, 'store'])->name('vendas.store');
    Route::get('/edit/{id}', [VendaController::class, 'edit'])->name('vendas.edit');
    Route::put('/update/{id}', [VendaController::class, 'update'])->name('vendas.update');
    Route::delete('/delete/{id}', [VendaController::class, 'destroy'])->name('vendas.destroy');
    });
    
    //itensvendas
    Route::group(['prefix'=>'itensvendas'],function()){
    Route::get('/index', [ItensVendaController::class, 'index'])->name('itensvendas.index');
    Route::get('/create', [ItensVendaController::class, 'create'])->name('itensvendas.create');
    Route::post('/store', [ItensVendaController::class, 'store'])->name('itensvendas.store');
    Route::get('/edit/{id}', [ItensVendaController::class, 'edit'])->name('itensvendas.edit');
    Route::put('/update/{id}', [ItensVendaController::class, 'update'])->name('itensvendas.update');
    Route::delete('/delete/{id}', [ItensVendaController::class, 'destroy'])->name('itensvendas.destroy');
    });