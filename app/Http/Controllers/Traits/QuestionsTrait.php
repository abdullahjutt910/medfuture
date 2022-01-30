<?php

namespace App\Http\Controllers\Traits;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

trait QuestionsTrait
{
    public function syncQuestions($request, $id)
    {

        if (isset($request->question) && isset($request->answer)) {
            $questions = collect($request->question);
            $answers = collect($request->answer);
            $eIds = collect($request->question_id);

            foreach ($questions as $key => $question) {

                if ($question != "" && $answers[$key] != "") {
                    if (isset($request->question_id[$key])) {
                        DB::table('questions')->whereNotIn('id' ,$eIds)->delete();
                        $Equestion = Question::find($eIds[$key]);
                        if ($Equestion) {
                            $Equestion->question = $question;
                            $Equestion->answer = $answers[$key];
                            $Equestion->job_id = $id;
                            $Equestion->save();
                        }
                    }
                    else{
                        $question = new Question(
                            [
                                'question' => $question,
                                'answer' => $answers[$key],
                                'job_id' => $id
                            ]
                        );
                        $question->save();
                    }


                }
            }
        }
    }
}
