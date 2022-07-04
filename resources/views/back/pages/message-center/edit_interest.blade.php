@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">
            Edit Request Information</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('message_center.update_interest', $newinterest->id ) }}" method="post">
            @csrf
            {{-- {{  dd($newinterest->id) }} --}}
            <div class="select mb-3">
                <select name="name" id="name">
                    <option value="-1">User Name</option>
                    @foreach ($users as $item)
                    <option value="{{ $item->id }}"
                        @if($item->id === $user->id)
                            selected
                        @endif
                        >{{ $item->name }}</option>
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
                <label for="name" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
            </div>
            <div class="select mb-3">
                <select name="campus" id="campus">
                    <option value="-1">Campus of Interests</option>
                    <option value="Nearby"
                    @if($newinterest->campus === "Nearby") {
                        selected
                    }
                    @endif
                    >Nearby</option>
                    <option value="High Classes"
                    @if($newinterest->campus === "High Classes") {
                        selected
                    }
                    @endif
                    >High Classes</option>
                    <option value="Short Time"
                    @if($newinterest->campus === "Short Time") {
                        selected
                    }
                    @endif>Short Time</option>
                    <option value="Long Time"
                    @if($newinterest->campus === "Long Time") {
                        selected
                    }
                    @endif>Long Time</option>
                </select>
            </div>
            <div class="select mb-3">
                <select name="program" id="program">
                    <option value="-1">Program of Interests</option>
                    <option value="Working Process"
                    @if($newinterest->program === "Working Process") {
                        selected
                    }
                    @endif>Working Process</option>
                    <option value="Archivements"
                    @if($newinterest->program === "Archivements") {
                        selected
                    }
                    @endif>Archivements</option>
                    <option value="Social"
                    @if($newinterest->program === "Social") {
                        selected
                    }
                    @endif>Social</option>
                    <option value="Profits"
                    @if($newinterest->program === "Profits") {
                        selected
                    }
                    @endif>Profits</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ old('date') ? old('date') : $newinterest->date }}">
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Time</label>
                <input type="time" class="form-control" id="time" name="time" value="{{ old('time') ? old('time') : $newinterest->time }}">
            </div>
            <button type="submit" class="btn btn-success m-2">Save</button>
        </form>
    </div>
@endsection
