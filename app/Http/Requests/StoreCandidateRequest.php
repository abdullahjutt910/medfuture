<?php

namespace App\Http\Requests;

use App\Models\Candidate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCandidateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('candidate_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'required',
            ],
            'first_name' => [
                'string',
                'required',
            ],
            'last_name' => [
                'string',
                'required',
            ],
            'gender' => [
                'required',
            ],
            'dob' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'mobile' => [
                'string',
                'required',
            ],
            'home' => [
                'string',
                'required',
            ],
            'work' => [
                'string',
                'required',
            ],
            'email' => [
                'required',
            ],
            'address_1' => [
                'string',
                'nullable',
            ],
            'address_2' => [
                'string',
                'nullable',
            ],
            'distance_to_main' => [
                'string',
                'nullable',
            ],
            'post_code' => [
                'string',
                'nullable',
            ],
            'medical_school' => [
                'string',
                'nullable',
            ],
            'username' => [
                'string',
                'nullable',
            ],
        ];
    }
}
