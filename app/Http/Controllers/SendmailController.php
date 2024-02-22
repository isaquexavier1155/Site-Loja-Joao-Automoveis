<?php

namespace App\Http\Controllers;

use App\Mail\Sendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\ContatoWhatsapp;

class SendmailController extends Controller
{
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        $email = $request->input('email');
        $assunto = $request->input('assunto');
        // Remova a máscara do telefone antes de atribuí-lo à variável
        $telefone = str_replace(['(', ')', ' ', '-'], '', $request->input('telefone'));
        $mensagem = $request->input('mensagem');

        // Criar um novo registro na tabela contato_whatsapp
        $contato = new ContatoWhatsapp([
            'nome' => $nome,
            'ip' => "Contato via Email",
            'email' => $email,
            'telefone' => $telefone,
            'data_contato' => now(),
        ]);
        $contato->save();
    
        $data = [
            'nome' => $nome,
            'email' => $email,
            'assunto' => $assunto,
            'telefone' => $telefone,
            'mensagem' => $mensagem,
        ];
    
        try {
            Mail::to('contato@joaoautomoveisparobe.com.br')->send(new Sendmail($data));
            
            return view('contact', compact('mensagem'));
        } catch (\Exception $e) {
            return view('contact', compact('mensagem'));
        }
    }
    
}
