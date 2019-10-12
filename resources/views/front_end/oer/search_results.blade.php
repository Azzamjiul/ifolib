@extends('front_end.layouts.master')

@section('title','OER - Open Education Resource')

@section('main-content')
<section class="page-header page-header-modern page-header-background page-header-background-sm parallax custom-page-header my-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{asset('img/demos/education/parallax/parallax-6.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="font-weight-bold">Hasil Penelusuran <strong>"{{$keyword}}"</strong> </h1>
                <span class="text-color-light d-block position-relative font-weight-light"></span>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-right">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{route('oer.index')}}">OER</a></li>
                    <li class="active text-color-light">Hasil Penelusuran</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section bg-color-tertiary border-0 my-0 pb-4">
    <div class="container">

        <form role="search" action="{{ route('oer.search') }}" method="get">
            <div class="simple-search input-group">
                <input class="form-control text-1" id="headerSearch" name="keyword" type="search" value="{{$keyword}}" placeholder="Search...">
                <span class="input-group-append">
                    <button class="btn" type="submit">
                        <i class="fa fa-search header-nav-top-icon"></i>
                    </button>
                </span>
            </div>
        </form>

        <br><br>

        <div class="row justify-content-center mb-5">
            @foreach($items as $item) 
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                <article class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1 h-100">
                    <div class="thumb-info-wrapper">
                        <a href="{{route('oer.resources.show', $item->id)}}"><img src="{{asset('oer_upload/resource_image')}}/{{$item->image}}" class="img-fluid" alt=""></a>
                    </div>
                    <div class="thumb-info-caption">
                        <span class="date d-block text-color-primary font-weight-semibold text-3 mb-3"></span>
                        <h3 class="font-weight-semibold text-transform-none"><a href="{{route('oer.resources.show', $item->id)}}" class="custom-link-color-dark">{{$item->title}}</a></h3>
                    </div>
                </article>
            </div>
            @endforeach
    </div>
    </div>
</section>
@endsection