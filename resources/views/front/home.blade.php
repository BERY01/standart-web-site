@extends('front.layouts.master')
@section('title','Anasayfa')
@section('content')
<section class="splide mt-5" aria-label="splide" id="slider1">
    <div class="splide__track">
        <ul class="splide__list">
            @foreach ($sliders as $slider)
                <li class="splide__slide"><img style="width: 100%; " src="{{$slider->image}}"> </li>
            @endforeach
        </ul>
    </div>
</section>

<div class="services-area" id="hizmetlerimiz">

    <div class="container services">
        <h1 class="text-center">Hizmetlerimiz</h1>
        <hr>



        <div class="row">
            <div class="col-md-4 mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <img class="services-img mx-auto d-block" src="{{asset('front/img/icon1.png')}}">
                    </div>
                    <div class="col-md-6">
                        <h4>Deneme</h4>
                        <hr>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam, architecto.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <img class="services-img mx-auto d-block" src="{{asset('front/img/icon1.png')}}">
                    </div>
                    <div class="col-md-6">
                        <h4>Deneme</h4>
                        <hr>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam, architecto.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <img class="services-img mx-auto d-block" src="{{asset('front/img/icon1.png')}}">
                    </div>
                    <div class="col-md-6">
                        <h4>Deneme</h4>
                        <hr>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam, architecto.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <img class="services-img mx-auto d-block" src="{{asset('front/img/icon1.png')}}">
                    </div>
                    <div class="col-md-6">
                        <h4>Deneme</h4>
                        <hr>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam, architecto.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <img class="services-img mx-auto d-block" src="{{asset('front/img/icon1.png')}}">
                    </div>
                    <div class="col-md-6">
                        <h4>Deneme</h4>
                        <hr>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam, architecto.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <img class="services-img mx-auto d-block" src="{{asset('front/img/icon1.png')}}">
                    </div>
                    <div class="col-md-6">
                        <h4>Deneme</h4>
                        <hr>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam, architecto.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="about-band" id="hakkimizda">
    <div class="container mt-5">
        <h1 class="text-center main-band-title">Hakkımızda</h1>
        <hr>
        <ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
            <li class="nav-item">
                @if ($pages->title='Misyonumuz')

                <a class="nav-link flex-sm-fill text-sm-center active about-select-text" 
                id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-profile" 
                aria-selected="true">{{$pages->title}}</a>

                @endif
            </li>

            <li class="nav-item">
                @if ($pages->title='Vizyonumuz')
                <a class="nav-link flex-sm-fill text-sm-center  about-select-text" id="pills-profile-tab" 
                data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" 
                aria-selected="false">{{$pages->title}}</a>
                @endif

            </li>

        </ul>
        <div class="tab-content" id="pills-tabContent hakkimizda">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                   
                        @foreach ($pages as $page)
                        @if ($loop->first)
                        <div class="col-md-6">
                            <img class="about-img mt-4" src="{{$page->image}}">
                        </div>
                        <div class="col-md-6">
                            <h3 class="about-title mt-4">Misyonumuz</h3>
                            <hr>
                        <p class="mt-3 about-p">{!! $page->content !!}</p>
                    </div>
                        @endif
                        
                        @endforeach
                        
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    @foreach ($pages as $page)
                    @if ($loop->last)
                    <div class="col-md-6">
                        <img class="about-img mt-4" src="{{$page->image}}">
                    </div>
                    <div class="col-md-6">
                        <h3 class="about-title mt-4">Vizyonumuz</h3>
                        <hr>
                        <p class="mt-3 about-p">{!! $page->content !!}</p>
                    @endif

                    @endforeach
     

                    </div>
                </div>
            </div>

        </div>
    </div>


</div>

