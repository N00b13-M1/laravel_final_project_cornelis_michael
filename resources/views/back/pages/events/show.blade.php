@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Detailed Event</h1>
        <form action="{{ route('events.index') }}" method="get">
            <div class="mb-3">
                {{-- {{ dd($event) }} --}}
                <label for="img" class="form-label">Event Image</label>
                <img src="{{ asset('assets/images/' . $event->img) }}">
            </div>
            <div class="mb-3">
                <label for="stars" class="form-label">Stars</label>
                <input type="number" class="form-control" id="stars" name="stars" value="{{ $event->stars }}" readonly>
            </div>
            <div class="mb-3">
                <label for="likes" class="form-label">Likes</label>
                <input type="number" class="form-control" id="likes" name="likes" value="{{ $event->likes }}" readonly>
            </div>
            <div class="mb-3">
                <label for="where" class="form-label">Location</label>
                <input type="text" class="form-control" id="where" name="where" value="{{ $event->where }}" readonly>
            </div>
            <div class="mb-3">
                <label for="when" class="form-label">When</label>
                <input type="text" class="form-control" id="when" name="when" value="{{ $event->when }}" readonly>
            </div>
            <div class="mb-3">
                <label for="circle_txt" class="form-label">Circle Text</label>
                <input type="text" class="form-control" id="circle_txt" name="circle_txt" value="{{ $event->circle_txt }}" readonly>
            </div>
            <div class="mb-3">
                <label for="event_name" class="form-label">Event Name</label>
                <input type="text" class="form-control" id="event_name" name="event_name" value="{{ $event->event_name }}" readonly>
            </div>
            <div class="mb-3">
                <label for="event_desc" class="form-label">Event Description</label>
                <input type="text" class="form-control" id="event_desc" name="event_desc" value="{{ $event->event_desc }}" readonly>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Approved Status</label>
                <input type="boolean" class="form-control" id="status" name="status"
                @if ($event->status == true)
                value="Yes"
                @else
                value="No"
                @endif readonly>
            </div>
            <button type="submit" class="btn btn-primary m-2"><a href="{{ route('events.index') }}"></a>Return</button>
        </form>
        <td>
            <button type="submit" class="btn btn-warning bg-warning m-2"><a href="{{ route('events.edit', $event) }}">Edit</a></button>
        </td>
        <td>
            <form action="{{ route("events.destroy", $event) }}" method="post">
                @csrf
                @method('DELETE')
            <button class="btn btn-danger bg-danger m-2" type="submit">Delete</button>
            </form>
        </td>
    </div>
@endsection

