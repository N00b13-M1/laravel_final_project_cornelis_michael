@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">News</h1>
        {{-- Alert News Added --}}
        @if (session()->has('success'))
            <div class="alert alert-success w-50 mx-auto m-3">
                <p class="text-success">{{ session()->get('success') }}</p>
            </div>
        @endif
        {{-- Alert News Updated --}}
        @if (session()->has('update'))
            <div class="alert alert-warning w-50 mx-auto m-3">
                <p class="text-warning">{{ session()->get('update') }}</p>
            </div>
        @endif
        {{-- Alert News Deleted --}}
        @if (session()->has('delete'))
            <div class="alert alert-danger w-50 mx-auto m-3">
                <p class="text-danger">{{ session()->get('delete') }}</p>
            </div>
        @endif
        <table class="table table-dark ms-5">
            <thead>
                <tr>
                    @foreach ($news_titles as $item)
                        <th scope="col">{{ $item }}</th>
                    @endforeach
                    <th scope="col">Tags</th>
                    <th scope="col">Categories</th>
                    <th scope="col"><i class="text-center fa fa-search" aria-hidden="true"></i>
                    </th>
                </tr>
            </thead>
            <tbody>
                {{-- {{ dd($news->tag) }} --}}
                @foreach ($news as $item)
                    <tr>
                        {{-- <td> {{ dd($item) }}</td> --}}
                        <th scope="row">{{ $item->id }}</th>
                        <td><img src="{{ asset('assets/images/' . $item->img ) }}"></td>
                        <td>{{ $item->created_when }}</td>
                        <td>{{ $item->posted_by }}</td>
                        <td>{{ $item->number_of_comments }}</td>
                        <td>{{ $item->title }}</td>
                        {{-- <td>{{ $item->text1 }}</td> --}}
                        <td>{!! (Str::words($item->text1, '5')) !!}</td>
                        <td>{!! (Str::words($item->strong, '5')) !!}</td>
                        <td>{!! (Str::words($item->text2, '5')) !!}</td>
                        <td>
                            <div>
                        @foreach ($item->tags as $tag )
                        <div class="bg-info m-1 p-1 rounded rounded text-white text-center">{{ $tag->tag_desc }}
                        </div>
                        @endforeach
                            </div>
                        </td>
                        <td>
                            <div>
                            @foreach ($item->categories as $category )
                                <div class="bg-danger m-1 p-1 rounded text-center">
                                    {{ $category->category_desc }}
                                </div>
                            @endforeach
                            </div>
                        </td>
                        <td>
                            <a href="{{ route('news.show', $item) }}">
                                <button class="btn btn-primary">Show</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <div class='text-center'>
                <a href="{{ route("news.create") }}"><button class="btn btn-success bg-success w-50 m-2">Create</button></a>
                {{-- {{  dd($item) }} --}}
            </div>
        </table>
    </div>
@endsection
