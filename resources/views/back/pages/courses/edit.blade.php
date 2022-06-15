@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Edit Course</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('courses.update', $course) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="favorite" class="form-label">Is this a Favorite?</label>
                <div class="form-control form-group border border-dark rounded-0">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="favorite" id="favoriteYes" value="Yes" {{ $course->favorite == "Yes" ? "checked" : "" }}>
                        <label class="form-check-label" for="favoriteYes">
                        Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="favorite" id="favoriteNo" value="No" {{ $course->favorite == "No" ? "checked" : "" }}>
                        <label class="form-check-label" for="favoriteNo">
                        No
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ? old('title') : $course->title }}">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Description</label>
                <input type="text" class="form-control" id="desc" name="desc" value="{{ old('desc') ? old('desc') : $course->desc }}">
            </div>
            <div class="mb-3">
                <label for="bg" class="form-label">Background Image</label>
                <img src="{{ asset('/assets/images/' . $course->bg ) }}"
                            style="width: 200px" alt="" class="m-2 d-block">
                <input type="file" class="form-control" id="bg" name="bg"
                            value="{{ old('bg') ? old('bg') : $course->bg }}">

            </div>
            <div class="mb-3">
                <label for="teacher_pic" class="form-label">Teacher Picture</label>
                <img src="{{ asset('/assets/images/' . $course->teacher_pic ) }}"
                            style="width: 200px" alt="" class="m-2 d-block">
                <input type="file" class="form-control" id="teacher_pic" name="teacher_pic"
                            value="{{ old('teacher_pic') ? old('teacher_pic') : $course->teacher_pic }}">
            </div>
            <div class="mb-3">
                <label for="teacher_name" class="form-label">Teacher Name</label>
                <input type="text" class="form-control" id="teacher_name" name="teacher_name" value="{{ old('teacher_name') ? old('teacher_name') : $course->teacher_name }}">
            </div>
            <div class="mb-3">
                <label for="price_class" class="form-label">Price Class</label>
                <input type="text" class="form-control" id="price_class" name="price_class" value="{{ old('price_class') ? old('price_class') : $course->price_class }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price') ? old('price') : $course->price }}">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Text</label>
                <input type="text" class="form-control" id="text" name="text" value="{{ old('text') ? old('text') : $course->text }}">
            </div>
            <div class="mb-3">
                <label for="starting_date" class="form-label">Starting Date</label>
                <input type="date" class="form-control" id="starting_date" name="starting_date" value="{{ old('starting_date') ? old('starting_date') : $course->starting_date }}">
            </div>
            <div class="mb-3">
                <label for="months" class="form-label">Months</label>
                <input type="number" class="form-control" id="months" name="months" value="{{ old('months') ? old('months') : $course->months }}">
            </div>
            <div class="mb-3">
                <label for="weeks" class="form-label">Weeks</label>
                <input type="number" class="form-control" id="weeks" name="weeks" value="{{ old('weeks') ? old('weeks') : $course->weeks }}">
            </div>
            <div class="mb-3">
                <label for="study_level" class="form-label">Study Level</label>
                <input type="text" class="form-control" id="study_level" name="study_level" value="{{ old('study_level') ? old('study_level') : $course->study_level }}">
            </div>
            <div class="mb-3">
                <label for="discipline" class="form-label">Discipline</label>
                <input type="text" class="form-control" id="discipline" name="discipline" value="{{ old('discipline') ? old('discipline') : $course->discipline }}">
            </div>
            <div class="mb-3">
                <label for="category_desc" class="form-label">Categories</label>
                @foreach ($categories as $category )
                <div class="form-check">
                    <label class="form-check-label" for="category_desc">
                        {{ $category->category_desc }}
                        {{-- {{ dd($news->tags) }} --}}
                        {{-- {{ dd($tag->tag_desc) }} --}}
                    </label>
                    @if ( $course->categories->contains('category_desc', $category->category_desc) )
                    {{-- {{ dd("Yes") }} --}}
                    <input class="form-check-input" type="checkbox" value="{{ $category->id }}" id="category_desc" name="category_desc[]" checked>
                    @else
                    <input class="form-check-input" type="checkbox" value="{{ $category->id }}" id="category_desc" name="category_desc[]">
                    {{-- {{ dd("No") }} --}}
                    @endif
                </div>
                @endforeach
            </div>
            <button type="submit" class="btn btn-success m-2">Save</button>
        </form>
    </div>
@endsection

