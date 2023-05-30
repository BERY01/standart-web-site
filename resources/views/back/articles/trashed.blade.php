@extends('back.layouts.master')
@section('title','Silinmiş Çalışmalar')
@section('content')
    

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Çalışmalarınız Burada Listelenir</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>
                    <tr>
                        <th>Resim</th>
                        <th>Başlık</th>
                        <th>Kategori</th>
                        <th>Görünme</th>
                        <th>Tarih</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                    <tr>
                        <td><img src="{{$article->image}}" width="70"></td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->getCategory->name}}</td>
                        <td>{{$article->hit}}</td>
                        <td>{{$article->created_at->diffForHumans()}}</td>
                        <td class="text-center">
                            <a href="{{route('admin.recover.article',$article->id)}}" title="Kurtar" class="btn btn-sm btn-primary"><i class="fas fa-solid fa-arrow-up-from-bracket"></i></a>
                            <a href="{{route('admin.harddelete.article',$article->id)}}" title="Sil" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>


@endsection