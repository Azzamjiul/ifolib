@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 style="display:inline-block">Mata Pelajaran</h3>
                    <a href="{{ route('admin.oer.subject.create') }}" class="float-right btn btn-primary btn-sm">Tambah Mata Pelajaran</a>
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
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subjects as $i=>$subject)
                            <tr>
                                <th scope="row">{{++$i}}</th>
                                <td>{{$subject->name}}</td>
                                <td>{{$subject->description}}</td>
                                <td>
                                    <a href="{{route('admin.oer.subject.edit', $subject->id)}}" class="float-center btn btn-warning btn-sm">Edit</a>
                                    <a href="" class="float-center btn btn-danger btn-sm">Delete</a>
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