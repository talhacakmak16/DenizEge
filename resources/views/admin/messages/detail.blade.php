@extends('admin.layouts.admin')
@section('title')
    @endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Mesaj Kutusu</h4>
                            <p class="card-category">Size Gelen Mesajların Burada Gözükür</p>
                        </div>
                        <div class="card-body" style="text-decoration: 12px;">
                            <div class="col-md-9">
                                Mesajı Gönderen : {{$data[0]['name']}}
                            </div>
                            <br><br>
                            <div class="col-md-9">
                                Email : {{$data[0]['email']}}
                            </div>
                            <br><br>
                            <div class="col-md-9">
                                Konu : {{$data[0]['subject']}}
                            </div>
                            <br><br>
                            <div class="col-md-9">
                                Mesaj : {{$data[0]['message']}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection
