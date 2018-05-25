@extends('layouts.page')

@section('content')
<div class="py-5 text-center">
  <h2>Create your account</h2>
  </div>
  <div class="row">
    <div class="col card">
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

          <div class="col-md-2 mb-3">
              <label for="state">Hour</label>
              <select class="custom-select d-block w-100" id="state" required>
                <option value="">Choose...</option>
                <option>California</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
          </div>

          <div class="col-md-2 mb-3">
            <label for="zip">Minute</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>

          <div class="col-md-3 mb-3">
              <label for="zip">Duration</label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
        </div>

        <div class="form-group">
            <label>Options</label>
            <div class="row">
                <div class="col-md-8 mb-3">
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                </div>
                <div class="col-md-4 mb-3">
                  <button type="button" class="btn btn-outline-primary">Add new option</button>
                </div>
            </div>
        </div>

        <hr class="mb-4">
        <div class="form-group">
          <h4>Upload attachments</h4>
          <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>

      </form>
    </div>
  </div>
@endsection