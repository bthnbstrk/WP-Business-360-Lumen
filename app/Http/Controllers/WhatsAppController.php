<?php

namespace App\Http\Controllers;

use App\Models\Webhook;
use http\Client\Response;
use Illuminate\Support\Facades\Storage;

class WhatsAppController extends Controller
{
    public function webhook()
    {
        $data = json_decode(file_get_contents('php://input'), true);

        Webhook::create([
            "from"=>$data["messages"][0]['from'],
            "message_id"=>$data["messages"][0]['id'],
            "message"=>$data["messages"][0]['text']['body'],
            "timestamp"=>$data["messages"][0]['timestamp'],
            "type"=>$data["messages"][0]['type'],
            "sender_name"=>$data["contacts"][0]['profile']['name'],
            "sender_wp_id"=>$data["contacts"][0]['wa_id']
        ]);

        http_response_code(200);

    }

}
