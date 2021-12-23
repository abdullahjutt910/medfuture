<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyViewCandidateRequest;
use App\Http\Requests\StoreViewCandidateRequest;
use App\Http\Requests\UpdateViewCandidateRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ViewCandidatesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('view_candidate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.viewCandidates.index');
    }

    public function create()
    {
        abort_if(Gate::denies('view_candidate_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.viewCandidates.create');
    }

    public function store(StoreViewCandidateRequest $request)
    {
        $viewCandidate = ViewCandidate::create($request->all());

        return redirect()->route('admin.view-candidates.index');
    }

    public function edit(ViewCandidate $viewCandidate)
    {
        abort_if(Gate::denies('view_candidate_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.viewCandidates.edit', compact('viewCandidate'));
    }

    public function update(UpdateViewCandidateRequest $request, ViewCandidate $viewCandidate)
    {
        $viewCandidate->update($request->all());

        return redirect()->route('admin.view-candidates.index');
    }

    public function show(ViewCandidate $viewCandidate)
    {
        abort_if(Gate::denies('view_candidate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.viewCandidates.show', compact('viewCandidate'));
    }

    public function destroy(ViewCandidate $viewCandidate)
    {
        abort_if(Gate::denies('view_candidate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $viewCandidate->delete();

        return back();
    }

    public function massDestroy(MassDestroyViewCandidateRequest $request)
    {
        ViewCandidate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
