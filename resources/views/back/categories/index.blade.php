@extends('back.layouts.master')
@section('title','Kategoriler')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-gradient-dark">
                    <h6 class="m-0 font-weight-bold text-success">Yeni Kategori Oluştur</h6>
                </div>
                <div class="card-body bg-gradient-dark">
                    <form method="post" action="{{route('admin.category.create')}}">
                        @csrf
                        <div class="form-group">
                            <label for="category" class="text-white">Kategori Adı</label>
                            <input type="text" class="form-control" name="category" required />
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">Oluştur</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="card shadow mb-4 bg-gradient-dark">
                <div class="card-header py-3 bg-gradient-dark">
                    <h6 class="m-0 font-weight-bold text-success">@yield('title')</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
            
                            <thead class="text-white">
                                <tr>
                                    <th>Kategori Adı</th>
                                    <th>İçerik Sayısı</th>
                                    <th>İşlemler</th>
                                </tr>
                            </thead>
                            <tbody class="text-white">
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->articleCount()}}</td>
                                    <td class="text-center">
                                        <a category-id="{{$category->id}}" title="Düzenle" class="btn btn-sm btn-primary edit-click"><i class="fas fa-edit"></i></a>
                                        <a category-id="{{$category->id}}" category-count="{{$category->articleCount()}}" title="Sil" class="btn btn-sm btn-danger remove-click"><i class="fas fa-trash-can"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="edittModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content bg-dark">
            <div class="modal-header">
              <h5 class="modal-title text-success">Kategoriyi Düzenle</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="{{route('admin.category.update')}}">
                @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label class="text-white">Kategori Adı</label>
                    <input id="category" type="text" class="form-control text-dark" name="category" />
                    <input type="hidden" name="id" id="category_id" />
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Kaydet</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">İptal</button>
            
            </div>
        </form>
          </div>
        </div>
      </div>
    </div>

      <div class="modal" id="deleteModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content bg-dark">
            <div class="modal-header">
              <h5 class="modal-title text-danger">Kategoriyi Sil</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body bg-dark">
                <div id="articleAlert" class="text-light">

                </div>
            </div>
        <form method="post" action="{{route('admin.category.delete')}}">
        @csrf
            <div class="modal-footer">
                
                <input type="hidden" name="id" id="deleteId" />

                <button type="submit" class="btn btn-primary">Sil</button>

                <button type="button" class="btn btn-danger" data-dismiss="modal">İptal</button>

            </div>
        </form>
          </div>
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
        $('.remove-click').click(function(){
            id = $(this)[0].getAttribute('category-id');
            count = $(this)[0].getAttribute('category-count');
            $('#deleteId').val(id);
            $('#articleAlert').html('Bu Kategoriyi Silmek İstediğinize Emin misiniz?');
            if(count>0){
                $('#articleAlert').html('Bu Kategoriye Ait '+count+' İçerik Bulunmaktadır. Silmek istediğinize emin misiniz?');
            }
            $('#deleteModal').modal();
        });

        $('.edit-click').click(function(){
            id = $(this)[0].getAttribute('category-id');
            $.ajax({
                type:'GET',
                url:'{{route('admin.category.getdata')}}',
                data:{id:id},
                success:function(data){
                    console.log(data);
                    $('#category').val(data.name);
                    $('#category_id').val(data.id);
                    $('#edittModal').modal();
                }
            });
        });

      $('.switch').change(function() {
        id = $(this)[0].getAttribute('category-data');
        statu=$(this).prop('checked');
        $.get("{{route('admin.category.switch')}}", {id:id, statu:statu}, function(data, status) {});
      })
    })
  </script>
@endsection
