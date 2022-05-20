@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center text-4xl py-5">Detailed Course</h1>
        <form action="{{ route('courses.index') }}" method="get">
            <div class="mb-3">
                <label for="professor_photo" class="form-label">Professor Photo</label>
                <input type="file" class="form-control" id="professor_photo" name="professor_photo" value="{{ $professor->professor_photo }}" readonly>
            </div>
            <div class="mb-3">
                <label for="professor_name" class="form-label">Professor Name</label>
                <input type="text" class="form-control" id="professor_name" name="professor_name" value="{{ $professor->professor_name }}" readonly>
            </div>
            <div class="mb-3">
                <label for="professor_title" class="form-label">Professor Title</label>
                <input type="text" class="form-control" id="professor_title" name="professor_title" value="{{ $professor->professor_title}}" readonly>
            </div>
            <div class="mb-3">
                <label for="text1" class="form-label">Text1</label>
                <input type="text" class="form-control" id="text1" name="text1" value="{{ $professor->text1}}" readonly>
            </div>
            <div class="mb-3">
                <label for="textstrong" class="form-label">Text Strong</label>
                <input type="text" class="form-control" id="textstrong" name="textstrong" value="{{ $professor->textstrong}}" readonly>
            </div>
            <div class="mb-3">
                <label for="text2" class="form-label">Text2</label>
                <input type="text" class="form-control" id="text2" name="text2" value="{{ $professor->text2}}" readonly>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $professor->phone}}" readonly>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $professor->email}}" readonly>
            </div>
            <div class="mb-3">
                <label for="skype_id" class="form-label">Skype ID</label>
                <input type="text" class="form-control" id="skype_id" name="skype_id" value="{{ $professor->skype_id}}" readonly>
            </div>
            <div class="mb-3">
                <label for="facebook_id" class="form-label">Facebook ID</label>
                <input type="text" class="form-control" id="facebook_id" name="facebook_id" value="{{ $professor->facebook_id}}" readonly>
            </div>
            <div class="mb-3">
                <label for="twitter_id" class="form-label">Twitter ID</label>
                <input type="text" class="form-control" id="twitter_id" name="twitter_id" value="{{ $professor->twitter_id}}" readonly>
            </div>
            <div class="mb-3">
                <label for="drible_id" class="form-label">Drible ID</label>
                <input type="text" class="form-control" id="drible_id" name="drible_id" value="{{ $professor->drible_id}}" readonly>
            </div>
            <div class="mb-3">
                <label for="linkedin_id" class="form-label">LinkedIn ID</label>
                <input type="text" class="form-control" id="linkedin_id" name="linkedin_id" value="{{ $professor->linkedin_id}}" readonly>
            </div>
            <button type="submit" class="btn btn-primary m-2"><a href="{{ route('professors.index') }}"></a>Return</button>

        </form>
        <td>
            <button type="submit" class="btn btn-warning bg-warning m-2"><a href="{{ route('professors.edit', $professor) }}">Edit</a></button>
        </td>
        <td>
            <form action="{{ route("professors.destroy", $professor) }}" method="post">
                @csrf
                @method('DELETE')
            <button class="btn btn-danger bg-danger m-2" type="submit">Delete</button>
            </form>
        </td>
    </div>
@endsection
