@extends('admin.layouts.admin')
@section('title')
    Blog
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if(session("status"))
                        <div class="alert alert-primary" role="alert">
                            {{session("status")}}
                        </div>
                        @endif
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Blog Yazıları Listesi</h4>
                            <p class="card-category"> Burada Sitedeki Blog Yazılarını Bulabilirsiniz</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Başlık
                                    </th>
                                    <th>
                                        Yazar
                                    </th>
                                    <th>
                                        Tarih
                                    </th>
                                    <th>
                                        Düzenle
                                    </th>
                                    <th>
                                        Sil
                                    </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $key => $value)
                                    <tr>
                                        <td>
                                            {{$value['id']}}
                                        </td>
                                        <td>
                                            {{$value['title']}}
                                        </td>
                                        <td>
                                            {{$value['owner']}}
                                        </td>
                                        <td>
                                            {{$value['created_at']}}
                                        </td>
                                        <td class="text-primary">
                                         <a href={{route('admin.blog.edit',['id'=>$value['id']])}}>Düzenle</a>
                                        </td>
                                        <td class="text-primary">
                                            <a href={{route('admin.blog.delete',['id'=>$value['id']])}}>Sil</a>
                                        </td>
                                        @endforeach
                                        {{$data->links()}}
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                        <a href={{route('admin.blog.create')}}><button type="submit" class="btn btn-primary pull-right">Blog Ekle</button></a>
                </div>


            </div>
        </div>
    </div>
@endsection
