@extends('back/layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Contact Address</h1>
        {{-- Alert Contacts Added --}}
        @if (session()->has('success'))
            <div class="alert alert-success w-50 mx-auto m-3">
                <p class="text-success">{{ session()->get('success') }}</p>
            </div>
        @endif
        {{-- Alert Contacts Updated --}}
        @if (session()->has('update'))
            <div class="alert alert-warning w-50 mx-auto m-3">
                <p class="text-warning">{{ session()->get('update') }}</p>
            </div>
        @endif
        {{-- Alert Contacts Deleted --}}
        @if (session()->has('delete'))
            <div class="alert alert-danger w-50 mx-auto m-3">
                <p class="text-danger">{{ session()->get('delete') }}</p>
            </div>
        @endif
        <table class="table table-dark ms-5">
            <thead>
                <tr>
                    @foreach ($contact_titles as $item)
                        <th scope="col">{{ $item }}</th>
                    @endforeach
                    <th scope="col"><i class="text-center fa fa-search" aria-hidden="true"></i>
                    </th>

                </tr>
            </thead>
            <tbody>
                    {{-- {{ dd($contacts[0]->id) }} --}}
                    <tr>
                        <th scope="row">{{ $contacts[0]->id }}</th>
                        <td>{{ $contacts[0]->address }}</td>
                        <td>
                            <a href="{{ route('contacts.edit', $contacts[0]) }}"><button class="btn btn-primary">Edit</button>
                            </a>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div>
@endsection
