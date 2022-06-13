@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Detailed News</h1>
        <form action="{{ route('news.index') }}" method="get">
            <div class="mb-3">
                <label for="img" class="form-label">News Image</label>
                <img src="{{ asset('assets/images/' . $news->img) }}">
            </div>
            <div class="mb-3">
                <label for="created_when" class="form-label">Created When</label>
                <input type="text" class="form-control" id="created_when" name="created_when" value="{{ $news->created_when }}" readonly>
            </div>
            <div class="mb-3">
                <label for="posted_by" class="form-label">Posted by</label>
                <input type="text" class="form-control" id="posted_by" name="posted_by" value="{{ $news->posted_by }}" readonly>
            </div>
            <div class="mb-3">
                <label for="number_of_comments" class="form-label">Number of Comments</label>
                <input type="number" class="form-control" id="number_of_comments" name="number_of_comments" value="{{ $news->number_of_comments }}" readonly>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $news->title}}" readonly>
            </div>
            <div class="mb-3">
                <label for="text1" class="form-label">Text</label>
                <input type="text" class="form-control" id="text1" name="text1" value="{{ $news->text1 }}" readonly>
            </div>
            <div class="mb-3">
                <label for="strong" class="form-label">Strong Text</label>
                <input type="text" class="form-control" id="strong" name="strong" value="{{ $news->strong }}" readonly>
            </div>
            <div class="mb-3">
                <label for="text2" class="form-label">Text 2</label>
                <input type="text" class="form-control" id="text2" name="text2" value="{{ $news->text2 }}" readonly>
            </div>
            <div class="mb-3">
                <label for="text2" class="form-label">Tags</label>
                <div class="border border-1 border-dark">
                    @foreach ($news->tags as $tag)
                        <button class='bg-info m-1 p-1 pe-2 ps-2 rounded rounded-pill text-white'>{{ $tag->tag_desc }}</button>
                    @endforeach
                </div>
            </div>
            <div class="mb-3">
                <label for="text2" class="form-label">Categories</label>
                <div class="border border-1 border-dark">
                    @foreach ($news->categories as $category)
                        <button class='bg-warning m-1 p-1 pe-2 ps-2 rounded rounded-pill text-white'>{{ $category->category_desc }}</button>
                    @endforeach
                </div>
            </div>
            <button type="submit" class="btn btn-primary m-2"><a href="{{ route('news.index') }}"></a>Return</button>
        </form>
        <td>
            <button type="submit" class="btn btn-warning bg-warning m-2"><a href="{{ route('news.edit', $news ) }}">Edit</a></button>
        </td>
        <td>
            <form action="{{ route("news.destroy", $news ) }}" method="post">
                @csrf
                @method('DELETE')
            <button class="btn btn-danger bg-danger m-2" type="submit">Delete</button>
            </form>
        </td>
    </div>
@endsection

