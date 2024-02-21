<?php

namespace App\Http\Controllers;

use App\Mail\Sendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendmailController extends Controller
{
    public function store(Request $request)
    {
        $nome = $request->nome;
        $email = $request->email;
        $assunto = $request->assunto;
        $telefone = $request->telefone;
        $mensagem = $request->mensagem;

        $data = [
            'nome' => $nome,
            'email' => $email,
            'assunto' => $assunto,
            'telefone' => $telefone,
            'mensagem' => $mensagem,
        ];

        Mail::to('contato@joaoautomoveisparobe.com.br')->send(new Sendmail($data));//to é email do destinatario

        dd('Email enviado com sucesso!!');
    }
}
