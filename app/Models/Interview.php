<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;
    protected $fillable = [
        'candidate_id',
        'start_date',
        'end_date',
        'distance',
        'job_location',
        'practise_licence_number',
        'licence_board',
        'gross_salary',
        'hourly_rate_expectation',
        'billing_share',
        'visa_sponsorship',
        'accommodation',
        'travel_allowance',
        'meal_allowance',
        'uniform_allowance',
        'moratorium_restriction',
        'location_restriction',
        'training_program',
        'medical_board_condition',
        'medical_board_undertaking',
        'skill',
        'interview_notes',
        'employment_type',
        'program_type',
        'Job_Summary',
        'created_at',
        'updated_at',
    ];
    public function interview()
    {
        return $this->belongsTo(Candidate::class);
    }
}
