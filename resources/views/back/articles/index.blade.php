@extends('back.layouts.master')
@section('title','Yaptığımız Çalışmalar')
@section('content')
    

<div class="card shadow mb-4">
    <div class="card-header py-3 bg-gradient-dark">
        <h6 class="m-0 font-weight-bold text-success">Çalışmalarınız Burada Listelenir</h6>
    </div>
    <div class="card-body bg-gradient-dark text-white">
        <div class="table-responsive ">
            <table class="table table-bordered text-white" id="dataTable" width="100%" cellspacing="0">

                <thead>
                    <tr>
                        <th>Resim</th>
                        <th>Başlık</th>
                        <th>Kategori</th>
                        <th>Görünme</th>
                        <th>Tarih</th>
                        <th>Durum</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                    <tr>
                        <td><a target="_blank" href="{{route('single',[$article->getCategory->slug,$article->slug])}}"><img src="{{$article->image}}" width="70"></a></td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->getCategory->name}}</td>
                        <td>{{$article->hit}}</td>
                        <td>{{$article->created_at->diffForHumans()}}</td>
                        <td><input class="switch" article-data="{{$article->id}}" type="checkbox" data-on="Aktif" data-off="Pasif" data-onstyle="info" data-offstyle="danger" 
                            @if ($article->status==1)
                            checked
                            @endif  data-toggle="toggle"></td>
                        <td class="text-center">
                            <a href="{{route('admin.calismalar.edit',$article->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="{{route('admin.delete.article',$article->id)}}" title="Sil" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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