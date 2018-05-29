@extends('layouts.page')

@section('content')
<div class="py-5 text-center">
   <h2>Vote details</h2>
</div>

<div class="col bd-card">
  <h3 class="display-4">{{ $post['title'] }}</h3>
  <p class="lead">{{ $post['content']}}</p>

  <small class="text-muted mt-5 mb-5">CHOOSE ONE</small>

  <div class="row mb-5">
    <div class="col-4"><button class="btn btn-primary btn-block">All</button></div>
    <div class="col-4"><button class="btn btn-primary btn-block">1</button></div>
    <div class="col-4"><button class="btn btn-primary btn-block">2</button></div>

  </div>


  <div class="row mb-3 mt-5">
    <div class="col-3">
      <button class="btn btn-success btn-lg btn-block">Vote</button>
    </div>
    <div class="col-3">
      <button class="btn btn-outline-secondary btn-lg btn-block">Cancel</button>
    </div>
  </div>
</div>
@endsection