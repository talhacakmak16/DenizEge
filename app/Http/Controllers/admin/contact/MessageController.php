<?php

namespace App\Http\Controllers\admin\contact;

use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $data = Contact::paginate(10);
        return view('admin.messages.index',['data'=>$data]);
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);
        $insert = Contact::create($all);

        if ($insert)
        {
            return redirect('/admin')->with('status','Blog Yazısı Başarı İle Eklendi');
        }
        else
        {
            return redirect()->refresh('status','Bir Hata Meydana Geldi');
        }
    }
    public function edit($id)
    {
        $data = Contact::where('id','=',$id)->get();
      return view('admin.messages.detail',['data'=>$data]);
    }
}
