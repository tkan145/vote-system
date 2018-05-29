@extends('layouts.page')

@section('content')
<div class="py-5 text-center">
  <h2>Create your account</h2>
  </div>
  <div class="row">
    <div class="col bd-card">
      <form class="needs-validation" action=""novalidate>
        <div class="form-group">
          <div class="row">
              <div class="col-md-6 mb-3">
                <label>First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              </div>
              <div class="col-md-6 mb-3">
                <label>Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              </div>
            </div>
        </div>

        <div class="row mb-5">
          <div class="col-md-12 mb-3">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="" value="" required>
          </div>
          <div class="col-md-12 mb-3">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" placeholder="" value="" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" placeholder="" value="" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="confirm-password">Confirm Password</label>
            <input type="text" class="form-control" id="password" placeholder="" value="" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <button class="btn btn-primary btn-block" type="submit">Sign up</button>
          </div>
          <div class="col-md-6 text-right">
            <p class="small">Already have an account <a href="#">Sign in</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection