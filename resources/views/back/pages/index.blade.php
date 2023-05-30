@extends('back.layouts.master')
@section('title','Hakkımızda')
@section('content')
    

<div class="card shadow mb-4">
    <div class="card-header py-3 bg-gradient-dark">
        <h6 class="m-0 font-weight-bold text-success">Misyon ve Vizyonu Buradan Düzenleyebilirsiniz</h6>
    </div>
    <div class="card-body bg-gradient-dark text-white">
        <div class="table-responsive ">
            <table class="table table-bordered text-white" width="100%" cellspacing="0">

                <thead>
                    <tr>
                        <th>Resim</th>
                        <th>Başlık</th>
                        <th>Metin</th>
                        <th>Düzenle</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pages as $page)
                    <tr>
                        <td><img src="{{$page->image}}" width="70"></td>
                        <td>{{$page->title}}</td>
                        <td class="text-light">{!! $page->content !!}</td>
                        <td class="text-center">
                            <a href="{{route('admin.page.edit',$page->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>


@endsection