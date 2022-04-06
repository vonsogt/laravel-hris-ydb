<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decree extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id', 'year', 'number', 'files'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
