@extends('layout')

@section('title')
    All Usaer
@endsection

@section('content')
    <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm mb-4">add +</a>
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">age</th>
                <th scope="col">View</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="text-center">
                    <td>{{ $user->FirstName }}</td>
                    <td>{{ $user->LastName }}</td>
                    <td>{{ $user->age }}</td>
                    <td><a href="{{ route('user.show', $user->id) }}"
                            class="btn btn-info btn-sm fw-semibold mx-auto block">View</a></td>
                    <td><a href="{{route('user.edit', $user->id)}}"
                            class="btn btn-warning btn-sm fw-semibold mx-auto block">Edit</a></td>
                    <td>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm fw-semibold mx-auto block">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
