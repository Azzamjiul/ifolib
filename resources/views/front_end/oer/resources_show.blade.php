@extends('front_end.layouts.master')

@section('title','OER - Open Education Resource')

@section('main-content')
<section class="page-header page-header-modern page-header-background page-header-background-sm parallax custom-page-header mt-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{asset('img/demos/education/parallax/parallax-4.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="font-weight-bold">{{$resource->title}}</h1>
                <!-- <span class="text-color-light d-block position-relative font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> -->

            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-right">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{route('oer.index')}}">Open Educational Resource</a></li>
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
                    Resources
                    <span class="post-author font-weight-semibold text-color-dark">
                        Detail
                    </span>
                </span>
            </div>

            <hr class="solid">

            <!-- <div class="center mt-3 mb-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="#" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div> -->

            <div class="accordion without-bg without-borders mb-4">

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle">
                                Title
                            </a>
                        </h4>
                    </div>
                    <div>
                        <div class="card-body pl-4 pt-2">
                            <p>{{$resource->title}}</p>
                        </div>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle">
                                Subject
                            </a>
                        </h4>
                    </div>
                    <div>
                        <div class="card-body pl-4 pt-2">
                            <p>{{$resource->subject}}</p>
                        </div>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle">
                                Description
                            </a>
                        </h4>
                    </div>
                    <div>
                        <div class="card-body pl-4 pt-2">
                            <p style="text-align:justify">{{$resource->description}}</p>
                        </div>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle">
                                Creator
                            </a>
                        </h4>
                    </div>
                    <div>
                        <div class="card-body pl-4 pt-2">
                            <p>{{$resource->creator}}</p>
                        </div>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle">
                                Source
                            </a>
                        </h4>
                    </div>
                    <div>
                        <div class="card-body pl-4 pt-2">
                            <p>{{$resource->source}}</p>
                        </div>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle">
                                Publisher
                            </a>
                        </h4>
                    </div>
                    <div>
                        <div class="card-body pl-4 pt-2">
                            <p>{{$resource->publisher}}</p>
                        </div>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle">
                                Date
                            </a>
                        </h4>
                    </div>
                    <div>
                        <div class="card-body pl-4 pt-2">
                            <p>{{ date('Y', strtotime($resource->created_at))}}</p>
                        </div>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle">
                                Contributor
                            </a>
                        </h4>
                    </div>
                    <div>
                        <div class="card-body pl-4 pt-2">
                            <p>{{$resource->user->name}}</p>
                        </div>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle">
                                Rights
                            </a>
                        </h4>
                    </div>
                    <div>
                        <div class="card-body pl-4 pt-2">
                            <p>{{$resource->rights}}</p>
                        </div>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle">
                                Format
                            </a>
                        </h4>
                    </div>
                    <div>
                        <div class="card-body pl-4 pt-2">
                            <p>{{$resource->format}}</p>
                        </div>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle">
                                Language
                            </a>
                        </h4>
                    </div>
                    <div>
                        <div class="card-body pl-4 pt-2">
                            <p>{{$resource->language}}</p>
                        </div>
                    </div>
                </div>

                <!-- <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle">
                                Type
                            </a>
                        </h4>
                    </div>
                    <div>
                        <div class="card-body pl-4 pt-2">
                            <p>{{$resource->type_id}}</p>
                        </div>
                    </div>
                </div> -->

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle">
                                Files
                            </a>
                        </h4>
                    </div>
                    <div>
                        <div class="card-body pl-4 pt-2">
                            <!-- <p>{{$resource->file}}</p> -->
                            <a href="{{ route('oer.resources.view', $resource->id) }}" class="btn btn-success">View Resource</a>
                        </div>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle">
                                Collection
                            </a>
                        </h4>
                    </div>
                    <div>
                        <div class="card-body pl-4 pt-2">
                            <p>{{$resource->collection->code}} {{$resource->collection->name}}</p>
                        </div>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle">
                                Citation
                            </a>
                        </h4>
                    </div>
                    <div>
                        <div class="card-body pl-4 pt-2">
                            <p>{{$resource->creator}}, "{{$resource->title}}", <i>Open Educational Resource (OER) - Unsyiah Library,</i> accessed {{ date('M d, Y', strtotime($resource->created_at))}}, {{url()->current()}}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection