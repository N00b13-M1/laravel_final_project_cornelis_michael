@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Courses</h1>
        {{-- Alert Courses Added --}}
        @if (session()->has('success'))
            <div class="alert alert-success w-50 mx-auto m-3">
                <p class="text-success">{{ session()->get('success') }}</p>
            </div>
        @endif
        {{-- Alert Courses Updated --}}
        @if (session()->has('update'))
            <div class="alert alert-warning w-50 mx-auto m-3">
                <p class="text-warning">{{ session()->get('update') }}</p>
            </div>
        @endif
        {{-- Alert Courses Deleted --}}
        @if (session()->has('delete'))
            <div class="alert alert-danger w-50 mx-auto m-3">
                <p class="text-danger">{{ session()->get('delete') }}</p>
            </div>
        @endif
        {{-- Alert Max Favorites Reached --}}
        @if (session()->has('fav_max'))
        <div class="alert alert-info w-50 mx-auto m-3">
            <p class="text-info">{{ session()->get('fav_max') }}</p>
        </div>
        @endif
        {{-- Alert Min Favorites Reached --}}
        @if (session()->has('fav_min'))
        <div class="alert alert-info w-50 mx-auto m-3">
            <p class="text-info">{{ session()->get('fav_min') }}</p>
        </div>
        @endif
        <table class="table table-dark ms-5">
            <thead>
                <tr>

                    @foreach ($course_titles as $item)
                        <th scope="col">{{ $item }}</th>
                    @endforeach
                    <th scope="col"><i class="text-center fa fa-search" aria-hidden="true"></i>
                    </th>
                    <th scope="col">Action</i>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->desc }}</td>
                        <td><img src="{{ asset('assets/images/' . $item->bg ) }}"></td>
                        <td><img src="{{ asset('assets/images/' . $item->bg_2 ) }}"></td>
                        <td><img src="{{ asset('assets/images/' . $item->bg_3 ) }}"></td>
                        <td><img src="{{ asset('assets/images/' . $item->bg_4) }}"></td>
                        <td><img src="{{ asset('assets/images/' . $item->teacher_pic ) }}"></td>
                        <td>{{ $item->teacher_name }}</td>
                        <td>{{ $item->price_class }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->text }}</td>
                        <td>{{ $item->starting_date }}</td>
                        <td>{{ $item->months }}</td>
                        <td>{{ $item->weeks }}</td>
                        <td>{{ $item->study_level }}</td>
                        <td>{{ $item->discipline }}</td>
                        <td>{{ $item->favorite }}</td>
                        <td>
                            <a href="{{ route('courses.show', $item) }}"><button class="btn btn-primary">Show</button>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('courses.edit', $item) }}"><button class="btn btn-primary">Add/Remove &#9829;</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <div class='text-center'>
                <a href="{{ route("courses.create") }}"><button class="btn btn-success bg-success w-50 m-2">Create</button></a>
            </div>
        </table>
    </div>
@endsection
