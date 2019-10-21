@extends('front_end.layouts.master')

@section('title','OER - Open Education Resource')

@section('main-content')
<section class="page-header page-header-modern page-header-background page-header-background-sm parallax custom-page-header my-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/education/parallax/parallax-6.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="font-weight-bold">Open Education Resources Informatic ITS</h1>
                <span class="text-color-light d-block position-relative font-weight-light">Broad the science to everyone</span>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-right">
                    <li><a href="/">Home</a></li>
                    <li class="active text-color-light">OER</li>
                </ul>
            </div>
        </div>
        <br>
        <form role="search" action="{{ route('oer.search') }}" method="get">
                <div class="simple-search input-group">
                    <input class="form-control text-1" id="headerSearch" name="keyword" type="search" value="" placeholder="Search...">
                    <span class="input-group-append">
                        <button class="btn" type="submit">
                            <i class="fa fa-search header-nav-top-icon"></i>
                        </button>
                    </span>
                </div>
        </form>
    </div>
</section>

<section class="section bg-color-light border-0 my-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <h2 class="font-weight-bold mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">Selamat Datang</h2>
                 <p class="text-color-dark pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1700">Portal Open Educational Resource (OER) Informatika Institut Teknologi Sepuluh Nopember merupakan kumpulan buku digital berlisensi Creative Commons yang dikumpulkan dari berbagai sumber untuk mendukung perkembangan ilmu kepengetahuan.</p>
            </div>
        </div>
    </div>
</section>

<section class="section bg-color-tertiary border-0 my-0 pb-4">
    <div class="container">

        
        <br><br>

        <div class="row justify-content-center mb-5">
            @foreach($items as $item)
            <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                <div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
                    <div class="thumb-info-wrapper">
                        <a href="{{ route('oer.show', $item->id) }}"><img src="{{asset('oer_upload/resource_image')}}/{{$item->image}}" class="img-fluid" alt=""></a>
                    </div>
                    <div class="thumb-info-caption">
                        <h3 class="font-weight-semibold text-transform-none"><a href="{{ route('oer.show', $item->id) }}" class="custom-link-color-dark">{{$item->title}}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection