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
</div>
@endsection