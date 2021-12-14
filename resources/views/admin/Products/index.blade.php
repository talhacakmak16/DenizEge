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
                            <h4 class="card-title ">Ürünlerin Listesi</h4>
                            <p class="card-category"> Burada Sitedeki Ürünleri Bulabilirsiniz</p>
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
                                            İsim
                                        </th>
                                        <th>
                                           Açıklama
                                        </th>
                                        <th>
                                           Kategori
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
                                                {{$value['name']}}
                                            </td>
                                            <td>
                                                {{$value['info']}}
                                            </td>
                                            <td>
                                                {{$value['category']}}
                                            </td>
                                            <td class="text-primary">
                                                <a href={{route('admin.product.edit',['id'=>$value['id']])}}>Düzenle</a>
                                            </td>
                                            <td class="text-primary">
                                                <a href={{route('admin.product.delete',['id'=>$value['id']])}}>Sil</a>
                                            </td>
                                            @endforeach
                                            {{$data->links()}}
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                        <a href={{route('admin.product.create')}}><button type="submit" class="btn btn-primary pull-right"> Yeni Ürün Ekle</button></a>

                </div>

            </div>
        </div>
    </div>
@endsection
