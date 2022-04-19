@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <input type="file" name="image[]" multiple class="form-control" aria-label="Upload">
                    <button class="btn btn-primary" type="submit">Button</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-5">
        @foreach ($galleries as $gallery) 
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body p-0">
                        <img src="{{ asset('upload/' . $gallery->name) }}" alt="" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <a href="{{ asset('upload/' . $gallery->name) }}" target="_blank" class="btn btn-info">View</a>
                        <a href="{{ route('home.download', $gallery->id) }}" class="btn btn-success">Download</a>
                        <a href="{{ route('home.destroy', $gallery->id) }}" class="btn btn-danger float-end">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection