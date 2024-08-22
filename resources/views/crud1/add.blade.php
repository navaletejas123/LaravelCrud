@extends('crud1.layout')

@section('title')
    add records
@endsection

@section('content')
    <form method="POST" action="{{ route('student.store') }}" class="w-50 mx-auto" autocomplete="off">
        @csrf
        @method('post')
        <div class="form-group mt-3">
            <label for="studentName" class="mb-1">Student Name</label>
            <input type="text" name="studentName" class="form-control shadow-none" id="studentName"
                placeholder="Enter your first name">
        </div>
        <div class="form-group mt-3">
            <label for="studentSchool" class="mb-1">Student School</label>
            <input type="text" name="studentSchool" class="form-control shadow-none" id="studentSchool"
                placeholder="Enter your last name">
        </div>
        <div class="form-group mt-3">
            <label for="age" class="mb-1">Age</label>
            <input type="number" name="age" class="form-control shadow-none" id="age"
                placeholder="Enter your age">
        </div>
        <button type="submit" class="btn btn-primary btn-sm mt-3 btn-block">Submit</button>
    </form>
@endsection
