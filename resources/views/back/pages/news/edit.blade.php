@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Edit News</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('news.update', $news) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="img" class="form-label">News Image</label>
                <img src="{{ asset('assets/images/' . $news->img) }}">
                <br>
                <input type="file" class="form-control" id="img" name="img" value="{{ old('img') ? old('img') : $news->img }}">
            </div>
            <div class="mb-3">
                <label for="created_when" class="form-label">Created When</label>
                <input type="text" class="form-control" id="created_when" name="created_when" value="{{ old('created_when') ? old('created_when') : $news->created_when }}">
            </div>
            <div class="mb-3">
                <label for="posted_by" class="form-label">Posted by</label>
                <input type="text" class="form-control" id="posted_by" name="posted_by" value="{{ old('posted_by') ? old('posted_by') : $news->posted_by }}">
            </div>
            <div class="mb-3">
                <label for="number_of_comments" class="form-label">Number of Comments</label>
                <input type="number" class="form-control" id="number_of_comments" name="number_of_comments" value="{{ old('number_of_comments') ? old('number_of_comments') : $news->number_of_comments }}">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ? old('title') : $news->title }}">
            </div>
            <div class="mb-3">
                <label for="text1" class="form-label">Text</label>
                <input type="text" class="form-control" id="text1" name="text1" value="{{ old('text1') ? old('text1') : $news->text1 }}">
            </div>
            <div class="mb-3">
                <label for="strong" class="form-label">Strong Text</label>
                <input type="text" class="form-control" id="strong" name="strong" value="{{ old('strong') ? old('strong') : $news->strong }}">
            </div>
            <div class="mb-3">
                <label for="text2" class="form-label">Text 2</label>
                <input type="text" class="form-control" id="text2" name="text2" value="{{ old('text2') ? old('text2') : $news->text2 }}">
            </div>
            <div class="mb-3">
                <label for="tag_desc" class="form-label">Tags</label>
                @foreach ($tags as $tag )
                <div class="form-check">
                    <label class="form-check-label" for="tag_desc">
                        {{ $tag->tag_desc }}
                        {{-- {{ dd($news->tags) }} --}}
                        {{-- {{ dd($tag->tag_desc) }} --}}
                    </label>
                    @if ( $news->tags->contains('tag_desc', $tag->tag_desc) )
                    {{-- {{ dd("Yes") }} --}}
                    <input class="form-check-input" type="checkbox" value="{{ $tag->id }}" id="tag_desc" name="tag_desc[]" checked>
                    @else
                    <input class="form-check-input" type="checkbox" value="{{ $tag->id }}" id="tag_desc" name="tag_desc[]">
                    {{-- {{ dd("No") }} --}}
                    @endif
                </div>
                @endforeach
            </div>
            <button type="submit" class="btn btn-success m-2">Save</button>
        </form>
    </div>
@endsection
