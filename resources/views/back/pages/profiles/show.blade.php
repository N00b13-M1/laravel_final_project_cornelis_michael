@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center text-4xl py-5">Detailed Profile</h1>
        <form action="{{ route('profiles.index') }}" method="get">
            <div class="mb-3">
                <label for="profile_pic" class="form-label">Profile Pic</label>
                {{-- {{ dd($user) }} --}}
                <img src="{{ asset('/assets/images/' .$user->profile_pic) }}"
                style="width: 200px" alt="" class="m-2 d-block">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" readonly>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email}}" readonly>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ $user->password}}" readonly>
            </div>
            <button type="submit" class="btn btn-primary m-2"><a href="{{ route('profiles.index') }}"></a>Return</button>
        </form>
        <td>
            {{-- {{ dd($user->id) }} --}}
            <button type="submit" class="btn btn-warning bg-warning m-2"><a href="{{ route('profiles.edit', $user->id) }}">Edit</a></button>
        </td>
        <td>
            <form action="{{ route("profiles.destroy", $user->id) }}" method="post">
                @csrf
                @method('DELETE')
            <button class="btn btn-danger bg-danger m-2" type="submit">Delete</button>
            </form>
        </td>
    </div>
@endsection
