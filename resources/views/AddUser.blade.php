@extends('layout')

@section('title')
    Add user
@endsection

@section('content')
<form method="POST" action="{{ route('user.store') }}" class="w-50 mx-auto" autocomplete="off">
    @csrf
    <div class="form-group mt-3">
        <label for="firstName" class="mb-1">First Name</label>
        <input type="text" name="firstName" class="form-control shadow-none" id="firstName" placeholder="Enter your first name">
    </div>
    <div class="form-group mt-3">
        <label for="lastName" class="mb-1">Last Name</label>
        <input type="text" name="lastName" class="form-control shadow-none" id="lastName" placeholder="Enter your last name">
    </div>
    <div class="form-group mt-3">
        <label for="age" class="mb-1">Age</label>
        <input type="number" name="age" class="form-control shadow-none" id="age" placeholder="Enter your age">
    </div>
    <button type="submit" class="btn btn-primary btn-sm mt-3 btn-block">Submit</button>
</form>
@endsection
