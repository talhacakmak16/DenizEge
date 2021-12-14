<?php

namespace App\Http\Controllers\admin\Blog;

use App\Helper\imageHelper;
use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = Blog::paginate(10);
        return view('admin.blog.index',['data'=>$data]);
    }
    public function create()
    {
        return view('admin.blog.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['title']);
        $all['image'] = imageHelper::singleUpload(rand(1,9000),"products",$request->file('image'));
        $insert = Blog::create($all);

        if ($insert)
        {
            return redirect('/admin/blog')->with('status','Blog Yazısı Başarı İle Eklendi');
        }
        else
        {
            return redirect()->refresh('status','Bir Hata Meydana Geldi');
        }
    }
    public function edit($id)
    {
        $data = Blog::where('id','=',$id)->get();
        return view('admin.blog.edit',['data'=>$data]);
    }
    public function update(Request $request)
    {
        $id = $request->route('id');
        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['title']);
        $update = Blog::where('id','=',$id)->update($all);
        if ($update)
        {
            return redirect('/admin/blog')->with('status','İşlem Başarılı');
        }
        else
        {
           return redirect()->refresh()->with('status','Bir Hata Meydana Geldi');
        }
    }
    public function delete($id)
    {
        $delete = Blog::where('id','=',$id)->delete();
        return redirect()->back();

    }

}
