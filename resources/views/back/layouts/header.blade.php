<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title','Digicat Admin Panel')</title>

    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('back/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('back/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @yield('css')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.dashboard')}}">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-shield-cat"></i>
                </div>

                 <div class="sidebar-brand-text ">3B Reklam <sup>Digicat</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item @if(Request::segment(2)=="Panel") active @endif">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Yönetim Paneli</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Sayfa Yönetimi
            </div>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item @if(Request::segment(2)=="kategoriler") active @endif">
                <a class="nav-link collapsed" href="{{route('admin.category.index')}}">
                    <i class="fas fa-fw fa-sitemap"></i>
                    <span>Kategoriler</span>
                </a>
            </li>

            <li class="nav-item @if(Request::segment(2)=="slider") active @endif">
                <a class="nav-link collapsed" href="{{route('admin.slider.index')}}">
                    <i class="fas fa-fw fa-sliders"></i>
                    <span>Slider</span>
                </a>
            </li>

            <li class="nav-item @if(Request::segment(2)=="hakkimizda") active @endif">
                <a class="nav-link collapsed" href="{{route('admin.page.index')}}">
                    <i class="fas fa-solid fa-address-card"></i>
                    <span>Hakkımızda</span>
                </a>
            </li>

            <li class="nav-item @if(Request::segment(2)=="calismalar") active @endif">
                <a class="nav-link @if(Request::segment(2)=="calismalar") in @else collapsed @endif" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-briefcase"></i>
                    <span>Yaptığımız Çalışmalar</span>
                </a>
                <div id="collapseTwo" class="collapse @if(Request::segment(2)=="calismalar") show @endif" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">İşlemler :</h6>
                        <a class="collapse-item @if(Request::segment(2)=="calismalar" and !Request::segment(3)) active @endif" href="{{route('admin.calismalar.index')}}">Tüm Çalışmalar</a>
                        <a class="collapse-item @if(Request::segment(3)=="olustur") active @endif" href="{{route('admin.calismalar.create')}}">İçerik Oluştur</a>
                    </div>
                </div>
            </li>

            <li class="nav-item @if(Request::segment(2)=="referans") active @endif">
                <a class="nav-link collapsed" href="{{route('admin.referans.index')}}">
                    <i class="fa fa-brands fa-slack"></i>
                    <span>Referanslarımız</span>
                </a>
            </li>

            <li class="nav-item @if(Request::segment(2)=="iletisim") active @endif">
                <a class="nav-link collapsed" href="{{route('admin.contacts.index')}}">
                    <i class="fas fa-solid fa-id-badge"></i>
                    <span>İletişim</span>
                </a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                EKLENTİLER
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item @if(Request::segment(3)=="silinenler") active @endif">
                <a class="nav-link collapsed" href="{{route('admin.trashed.article')}}" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-solid fa-recycle"></i>
                    <span>Geri Dönüşüm Kutusu</span>
                </a>
                <div id="collapsePages" class="collapse @if(Request::segment(3)=="silinenler") show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item @if(Request::segment(3)=="silinenler") active @endif" href="{{route('admin.trashed.article')}}">
                          <i class="fas fa-fw fa-briefcase"></i>  Yaptığımız Çalışmalar
                        </a>
                    </div>
                </div>
            </li>

            <li class="nav-item @if(Request::segment(2)=="ayarlar") active @endif">
                <a class="nav-link collapsed" href="{{route('admin.config.index')}}">
                    <i class="fas fa-solid fa-cog"></i>
                    <span>Site Ayarları</span>
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>