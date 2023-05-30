@extends('back.layouts.master')        
@section('title','3B REKLAM | Yönetim Paneli')
@section('content')
    
           
           <!-- End of Topbar -->


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Kategori Sayısı</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$categories->count()}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fw fa-sitemap fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Yaptığımız çalışmalar</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$article->count()}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fw fa-briefcase fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Toplam Görüntülenme Sayısı
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$hit}}</div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fw fa-eye fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Gelen Mesajlar</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$contacts->count()}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-md-6">
                            <div class="col-xl-100 col-lg-100">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Gelen Son Mesaj</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body" >
                                        <div class="chart-area">
                                            @foreach ($contact as $contac)
                                            <ul style="list-style:none;">
                                                <li class="pb-2">
                                                    <label for="">Adı Soyadı : </label>
                                                    {{$contac->name}}
                                                </li>
                                                <li class="pb-2">
                                                    <label for="">Telefon : </label>
                                                    {{$contac->phone}}
                                                </li>
    
                                                <li class="pb-2">
                                                    <label for="">E-Posta : </label>
                                                    {{$contac->email}}
                                                </li>
    
                                                <li class="pb-2">
                                                    <label for="">Konu : </label>
                                                    {{$contac->topic}}
                                                </li>
    
                                                <li class="pb-2">
                                                    <label for="">Mesaj : </label>
                                                    {{$contac->messages}}
                                                </li>
                                            </ul>
                                            
                                            
                                        </div>
                                        <div class="mt-4 text-center small">
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-primary"></i> {{$contac->created_at->diffForHumans()}}
                                            </span>
                                        </div>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-xl-100 col-lg-100">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Site İçi Görsel Bilgileri</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body" style="overflow: scroll; overflow-x:hidden;">
                                        <div class="chart-area">
                                            <ul style="list-style:none;">
                                                <li class="pb-1">
                                                    <label class="text-primary" for="">Slider Görsel Boyutu</label><br>
                                                    <p class="text-success">Genişlik : 1920 px | Uzunluk  : 1080 px</p>
                                                </li>
                                                <li class="pb-1">
                                                    <label class="text-primary" for="">Yaptığımız Çalışmalar Görsel Boyutu</label>
                                                    <p class="text-success">Genişlik : 1920 px | Uzunluk  : 1080 px</p>
                                                </li>
    
                                                <li class="pb-1">
                                                    <label class="text-primary" for="">Hakkımızda Görsel Boyutu</label>
                                                    <p class="text-success">Genişlik : 1350 px | Uzunluk  : 1080 px</p>
                                                </li>
    
                                                <li class="pb-0">
                                                    <label class="text-primary" for="">Referanslarımız Görsel Boyutu</label>
                                                    <h6 class="text-danger">Kare Orantılı PNG formatındaki Resimler Kullanılmalıdır</h6>
                                                    <p class="text-success">Genişlik : 1080 px | Uzunluk  : 1080 px</p>
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                        </div>
                        </div>


          
@endsection 
