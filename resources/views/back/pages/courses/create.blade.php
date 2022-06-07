@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Create Course</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route("courses.store") }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="favorite" class="form-label">Is this a Favorite?</label>
                <div class="form-control border border-dark rounded-0">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="favorite1" id="favorite" value="Yes">
                        <label class="form-check-label" for="favorite">
                        Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="favorite2" id="favorite" value="No">
                        <label class="form-check-label" for="favorite">
                        No
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Description</label>
                <input type="text" class="form-control" id="desc" name="desc" value="{{ old('desc') }}">
            </div>
            <div class="mb-3">
                <label for="bg" class="form-label">Background Image</label>
                <input type="file" class="form-control" id="bg" name="bg" value="{{ old('bg') }}">
            </div>
            <div class="mb-3">
                <label for="bg_2" class="form-label">Background Image 2</label>
                <input type="file" class="form-control" id="bg_2" name="bg_2" value="{{ old('bg_2') }}">
            </div>
            <div class="mb-3">
                <label for="bg_3" class="form-label">Background Image 3</label>
                <input type="file" class="form-control" id="bg_3" name="bg_3" value="{{ old('bg_3') }}">
            </div>
            <div class="mb-3">
                <label for="bg_4" class="form-label">Background Image 4</label>
                <input type="file" class="form-control" id="bg_4" name="bg_4" value="{{ old('bg_4') }}">
            </div>
            <div class="mb-3">
                <label for="teacher_pic" class="form-label">Teacher Picture</label>
                <input type="file" class="form-control" id="teacher_pic" name="teacher_pic" value="{{ old('teacher_pic') }}">
            </div>
            <div class="mb-3">
                <label for="teacher_name" class="form-label">Teacher Name</label>
                <input type="text" class="form-control" id="teacher_name" name="teacher_name" value="{{ old('teacher_name')}}">
            </div>
            <div class="mb-3">
                <label for="price_class" class="form-label">Price Class</label>
                <input type="text" class="form-control" id="price_class" name="price_class" value="{{ old('price_class') }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Text</label>
                <input type="text" class="form-control" id="text" name="text" value="{{ old('text') }}">
            </div>
            <div class="mb-3">
                <label for="starting_date" class="form-label">Starting Date</label>
                <input type="date" class="form-control" id="starting_date" name="starting_date" value="{{ old('starting_date') }}">
            </div>
            <div class="mb-3">
                <label for="months" class="form-label">Months</label>
                <input type="number" class="form-control" id="months" name="months" value="{{ old('months') }}">
            </div>
            <div class="mb-3">
                <label for="weeks" class="form-label">Weeks</label>
                <input type="number" class="form-control" id="weeks" name="weeks" value="{{ old('weeks') }}">
            </div>
            <div class="mb-3">
                <label for="study_level" class="form-label">Study Level</label>
                <input type="text" class="form-control" id="study_level" name="study_level" value="{{ old('study_level') }}">
            </div>
            <div class="mb-3">
                <label for="discipline" class="form-label">Discipline</label>
                <input type="text" class="form-control" id="discipline" name="discipline" value="{{ old('discipline') }}">
            </div>
            <button type="submit" class="btn btn-primary m-2">Submit</button>
        </form>
    </div>
@endsection
