<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    use HasFactory;
    public function patients()
    {
        return $this->belongsToMany(User::class, 'user_medications')->withPivot('dosage', 'schedule')->withTimestamps();
    }
}
