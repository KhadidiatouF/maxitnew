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
        $this->sid = 'ACf27ab4f0764131c0e1b4cda5cda3cc72';   
        $this->token = '363140237ed78663de913f23ec7e24ae';  
        $this->twilioNumber = '+17179737014'; 
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
