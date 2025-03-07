<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class Employee extends Model
{
    use Notifiable;

    use HasFactory;
    const NOT_CONSULTED = 0;
    const ACCEPTED = 1;
    const REFUSED = 2;

    // ...

    public function isNotConsulted()
    {
        return $this->accepted === self::NOT_CONSULTED;
    }

    public function isAccepted()
    {
        return $this->accepted === self::ACCEPTED;
    }

    public function isRefused()
    {
        return $this->accepted === self::REFUSED;
    }
    public function getDatesBetween()
    {
        $startDate = Carbon::parse($this->dateS);
        $endDate = Carbon::parse($this->dateE);

        $dates = [];
        while ($startDate->lte($endDate)) {
            $dates[] = $startDate->copy();
            $startDate->addDay();
        }

        return $dates;
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'stud_id');
    }
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_email', 'email');
    }

    public function absences()
    {
        return $this->hasMany(Absence::class, 'employee_id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'employee_id');
    }

}
