@extends('layouts.app')

@section('content')
    @if (Auth::guest())
        <a href="/home">
            <i class="menu-icon fa fa-caret-right"></i>
            You aren't loogged in!
        </a>
    @else
        <div class="main-content">
            <div class="main-content-inner">
                <div class="widget-box">

                    <h1>
                        &nbsp; &nbsp; {{$survey->name}}
                        <button onclick="window.location.href='/change-name/{{$survey->id}}'"
                                class="btn btn-xs btn-info">
                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                        </button>
                        <button onclick="window.location.href='/add-question/{{$survey->id}}'"
                                style=" float: right; margin-right: 30px !important; " class="btn btn-sm btn-success">
                            Add Question
                            <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                        </button>
                    </h1>
                    <br/>
                </div>
                <div class="col-xs-12">

                    <div class="row">

                        <div class="col-xs-12">
                            <div>
                                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="center">STT</th>
                                            <th>Content's Question</th>
                                            <th>ID's Question</th>
                                            <th class="hidden-480">Number Answer</th>
                                            <th class="hidden-480">Status</th>
                                            <th>Setting</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php $count = 0; ?>
                                    @foreach ($survey->questions as $question)

                                        <tr>
                                            <td class="center">
                                                {{++$count}}
                                            </td>

                                            <td>
                                                <a href="/edit-question/{{$question->id}}">{{ $question->content }}</a>
                                            </td>
                                            <td class="hidden-480">{{ $question->id }}</td>
                                            <td class="hidden-480"> 4</td>
                                            <td class="hidden-480">
                                                <span class="label label-sm label-warning">Choice</span>
                                            </td>
                                            <td>
                                                <div class="hidden-sm hidden-xs btn-group">
                                                    <button onclick="window.location.href='/edit-question/{{$question->id}}'"
                                                            class="btn btn-xs btn-info">
                                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                    </button>
                                                    <a  href="/delete-question/{{$question->id}}" onclick="return acceptanceDelete('Will you accept to delete this Question')"

                                                            class="btn btn-xs btn-danger">
                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div>
        </div>

    @endif
    <script>
        function acceptanceDelete(msg) {
            if(window.confirm(msg)){
                return true;
            } else {
                return false;
            }


        }
    </script>
@endsection
