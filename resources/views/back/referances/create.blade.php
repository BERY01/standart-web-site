@extends('back.layouts.master')
@section('title','Referans Ekle')
@section('content')
    

<div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="card-body">
        <form action="{{route('admin.referans.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="title">İsim</label>
                    <input type="text" id="title" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="image">Resim</label>
                    <input type="file" id="image" name="image" class="form-control" required>
                </div>

                
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-save"></i> Kaydet</button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection