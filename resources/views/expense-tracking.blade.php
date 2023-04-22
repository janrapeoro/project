@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Expense Tracking</h1>
        <p>Help users track their daily, monthly, and annual expenses and categorize them to understand where their money is going. Also, remind them if there is an upcoming due date.</p>

        <form>
            <div class="form-group">
                <label for="expense">Expense:</label>
                <input type="text" class="form-control" id="expense" name="expense">
            </div>

            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="text" class="form-control" id="amount" name="amount">
            </div>

            <div class="form-group">
                <label for="category">Category:</label>
                <select class="form-control" id="category" name="category">
                    <option value="food">Food</option>
                    <option value="transportation">Transportation</option>
                    <option value="entertainment">Entertainment</option>
                    <option value="shopping">Shopping</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="due-date">Due Date:</label>
                <input type="date" class="form-control" id="due-date" name="due-date">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
