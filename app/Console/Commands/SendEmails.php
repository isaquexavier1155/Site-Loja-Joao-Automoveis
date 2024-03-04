<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\SendmailController;


class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
         // Instancia o controller para poder chamar a função store()
         $sendmailController = new SendmailController();

         // Cria um objeto Request vazio, pois a função store() espera receber um Request como parâmetro
         $request = new \Illuminate\Http\Request();
 
         // Chama a função store() do controller
         $sendmailController->store($request);
 
         // Você pode adicionar algum log aqui se desejar
         $this->info('Emails sent successfully');

    }
}
