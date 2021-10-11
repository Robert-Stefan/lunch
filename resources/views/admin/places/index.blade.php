@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('deleted'))
            <div class="alert alert-success">
                <strong>{{ session('deleted') }}</strong>
                was deleted!
            </div>
        @endif

        <h1 class="mb-3">Places List</h1>
        <a class="btn btn-primary" href="{{ route('admin.place.create') }}">Create Lunch Meeting</a>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th>Restaurant</th>
                    <th>Date</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($places as $place)
                    <tr>
                        <td>{{ $place->title }}</td>
                        <td>@if($place->day) {{ $place->day->name }} @endif</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('admin.place.show', $place->id) }}">SHOW</a>
                        </td>
                        <td>
                            <form class="delete-place-form" action="{{ route('admin.place.destroy', $place->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <input class="btn btn-danger" type="submit" value="DELETE">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection