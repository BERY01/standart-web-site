@extends('front.layouts.master')
@section('title','İletişim')
@section('content')
<br>
<hr>
<br>
<div class="container">
    <div class="container-fluid form-group">
        @if (session("Başarılı"))
        <h1 class="text-white form-control text-center bg-dark">"Mesajınız Tarafımıza Başarılı Bir şekilde Ulaştı" | En Kısa Süre İçerisinde Dönüş Sağlanacaktır</h1>
        @endif


        @if ($errors->any())
        <input class="btn btn-primary text-light" type="button" value="Geri Dön" onClick="javascript:history.go(-1)" />
        <h1 class="text-danger">Mesajınız İletilemedi</h1>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
      
        @endif

    </div>
</div>


@endsection

   