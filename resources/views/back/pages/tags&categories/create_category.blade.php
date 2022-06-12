@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Create Category</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route("tagsandcategories.store_category") }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="category_desc" class="form-label">Category Description</label>
                <input type="text" class="form-control" id="category_desc" name="category_desc" value="{{ old('category_desc') }}">
            </div>
            <button type="submit" class="btn btn-primary m-2">Submit</button>
        </form>
    </div>
@endsection



