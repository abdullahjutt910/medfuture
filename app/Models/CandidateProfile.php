<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'candidate_id',
        'register',
        'verified',
        'cv_receive_date',
        'privacy_term',
        'registerd_date',
        'candidate_term',
        'source_type',
        'registration_type',
        'CDF',
        'registered_by',
        'availability',
        'working_status',
        'access_status',
        'registeration_body',
        'source_name',
        'email_verified',
        'profile_grade',
        'registration_via',
        'lead_method',
        'visa_status',
        'created_at',
        'updated_at',
    ];
    public function candidate_profile()
    {
        return $this->belongsTo(Candidate::class);
    }

}
