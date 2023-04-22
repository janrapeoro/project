<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    // Define the fillable fields for the model
    protected $fillable = ['name', 'amount', 'category', 'due_date'];
}
