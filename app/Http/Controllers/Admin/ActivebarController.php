<?php

namespace App\Http\Controllers\Admin;

use App\Models\Activebar;
use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ActivebarController extends Controller
{   
    public function insertActivity(Request $request, $id)
    {
        $activebar = new Activebar;
        $activebar->candidate_id = $id;
        $activebar->activity_type = $request->activity_type;
        $activebar->activity_type_2 = $request->activity_type_2;
        $activebar->activity_note = $request->activity_note;
        $activebar->save();

        return redirect()->back();
        // return redirect()->route('admin.candidates.index');

    }

    public function updateActivity(Request $request,$id)
    {   
        $activebar = Activebar::where('candidate_id',$id)->first();
        $candidate = Candidate::find($id);
        $activebar->candidate_id = $candidate->id;
        $activebar->activity_type = $request->activity_type;
        $activebar->activity_type_2 = $request->activity_type_2;
        $activebar->activity_note = $request->activity_note;
        $activebar->save();
        return back();
    }
    
    public function deleteActivity($id){
        dd($id);
        Activebar::find($id)->delete();
        return back();
    }
}
