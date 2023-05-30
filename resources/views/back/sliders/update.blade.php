@extends('back.layouts.master')
@section('title',$sliders->id.' Sliderı güncelle')
@section('content')
    

<div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="card-body">
        <form action="{{route('admin.slider.update',$sliders->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">

                <div class="form-group">
                    <label for="image">Resim</label>
                    <br>
                    <img src="{{asset($sliders->image)}}" width="300" class="mb-3 rounded img-thumbnail">
                    <input type="file" id="image" name="image" class="form-control">
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