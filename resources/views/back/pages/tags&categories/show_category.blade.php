@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Detailed Category</h1>
        <form action="{{ route('tagsandcategories.index') }}" method="get">
            <div class="mb-3">
                <label for="category_desc" class="form-label">Category Description</label>
                <input type="text" class="form-control" id="category_desc" name="category_desc" value="{{ $category->category_desc }}" readonly>
            </div>
            <button type="submit" class="btn btn-primary m-2"><a href="{{ route('tagsandcategories.index') }}"></a>Return</button>
        </form>
        <td>
            <button type="submit" class="btn btn-warning bg-warning m-2"><a href="{{ route('tagsandcategories.edit_category', $category->id) }}">Edit</a></button>
        </td>
        <td>
            <form action="{{ route('tagsandcategories.destroy_category', $category->id) }}" method="post">
                @csrf
            <button class="btn btn-danger bg-danger m-2" type="submit">Delete</button>
            </form>
        </td>
    </div>
@endsection

