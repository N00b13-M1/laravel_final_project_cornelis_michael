@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center text-4xl py-5">Detailed Course</h1>
        <form action="{{ route('courses.index') }}" method="get">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $course->title }}" readonly>
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Description</label>
                <input type="text" class="form-control" id="desc" name="desc" value="{{ $course->desc }}" readonly>
            </div>
            <div class="mb-3">
                <label for="bg" class="form-label">Background Image</label>
                <img src="{{ asset('/assets/images/' . $course->bg ) }}"
                            style="width: 200px" alt="" class="m-2 d-block">
            </div>
            <div class="mb-3">
                <label for="teacher_pic" class="form-label">Teacher Picture</label>
                <img src="{{ asset('/assets/images/' . $course->teacher_pic ) }}"
                            style="width: 200px" alt="" class="m-2 d-block">
            </div>
            <div class="mb-3">
                <label for="teacher_name" class="form-label">Teacher Name</label>
                <input type="text" class="form-control" id="teacher_name" name="teacher_name" value="{{ $course->teacher_name }}" readonly>
            </div>
            <div class="mb-3">
                <label for="price_class" class="form-label">Price Class</label>
                <input type="text" class="form-control" id="price_class" name="price_class" value="{{ $course->price_class }}" readonly>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $course->price}}" readonly>
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">URL</label>
                <input type="text" class="form-control" id="url" name="url" value="{{ $course->url }}" readonly>
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Text</label>
                <input type="text" class="form-control" id="text" name="text" value="{{ $course->text }}" readonly>
            </div>
            <div class="mb-3">
                <label for="url2" class="form-label">URL 2</label>
                <input type="text" class="form-control" id="url2" name="url2" value="{{ $course->url2 }}" readonly>
            </div>
            <button type="submit" class="btn btn-primary m-2"><a href="{{ route('courses.index') }}"></a>Return</button>

        </form>
        <td>
            <button type="submit" class="btn btn-warning bg-warning m-2"><a href="{{ route('courses.edit', $course) }}">Edit</a></button>
        </td>
        <td>
            <form action="{{ route("courses.destroy", $course) }}" method="post">
                @csrf
                @method('DELETE')
            <button class="btn btn-danger bg-danger m-2" type="submit">Delete</button>
            </form>
        </td>
    </div>
@endsection
