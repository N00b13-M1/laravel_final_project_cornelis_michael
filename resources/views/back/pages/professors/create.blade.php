@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Create Professor</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route("professors.store") }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="professor_photo" class="form-label">Professor Photo</label>
                <input type="file" class="form-control" id="professor_photo" name="professor_photo" value="{{ old('professor_photo') }}">
            </div>
            <div class="mb-3">
                <label for="professor_name" class="form-label">Professor Name</label>
                <input type="text" class="form-control" id="professor_name" name="professor_name" value="{{ old('professor_name') }}">
            </div>
            <div class="mb-3">
                <label for="professor_title" class="form-label">Professor Title</label>
                <input type="text" class="form-control" id="professor_title" name="professor_title" value="{{ old('professor_title') }}">
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">URL</label>
                <input type="text" class="form-control" id="url" name="url" value="{{ old('url') }}">
            </div>
            <div class="mb-3">
                <label for="text1" class="form-label">Text1</label>
                <input type="text" class="form-control" id="text1" name="text1" value="{{ old('text1') }}">
            </div>
            <div class="mb-3">
                <label for="textstrong" class="form-label">Text Strong</label>
                <input type="text" class="form-control" id="textstrong" name="textstrong" value="{{ old('textstrong')}}">
            </div>
            <div class="mb-3">
                <label for="text2" class="form-label">Text2</label>
                <input type="text" class="form-control" id="text2" name="text2" value="{{ old('text2') }}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
            </div>
            <div class="mb-3">
                <label for="skype_id" class="form-label">Skype ID</label>
                <input type="text" class="form-control" id="skype_id" name="skype_id" value="{{ old('skype_id') }}">
            </div>
            <div class="mb-3">
                <label for="facebook_id" class="form-label">Facebook ID</label>
                <input type="text" class="form-control" id="facebook_id" name="facebook_id" value="{{ old('facebook_id') }}">
            </div>
            <div class="mb-3">
                <label for="twitter_id" class="form-label">Twitter ID</label>
                <input type="text" class="form-control" id="twitter_id" name="twitter_id" value="{{ old('twitter_id') }}">
            </div>
            <div class="mb-3">
                <label for="dribble_id" class="form-label">Dribble ID</label>
                <input type="text" class="form-control" id="dribble_id" name="dribble_id" value="{{ old('dribble_id') }}">
            </div>
            <div class="mb-3">
                <label for="linkedin_id" class="form-label">LinkedIn ID</label>
                <input type="text" class="form-control" id="linkedin_id" name="linkedin_id" value="{{ old('linkedin_id') }}">
            </div>
            <div class="mb-3">
                <label class="form-check-label" for="fixed">
                    Fixed
                </label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="fixed" id="fixed" value="{{ old('fixed') }}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary m-2">Submit</button>
        </form>
    </div>
@endsection




