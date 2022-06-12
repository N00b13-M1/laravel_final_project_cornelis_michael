@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Create Tag</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route("tagsandcategories.store_tag") }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="tag_desc" class="form-label">Tag Description</label>
                <input type="text" class="form-control" id="tag_desc" name="tag_desc" value="{{ old('tag_desc') }}">
            </div>
            <button type="submit" class="btn btn-primary m-2">Submit</button>
        </form>
    </div>
@endsection

