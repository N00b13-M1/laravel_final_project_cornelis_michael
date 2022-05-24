@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Edit Contact Address</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('contacts.update', $contact) }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="address" class="form-label">Address Location</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address') ? old('address') : $contact->address }}">
            </div>
            <button type="submit" class="btn btn-success m-2">Save</button>
        </form>
    </div>
@endsection
