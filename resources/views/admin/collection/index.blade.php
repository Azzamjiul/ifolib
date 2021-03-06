@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 style="display:inline-block">Koleksi</h3>
                    <a href="{{ route('admin.oer.koleksi.create') }}" class="float-right btn btn-primary btn-sm">Tambah Koleksi</a>
                </div>

                <div class="card-body">
                    @if (session('message-success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message-success') }}
                    </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Code</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($collections as $i=>$collection)
                            <tr>
                                <th scope="row">{{++$i}}</th>
                                <td>{{$collection->code}}</td>
                                <td>{{$collection->name}}</td>
                                <td>{{$collection->description}}</td>
                                <td>
                                    <a href="{{route('admin.oer.koleksi.edit', $collection->id)}}" class="float-center btn btn-warning btn-sm">Edit</a>
                                    <a href="{{route('admin.oer.koleksi.delete', $collection->id)}}" class="float-center btn btn-danger btn-sm">Delete</a>
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