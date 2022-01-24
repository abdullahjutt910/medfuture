<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progbar extends Model
{
    use HasFactory;
    protected $fillable = [
        'contacted',
        'initial_screening',
        'short_listed',
        'shelved',
        'job_matching',
        'submissions',
        'declined',
        'interviews',
        'due_check',
        'offered',
        'rejected',
        'placed',
        'archived',
        'testimony',
    ];
   
}
