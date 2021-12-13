<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function send(){

        $body = "入金が確認されましたので、ひらがなシステムで勉強してください。\n"."ID = XXXXXX, PASSWORD = XXXXX";
        Mail::send([], [],
            function ($message) use ($body) {
                $message->from('asada@senmonkyouiku.co.jp', 'SENMON KYOUIKU');
                $message->to('asada@senmonkyouiku.co.jp')->subject('入金を確認しました');
                $message->setBody($body);
            });
    }
}
