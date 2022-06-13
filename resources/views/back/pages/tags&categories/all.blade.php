@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        {{-- Alert Services Added --}}
        @if (session()->has('success'))
            <div class="alert alert-success w-50 mx-auto m-3">
                <p class="text-success">{{ session()->get('success') }}</p>
            </div>
        @endif
        {{-- Alert Services Updated --}}
        @if (session()->has('update'))
            <div class="alert alert-warning w-50 mx-auto m-3">
                <p class="text-warning">{{ session()->get('update') }}</p>
            </div>
        @endif
        {{-- Alert Services Deleted --}}
        @if (session()->has('delete'))
            <div class="alert alert-danger w-50 mx-auto m-3">
                <p class="text-danger">{{ session()->get('delete') }}</p>
            </div>
        @endif
        <h2 class="text-center fs-1 py-5">Tags</h2>
        <table class="table table-dark ms-5">
            <thead>
                <tr>
                    @foreach ($tags_titles as $tag)
                        <th scope="col">{{ $tag }}</th>
                    @endforeach
                    <th scope="col"><i class="text-center fa fa-search" aria-hidden="true"></i>
                    </th>
                </tr>

            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <th scope="row">{{ $tag->id }}</th>
                        <td>{{ $tag->tag_desc }}</td>
                        <td>
                            <a href="{{ route('tagsandcategories.show_tag', $tag->id) }}"><button class="btn btn-primary">Show</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <div class='text-center'>
                <a href="{{ route("tagsandcategories.create_tag") }}"><button class="btn btn-success bg-success w-50 m-2">Create</button></a>
            </div>
        </table>
        <h2 class="text-center fs-1 py-5">Categories</h2>
        <table class="table table-dark ms-5">
            <thead>
                <tr>
                    @foreach ($categories_titles as $category)
                        <th scope="col">{{ $category }}</th>
                    @endforeach
                    <th scope="col"><i class="text-center fa fa-search" aria-hidden="true"></i>
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->category_desc }}</td>
                        <td>
                            <a href="{{ route('tagsandcategories.show_category', $category->id) }}"><button class="btn btn-primary">Show</button>
                            </a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
            <div class='text-center'>
                <a href="{{ route("tagsandcategories.create_category") }}"><button class="btn btn-success bg-success w-50 m-2">Create</button></a>
            </div>
        </table>
    </div>
@endsection
