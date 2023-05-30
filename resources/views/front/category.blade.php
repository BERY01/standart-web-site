@extends('front.layouts.master')
@section('title',$category->name)
@section('content')
<br>
<hr>
<br>
<div class="container">
    <h2 style="color:#01404b;">{{$category->name}}</h2>
    <hr>
    @if (count($articles)>0)
    <ul class="row portfolio-item" style="list-style: none;">
        @foreach ($articles as $article)
        <li class=" aas{{$article->category_id}} col-xl-3 col-md-4 col-12 col-sm-6 pd mr-5">
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
        @else
        <h2 class="text-center text-white alert alert-danger">İçerik Bulunamadı</h2>
        @endif

    </ul>
</div>


@endsection

   