<div class="our-projects">




    <section class="portfolio-section" id="portfolio">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Yaptığımız Çalışmalar</h2>
                </div>
            </div>
            <div class="portfolio-menu mt-2 mb-4">
                <nav class="controls">
                    <button type="button" class="control outline" data-filter="all">Tümü</button>
                    @foreach ($categories as $category)
                    <button type="button" class="control outline" data-filter=".aas{{$category->id}}">{{$category->name}}</button>
                    @endforeach
                    
                </nav>
            </div>
            <ul class="row portfolio-item" style="list-style:none;">
                @foreach ($articles as $article)
                <li class="mix aas{{$article->category_id}} col-xl-3 col-md-4 col-12 col-sm-6 pd">
                    <img src="{{$article->image}}" itemprop="thumbnail" alt="Image description" />
                    <div class="portfolio-overlay">
                        
                        <div class="overlay-content">
                            <p class="category">{{str_limit($article->title,20)}}</p>
                            <a href="{{route('single', [$article->getCategory->slug,$article->slug])}}" title="View Project" target="_blank">
                                <div class="magnify-icon">
                                    <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                                </div>
                            </a>
                            <a data-fancybox="item" title="click to zoom-in" href="{{$article->image}}">
                                <div class="magnify-icon">
                                    <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>

                @endforeach
             {{$articles->links()}} 

            </ul>
        </div>

        
    </section>
    <div class="quality-bar">
        <div class="bg"></div>
        <div class="bg bg2"></div>
        <div class="bg bg3"></div>

        <div class="container-fluid ">
            <div class="row detail text-center">
                <div class="col-md-3 mt-3">
                    <img class="detail-icon" src="{{asset('front/img/icon1.png')}}">
                    <hr>
                    <h4>Yüksek kalite</h4>
                    <p>Yüksek Kalite, ileri seviye işçilikle işlerinizi teslim ediyoruz.
                    </p>
                </div>
                <div class="col-md-3 mt-3">
                    <img class="detail-icon" src="{{asset('front/img/icon2.png')}}">
                    <hr>
                    <h4>Uzun Ömürlü Malzeme</h4>
                    <p>Tabelanız yıllar boyu aynı renginde ve kalitesinde kalsın istiyoruz, en kaliteli malzemeyi kullanıyoruz.
                    </p>
                </div>
                <div class="col-md-3 mt-3">
                    <img class="detail-icon" src="{{asset('front/img/icon3.png')}}">
                    <hr>
                    <h4>Ücretsiz Keşif</h4>
                    <p>Tabelanızı asacağınız yeri ücretsiz olarak inceliyor ve ölçü alıyoruz, en iyi hizmetin temellerini atıyoruz.
                    </p>
                </div>
                <div class="col-md-3 mt-3">
                    <img class="detail-icon" src="{{asset('front/img/icon4.png')}}">
                    <hr>
                    <h4>Ücretsiz tasarım desteği</h4>
                    <p>Tabelanızın tasarımını ücretsiz olarak yapıyor, zevkinize en uygun tasarımı çıkarıyoruz.
                    </p>
                </div>
            </div>
        </div>
    </div>


</div>

<div class="references-band">
    <div class="container">
        <h1 class="text-center">Referanslarımız</h1>
        <hr>
    </div>
</div>
<div class="logo-slider">
    <div class="slider">
        <div class="slide-track">
            @foreach ($referances as $referans)
            <div class="slide">
                <img class="logo-slider-img" src="{{$referans->image}}" alt="">
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="bg-info contact4 overflow-hiddedn position-relative" id="iletisim">
    <!-- Row  -->
    <div class="row no-gutters">
        <div class="container">
            <div class="col-lg-6 contact-box mb-4 mb-md-0">
                <div class="">
                    <h1 class="title font-weight-light text-white mt-2">İletişim</h1>
                    <form class="mt-3" method="post" action="{{route('contact.post')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mt-2" >
                                    <input class="form-control text-primary" type="text" name="name" placeholder="Tam Adınız" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mt-2">
                                    <input class="form-control text-primary" type="number" name="phone" placeholder="Telefon Numaranız" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mt-2">
                                    <input class="form-control text-primary" type="email" name="email" placeholder="E-Posta" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <select class="form-group mt-2 form-control text-light" name="topic">
                                    <option class="text-success">Bilgi</option>
                                    <option class="text-success">Destek</option>
                                    <option class="text-success">Genel</option>
                                </select>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mt-2">
                                    <textarea class="form-control text-primary" rows="3" name="messages" placeholder="İletiniz" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex align-items-center mt-2">
                                <button type="submit" class="btn btn-light btn-outline"><span> Gönder</span></button>
                                <span class="ml-auto text-white align-self-center"><i class="icon-phone mr-2">
                                    </i>Bize Ulaşın : +90 530 098 19 92</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 right-image p-r-0">
            <div style="width: 100%"><iframe width="100%" height="640" frameborder="0" scrolling="no" marginheight="0" 
                marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=100%25&amp;hl=en&amp;q=%20Haznedar,%20S%C3%B6nmez%20Sk.,%2034160%20G%C3%BCng%C3%B6ren/%C4%B0stanbul+(3B%20Reklam)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure distance on map</a></iframe></div>
        </div>
    </div>
</div>
@endsection

   