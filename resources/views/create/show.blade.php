@extends('layouts.aps')

@section('content')

<div class="container">
  <div class="row mt-5">
    <div class="col-lg-12 mb-4">
      <h2 class="text-center">Your Bill</h2>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-6 mb-3">
      <div class="card p-3">
        <h5 class="card-title mb-3"><strong>Bills:</strong></h5>
        <p class="card-text">{{ $finance->bills }}</p>
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <div class="card p-3">
        <h5 class="card-title mb-3"><strong>Amount:</strong></h5>
        <p class="card-text">{{ $finance->amount }}</p>
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <div class="card p-3">
        <h5 class="card-title mb-3"><strong>Date:</strong></h5>
        <p class="card-text">{{ $finance->date }}</p>
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <div class="card p-3">
        <h5 class="card-title mb-3"><strong>Details:</strong></h5>
        <p class="card-text">{{ $finance->detail }}</p>
      </div>
    </div>
  </div>
  
  <div class="row mt-4">
    <div class="col-md-12 text-center">
      <a class="btn btn-primary" href="{{ route('create.index') }}">Back</a>
    </div>
  </div>
</div>


@endsection