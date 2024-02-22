<?php

namespace App\Http\Controllers;

use App\Mail\Sendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendmailController extends Controller
{
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        $email = $request->input('email');
        $assunto = $request->input('assunto');
        $telefone = $request->input('telefone');
        $mensagem = $request->input('mensagem');
    
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
