@extends('layouts.app')

@section('content')
    @if (Auth::guest())
        <a href="form-elements.html">
            <i class="menu-icon fa fa-caret-right"></i>
            You aren't loogged in!
        </a>
    @else
        <form action="/change-name/{{$survey->id}}" method="post" class="form-horizontal" role="form">
            <!-- #section:elements.form -->
            {{ csrf_field() }}
            <div class="form-group">

                @include('warning.warning')

                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Name's Survey </label>

                <div class="col-sm-9">
                    <input type="text" name="survey" id="form-field-1" value="{{$survey->name}}"
                           class="col-xs-10 col-sm-5"/>
                    <input type="hidden" name="idSurvey" value="{{$survey->id}}"/>;
                </div>

            </div>

            <!-- /section:elements.form -->
            <div class="space-4"></div>

            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button class="btn btn-info" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        &nbsp;Save
                    </button>
                    &nbsp; &nbsp; &nbsp;
                    <button onclick="window.location.href='/edit-survey/{{$survey->id}}'" class="btn" type="reset">
                        <i class="ace-icon fa fa-undo bigger-110"></i>
                        Cancel
                    </button>
                </div>
            </div>

        </form>
    @endif
@endsection