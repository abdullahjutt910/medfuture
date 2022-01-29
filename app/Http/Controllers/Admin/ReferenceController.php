<?php

namespace App\Http\Controllers\Admin;

use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reference;

class ReferenceController extends Controller
{
    public function insertReference(Request $request, $id)
    {
        $data = $_POST;
        if(count($data['title']) > 0)
        {
            Reference::where('candidate_id',$id)->delete();
            for($i = 0; $i < count($data['title']);$i++)
            {
                if(
                    !empty($data['title'][$i])
                    && !empty($data['first_name'][$i])
                    && !empty($data['last_name'][$i])
                    && !empty($data['telephone'][$i])
                    && !empty($data['email'][$i])
                    && !empty($data['job_title'][$i])
                )
                {
                    $reference = new Reference();
                    $reference->candidate_id = $id;
                    $reference->title =$data['title'][$i];
                    $reference->first_name = $data['first_name'][$i];
                    $reference->last_name = $data['last_name'][$i];
                    $reference->telephone = $data['telephone'][$i];
                    $reference->email = $data['email'][$i];
                    $reference->job_title = $data['job_title'][$i];
                    $reference->save();
                }
            }
        }
        return back();
    }

    public function updateReference(Request $request, $id)
    {
        $reference = Reference::where('candidate_id', $id)->first();
        $candidate = Candidate::find($id);
        $reference->candidate_id = $candidate->id;
        $reference->title = $request->title;
        $reference->first_name = $request->first_name;
        $reference->last_name = $request->last_name;
        $reference->telephone = $request->telephone;
        $reference->email = $request->email;
        $reference->job_title = $request->job_title;
        $reference->save();
        return back();
    }

    public function deleteReference($id)
    {
        Reference::find($id)->delete();
        return back();
    }
}
