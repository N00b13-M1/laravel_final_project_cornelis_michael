@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Edit Profile</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('profiles.update', $user->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="profile_pic" class="form-label">Profile Pic</label>
                <img src="{{ asset('/assets/images/' . $user->profile_pic) }}" alt="" style="width: 200px">
                <br>
                <input type="file" class="form-control" id="profile_pic" name="profile_pic"
                value="{{ old('profile_pic') ? old('profile_pic') : $user->profile_pic }}">
            </div>
            {{-- {{ dd($user->id) }} --}}
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name"  value="{{ old('name') ? old('name') : $user->name }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') ? old('email') : $user->email }}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ old('password') ? old('password') : $user->password }}">
            </div>
            <button type="submit" class="btn btn-success m-2">Save</button>
        </form>
    </div>
@endsection


