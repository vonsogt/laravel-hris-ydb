<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id', 'date', 'incomes', 'cuts'];

    protected $casts = [
        'incomes'   => 'array',
        'cuts'      => 'array',
    ];

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
            get: fn ($value) => $value ? Carbon::make($value)->format('M Y') : '-',
            set: fn ($value) => $value,
        );
    }

    public function getMonthFromDate()
    {
        return Carbon::make($this->date)->format('m');
    }

    public function getYearFromDate()
    {
        return Carbon::make($this->date)->format('Y');
    }

    public function getNetSalary()
    {
        $value = $this->getSalaryReceived() - $this->getTotalAllowance();

        return $value;
    }

    public function getSalaryReceived()
    {
        $value = 0;
        if ($this->incomes != []) {
            foreach ($this->incomes as $item) {
                $value += $item['value'];
            }
        }

        return $value;
    }

    public function getTotalAllowance()
    {
        $value = 0;
        if ($this->cuts != []) {
            foreach ($this->cuts as $item) {
                $value += $item['value'];
            }
        }

        return $value;
    }
}
