@extends('layouts.dashboard')

@section('content')
<div class="container">
<div class=" text-center">
  <h2>Index</h2>
</div>

@if(Session::has('info'))
<div class="row">
  <div class="col-md-12">
    <p class="alert alert-info">{{ Session::get('info') }}</p>
  </div>
</div>
@endif

@foreach( $votes as $vote)

<div class="row bd-card">
  <div class="col-12"><h1 class="post-title">{{ $vote->title}}</h1></div>
  <div class="col-md-10">
    <p>{{ $vote->description}}</p>
  </div>
  <div class="col-md-2">
    <a class="btn btn-success" href="{{ route('admin.edit',['id' => $vote->id])}}">Edit</a>
  </div>
</div>

@endforeach

</div>
@endsection