@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Create Request Information</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('message_center.store_interest') }}" method="post">
            @csrf
            <div class="select mb-3">
                <select name="name" id="name">
                    <option value="-1">Submitter Name</option>
                    @foreach ($users as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                {{-- {{  dd($users[0]->name) }} --}}
            </div>
            {{-- {{ dd($users) }} --}}
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script>
                $('#name').change(function() {
                    console.log("hello");
                    var id = $(this).val();
                    console.log(id);


                    $.ajax({
                        url: '/back/interest/create/details/'+id,
                        type: 'get',
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                            if (response != null) {
                                $('#email').val(response.email);
                            }
                        }
                    });
                });
            </script>
            <div class="mb-3">
                <label for="name" class="form-label">Submitter Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="select mb-3">
                <select name="campus" id="campus">
                    <option value="-1">Campus of Interests</option>
                    <option value="Nearby">Nearby</option>
                    <option value="High Classes">High Classes</option>
                    <option value="Short Time">Short Time</option>
                    <option value="Long Time">Long Time</option>
                </select>
            </div>
            <div class="select mb-3">
                <select name="program" id="program">
                    <option value="-1">Program of Interests</option>
                    <option value="Working Process">Working Process</option>
                    <option value="Archivements">Archivements</option>
                    <option value="Social">Social</option>
                    <option value="Profits">Profits</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Time</label>
                <input type="time" class="form-control" id="time" name="time">
            </div>
            <div class="select mb-3">
                {{-- {{  dd($users) }} --}}
                <select name="professor_email" id="professor_email">
                    <option value="-1">Professor Email</option>
                    @foreach ($users as $item)
                    <option value="{{ $item->email }}">{{ $item->email }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success m-2">Save</button>
        </form>
    </div>
@endsection

