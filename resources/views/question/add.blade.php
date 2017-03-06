@extends('layouts.app')

@section('content')
    @if (Auth::guest())
        <a href="form-elements.html">
            <i class="menu-icon fa fa-caret-right"></i>
            You aren't loogged in!
        </a>
    @else
        <form action="/add-question/{{$idSurvey}}" method="post" class="form-horizontal" role="form">
            <!-- #section:elements.form -->
            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right"
                       for="form-field-1"> @include('warning.warning') </label> <br/><br/>

                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Name's Question </label>

                <div class="col-sm-9">
                    <input type="text" name="question" id="form-field-1" placeholder="Fill out Name's Question"
                           class="col-xs-10 col-sm-5"/>
                </div>
            </div>

            <input type="hidden" name="idsurvey" value="{{$idSurvey}}"/>;

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Answer 1 </label>

                <div class="col-sm-9">
                    <input type="text" name="answer1" id="form-field-1" placeholder="Answer 1"
                           class="col-xs-10 col-sm-5"/>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Answer 2 </label>

                <div class="col-sm-9">
                    <input type="text" name="answer2" id="form-field-1" placeholder="Answer 2"
                           class="col-xs-10 col-sm-5"/>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Answer 3</label>

                <div class="col-sm-9">
                    <input type="text" name="answer3" id="form-field-1" placeholder="Answer 3"
                           class="col-xs-10 col-sm-5"/>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Answer 4</label>

                <div class="col-sm-9">
                    <input type="text" name="answer4" id="form-field-1" placeholder="Answer 4"
                           class="col-xs-10 col-sm-5"/>
                </div>
            </div>

            <!-- /section:elements.form -->
            <div class="space-4"></div>

            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button class="btn btn-info" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        Add
                    </button>
                    &nbsp; &nbsp; &nbsp;
                    <button onclick="window.location.href='/edit-survey/{{$idSurvey}}'" class="btn" type="reset">
                        <i class="ace-icon fa fa-undo bigger-110"></i>
                        Back
                    </button>

                </div>
            </div>

        </form>
    @endif
@endsection