<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class QuestionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('question_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $questions = Question::all();

        return view('admin.questions.index', compact('questions'));
    }
}
