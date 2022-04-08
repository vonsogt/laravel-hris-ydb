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
        return $result;
    }
}
