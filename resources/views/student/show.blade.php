@extends('layout.app')
@section('content')
<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{ $data->name }}</li>
    <li class="list-group-item">{{ $data->email }}</li>
    <li class="list-group-item">{{ $data->mobile }}</li>
  </ul>
</div>
@endsection