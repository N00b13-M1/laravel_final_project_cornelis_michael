@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Detailed Tag</h1>
        <form action="{{ route('tagsandcategories.index') }}" method="get">
            <div class="mb-3">
                <label for="tag_desc" class="form-label">Tag Description</label>
                <input type="text" class="form-control" id="tag_desc" name="tag_desc" value="{{ $tag->tag_desc }}" readonly>
            </div>
            <button type="submit" class="btn btn-primary m-2"><a href="{{ route('tagsandcategories.index') }}"></a>Return</button>
        </form>
        <td>
            <button type="submit" class="btn btn-warning bg-warning m-2"><a href="{{ route('tagsandcategories.edit_tag', $tag->id) }}">Edit</a></button>
        </td>
        <td>
            <form action="{{ route('tagsandcategories.destroy_tag', $tag->id) }}" method="post">
                @csrf
            <button class="btn btn-danger bg-danger m-2" type="submit">Delete</button>
            </form>
        </td>
    </div>
@endsection
