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

class Candidate extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;
    use HasFactory;

    public const TOWN_SELECT = [
        'abc' => 'abc',
    ];

    public const STATE_SELECT = [
        'abc' => 'abc',
    ];

    public const COUNTRY_SELECT = [
        'abc' => 'abc',
    ];

    public const DEVISION_SELECT = [
        'abc' => 'abc',
    ];

    public const DISTRICT_SELECT = [
        'abc' => 'abc',
    ];

    public const SENORITY_SELECT = [
        'abc' => 'abc',
    ];

    public const VISA_TYPE_SELECT = [
        'abc' => 'abc',
    ];

    public const SPECIALTY_SELECT = [
        'abc' => 'abc',
    ];

    public const MAIN_CITY_SELECT = [
        'abc' => 'abc',
    ];

    public const GRADUATION_SELECT = [
        'abc' => 'abc',
    ];

    public const PROFESSION_SELECT = [
        'abc' => 'abc',
    ];

    public const LICENSE_TYPE_SELECT = [
        'abc' => 'abc',
    ];

    public const PROFESSION_LOGIN_SELECT = [
        'abc' => 'abc',
    ];

    public const PRACTICE_COUNTRY_SELECT = [
        'abc' => 'abc',
    ];

    public const WORK_RIGHTS_STATUS_SELECT = [
        'abc' => 'abc',
    ];

    public const COUNTRY_OF_RESIDENCE_SELECT = [
        'abc' => 'abc',
    ];

    public const EXPERIENCE_FROM_HOME_SELECT = [
        'abc' => 'abc',
    ];

    public const COUNTRY_OF_CITIZENSHIP_SELECT = [
        'abc' => 'abc',
    ];

    public const PRACTICE_LICENSING_BODY_SELECT = [
        'abc' => 'abc',
    ];

    public const EXPERIENCE_FROM_RESIDING_SELECT = [
        'abc' => 'abc',
    ];

    public const CURRENT_EMPLOYMENT_STATUS_SELECT = [
        'abc' => 'abc',
    ];

    public const COUNTRY_OF_PRIMARY_DEGREE_SELECT = [
        'abc' => 'abc',
    ];

    public const PROFESSIONAL_QUALIFICATION_SELECT = [
        'abc' => 'abc',
    ];

    public const RECOGNISED_COMPARABLE_EXPERIENCE_SELECT = [
        'abc' => 'abc',
    ];

    public const GENDER_SELECT = [
        'male'   => 'Male',
        'female' => 'Female',
    ];

    public const TITLE_SELECT = [
        'abc' => 'abc',
        'cfd' => 'cfd',
        'ghi' => 'ghi',
    ];

    public $table = 'candidates';

    protected $hidden = [
        'password',
    ];

    protected $dates = [
        'dob',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $appends = [
        'cv_document',
        'registration_form_document',
        'privacy_concerns',
    ];

    protected $fillable = [
        'title',
        'user_id',
        'first_name',
        'last_name',
        'gender',
        'dob',
        'mobile',
        'home',
        'work',
        'email',
        'address_1',
        'address_2',
        'distance_to_main',
        'town',
        'state',
        'district',
        'country',
        'post_code',
        'main_city',
        'profession',
        'devision',
        'senority',
        'specialty',
        'professional_qualification',
        'graduation',
        'country_of_primary_degree',
        'medical_school',
        'practice_country',
        'practice_licensing_body',
        'license_type',
        'experience_from_home',
        'experience_from_residing',
        'recognised_comparable_experience',
        'current_employment_status',
        'country_of_citizenship',
        'country_of_residence',
        'visa_type',
        'work_rights_status',
        'profession_login',
        'username',
        'password',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getDobAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDobAttribute($value)
    {
        $this->attributes['dob'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getCvDocumentAttribute()
    {
        return $this->getMedia('cv_document')->last();
    }

    public function getRegistrationFormDocumentAttribute()
    {
        return $this->getMedia('registration_form_document')->last();
    }

    public function getPrivacyConcernsAttribute()
    {
        return $this->getMedia('privacy_concerns')->last();
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
