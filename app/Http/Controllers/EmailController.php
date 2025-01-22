<?php

namespace App\Http\Controllers;

use App\Mail\FormMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function SendEmail()
    {
        
      
        $message="open condom star";
        $subject="Deluxe pasal ";
        $email=[
            'roheetalimbu@gmail.com',
            'silasdumirai9696@gmail.com',
        ];
        foreach($email as $target)
        {
            $response = Mail::to($target)->send(new FormMail($message,$subject));
            dd($response);
        }
       
    }
}
