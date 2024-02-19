<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContatoWhatsapp;

class ContatoWhatsappController extends Controller
{
    public function store(Request $request)
    {
        // Validar os dados recebidos da solicitação
        $request->validate([
            'nome' => 'nullable|string',
            'email' => 'nullable|string',
            'telefone' => 'nullable|string',
        ]);
    
        // Criar um novo registro na tabela contato_whatsapp
        $contato = new ContatoWhatsapp([
            'nome' => $request->nome,
            'ip' => $request->ip(),
            'email' => $request->email,
            'telefone' => $request->telefone,
            'data_contato' => now(),
        ]);
        $contato->save();
    
        // Retornar uma resposta de sucesso
        return response()->json(['message' => 'Dados salvos com sucesso!']);
    }
    
}
