@extends('layout')

@section('title')
single user
@endsection

@section('content')
    <p class="fs-2">{{ $users->FirstName }}</p>
    <p class="fs-2">{{ $users->LastName }}</p>
    <p class="fs-2">{{ $users->age }}</p>
@endsection