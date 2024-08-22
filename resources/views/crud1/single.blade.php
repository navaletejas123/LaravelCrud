@extends('crud1.layout')

@section('title')
    Home
@endsection

@section('content')
  <h3>{{ $student->stuName }}</h3>
  <h3>{{ $student->stuSchool }}</h3>
  <h3>{{ $student->stuAge }}</h3>
@endsection