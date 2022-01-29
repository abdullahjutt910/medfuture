<?php

namespace App\Http\Controllers\Admin;

use App\Models\Candidate;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    public function insertTestimonial(Request $request, $id)
    {
        $testimonial = Testimonial::where('candidate_id',$id)->first();
        if(is_null($testimonial))
        {
            $testimonial = new Testimonial;
        }
        $testimonial->candidate_id = $id;
        $testimonial->testimonial_summary = $request->testimonial_summary;
        $testimonial->testimonial_name = $request->testimonial_name;
        $testimonial->testimonial_date = $request->testimonial_date;
        // $testimonial->testimonial_cv = $request->testimonial_cv;
        $testimonial->save();
        return redirect()->back();
    }

    public function updateTestimonial(Request $request,$id)
    {   
        $testimonial = Testimonial::where('candidate_id',$id)->first();
        $candidate = Candidate::find($id);
        $testimonial->candidate_id = $candidate->id;
        $testimonial->testimonial_summary = $request->testimonial_summary;
        $testimonial->testimonial_name = $request->testimonial_name;
        $testimonial->testimonial_date = $request->testimonial_date;
        // $testimonial->testimonial_cv = $request->testimonial_cv;
        $testimonial->save();
        return back();
    }
    
    public function destroy($id){
        
        Testimonial::where('candidate_id',$id)->find($id)->delete();
        return back();
    }
}
