@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Create your Payments</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('bills.create') }}"> Create New Payment</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
       
        <th>Bills</th>
        <th>Amount</th>
        <th>Date</th>
        <th>Details</th>
        <th width="280px">Action</th>
    </tr>

    @foreach ($finance as $item)
    <tr>
        <td>{{ $item->bills }}</td>
        <td>{{ $item->amount }}</td>
        <td>{{ $item->date }}</td>
        <td>{{ $item->detail }}</td>
    <td>
        <form action="{{ route('finance.destroy', $item->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('finance.show', $item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('finance.edit', $item->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </td>
</tr>
@endforeach


</table>
{{ $finance->links() }}

@endsection