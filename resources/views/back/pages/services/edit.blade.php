@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Edit Service</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('services.update', $service) }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="logo" class="form-label">Logo</label>
                <input type="text" class="form-control" id="logo" name="logo" value="{{ old('logo') ? old('logo') : $service->logo }}">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ? old('title') : $service->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description') ? old('description') : $service->description }}">
            </div>

            <button type="submit" class="btn btn-success m-2">Save</button>
        </form>
    </div>
@endsection
