@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 style="display:inline-block">Resources</h3>
                    <a href="{{ route('member.oer.resource.create') }}" class="float-right btn btn-primary btn-sm">Tambah Resources</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Creator</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($resources as $i=>$resource)
                            <tr>
                                <th scope="row">{{++$i}}</th>
                                <td>{{$resource->title}}</td>
                                <td>{{$resource->description}}</td>
                                <td>{{$resource->creator}}</td>
                                <td>
                                    <a href="{{route('admin.oer.resource.edit', $resource->id)}}" class="float-center btn btn-warning btn-sm">Edit</a>
                                    <a href="{{route('admin.oer.resource.delete', $resource->id)}}" class="float-center btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection