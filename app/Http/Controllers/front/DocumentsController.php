<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    public function index()
    {
        return view('front.deneme');
    }
    public function evrak()
    {
        return view('front.documents');
    }
    public function lisans()
    {
        return view('front.documents');
    }
}
