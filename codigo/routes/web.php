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
Route::get('clientes.index', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('clientes.create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('clientes.store', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('clientes.edit.{id}', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('clientes.update.{id}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('clientes.{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

//enderecos
Route::get('enderecos.index', [EnderecoController::class, 'index'])->name('enderecos.index');
Route::get('enderecos.create', [EnderecoController::class, 'create'])->name('enderecos.create');
Route::post('enderecos.store', [EnderecoController::class, 'store'])->name('enderecos.store');
Route::get('enderecos.edit.{id}', [EnderecoController::class, 'edit'])->name('enderecos.edit');
Route::put('enderecos.update.{id}', [EnderecoController::class, 'update'])->name('enderecos.update');
Route::delete('enderecos.{id}', [EnderecoController::class, 'destroy'])->name('enderecos.destroy');

//fornecedores
Route::get('fornecedores.index', [FornecedorController::class, 'index'])->name('fornecedores.index');
Route::get('fornecedores.create', [FornecedorController::class, 'create'])->name('fornecedores.create');
Route::post('fornecedores.store', [FornecedorController::class, 'store'])->name('fornecedores.store');
Route::get('fornecedores.edit.{id}', [FornecedorController::class, 'edit'])->name('fornecedores.edit');
Route::put('fornecedores.update.{id}', [FornecedorController::class, 'update'])->name('fornecedores.update');
Route::delete('fornecedores.{id}', [FornecedorController::class, 'destroy'])->name('fornecedores.destroy');

//produtos
Route::get('produtos.index', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('produtos.create', [ProdutoController::class, 'create'])->name('produtos.create');
Route::post('produtos.store', [ProdutoController::class, 'store'])->name('produtos.store');
Route::get('produtos.edit.{id}', [ProdutoController::class, 'edit'])->name('produtos.edit');
Route::put('produtos.update.{id}', [ProdutoController::class, 'update'])->name('produtos.update');
Route::delete('produtos.{id}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');

//entradas
Route::get('entradas.index', [EntradaController::class, 'index'])->name('entradas.index');
Route::get('entradas.create', [EntradaController::class, 'create'])->name('entradas.create');
Route::post('entradas.store', [EntradaController::class, 'store'])->name('entradas.store');
Route::get('entradas.edit.{id}', [EntradaController::class, 'edit'])->name('entradas.edit');
Route::put('entradas.update.{id}', [EntradaController::class, 'update'])->name('entradas.update');
Route::delete('entradas.{id}', [EntradaController::class, 'destroy'])->name('entradas.destroy');

//itensentradas 
Route::get('itensentradas.index', [ItensEntradaController::class, 'index'])->name('itensentradas.index');
Route::get('itensentradas.create', [ItensEntradaController::class, 'create'])->name('itensentradas.create');
Route::post('itensentradas.store', [ItensEntradaController::class, 'store'])->name('itensentradas.store');
Route::get('itensentradas.edit.{id}', [ItensEntradaController::class, 'edit'])->name('itensentradas.edit');
Route::put('itensentradas.update.{id}', [ItensEntradaController::class, 'update'])->name('itensentradas.update');
Route::delete('itensentradas.{id}', [ItensEntradaController::class, 'destroy'])->name('itensentradas.destroy');

//vendas 
Route::get('vendas.index', [VendaController::class, 'index'])->name('vendas.index');
Route::get('vendas.create', [VendaController::class, 'create'])->name('vendas.create');
Route::post('vendas.store', [VendaController::class, 'store'])->name('vendas.store');
Route::get('vendas.edit.{id}', [VendaController::class, 'edit'])->name('vendas.edit');
Route::put('vendas.update.{id}', [VendaController::class, 'update'])->name('vendas.update');
Route::delete('vendas.{id}', [VendaController::class, 'destroy'])->name('vendas.destroy');

//itensvendas 
Route::get('itensvendas.index', [ItensVendaController::class, 'index'])->name('itensvendas.index');
Route::get('itensvendas.create', [ItensVendaController::class, 'create'])->name('itensvendas.create');
Route::post('itensvendas.store', [ItensVendaController::class, 'store'])->name('itensvendas.store');
Route::get('itensvendas.edit.{id}', [ItensVendaController::class, 'edit'])->name('itensvendas.edit');
Route::put('itensvendas.update.{id}', [ItensVendaController::class, 'update'])->name('itensvendas.update');
Route::delete('itensvendas.{id}', [ItensVendaController::class, 'destroy'])->name('itensvendas.destroy');