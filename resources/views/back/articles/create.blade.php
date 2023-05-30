@extends('back.layouts.master')
@section('title','Çalışma Ekle')
@section('content')
    

<div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                    
                @endforeach
            </div>
        @endif
        <form action="{{route('admin.calismalar.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="">
                    <label for="title">Başlık</label>
                    <input type="text" id="title" name="title" class="form-control" required>
                </div>

                <div class="form-group mt-3">
                    <label for="cetegory">Kategori</label>
                    <select class="form-control" id="category" name="category" required>
                        <option value="">Seçiniz</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                        
                    </select>
                </div>

                <div class="form-group">
                    <label for="image">Resim</label>
                    <input type="file" id="image" name="image" class="form-control" required>
                </div>

                <div class="form-group mt-3">
                    <label for="content">İçerik Yazısı</label>
                    <textarea id="editor" class="form-control" name="content" id="content" rows="5"></textarea>
                </div>

                
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-save"></i> Kaydet</button>
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