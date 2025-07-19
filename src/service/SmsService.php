<?php
namespace App\Service;

use Twilio\Rest\Client;

class SmsService
{
    private $sid;
    private $token;
    private $twilioNumber;

    public function __construct()
    {
        $this->sid = getenv('TWILIO_SID');   
        $this->token = TOKEN;  
        $this->twilioNumber = PHONE; 
        // var_dump($this->sid );die;
    }

    public function envoyerSms($numero, $message)
    {
        $client = new Client($this->sid, $this->token);

        try {
            $client->messages->create(
                $numero, 
                [
                    'from' => $this->twilioNumber,
                    'body' => $message
                ]
            );
            return true;
        } catch (\Exception $e) {
            error_log("Erreur SMS Twilio : " . $e->getMessage());
            return false;
        }
    }
}
