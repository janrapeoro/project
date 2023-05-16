@extends('layouts.aps')

@section('content')
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="d-flex align-items-center justify-content-between mb-4">
          <h2>Add Bills</h2>
          <a class="btn btn-primary" href="{{ route('create.index') }}"> Back</a>
        </div>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('bills.store') }}">
      @csrf

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="bills"><strong>Type of Bills:</strong></label>
            <input type="text" name="bills" class="form-control" placeholder="Type of Bills">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="amount"><strong>Amount:</strong></label>
            <input type="text" name="amount" class="form-control" placeholder="Amount">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="date"><strong>Date:</strong></label>
            <div class="input-group date" id="datepicker">
              <input type="text" class="form-control" name="date">
              <span class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </span>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="detail"><strong>Detail:</strong></label>
            <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-group text-center" style="margin-top: 20px;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>

    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <script type="text/javascript">
    $(document).ready(function(){
      var date_input=$('input[name="date"]');
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy-mm-dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    });
  </script>
@endsection
