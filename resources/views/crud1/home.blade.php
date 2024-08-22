@extends('crud1.layout')

@section('title')
    Home
@endsection

@section('content')
    <a href="{{ route('student.create') }}" class="btn btn-primary btn-sm mb-4">add +</a>
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th scope="col">First Name</th>
                <th scope="col">School Name</th>
                <th scope="col">age</th>
                <th scope="col">View</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $e)
                <tr class="text-center">
                    <td>{{ $e->stuName }}</td>
                    <td>{{ $e->stuSchool }}</td>
                    <td>{{ $e->stuAge }}</td>
                    <td><a href="{{ route('student.show', $e->id) }}"
                            class="btn btn-info btn-sm fw-semibold mx-auto block">View</a></td>
                    <td><a href="{{ route('student.edit', $e->id) }}"
                            class="btn btn-warning btn-sm fw-semibold mx-auto block">Edit</a></td>
                    <td>
                        <form method="POST" action="{{route('student.destroy',$e->id)}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm fw-semibold mx-auto block">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
