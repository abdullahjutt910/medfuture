<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateProfile extends Model
{
    use HasFactory;
    public function candidate_profile()
    {
        return $this->belongsTo(Candidate::class);
    }

}
