<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appreciation extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id', 'name', 'date', 'files'];

    /**
     * Interact with the appreciation's date.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function date(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::make($value)->format('Y'),
            set: fn ($value) => $value . now()->format('-m-d'),
        );
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
