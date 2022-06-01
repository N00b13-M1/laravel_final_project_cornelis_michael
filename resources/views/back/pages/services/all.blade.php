@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Services</h1>
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
        <table class="table table-dark ms-5">
            <thead>
                <tr>
                    @foreach ($service_titles as $item)
                        <th scope="col">{{ $item }}</th>
                    @endforeach
                    <th scope="col"><i class="text-center fa fa-search" aria-hidden="true"></i>
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <th scope="row">{{ $service->id }}</th>
                        <td><i class="{{ $service->logo }}"></i></td>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->description }}</td>
                        <td>
                            <a href="{{ route('services.show', $service) }}"><button class="btn btn-primary">Show</button>
                            </a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
            <div class='text-center'>
                <a href="{{ route("services.create") }}"><button class="btn btn-success bg-success w-50 m-2">Create</button></a>
            </div>
        </table>
    </div>
@endsection
