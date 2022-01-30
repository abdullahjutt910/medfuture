<?php
namespace App\Exports;
use App\Models\Candidate;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class CandidateExport implements FromQuery
{
    use Exportable;
    public  $query ;
    public  function __construct($candidates)
    {
        $this->query = $candidates;
    }

    public function query()
    {
        return $this->query;
    }

    public function headings(): array
    {
        return  [
         '#',
        'Title',
        'user ID',
        'First name',
        'Last Name',
        'Gender',
        'Date Of Birth',
        'Mobile',
        'Home',
        'Work',
        'Email',
        'Address 1',
        'Address 2',
        'Distance TO Main',
        'Town',
        'State',
        'District',
        'Country',
        'Post Code',
        'Main City',
        'Profession',
        'Devision',
        'Senority',
        'Specialty',
        'Professional Qualification',
        'Graduation',
        'Country of Primary Degree',
        'Medical School',
        'Practice Country',
        'Practice Licensing Body',
        'License Type',
        'Experience From Home',
        'Experience From Residing',
        'Recognised Comparable Experience',
        'Current Employment Status',
        'Country Of Citizenship',
        'Country Of Residence',
        'Visa Type',
        'Work Rights Status',
        'Profession Login',
        'Username',
        'Password',
        'Created at',
        'Updated at',
        'Deleted_at',
    ];

    }
}
