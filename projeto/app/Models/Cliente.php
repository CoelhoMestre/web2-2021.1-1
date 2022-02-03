<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = "clientes";
    
    protected $fillable = ['nome','telefone','cnpj','cpf','debito'];
    
    protected $guarded = [];
    function endereco(){
        return $this->hasMany(Endereco::class, 'cliente_id', 'id');

    }
    function venda(){
        return $this->hasMany(Venda::class, 'cliente_id', 'id');
    }
}


