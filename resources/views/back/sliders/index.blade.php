@extends('back.layouts.master')
@section('title','Slider')
@section('content')
    
<div class="mb-3">
    <a href="{{route('admin.slider.create')}}" class="btn btn-success btn-sm btn-outline"><i class="fas fa-plus"></i> Slider Ekle</a>
</div>
<div class="card shadow mb-4">

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Site Sliderları Burada Listelenir</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive ">
            <table class="table table-bordered" width="100%" cellspacing="0">

                <thead>
                    <tr>
                        <th>Resim</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sliders as $slider)
                    <tr>
                        <td><img src="{{$slider->image}}" width="300"></td>
                        <td class="text-center">
                            <a href="{{route('admin.slider.edit',$slider->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="{{route('admin.sil.slider',$slider->id)}}" title="Sil" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>


@endsection

@section('css')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section('js')
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script>
    $(function() {
      $('.switch').change(function() {
        id = $(this)[0].getAttribute('article-data');
        statu=$(this).prop('checked');
        $.get("{{route('admin.switch')}}", {id:id, statu:statu}, function(data, status) {});
      })
    })
  </script>
@endsection