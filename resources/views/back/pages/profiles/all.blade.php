@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Profiles</h1>
        {{-- Alert Profiles Added --}}
        @if (session()->has('success'))
            <div class="alert alert-success w-50 mx-auto m-3">
                <p class="text-success">{{ session()->get('success') }}</p>
            </div>
        @endif
        {{-- Alert Profiles Updated --}}
        @if (session()->has('update'))
            <div class="alert alert-warning w-50 mx-auto m-3">
                <p class="text-warning">{{ session()->get('update') }}</p>
            </div>
        @endif
        {{-- Alert Profiles Deleted --}}
        @if (session()->has('delete'))
            <div class="alert alert-danger w-50 mx-auto m-3">
                <p class="text-danger">{{ session()->get('delete') }}</p>
            </div>
        @endif
        <table class="table table-dark ms-5">
            <thead>
                <tr>
                    {{-- {{ dd($user_profiles) }} --}}

                    {{-- @foreach ($user_profiles as $item) --}}
                    <th scope="col">{{ $user_profiles[0]}}</th>
                    <th scope="col">{{ $user_profiles[1]}}</th>
                    <th scope="col">{{ $user_profiles[2]}}</th>
                    <th scope="col">{{ $user_profiles[4]}}</th>
                    <th scope="col">{{ $user_profiles[6]}}</th>
                    <th scope="col"><i class="text-center fa fa-search" aria-hidden="true"></i>
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (Auth::user()->role_id == 1)
                    @foreach ($users as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <th scope="row">{{ $item->name }}</th>
                        <th scope="row">{{ $item->email}}</th>
                        <th scope="row">{{ $item->password }}</th>
                        <th scope="row"><img src="{{asset($item->profile_pic) }}" alt="" class="w-50"></th>
                        <td>
                            <a href="{{ route('profiles.show', $item->id) }}"><button class="btn btn-primary">Show</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <th scope="row">{{ $user->name }}</th>
                        <th scope="row">{{ $user->email}}</th>
                        <th scope="row">{{ $user->password }}</th>
                        <th scope="row"><img src="{{asset($user->profile_pic) }}" alt="" class="w-50"></th>
                        <td>
                            <a href="{{ route('profiles.show', $user->id) }}"><button class="btn btn-primary">Show</button>
                            </a>
                        </td>
                    </tr>
                @endif

            </tbody>
            <div class='text-center'>
                <a href="{{ route("profiles.create") }}"><button class="btn btn-success bg-success w-50 m-2">Create</button></a>
            </div>
        </table>
    </div>
@endsection

