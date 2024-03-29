<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Employee extends Authenticatable implements JWTSubject
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'institution_number',
        'email',
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
        'deactive_reason',
        'deactive_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'children'  => 'array'
    ];

    // Global scope using scopeActive
    protected static function booted()
    {
        static::addGlobalScope('active', function ($builder) {
            $builder->active();
        });
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

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

    public function leaves()
    {
        return $this->hasMany(Leave::class);
    }

    public function getRemainingLeaveAttribute()
    {
        $count = 0;
        // Count leave's days that has been approved
        $approvedDays = $this->leaves()
            ->whereYear('start_date', now()->year)
            ->where('is_approved', true);

        foreach ($approvedDays->get() as $day) {
            $count += $day->days;
        }

        return 12 - $count;
    }

    public function color()
    {
        $color = $this->position->theme_color;

        return $color;
    }

    // Scope employee where null deactive_at
    public function scopeActive($query)
    {
        return $query->whereNull('deactive_at');
    }

    // Scope employee where not null deactive_at
    public function scopeDeactive($query)
    {
        return $query->whereNotNull('deactive_at');
    }
}
