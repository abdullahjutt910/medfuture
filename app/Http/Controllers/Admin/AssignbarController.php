<?php

namespace App\Http\Controllers\Admin;

use App\Models\Assignbar;
use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssignbarController extends Controller
{
    public function insertAssign(Request $request, $id)
    {
        $assignbar = new Assignbar;
        // dd($assignbar);
        $assignbar->candidate_id = $id;
        $assignbar->candidateManager = $request->candidateManager;
        $assignbar->recruitementConsultant = $request->recruitementConsultant;
        $assignbar->dataAdministrator = $request->dataAdministrator;
        $assignbar->save();
        return redirect()->back();
        // return redirect()->route('admin.candidates.show');

    }

    public function updateAssign(Request $request,$id)
    {   
        $assignbar = Assignbar::where('candidate_id',$id)->first();
        $candidate = Candidate::find($id);
        $assignbar->candidate_id = $candidate->id;
        $assignbar->candidateManager = $request->candidateManager;
        $assignbar->recruitementConsultant = $request->recruitementConsultant;
        $assignbar->dataAdministrator = $request->dataAdministrator;
        $assignbar->save();
        return back();
    }
    
    public function deleteAssign($id){
        Assignbar::find($id)->delete();
        return back();
    }
}
