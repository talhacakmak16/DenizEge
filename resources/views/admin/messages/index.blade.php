@extends('admin.layouts.admin')
@section('title')
    Mesajlarım
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
                            <h4 class="card-title ">Mesajların Listesi</h4>
                            <p class="card-category"> Burada Kullanıcılardan Gelen Mesajları Bulabilirsiniz</p>
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
                                            Konu
                                        </th>
                                        <th>
                                            Email
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
                                                {{$value['subject']}}
                                            </td>
                                            <td>
                                                {{$value['email']}}
                                            </td>
                                            <td class="text-primary">
                                                <a href={{route('admin.contact.edit',['id'=>$value['id']])}}>Detay</a>
                                            </td>
                                            <td class="text-primary">
                                                <a href={{route('admin.contact.delete',['id'=>$value['id']])}}>Sil</a>
                                            </td>
                                            @endforeach
                                            {{$data->links()}}
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
