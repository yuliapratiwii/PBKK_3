<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studyprogram extends Model
{
    use HasFactory;
    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
}
