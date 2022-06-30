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
                    <option value="-1">User Name</option>
                    @foreach ($users as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <script>
                $('#name').change(function() {
                    var id = $(this).val();

                    // //Empty the dropdown

                    var url = '{{ route("getDetails", ":id") }}';
                    url = url.replace(':id', id);

                    $.ajax({
                        url: url,
                        type: 'get',
                        dataType: 'json',
                        success: function(response) {
                            if (response != null) {
                                $('#email').val(response.email);
                            }
                        }
                    });
                });
            </script>
            <div class="mb-3">
                <label for="name" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="select mb-3">
                <select name="campus" id="campus">
                    <option value="-1">Campus of Interests</option>
                    <option value="0">Nearby</option>
                    <option value="1">High Classes</option>
                    <option value="2">Short Time</option>
                    <option value="3">Long Time</option>
                </select>
            </div>
            <div class="select mb-3">
                <select name="program" id="program">
                    <option value="-1">Program of Interests</option>
                    <option value="0">Wroking Process</option>
                    <option value="1">Archivements</option>
                    <option value="2">Social</option>
                    <option value="3">Profits</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success m-2">Save</button>
        </form>

    </div>
@endsection

