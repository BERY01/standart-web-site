@extends('back.layouts.master')
@section('title','Site Ayarları')
@section('content')
    

<div class="card shadow mb-4">
    <div class="card-header py-3 ">
        <h6 class="m-0 font-weight-bold text-primary">Site Ayarlarınızı Buradan Düzenleyebilirsiniz</h6>
    </div>
    <div class="card-body text-dark">
            <form action="{{route('admin.config.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Site Başlığı</label>
                            <input type="text" id="title" name="title" required class="form-control" value="{{$config->title}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="active">Site Aktiflik Durumu</label>
                            <select class="form-control" name="active" id="active">
                                <option @if($config->active==1) selected @endif value="1">Açık</option>
                                <option @if($config->active==0) selected @endif value="0">Kapalı</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="logo">Site Logosu</label>
                            <input type="file" id="logo" name="logo" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="favicon">Site Favicon</label>
                            <input type="file" id="favicon" name="favicon" class="form-control">
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label style="color:#3b5998;" for="facebook"><i class="fa-brands fa-facebook"></i> Facebook</label>
                            <input type="text" id="facebook" name="facebook" class="form-control" value="{{$config->facebook}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label style="color:#E4405F;" for="instagram"><i class="fa-brands fa-instagram"></i> Instagram</label>
                            <input type="text" id="instagram" name="instagram" class="form-control" value="{{$config->instagram}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label style="color:#00acee;" for="twitter"><i class="fa-brands fa-twitter"></i> Twitter</label>
                            <input type="text" id="twitter" name="twitter" class="form-control" value="{{$config->twitter}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label style="color:#0F9D58;" for="google"><i class="fa-brands fa-google"></i> Google</label>
                            <input type="text" id="google" name="google" class="form-control" value="{{$config->google}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label style="color: #c4302b;" for="youtube"><i class="fa-brands fa-youtube"></i> Youtube</label>
                            <input type="text" id="youtube" name="youtube" class="form-control" value="{{$config->youtube}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label style="color:#0072b1;" for="linkedin"><i class="fa-brands fa-linkedin"></i> LinkedIn</label>
                            <input type="text" id="linkedin" name="linkedin" class="form-control" value="{{$config->linkedin}}">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-md btn-primary">Güncelle</button>
                </div>
            </form>
    </div>
</div>


@endsection