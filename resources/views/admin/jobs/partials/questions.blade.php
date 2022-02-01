<div id="questions-container" class="row">

    @if (isset($questions))
    @foreach ($questions as $question)
    <div id="e-q{{ $question->id }}" class="row">
        <input name="question_id[]" type="hidden" value="{{ $question->id }}">
        <div class="form-group col-md-6 {{ $errors->has('question') ? 'has-error' : '' }}">
            <label for="question">{{ trans('cruds.question.fields.question') }}</label>
            <input class="form-control" type="text" name="question[]" id="question"
                value="{{ old('question', isset($question) ? $question->question : '') }}">
            @if ($errors->has('question'))
            <span class="help-block" role="alert">{{ $errors->first('question') }}</span>
            @endif
            <span class="help-block">{{ trans('cruds.question.fields.question_helper') }}</span>
        </div>
        <div class="form-group col-md-6 {{ $errors->has('answer') ? 'has-error' : '' }}">
            <label for="answer">{{ trans('cruds.question.fields.answer') }}</label>
            <input class="form-control" type="text" name="answer[]" id="answer"
                value="{{ old('answer', isset($question) ? $question->answer : '') }}">
            @if ($errors->has('answer'))
            <span class="help-block" role="alert">{{ $errors->first('answer') }}</span>
            @endif
            <span class="help-block">{{ trans('cruds.question.fields.answer_helper') }}</span>
        </div>
    </div>
    <div class="form-group col-md-12">
        <a class="btn btn-danger" onclick="removeQuestion({{ $question->id }})"> X </a>
    </div>
    @endforeach
    @endif
    <div id="question-fields">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('question') ? 'has-error' : '' }}">
                <label for="question">{{ trans('cruds.question.fields.question') }}</label>
                <input class="form-control" type="text" name="question[]" id="question"
                    value="{{ old('question', '') }}">
                @if ($errors->has('question'))
                <span class="help-block" role="alert">{{ $errors->first('question') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.question.fields.question_helper') }}</span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('answer') ? 'has-error' : '' }}">
                <label for="answer">{{ trans('cruds.question.fields.answer') }}</label>
                <input class="form-control" type="text" name="answer[]" id="answer" value="{{ old('answer', '') }}">
                @if ($errors->has('answer'))
                <span class="help-block" role="alert">{{ $errors->first('answer') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.question.fields.answer_helper') }}</span>
            </div>
        </div>
    </div>
    <div class="add-qa">
    <a onclick="addQuestion()" class="btn btn-success"> <i class="fa fa-plus"></i> Add </a>
    </div>
</div>
@push('after-scripts')
<script>
    function addQuestion() {
        var question = $('#question-fields').clone();
        // $('#questions-container').append(question);
        $('#questions-container').prepend(question);
        
    }

    function removeQuestion(id) {
        $('#e-q' + id).remove();
    }
</script>
@endpush