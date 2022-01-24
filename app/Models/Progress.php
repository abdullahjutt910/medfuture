<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
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
        'due_Check',
        'offered',
        'rejected',
        'placed',
        'archived',
        'testimony',
    ];
}