@extends('front_end.layouts.master')

@section('title','OER - Open Education Resource')

@section('main-content')
<section class="page-header page-header-modern page-header-background page-header-background-sm parallax custom-page-header mt-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{asset('')}}img/demos/education/parallax/parallax-4.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="font-weight-bold">{{$resource->title}}</h1>
                {{-- <span class="text-color-light d-block position-relative font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
 --}}
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-right">
                    <li><a href="demo-education.html">Home</a></li>
                    <li class="active text-color-light">Courses</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row pt-1 pb-4 mb-3">
        <div class="col">
            <div class="post-infos mb-4">
                <span class="info posted-by">
                    Cotributor:
                    <span class="post-author font-weight-semibold text-color-dark">
                        {{$resource->user->name}}
                    </span>
                </span>
                <span class="info posted-by ml-4">
                        Creator:
                        <span class="post-author font-weight-semibold text-color-dark">
                            {{$resource->creator}}
                        </span>
                    </span>
                {{-- <span class="info comments ml-4">
                    Length:
                    <span class="comments-number text-color-primary font-weight-semibold">
                        2 Hours
                    </span>
                </span> --}}
                <span class="info posted-by ml-4">
                    Date:
                    <span class="like-number font-weight-semibold text-color-dark">
                        {{ date('d/m/Y', strtotime($resource->created_at))}}
                    </span>
                </span>
            </div>

            <hr class="solid">

        <p class="lead mb-4">{{$resource->description}}</p>

            <div class="center mt-3 mb-4">
                <div class="embed-responsive embed-responsive-16by9">
                    {{-- <iframe src="//player.vimeo.com/video/67957799" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> --}}
                <video controls>
                    <source src="{{asset('oer_upload/resource_file')}}/{{$resource->file}}">
                </video>
                </div>	
            </div>

        </div>
    </div>
</div>
@endsection