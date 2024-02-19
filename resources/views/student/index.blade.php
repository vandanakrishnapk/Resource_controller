@extends('layout.app')
@section('content')

<a href="{{ route('student.create') }}" class="btn btn-primary">Add student</a>
<table class="table table-primary table-striped">
<tr>
    <th>name</th>
    <th>email</th>
    <th>mobile</th>
    <th colspan="3">Action</th>
</tr>
@foreach($st as $sts)
<tr>
    <td>{{ $sts->name }}</td>
    <td> {{ $sts->email }}</td>
    <td>{{ $sts->mobile }}</td>
    <td><a href="{{ route('student.show',$sts->id) }}" class="btn btn-success">Show</a></td>

    <td><a href="{{ route('student.edit',$sts->id) }}" class="btn btn-secondary" >Edit</a></td>
    <td>
        <form action="{{ route('student.destroy',$sts->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="delete">
        </form>
    </td>
</tr>
@endforeach
</table>
@endsection