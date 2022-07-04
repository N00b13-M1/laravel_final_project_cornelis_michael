@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Create Event</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route("events.store") }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="img" class="form-label">Event Image</label>
                <input type="file" class="form-control" id="img" name="img" value="{{ old('img') }}">
            </div>
            <div class="mb-3">
                <label for="stars" class="form-label">Stars</label>
                <input type="number" class="form-control" id="stars" name="stars" value="{{ old('stars') }}">
            </div>
            <div class="mb-3">
                <label for="likes" class="form-label">Likes</label>
                <input type="number" class="form-control" id="likes" name="likes" value="{{ old('likes') }}">
            </div>
            <div class="mb-3">
                <label for="where" class="form-label">Location</label>
                <input type="text" class="form-control" id="where" name="where" value="{{ old('where') }}">
            </div>
            <div class="mb-3">
                <label for="when" class="form-label">When</label>
                <input type="text" class="form-control" id="when" name="when" value="{{ old('when') }}">
            </div>
            <div class="mb-3">
                <label for="circle_txt" class="form-label">Circle Text</label>
                <input type="text" class="form-control" id="circle_txt" name="circle_txt" value="{{ old('circle_txt') }}">
            </div>
            <div class="mb-3">
                <label for="event_name" class="form-label">Event Name</label>
                <input type="text" class="form-control" id="event_name" name="event_name" value="{{ old('event_name') }}">
            </div>
            <div class="mb-3">
                <label for="event_desc" class="form-label">Event Description</label>
                <input type="text" class="form-control" id="event_desc" name="event_desc" value="{{ old('event_desc') }}">
            </div>
            <button type="submit" class="btn btn-primary m-2">Submit</button>
        </form>
    </div>
@endsection


