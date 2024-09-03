<?php

namespace App\Http\Controllers;

use App\Mail\testEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendMail(){

        $data= ["name"=> "ali"];

        Mail::to('ali98086@gmail.com')->send(new testEmail($data));

        echo "Mail send successfully !!";

    }
}
