@extends('layout')

@section('title')
    update
@endsection


@section('content')
    <form method="POST" action="{{ route('student.update', $student->id) }}" class="w-50 mx-auto" autocomplete="off">
        @csrf
        @method('PUT')
        <div class="form-group mt-3">
            <label for="stuName" class="mb-1">First Name</label>
            <input type="text" name="stuName" class="form-control shadow-none" id="stuName"
                value="{{ $student->stuName }}" placeholder="Enter your first name">
        </div>
        <div class="form-group mt-3">
            <label for="stuSchool" class="mb-1">School Name</label>
            <input type="text" name="stuSchool" class="form-control shadow-none" id="stuSchool"
                value="{{ $student->stuSchool }}" placeholder="Enter your last name">
        </div>
        <div class="form-group mt-3">
            <label for="age" class="mb-1">Age</label>
            <input type="number" name="age" class="form-control shadow-none" id="age"
                value="{{ $student->stuAge }}" placeholder="Enter your age">
        </div>
        <button type="submit" class="btn btn-primary btn-sm mt-3 btn-block">Update</button>
    </form>
@endsection
