@extends('front_end.layouts.master')

@section('title','OER - Open Education Resource')

@section('main-content')
<section class="page-header page-header-modern page-header-background page-header-background-sm parallax custom-page-header my-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{asset('')}}img/demos/education/parallax/parallax-4.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="font-weight-bold">Search Result for "{{$request->keyword}}"</h1>
                <span class="text-color-light d-block position-relative font-weight-light"></span>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-right">
                    <li><a href="demo-education.html">Home</a></li>
                    <li><a href="{{route('oer.index')}}">Oer</a></li>
                    <li class="active text-color-light">Search Result</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section bg-color-tertiary border-0 my-0 pb-4">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-2">
            @foreach($items as $item)
            <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                <div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
                    <div class="thumb-info-wrapper">
                        <a href="demo-education-courses-detail.html"><img src="{{asset('oer_upload/resource_image')}}/{{$item->image}}" class="img-fluid" alt=""></a>
                    </div>
                    <div class="thumb-info-caption">
                        <h3 class="font-weight-semibold text-transform-none"><a href="demo-education-courses-detail.html" class="custom-link-color-dark">{{$item->title}}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection