<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;
    protected $fillable = [
        'contacted',
        'Initial_Screening',
        'Short_Listed',
        'Shelved',
        'Job_Matching',
        'Submissions',
        'Declined',
        'Interviews',
        'Due_Check',
        'Offered',
        'Rejected',
        'Placed',
        'Archived',
        'Testimony',
    ];
}