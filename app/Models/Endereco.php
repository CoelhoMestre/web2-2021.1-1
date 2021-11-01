<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $table = 'enderecos';

    protected $fillable = [
        'logradouro',
        'bairro',
        'cidade',
        'uf',
        'cliente_id'
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class, 'cliente_id','id');
    }
    public function fornecedor(){
        return $this->belongsTo(Fornecedor::class, 'fornecedor_id','id');
    }
}
