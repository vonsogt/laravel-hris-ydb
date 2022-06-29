<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobAssessment extends Model
{
    use HasFactory;

    protected $casts = [
        'factors'   => 'array',
    ];

    protected $fillable = ['employee_id', 'year', 'factors'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function getTotalValue()
    {
        $result = 0;
        if (!empty($this->factors)) {
            foreach ($this->factors as $key => $value) {
                $result += $value;
            }
        }

        if ($result >= 55 && $result <= 60) {
            return $result . ' (A)';
        } elseif ($result >= 42 && $result <= 54) {
            return $result . ' (B)';
        } elseif ($result >= 24 && $result <= 41) {
            return $result . ' (C)';
        } elseif ($result >= 12 && $result <= 33) {
            return $result . ' (D)';
        } elseif ($result >= 0 && $result <= 11) {
            return $result . ' (E)';
        } else {
            return $result . ' (-)';
        }
    }
}
