@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Professors</h1>
        {{-- Alert Professors Added --}}
        @if (session()->has('success'))
            <div class="alert alert-success w-50 mx-auto m-3">
                <p class="text-success">{{ session()->get('success') }}</p>
            </div>
        @endif
        {{-- Alert Professors Updated --}}
        @if (session()->has('update'))
            <div class="alert alert-warning w-50 mx-auto m-3">
                <p class="text-warning">{{ session()->get('update') }}</p>
            </div>
        @endif
        {{-- Alert Professors Deleted --}}
        @if (session()->has('delete'))
            <div class="alert alert-danger w-50 mx-auto m-3">
                <p class="text-danger">{{ session()->get('delete') }}</p>
            </div>
        @endif
        <table class="table table-dark ms-5">
            <thead>
                <tr>
                    @foreach ($professor_titles as $item)
                        <th scope="col">{{ $item }}</th>
                    @endforeach
                    <th scope="col"><i class="text-center fa fa-search" aria-hidden="true"></i>
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($professors as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td><img src="{{ asset('assets/images/' . $item->professor_photo ) }}"></td>
                        <td>{{ $item->professor_name }}</td>
                        <td>{{ $item->professor_title }}</td>
                        <td>{!! (Str::words($item->text1, '5')) !!}</td>
                        <td>{!! (Str::words($item->strong, '5')) !!}</td>
                        <td>{!! (Str::words($item->text1, '5')) !!}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->skype_id }}</td>
                        <td>{{ $item->facebook_id }}</td>
                        <td>{{ $item->twitter_id }}</td>
                        <td>{{ $item->dribble_id }}</td>
                        <td>{{ $item->linkedin_id }}</td>
                        {{-- <td>{{ $item->fixed }}</td> --}}
                        @if ($item->fixed == 1)
                            <td>Yes</td>
                        @else
                            <td>No</td>

                        @endif
                        <td>
                            <a href="{{ route('professors.show', $item) }}"><button class="btn btn-primary">Show</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <div class='text-center'>
                <a href="{{ route("professors.create") }}"><button class="btn btn-success bg-success w-50 m-2">Create</button></a>
            </div>
        </table>
    </div>
@endsection
