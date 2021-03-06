@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 style="display:inline-block">Menambah Resource</h3>
                    <a href="{{route('admin.oer.resource.index')}}" class="float-right btn btn-warning btn-sm">Kembali</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="{{ route('admin.oer.resource.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Judul Resource</label>
                            <input type="text" name="title" required class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="subject_id">Mata Pelajaran</label>
                            <select name="subject_id" required class="form-control @error('subject_id') is-invalid @enderror">
                                <option value="">Pilih Mata Pelajaran</option>
                                @foreach($subjects as $subject)
                                <option value="{{$subject->id}}">{{$subject->name}}</option>
                                @endforeach
                            </select>
                            @error('subject_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="collection_id">Collections</label>
                            <select name="collection_id" required class="form-control @error('collection_id') is-invalid @enderror">
                                <option value="">Pilih Collection</option>
                                @foreach($collections as $c)
                                    <option value="{{$c->id}}">{{$c->code}} - {{$c->name}}</option>
                                @endforeach
                            </select>
                            @error('collection_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="type_id">Type</label>
                            <select name="type_id" required class="form-control @error('type_id') is-invalid @enderror">
                                <option value=""></option>
                                <option value="1">PDF</option>
                                <option value="2">Power Point</option>
                            </select>
                            @error('type_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Deskripsi Resource</label>
                            <textarea name="description" id="" cols="30" rows="5" required class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="creator">Creator</label>
                            <input type="text" name="creator" required class="form-control @error('creator') is-invalid @enderror" value="{{ old('creator') }}">
                            @error('creator')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="source">Source</label>
                            <input type="text" name="source" required class="form-control @error('source') is-invalid @enderror" value="{{ old('source') }}">
                            @error('source')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="publisher">Publisher</label>
                            <input type="text" name="publisher" required class="form-control @error('publisher') is-invalid @enderror" value="{{ old('publisher') }}">
                            @error('publisher')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="rights">Rights</label>
                            <input type="text" name="rights" required class="form-control @error('rights') is-invalid @enderror" value="{{ old('rights') }}">
                            @error('rights')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="format">Format</label>
                            <input type="text" name="format" required class="form-control @error('format') is-invalid @enderror" value="{{ old('format') }}">
                            @error('format')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="language">Language</label>
                            <input type="text" name="language" required class="form-control @error('language') is-invalid @enderror" value="{{ old('language') }}">
                            @error('language')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="file">File</label>
                            <br>
                            <input type="file" name="file" class=" @error('file') is-invalid @enderror" value="{{ old('file') }}">
                            @error('file')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Foto Sampul</label>
                            <br>
                            <input type="file" name="image" class=" @error('image') is-invalid @enderror" value="{{ old('image') }}">
                            @error('image')
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