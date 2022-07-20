<?php

namespace Demo\Sendmaildemo\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Demo\Sendmaildemo\Models\SendMail;
use Demo\Sendmaildemo\Mail\SendMailable;

class SendMailController extends Controller
{
    public function index()
    {
        return view('Sendmaildemo::sendmail');
    }

    public function sendmail(Request $request)
    {
        Mail::to('admin@gmail.com')->send(new SendMailable($request->message));
        SendMail::create($request->all());

        return redirect()->route('index');
    }
}
