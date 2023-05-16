<!DOCTYPE html>
<html>
<head>
	<title>Edit Bills</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- include jQuery and jQuery UI datepicker -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		$(function() {
			$("#date").datepicker({ dateFormat: 'yy-mm-dd' }); // set the format of the datepicker
		});
	</script>
</head>
<body>
	<div class="container">
		<div class="row mt-5">
			<div class="col-lg-12 margin-tb">
				<div class="d-flex justify-content-between align-items-center">
					<h2>Edit Bills</h2>
					<a class="btn btn-primary" href="{{ route('create.index') }}">Back</a>
				</div>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-lg-12">
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
				<form action="{{ route('finance.update',$finance->id) }}" method="POST">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label for="bills">Bills:</label>
						<input type="text" name="bills" id="bills" value="{{ $finance->bills }}" class="form-control" placeholder="Bills">
					</div>
					<div class="form-group">
						<label for="amount">Amount:</label>
						<input type="text" name="amount" id="amount" value="{{ $finance->amount }}" class="form-control" placeholder="Amount">
					</div>
					<div class="form-group">
						<label for="date">Date:</label>
						<input type="text" name="date" id="date" value="{{ $finance->date }}" class="form-control" placeholder="Date">
					</div>
					<div class="form-group">
						<label for="detail">Detail:</label>
						<textarea name="detail" id="detail" class="form-control" rows="5" placeholder="Detail">{{ $finance->detail }}</textarea>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
