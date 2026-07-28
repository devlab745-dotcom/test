<?php

namespace App\Http\Controllers;

use App\Jobs\TestJob;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function test(){

    //    $mail = Mail::to('umairuafmcs300@gmail.com')->send(new TestMail());

    //    if($mail){
    //       return "email is send";
    //     }else{
    //         return "some issue";

    //    }
    // }

    $emails = [
        'proreviewvibes@gmail.com',
        'proreviewvibes@gmail.com',
        'proreviewvibes@gmail.com',
        'proreviewvibes@gmail.com',
        'proreviewvibes@gmail.com',
        'proreviewvibes@gmail.com',
        'proreviewvibes@gmail.com',
        'proreviewvibes@gmail.com',
        'proreviewvibes@gmail.com',
        'proreviewvibes@gmail.com'
    ];

    foreach ($emails as $email){

        TestJob::dispatch($email);
    }

    return 'email is send in queue';
}


 public function getAppName(){
     return view('demo');
 }

}
