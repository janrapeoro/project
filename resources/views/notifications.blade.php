@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Notifications</h1>
        <form method="POST" action="{{ route('notifications.store') }}">
            @csrf
            <div class="form-group">
                <label for="upcoming_bills">Receive Upcoming Bills Alerts</label>
                <select name="upcoming_bills" class="form-control">
                    <option value="0">No</option>
                    <option value="1"{{ old('upcoming_bills', $notifications->upcoming_bills ?? null) ? ' selected' : '' }}>Yes</option>
                </select>
            </div>
            <div class="form-group">
                <label for="unusual_spending_patterns">Receive Unusual Spending Patterns Alerts</label>
                <select name="unusual_spending_patterns" class="form-control">
                    <option value="0">No</option>
                    <option value="1"{{ old('unusual_spending_patterns', $notifications->unusual_spending_patterns ?? null) ? ' selected' : '' }}>Yes</option>
                </select>
            </div>
            <div class="form-group">
                <label for="days">Days Before Upcoming Bills Alert</label>
                <input type="number" name="days" class="form-control" value="{{ old('days', $notifications->days ?? null) }}">
            </div>
            <div class="form-group">
                <label for="threshold">Unusual Spending Patterns Alert Threshold</label>
                <input type="number" name="threshold" class="form-control" value="{{ old('threshold', $notifications->threshold ?? null) }}">
            </div>
            <button type="submit" class="btn btn-primary">Save Settings</button>
        </form>
    </div>
@endsection
