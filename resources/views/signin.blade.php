@extends('layouts.page')

@section('content')
<div class="py-5 text-center">
   <h2>Auth</h2>
</div>
<div class="form-signin card">
  <form>
      <h1 class="h3 mb-3">Login</h1>
      <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      </div>
      <div class="form-group">
        <label for="inputPassword" >Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" value="remember-me">
        <label class="form-check-label" for="exampleCheck1">Remeber me</label>
      </div>
      <div class="row">
        <div class="col-md-6">
          <button class="btn btn-primary btn-block" type="submit">Sign in</button>
        </div>
        <div class="col-md-6 text-right">
          <a class="small" href="#">Forgot Password?</a>
        </div>
      </div>


    </form>
    </hr>
    <div class="card-cta">
      <a class="" href="">Register Here </a>
    </div>
</div>
@endsection