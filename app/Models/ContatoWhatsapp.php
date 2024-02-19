<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContatoWhatsapp extends Model
{

    protected $table = 'contato_whatsapp';

    use HasFactory;
    protected $fillable = ['nome', 'ip', 'email', 'telefone', 'data_contato'];

}
