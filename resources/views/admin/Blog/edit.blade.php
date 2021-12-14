@extends('admin.layouts.admin')
@section('title')
    Düzenle
    @endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Blog Yazısı Düzenle</h4>
                            <p class="card-category">{{$data[0]['title']}}</p>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.blog.edit.post',['id'=>$data[0]['id']])}}" method="POST">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Başlık</label>
                                            <input name="title" value={{$data[0]['title']}} type="text" class="form-control">
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <img style="width: 140px;height: 150px" src="{{asset($data[0]['image'])}}"><br>
                                            <input name="image" style="z-index: 1;position: inherit;opacity: 1;margin-top: 10px;"  type="file">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>İçerik</label>
                                            <div class="form-group">
                                                <textarea name="content" class="form-control" rows="5">{{$data[0]['content']}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Yazar</label>
                                            <input name="owner" value={{$data[0]['owner']}} type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Kaydet</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
