@extends('back.layouts.master')
@section('title',$pages->title.' yazısını güncelle')
@section('content')
    

<div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="card-body">
        <form action="{{route('admin.page.edit',$pages->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="">
                    
                    <input type="hidden" id="title" name="title" value="{{$pages->title}}" class="form-control" required>
                    <h1 class="text-dark text-center" for="title">{{$pages->title}}</h1>
                </div>

                <div class="form-group">
                    <label for="image">Resim</label>
                    <br>
                    <img src="{{asset($pages->image)}}" width="300" class="mb-3 rounded img-thumbnail">
                    <input type="file" id="image" name="image" class="form-control">
                </div>
                
                <div class="form-group mt-3">
                    <label for="content">İçerik Yazısı</label>
                    <textarea id="editor" class="form-control" name="content" id="content" rows="5">{!! $pages->content !!}</textarea>
                </div>

                
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-pen-nib"></i> Güncelle</button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection
@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
  $('#editor').summernote(
    {'height':300}
  );
});
</script>
@endsection