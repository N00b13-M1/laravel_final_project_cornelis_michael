@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Edit Tag</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('tagsandcategories.update_tag', $tag->id) }}" method="post">
            @csrf
            {{-- @method('put') --}}
            <div class="mb-3">
                <label for="tag_desc" class="form-label">Edit Tag</label>
                <input type="text" class="form-control" id="tag_desc" name="tag_desc" value="{{ old('tag_desc') ? old('tag_desc') : $tag->tag_desc }}">
            </div>
            <button type="submit" class="btn btn-success m-2">Save</button>
        </form>
    </div>
@endsection

