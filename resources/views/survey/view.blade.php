@extends('layouts.app')

@section('content')
    @if (Auth::guest())
        <a href="form-elements.html">
            <i class="menu-icon fa fa-caret-right"></i>
            You aren't loogged in!
        </a>
    @else
        <div class="main-content">
            <div class="main-content-inner">
                <div class="col-xs-12 col-sm-6">
                    <button onclick="window.location.href='/home'" class="btn" type="reset">
                        <i class="ace-icon fa fa-undo bigger-110"></i>
                        Back
                    </button>

                    <br/>

                    <h1>{{$survey->name}}</h1>

                    @foreach( $survey->questions as $question)
                        <div class="control-group">
                            <label class="control-label bolder blue">{{$question->content}}</label>
                            @foreach($question->answers as $answer)
                                <div class="radio">
                                    &nbsp;&nbsp; <label>
                                        <input name="{{$question->id}}" type="radio" class="ace"/>
                                        <span class="lbl"> {{$answer->content}}</span>
                                    </label>
                                </div>
                            @endforeach
                        </div>

                    @endforeach

                    <div class="widget-box">

                        <form action="/add-question/{{$survey->id}}" method="get" class="form-search">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8">
                                    <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-sm btn-success">
                                            Add Question
                                            <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                        </button>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </div>
    @endif
@endsection
