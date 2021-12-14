<?php

namespace App\Http\Controllers\admin\Products;

use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Helper\imageHelper;
use File;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::paginate(10);
        return view('admin.products.index',['data'=>$data]);
    }
    public function create()
    {
        return view('admin.products.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);
        $all['image'] = imageHelper::singleUpload(rand(1,9000),"products",$request->file('image'));
        $insert = Product::create($all);

        if ($insert)
        {
            return redirect('/admin/product')->with('status','Blog Yazısı Başarı İle Eklendi');
        }
        else
        {
            return redirect()->refresh('status','Bir Hata Meydana Geldi');
        }
    }
    public function edit($id)
    {
        $data = Product::where('id','=',$id)->get();
        return view('admin.products.edit',['data'=>$data]);
    }
    public function update(Request $request)
    {
        $id = $request->route('id');
        $data = Product::where('id','=',$id)->get();
        $all = $request->except('_token');

        $all['image'] = imageHelper::singleUploadUpdate(rand(1,9000),"products",$request->file('image'),$data,"image");
        $all['selflink'] = mHelper::permalink($all['name']);
        $update = Product::where('id','=',$id)->update($all);

        if ($update)
        {
            return redirect('/admin/product')->with('status','İşlem Başarılı');
        }
        else
        {
            return redirect()->refresh()->with('status','Bir Hata Meydana Geldi');
        }

    }
    public function delete($id)
    {
        $w = Product::where('id','=',$id)->get();

        File::delete('public/'.$w[0]['image']);
        Product::where('id','=',$id)->delete();
        return redirect()->back();

    }
}
