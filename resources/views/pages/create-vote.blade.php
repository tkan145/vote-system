@extends('layouts.dashboard')

@section('content')
<div class=" text-center">
  <h2>Create new Vote</h2>
</div>

  <div class="row">
    <div class="col bd-card">
      <form class="needs-validation" action="{{ route('admin.create')}}" method="post" novalidate>
        <div class="form-group">
          <label>Title</label>
          <div class="row">
              <div class="col-md-8 mb-3">
                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              </div>
              <div class="col-md-4 mb-3">
                <button type="button" class="btn btn-outline-primary">Add Description</button>
              </div>
            </div>
        </div>

        <div class="row mb-5">
          <div class="col-md-5 mb-3">
            <label for="country">Day</label>
            <select class="custom-select d-block w-100" id="country" required>
              <option value="">Choose...</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
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

        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary">Submit</button>

      </form>
    </div>
  </div>
@endsection