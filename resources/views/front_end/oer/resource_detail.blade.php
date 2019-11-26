@extends('front_end.layouts.master')

@section('title',$resource->title)

@section('main-content')
<section class="page-header page-header-modern page-header-background page-header-background-sm parallax custom-page-header my-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{asset('')}}img/demos/education/parallax/parallax-6.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="font-weight-bold">{{$resource->title}}</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-right">
                    <li><a href="/">Home</a></li>
                    <li class="active text-color-light">OER</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row pt-4 pb-4 mb-3">
        <div class="col">
            <div class="post-infos mb-4">
                <span class="info posted-by">
                    Author:
                    <span class="post-author font-weight-semibold text-color-dark">
                        John Doe
                    </span>
                </span>
                <span class="info comments ml-4">
                    Creator:
                    <span class="comments-number text-color-primary font-weight-semibold">
                        2 Hours
                    </span>
                </span>
                <span class="info like ml-4">
                    Date:
                    <span class="like-number font-weight-semibold custom-color-dark">
                        Jan 2018
                    </span>
                </span>
            </div>

            <hr class="solid">

            <div class="accordion without-bg without-borders mb-4" id="accordion8">
                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion8" href="#collapse8One">
                                Title
                            </a>
                        </h4>
                        <h6>{{$resource->title}}</h6>
                    </div>
                    <div id="collapse8One" class="collapse">
                        <div class="card-body pl-4 pt-2">
                            <p><a href="#"> <img class="img-fluid" src="{{asset('oer_upload/resource_image')}}/{{$resource->image}}" height="200px" width="200px"></a></p>
                        </div>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion8" href="#collapse8One">
                                Subject
                            </a>
                        </h4>
                        <h6>{{$resource->subject}}</h6>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion8" href="#collapse8One">
                                Description
                            </a>
                        </h4>
                        <p>{{$resource->description}}</p>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion8" href="#collapse8One">
                                Creator
                            </a>
                        </h4>
                        <h6>{{$resource->creator}}</h6>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion8" href="#collapse8One">
                                Source
                            </a>
                        </h4>
                        <h6>{{$resource->source}}</h6>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion8" href="#collapse8One">
                                Publisher
                            </a>
                        </h4>
                        <h6>{{$resource->publisher}}</h6>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion8" href="#collapse8One">
                                Contributor
                            </a>
                        </h4>
                        <h6>{{$resource->contributor}}</h6>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion8" href="#collapse8One">
                                Rights
                            </a>
                        </h4>
                        <h6>{{$resource->rights}}</h6>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion8" href="#collapse8One">
                                File
                            </a>
                        </h4>
                        <h6>{{$resource->file}}</h6>
                        <p><a href="#"> <img class="img-fluid" src="{{asset('oer_upload/resource_image')}}/{{$resource->image}}" height="200px" width="200px"></a></p>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion8" href="#collapse8One">
                                Collection
                            </a>
                        </h4>
                        <h6>{{$resource->collection}}</h6>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion8" href="#collapse8One">
                                Citation
                            </a>
                        </h4>
                        <h6>{{$resource->citation}}</h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection