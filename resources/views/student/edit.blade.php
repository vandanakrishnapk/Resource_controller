@extends('layout.app')
@section('content')
<form action="{{ route('student.update',$data->id) }}" method="POST">
    @csrf 
    @method('PATCH')
    <input type="text" name="name" value="{{ $data->name }}">
    <input type="email" name="email" value="{{ $data->email }}">
    <input type="text" name="mobile" value="{{ $data->mobile }}">
    <input type="submit" value="update" class="btn btn-warning">
</form>
@endsection