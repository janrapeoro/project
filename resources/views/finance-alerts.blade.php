@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Finance Alerts</h1>

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('notifications.store') }}">
            @csrf

            <div class="form-group">
                <label for="type">Type of Notification</label>
                <select name="type" id="type" class="form-control" required>
                    <option value="" disabled selected>Select a type of notification</option>
                    <option value="upcoming_bills">Upcoming Bills</option>
                    <option value="unusual_spending_patterns">Unusual Spending Patterns</option>
                </select>
            </div>

            <div class="form-group">
                <label for="days">Days Until Event</label>
                <input type="number" name="days" id="days" class="form-control" min="1" max="30">
                <small class="form-text text-muted">This field is required for Upcoming Bills notifications only. Enter the number of days until the bill is due.</small>
            </div>

            <div class="form-group">
                <label for="threshold">Threshold Amount</label>
                <input type="number" step="0.01" name="threshold" id="threshold" class="form-control" min="0">
                <small class="form-text text-muted">This field is required for Unusual Spending Patterns notifications only. Enter the minimum amount that will trigger a notification.</small>
            </div>

            <button type="submit" class="btn btn-primary">Create Notification</button>
        </form>
    </div>
@endsection
