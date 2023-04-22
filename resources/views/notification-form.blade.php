<div class="container">
    <h1>Notification Preferences</h1>

    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('notifications.store') }}">

        @csrf

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $preferences['email'] ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="frequency">Notification Frequency</label>
            <select class="form-control" id="frequency" name="frequency">
                <option value="daily" {{ old('frequency', $preferences['frequency'] ?? '') == 'daily' ? 'selected' : '' }}>Daily</option>
                <option value="weekly" {{ old('frequency', $preferences['frequency'] ?? '') == 'weekly' ? 'selected' : '' }}>Weekly</option>
                <option value="monthly" {{ old('frequency', $preferences['frequency'] ?? '') == 'monthly' ? 'selected' : '' }}>Monthly</option>
            </select>
        </div>

        <div class="form-group">
            <label for="alerts">Alerts</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="expense_alerts" name="alerts[]" value="expense" {{ in_array('expense', old('alerts', $preferences['alerts'] ?? [])) ? 'checked' : '' }}>
                <label class="form-check-label" for="expense_alerts">Expense Alerts</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="budget_alerts" name="alerts[]" value="budget" {{ in_array('budget', old('alerts', $preferences['alerts'] ?? [])) ? 'checked' : '' }}>
                <label class="form-check-label" for="budget_alerts">Budget Alerts</label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
