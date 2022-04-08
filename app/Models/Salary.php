<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    /**
     * Interact with the salary's date.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function date(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::make($value)->format('M Y'),
            set: fn ($value) => $value . now()->format('-d'),
        );
    }

    public function getNetSalary()
    {
        return 0;
    }

    public function getSalaryReceived()
    {
        return 0;
    }

    public function getTotalAllowance()
    {
        return 0;
    }
}
