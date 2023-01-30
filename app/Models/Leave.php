<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id', 'submission_date', 'start_date', 'end_date', 'reason', 'files', 'description', 'is_approved'];

    protected $casts = [
        'is_approved' => 'boolean',
        'files' => 'array'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function getDaysAttribute()
    {
        // Count difference between start date and end date without sunday
        $start = Carbon::make($this->start_date);
        $end = Carbon::make($this->end_date);
        $count = $start->diffInDaysFiltered(function (Carbon $date) {
            return !$date->isSunday();
        }, $end) + 1;

        return $count;
    }

    public function getFilesAttribute($value)
    {
        return json_decode($value);
    }

    public function setFilesAttribute($value)
    {
        $this->attributes['files'] = json_encode($value);
    }
}
