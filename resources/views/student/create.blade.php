@extends('layout.app')
@section('content')
<form action="{{ route('student.store') }}" method="POST">
    @csrf 
    <input type="text" name="name" placeholder="Enter name" class="form-control">
    <input type="email" name="email" placeholder="Enter email" class="form-control">
    <input type="text" name="mobile" placeholder="Enter mobile" class="form-control">
    <input type="submit" class="btn btn-primary" value="submit">
</form>
@endsection