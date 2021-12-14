<?php

namespace App\Http\Controllers\front;

use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Mail;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {

        $data = Contact::paginate(10);
        return view('front.contact',['data'=>$data]);
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');


        Mail::raw(' Mesajı Gönderen :'.$request->name.'<br>'.'Mesajı gönderenin maili :'.'<br>'.$request->email.'<br>'.'Mesajın Konusu :'.'<br>'.$request->subject.'<br>'.'Mesaj :'.'<br>'.$request->message.''




            , function ($message){
           $message->from('iletisim@gegida.com','Blog Sitesi');
           $message->to('talhacakmak16@gmail.com');
           $message->subject('GEGIDA');
        });
    }
}
