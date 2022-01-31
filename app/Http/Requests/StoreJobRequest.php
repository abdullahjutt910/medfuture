<?php

namespace App\Http\Requests;

use App\Models\Job;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreJobRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('job_create');
    }

    public function rules()
    {
        return [
            'trade_name' => [
                'string',
                'nullable',
            ],
            'abn' => [
                'string',
                'nullable',
            ],
            'address_1' => [
                'string',
                'nullable',
            ],
            'address_2' => [
                'string',
                'nullable',
            ],
            'post_code' => [
                'string',
                'nullable',
            ],
            'distance_to_main_city' => [
                'string',
                'nullable',
            ],
            'website' => [
                'string',
                'nullable',
            ],
            'google_address_link' => [
                'string',
                'nullable',
            ],
            'corporate_brand' => [
                'string',
                'nullable',
            ],
            'branch' => [
                'string',
                'nullable',
            ],
            'gross_salary_information' => [
                'string',
                'nullable',
            ],
            'billing_share' => [
                'string',
                'nullable',
            ],
            'billing_share_information' => [
                'string',
                'nullable',
            ],
            'hourly_rate' => [
                'string',
                'nullable',
            ],
            'hourly_rate_information' => [
                'string',
                'nullable',
            ],
            'job_title' => [
                'string',
                'nullable',
            ],
            'post_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'commencement_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'finished_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'recruitment_consultant' => [
                'string',
                'nullable',
            ],
            'contact_number' => [
                'string',
                'nullable',
            ],
            'recruitment_consultant_2' => [
                'string',
                'nullable',
            ],
        ];
    }
}
