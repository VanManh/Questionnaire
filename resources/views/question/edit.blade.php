@extends('layouts.app')

@section('content')
    @if (Auth::guest())
        <a href="form-elements.html">
            <i class="menu-icon fa fa-caret-right"></i>
            You aren't loogged in!
        </a>
    @else
        <form action="/edit-question/{{$question->id}}" method="post" class="form-horizontal" role="form">
            <!-- #section:elements.form -->
            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Name's Question </label>

                <div class="col-sm-9">
                    <input type="text" name="question" id="form-field-1" value="{{$question->content}}"
                           class="col-xs-10 col-sm-5"/>
                    <input type="hidden" name="idQuestion" value="{{$question->id}}"/>;
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Answer 1 </label>

                <div class="col-sm-9">
                    <input type="text" name="answer1" id="form-field-1" value="{{$answers[0]->content}}"
                           class="col-xs-10 col-sm-5"/>
                    <input type="hidden" name="idAnswer1" value="{{$answers[0]->id}}"/>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Answer 2 </label>

                <div class="col-sm-9">
                    <input type="text" name="answer2" id="form-field-1" value="{{$answers[1]->content}}"
                           class="col-xs-10 col-sm-5"/>
                    <input type="hidden" name="idAnswer2" value="{{$answers[1]->id}}"/>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Answer 3</label>

                <div class="col-sm-9">
                    <input type="text" name="answer3" id="form-field-1" value="{{$answers[2]->content}}"
                           class="col-xs-10 col-sm-5"/>
                    <input type="hidden" name="idAnswer3" value="{{$answers[2]->id}}"/>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Answer 4</label>

                <div class="col-sm-9">
                    <input type="text" name="answer4" id="form-field-1" value="{{$answers[3]->content}}"
                           class="col-xs-10 col-sm-5"/>
                    <input type="hidden" name="idAnswer4" value="{{$answers[3]->id}}"/>
                </div>
            </div>

            <div class="space-4"></div>

            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button class="btn btn-info" name="save" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        Save
                    </button>
                    &nbsp; &nbsp; &nbsp;
                    <button type="submit" name="cancel" class="btn">
                        <i class="ace-icon fa fa-undo bigger-110"></i>
                        Back
                    </button>
                </div>
            </div>

        </form>
    @endif
@endsection