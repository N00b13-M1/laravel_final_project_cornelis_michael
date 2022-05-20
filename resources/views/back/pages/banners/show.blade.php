@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Detailed Banner</h1>
        <form action="{{ route('banners.index') }}" method="get">
            <div class="mb-3">
                <label for="bg" class="form-label">Background Image</label>
                <img src="{{ asset('/assets/images/' . $banner->bg ) }}"
                            style="width: 400px" alt="" class="m-2 d-block">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $banner->title }}" readonly>
            </div>
            <div class="mb-3">
                <label for="dropbox" class="form-label">Dropbox</label>
                <input type="text" class="form-control" id="dropbox" name="dropbox" value="{{ $banner->dropbox }}" readonly>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $banner->description }}" readonly>
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">URL</label>
                <input type="text" class="form-control" id="url" name="url" value="{{ $banner->url }}" readonly>
            </div>
            <div class="mb-3">
                <label for="url_text" class="form-label">URL Text</label>
                <input type="text" class="form-control" id="url_text" name="url_text" value="{{ $banner->url_text }}" readonly>
            </div>
            <button type="submit" class="btn btn-primary m-2"><a href="{{ route('banners.index') }}"></a>Return</button>

        </form>
        <td>
            <button type="submit" class="btn btn-warning bg-warning m-2"><a href="{{ route('banners.edit', $banner) }}">Edit</a></button>
        </td>
        <td>
            <form action="{{ route("banners.destroy", $banner) }}" method="post">
                @csrf
                @method('DELETE')
            <button class="btn btn-danger bg-danger m-2" type="submit">Delete</button>
            </form>
        </td>
    </div>
@endsection
