<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Clx\Xms\Api\MtBatchTextSmsCreate;

class SmsController extends Controller
{
    protected $token;
    protected $splan;
    protected $endpoint;

    public function __construct()
    {
        $this->token = config('app.sinch')['API_TOKEN'];
        $this->splan = config('app.sinch')['SERVICE_PLAN_ID'];
        // third arg for Client(), default https://api.clxcommunications.com/xms
        $this->endpoint = url('some url');
    }    

    public function batchTestSms()
    {
        $client = new Client($this->splan, $this->token);
        $message;
        try {

            $batchParams = new MtBatchTextSmsCreate();
            $batchParams->setSender('12345');
            $batchParams->setRecipients([
                '+523323854666',
                '+523334424120',
                '+523318282255',
            ]);
            $batchParams->setBody('Hola ${fulano}, Enviado con sinch, Kiubole, checando si funciona esto...');
            $batchParams->setParameters([
                'fulano' => [
                    '+523323854666' => 'Lalo',
                    '+523334424120' => 'David',
                    '+523318282255' => 'Ricardo',
                ],
            ]);

            $result = $client->createTextBatch($batchParams);

            $message = 'El ID que se dio al batch es: ' . $result->getBatchId();

        } catch (Exception $ex) {

            $message = 'Error creating batch: ' . $ex->getMessage();
        }

        return redirect('/sendsms')->with('message', $message);

    }

    public function vista(){
        return view('nuevaVista');
    }
}
