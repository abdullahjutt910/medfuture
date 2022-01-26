<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activebar extends Model
{
    use HasFactory;
    protected $fillable = [
        'activity_type',
        'activity_type_2',
        'activity_note',
    ];
    public function activebar()
    {
        return $this->belongsToMany(Candidate::class);
    }
}
