<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Employee extends Model
{
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
}
