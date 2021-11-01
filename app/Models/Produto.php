<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = "produtos";

    protected $fillable = ['produto_id','nome','icms','ipi','frete','precofabrica','precocompra','precovenda','lucro','desconto','quantidade'];

    protected $guarded = [];
    function itensentrada(){
        return $this->hasMany(ItensEntrada::class, 'produto_id', 'id');

    }
    function itensvenda(){
        return $this->hasMany(ItensVenda::class, 'produto_id', 'id');
    }
}