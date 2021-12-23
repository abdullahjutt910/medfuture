<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name= $request->first_name;
        $user->email = $request->email;
        $user->role= "candidate";
        $user->password = Hash::make($request->password);
        $user->save();


        $candidate = new Candidate();
        $candidate->user_id = $user->id;
        $candidate->title = $request->title;
        $candidate->first_name = $request->first_name;
        $candidate->last_name = $request->last_name;
        $candidate->gender = $request->gender;
        $candidate->dob = $request->dob;
        $candidate->mobile = $request->mobile;
        $candidate->home = $request->home;
        $candidate->work = $request->work;
        $candidate->email = $request->email;
        $candidate->address_1 = $request->address_1;
        $candidate->address_2 = $request->address_2;
        $candidate->distance_to_main = $request->distance_to_main;
        $candidate->town = $request->town;
        $candidate->state = $request->state;
        $candidate->district = $request->district;
        $candidate->country = $request->country;
        $candidate->post_code = $request->post_code;
        $candidate->main_city = $request->main_city;
        $candidate->profession = $request->profession;
        $candidate->devision = $request->devision;
        $candidate->senority = $request->senority;
        $candidate->specialty = $request->specialty;
        $candidate->professional_qualification = $request->professional_qualification;
        $candidate->graduation = $request->graduation;
        $candidate->country_of_primary_degree = $request->country_of_primary_degree;
        $candidate->medical_school = $request->medical_school;
        $candidate->practice_country = $request->practice_country;
        $candidate->practice_licensing_body = $request->practice_licensing_body;
        $candidate->license_type = $request->license_type;
        $candidate->experience_from_home = $request->experience_from_home;
        $candidate->experience_from_residing = $request->experience_from_residing;
        $candidate->recognised_comparable_experience = $request->recognised_comparable_experience;
        $candidate->current_employment_status = $request->current_employment_status;
        $candidate->country_of_citizenship = $request->country_of_citizenship;
        $candidate->country_of_residence = $request->country_of_residence;
        $candidate->visa_type = $request->visa_type;
        $candidate->work_rights_status = $request->work_rights_status;
        $candidate->profession_login = $request->profession_login;
        $candidate->username = $request->username;
        $candidate->password = $request->password;
        $candidate->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
