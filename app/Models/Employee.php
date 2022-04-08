<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'institution_number',
        'id_card',
        'education_personnel_number',
        'birth_place',
        'birth_date',
        'gender',
        'education',
        'blood_type',
        'join_date',
        'end_date',
        'institution_id',
        'position_id',
        'address',
        'status',
        'phone_number',
        'mother_name',
        'partner_name',
        'children_name',
        'photo',
        'password',
    ];

    protected $casts = [
        'children'  => 'array'
    ];

    /**
     * Interact with the employee's children name.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function childrenName(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value),
            set: fn ($value) => json_encode($value),
        );
    }

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
