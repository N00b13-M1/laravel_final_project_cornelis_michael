@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Edit Banner</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('banners.update', $banner) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="bg" class="form-label">Background Image</label>
                <img src="{{ asset('/assets/images/' . $banner->bg ) }}"
                            style="width: 400px" alt="" class="m-2 d-block">
                <input type="file" class="form-control" id="bg" name="bg"
                    value="{{ old('bg') ? old('bg') : $banner->bg }}">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title"
                    value="{{ old('title') ? old('title') : $banner->title }}">
            </div>
            <div class="mb-3">
                <label for="dropbox" class="form-label">Dropbox</label>
                <input type="text" class="form-control" id="dropbox" name="dropbox"
                    value="{{ old('dropbox') ? old('dropbox') : $banner->dropbox }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description"
                    value="{{ old('description') ? old('description') : $banner->description }}">
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">URL</label>
                <input type="text" class="form-control" id="url" name="url"
                    value="{{ old('url') ? old('url') : $banner->url }}">
            </div>
            <div class="mb-3">
                <label for="url_text" class="form-label">URL Text</label>
                <input type="text" class="form-control" id="url_text" name="url_text"
                    value="{{ old('url_text') ? old('url_text') : $banner->url_text }}">
            </div>
            <div class="mb-3">
                <label for="primary" class="form-label">Primary Picture</label>
                <div class="input-select">
                    <select name="primary" id="primary">
                        <option value="2">Select an option</option>
                        <option value="0">True (value= 0)</option>
                        <option value="1" >False (value= 1)</option>
                    </select>
                </div>
                {{-- <input type="boolean" class="form-control" id="primary" name="primary"
                    value="{{ old('primary') ? old('primary') : $banner->primary }}"> --}}
            </div>
            <button type="submit" class="btn btn-primary m-2">Save</button>
        </form>
    </div>
@endsection
