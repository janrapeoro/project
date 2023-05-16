@extends('layouts.aps')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
         
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

<table class="table table-bordered table-striped">
    <tr>
        <th style="background-color: #555; color: #fff;">Bills</th>
        <th style="background-color: #555; color: #fff;">Amount</th>
        <th style="background-color: #555; color: #fff;">Date</th>
        <th style="background-color: #555; color: #fff;">Details</th>
        <th style="background-color: #555; color: #fff;" width="280px">Action</th>
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
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>

            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $finance->links() }}

{{-- <style>
    table {
        background-color: #fff;
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        padding: 10px;
        text-align: left;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f9f9f9;
    }
    .table-bordered th, .table-bordered td {
        border: 1px solid #ddd;
    }
    .btn {
        background-color: #555;
        border: none;
        color: #fff;
        padding: 5px 15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
        margin: 4px 2px;
        cursor: pointer;
    }
    .btn:hover {
        background-color: #444;
    }
    .btn-success {
        background-color: #28a745;
    }
    .btn-info {
        background-color: #17a2b8;
    }
    .btn-primary {
        background-color: #007bff;
    }
    .btn-danger {
        background-color: #dc3545;
    }
</style> --}}

@endsection