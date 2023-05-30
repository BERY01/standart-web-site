@extends('front.layouts.master')
@section('title',$article->title)
@section('content')
<br>
<hr>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <img class="" src="{{$article->image}}" style="width: 100%; border-radius:40px;">
      <hr>
    </div>
  
    <div class="col-md-6">
      <p class="text-danger text-center"></p>
      <table class="table">
          <thead class="text-center" style="color:#8d0b19">
            <tr>
              <th scope="col">Kategori</th>
              <th scope="col">Başlık</th>
              <th scope="col"><i class="fas fa-solid fa-eye"></i></th>
              <th scope="col">Bilgi <i class="fas fa-circle-info text-info"></i></th>
            </tr>
          </thead>
          <tbody class="text-center" style="color:#02414b;">
            <tr>
              <th >{{$article->getCategory->name}}</th>
  
              <td>{{$article->title}}</td>
              <td>{{$article->hit}}</td>
              <td>{!! $article->content !!}</td>
            </tr>
  
  
          </tbody>
      </table>
    </div>
  </div>

</div>
@endsection

   