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
                <div class='d-flex m-auto'>
                    @php
                        // dd($services);
                        $logos = [
                        'fa fa-graduation-cap',
                        'fa fa-globe',
                        'fa fa-clock-o',
                        'fa fa-book',
                        'fa fa-paperclip',
                        'fa fa-magnet',
                        'fa fa-shopping-cart',
                        'fa fa-bar-chart'];
                    @endphp
                    @foreach ($logos as $item)
                        <div class="form-check m-1">
                            <label class="form-check-label d-block m-auto" for="flexRadioDefault1">
                                <i class="{{ $item }}"></i>
                            </label>
                            <input class="form-check-input d-block m-auto" type="radio" name="logo" id="flexRadioDefault1"
                                value="{{ $item }}">
                        </div>
                    @endforeach
                </div>
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
