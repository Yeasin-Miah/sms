<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function sendSms(Request $request)
    {


     Nexmo::message()->send([
          'to' => '88'.$request->phone,
         'from' => '01631916786',
          'text' => 'Allahho Akbar.'
       ]);

        Session::flash('success', 'Message sent');
        return redirect('/');
    }
}
