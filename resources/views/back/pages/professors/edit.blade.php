@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Edit Professor</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('professors.update', $professor) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

            {{-- {{ $professor->fixed }} --}}
            <div class="mb-3">
                <label for="professor_photo" class="form-label">Professor Photo</label>
                <img src="{{ asset('/assets/images/' . $professor->professor_photo) }}" style="width: 200px" alt=""
                    class="m-2 d-block">
                <input type="file" class="form-control" id="professor_photo" name="professor_photo"
                    value="{{ old('professor_photo') ? old('professor_photo') : $professor->professor_photo }}">
            </div>
            <div class="mb-3">
                <label for="professor_name" class="form-label">Professor Name</label>
                <input type="text" class="form-control" id="professor_name" name="professor_name"
                    value="{{ old('professor_name') ? old('professor_name') : $professor->professor_name }}">
            </div>
            <div class="mb-3">
                <label for="professor_title" class="form-label">Professor Title</label>
                <input type="text" class="form-control" id="professor_title" name="professor_title"
                    value="{{ old('professor_title') ? old('professor_title') : $professor->professor_title }}">
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">URL</label>
                <input type="text" class="form-control" id="url" name="url"
                    value="{{ old('url') ? old('url') : $professor->url }}"">
                </div>
                <div class=" mb-3">
                <label for="text1" class="form-label">Text1</label>
                <input type="text" class="form-control" id="text1" name="text1"
                    value="{{ old('text1') ? old('text1') : $professor->text1 }}">
            </div>
            <div class="mb-3">
                <label for="textstrong" class="form-label">Text Strong</label>
                <input type="text" class="form-control" id="textstrong" name="textstrong"
                    value="{{ old('textstrong') ? old('textstrong') : $professor->textstrong }}">
            </div>
            <div class="mb-3">
                <label for="text2" class="form-label">Text2</label>
                <input type="text" class="form-control" id="text2" name="text2"
                    value="{{ old('text2') ? old('text2') : $professor->text2 }}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone"
                    value="{{ old('phone') ? old('phone') : $professor->phone }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email"
                    value="{{ old('email') ? old('email') : $professor->email }}">
            </div>
            <div class="mb-3">
                <label for="skype_id" class="form-label">Skype ID</label>
                <input type="text" class="form-control" id="skype_id" name="skype_id"
                    value="{{ old('skype_id') ? old('skype_id') : $professor->skype_id }}">
            </div>
            <div class="mb-3">
                <label for="facebook_id" class="form-label">Facebook ID</label>
                <input type="text" class="form-control" id="facebook_id" name="facebook_id"
                    value="{{ old('facebook_id') ? old('facebook_id') : $professor->facebook_id }}">
            </div>
            <div class="mb-3">
                <label for="twitter_id" class="form-label">Twitter ID</label>
                <input type="text" class="form-control" id="twitter_id" name="twitter_id"
                    value="{{ old('twitter_id') ? old('twitter_id') : $professor->twitter_id }}">
            </div>
            <div class="mb-3">
                <label for="dribble_id" class="form-label">Dribble ID</label>
                <input type="text" class="form-control" id="dribble_id" name="dribble_id"
                    value="{{ old('dribble_id') ? old('dribble_id') : $professor->dribble_id }}">

            </div>
            <div class="mb-3">
                <label for="linkedin_id" class="form-label">LinkedIn ID</label>
                <input type="text" class="form-control" id="linkedin_id" name="linkedin_id"
                    value="{{ old('linkedin_id') ? old('linkedin_id') : $professor->linkedin_id }}">
            </div>
            <div class="mb-3">
                <label class="form-check-label" for="fixed">
                    Fixed
                </label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="fixed" id="fixed" value="1" {{ $professor->fixed || old('fixed',0) == 1 ? 'checked' : ''}}>
                </div>


                    {{-- {{  dd($professor->fixed) }} --}}
                    {{-- @if ($professor->fixed == true)
                    value="1"
                    @else
                    value="0"
                    @endif> --}}
                    {{-- <select name="fixed" id="fixed">
                        <option value="1" @if (old('fixed') == true) selected @endif>Yes</option>
                        <option value="0" @if (old('fixed') == false) selected @endif>No</option>
                    </select> --}}
                {{-- // </div>
                // @if ($errors->has('fixed'))
                //     <div class="invalid-feedback">
                //         {{ $errors->first('fixed') }}
                //     </div>
                // @endif --}}
                {{-- <select name="fixed" id="fixed">
                    <option value="1" @if (old('fixed') == true) selected @endif>Yes</option>
                    <option value="0" @if (old('fixed') == false) selected @endif>No</option>
                </select> --}}
            </div>
            <button type="submit" class="btn btn-success m-2">Save</button>
        </form>
    </div>
@endsection

