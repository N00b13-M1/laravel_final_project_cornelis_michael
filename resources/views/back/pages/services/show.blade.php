@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center text-4xl py-5">Detailed Service</h1>
        <form action="{{ route('services.index') }}" method="get">
            <div class="mb-3">
                <label for="logo" class="form-label">Logo</label>
                <br>
                <i class="{{ $service->logo }}"></i>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $service->title }}" readonly>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $service->description }}" readonly>
            </div>
            <button type="submit" class="btn btn-primary m-2"><a href="{{ route('services.index') }}"></a>Return</button>
        </form>
        <td>
            <button type="submit" class="btn btn-warning bg-warning m-2"><a href="{{ route('services.edit', $service) }}">Edit</a></button>
        </td>
        <td>
            <form action="{{ route("services.destroy", $service) }}" method="post">
                @csrf
                @method('DELETE')
            <button class="btn btn-danger bg-danger m-2" type="submit">Delete</button>
            </form>
        </td>
    </div>
@endsection
