<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Job extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;
    use HasFactory;

    public const STATE_SELECT = [
        '123' => '123',
    ];

    public const SUBURB_SELECT = [
        '123' => '123',
    ];

    public const SKILLS_SELECT = [
        '123' => '123',
    ];

    public const COUNTRY_SELECT = [
        '123' => '123',
    ];

    public const CETAGORY_SELECT = [
        '123' => '123',
    ];

    public const DISTRICT_SELECT = [
        '123' => '123',
    ];

    public const DIVISION_SELECT = [
        '123' => '123',
    ];

    public const MAIN_CITY_SELECT = [
        '123' => '123',
    ];

    public const SPECIALTY_SELECT = [
        '123' => '123',
    ];

    public const SENIORITY_SELECT = [
        '123' => '123',
    ];

    public const PROFESSION_SELECT = [
        '123' => '123',
    ];

    public const COMPANY_NAME_SELECT = [
        '123' => '123',
    ];

    public const OWNERSHIP_TYPE_SELECT = [
        '123' => '123',
    ];

    public const PLACEMENT_TYPE_SELECT = [
        '123' => '123',
    ];

    public const ENGAGMENT_TERM_SELECT = [
        '123' => '123',
    ];

    public const CLIENT_MANAGER_SELECT = [
        '123' => '123',
    ];

    public const EMPLOYMENT_TYPE_SELECT = [
        '123' => '123',
    ];

    public const PRIORITY_STATUS_SELECT = [
        '123' => '123',
    ];

    public const BUSSINESS_SERVICE_SELECT = [
        '123' => '123',
    ];

    public const DATA_ADMINISTRATOR_SELECT = [
        '123' => '123',
    ];

    public const DEVISION_SELECT = [
        'General_Practitioners' => 'General Practitioners',
        'Healthcare_Executives' => 'Healthcare Executives',
        'Hospital_Doctors'      => 'Hospital Doctors',
        'Locum_Doctors'         => 'Locum Doctors',
        'Nurses'                => 'Nurses',
        'Healthcare_Assistant'  => 'Healthcare Assistant',
        'AHP - HSS'             => 'AHP/ HSS',
        'Allergologist'         => 'Allergologist',
        'Arts_Therapist'        => 'Arts Therapist',
    ];

    public $table = 'jobs';

    protected $dates = [
        'post_date',
        'commencement_date',
        'finished_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'company_name',
        'trade_name',
        'abn',
        'devision',
        'cetagory',
        'bussiness_service',
        'address_1',
        'address_2',
        'suburb',
        'state',
        'post_code',
        'country',
        'district',
        'distance_to_main_city',
        'main_city',
        'website',
        'google_address_link',
        'corporate_brand',
        'ownership_type',
        'branch',
        'profession',
        'division',
        'specialty',
        'seniority',
        'skills',
        'placement_type',
        'engagment_term',
        'employment_type',
        'gross_salary',
        'gross_salary_information',
        'billing_share',
        'billing_share_information',
        'hourly_rate',
        'hourly_rate_information',
        'job_title',
        'post_date',
        'priority_status',
        'commencement_date',
        'finished_date',
        'recruitment_consultant',
        'contact_number',
        'email',
        'terms_and_condition',
        'contacts',
        'client_manager',
        'recruitment_consultant_2',
        'data_administrator',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getPostDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setPostDateAttribute($value)
    {
        $this->attributes['post_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getCommencementDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setCommencementDateAttribute($value)
    {
        $this->attributes['commencement_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getFinishedDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public  function  questions () {

       return  $this->hasMany(Question::class ,'job_id');
    }

    public function setFinishedDateAttribute($value)
    {
        $this->attributes['finished_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public  function  shortform($form){
        $shortForm = "";
        $words = explode(" ", $form);
        foreach ($words as $word){
            $shortForm .= $word[0];
        }
        return  $shortForm;
    }
}
