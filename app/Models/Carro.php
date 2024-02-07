<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome', 'marca', 'condicao', 'transmissao', 'motor', 'portas',
        'passageiros', 'valor_normal', 'velocidade_maxima', 'potencia',
        'valor_promocional', 'endereco', 'combustivel', 'quilometragem',
        'estilo', 'cor', 'ano', 'tag', 'imagem','descricao','imagem_capa',
    ];
}
