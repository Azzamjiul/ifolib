@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 style="display:inline-block">Mengubah Koleksi</h3>
                    <a href="{{route('admin.oer.koleksi.index')}}" class="float-right btn btn-warning btn-sm">Kembali</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="{{ route('admin.oer.koleksi.update', $collection->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Kategori Induk</label>
                            <select name="parent_id" id="" required class="form-control">
                                <option value="0">Induk</option>
                                @foreach($collections as $c)
                                <option value="{{$c->id}}" {{ $c->id == $collection->parent_id ? 'selected' : '' }} >{{$c->code}} - {{$c->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="code">Nomor Koleksi</label>
                            <input type="text" name="code" required class="form-control @error('code') is-invalid @enderror" value="{{ $collection->code }}">
                            @error('code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Nama Koleksi</label>
                            <input type="text" name="name" required class="form-control @error('name') is-invalid @enderror" value="{{ $collection->name }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi Koleksi</label>
                            <textarea name="description" id="" cols="30" rows="5" required class="form-control @error('description') is-invalid @enderror">{{ $collection->description }}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="float-right btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection