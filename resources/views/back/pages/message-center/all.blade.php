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
        <h2 class="text-center fs-1 py-5">Newsletter Subscribers</h2>
        <table class="table table-dark ms-5">
            <thead>
                <tr>
                    @foreach ($subscriber_titles as $item)
                    <th scope="col">{{ $item }}</th>
                    @endforeach
                    <th scope="col"><i class="text-center fa fa-search" aria-hidden="true"></i>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subscribers as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->email }}</td>
                        <td>
                            <a href="{{ route('message_center.edit_subscriber', $item->id) }}"><button class="btn btn-primary">Edit</button>
                            </a>
                        {{-- </td>
                        <td> --}}
                            <form action="{{ route('message_center.destroy_subscriber', $item->id) }}" method="post" class="d-inline">
                                @csrf
                                <button class="btn btn-danger bg-danger m-2" type="submit">Delete</button>
                            </form>
                            {{-- </div> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <div class='text-center'>
                <a href="{{ route("message-center.create_subscriber") }}"><button class="btn btn-success bg-success w-50 m-2">Create</button></a>
            </div>
        </table>
        <br>
        <br>
        <h2 class="text-center fs-1 py-5">Information Request Submissions</h2>
        <table class="table table-dark ms-5">
            <thead>
                <tr>
                    @foreach ($interest_titles as $item)
                    <th scope="col">{{ $item }}</th>
                    @endforeach
                    <th scope="col"><i class="text-center fa fa-search" aria-hidden="true"></i>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interests as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->user->name }}</td>\
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->campus }}</td>
                        <td>{{ $item->program }}</td>
                        <td>{{ $item->date }}</td>
                        <td>
                            <a href="{{ route('message_center.edit_interest', $item->id) }}"><button class="btn btn-primary">Edit</button>
                            </a>
                        {{-- </td>
                        <td> --}}
                            <form action="{{ route('message_center.destroy_interest', $item->id) }}" method="post" class="d-inline">
                                @csrf
                                <button class="btn btn-danger bg-danger m-2" type="submit">Delete</button>
                            </form>
                            {{-- </div> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <div class='text-center'>
                <a href="{{ route("message-center.create_interest") }}"><button class="btn btn-success bg-success w-50 m-2">Create</button></a>
            </div>
        </table>
    </div>
@endsection

