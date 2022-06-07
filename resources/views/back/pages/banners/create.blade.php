@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Create Banner</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form action="{{ route("banners.store") }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="bg" class="form-label">Background Image</label>
                <input type="file" class="form-control" id="bg" name="bg" value="{{ old('bg') }}">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <label for="dropbox" class="form-label">Dropbox</label>
                <input type="text" class="form-control" id="dropbox" name="dropbox" value="{{ old('dropbox') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
            </div>
            <div class="mb-3">
                <label for="url_text" class="form-label">URL Text</label>
                <input type="text" class="form-control" id="url_text" name="url_text" value="{{ old('url_text') }}">
            </div>
            <div class="mb-3">
                <label for="primary" class="form-label">Primary</label>
                <input type="number" class="form-control" id="primary" name="primary" value=2 readonly>
            </div>
            <button type="submit" class="btn btn-primary m-2">Submit</button>
        </form>
    </div>
@endsection
