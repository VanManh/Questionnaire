@extends('guest.app')

@section('content')
<head>
    <link rel="stylesheet" href="<?php echo asset('css/search.css')?>"/>
</head>
<div class="main-content">
    <div class="main-content-inner">
        <div class="widget-box">
            <div class="widget-header widget-header-small">
                <h2 class="widget-title lighter"> &nbsp;&nbsp; List Survey
                    <button onclick="window.location.href='/add-survey'"
                            style=" float: right; margin-right: 10px !important; " class="btn btn-sm btn-success">
                        Add Survey
                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                    </button>
                </h2>
            </div>
        </div>
        &nbsp;&nbsp;&nbsp;


        <span class="input-icon">
                <i class="ace-icon fa fa-search nav-search-icon"></i>
                <input type="text" placeholder="Search ..." class="nav-search-input"
                       id="myInput" onkeyup="myFunction()" autocomplete="off"/>

            </span>
        <br/>
        <br/>

        <div class="col-xs-12">

            <div class="row">

                <div class="col-xs-12">
                    <div>
                        <!--<table id="dynamic-table" class="table table-striped table-bordered table-hover">-->
                        <table id="simple-table" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Name' Survey</th>
                                <th>ID' Survey</th>
                                <th class="hidden-480">Number Question</th>

                                <th class="hidden-480">Status</th>

                                <th>Conduct Survey </th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($surveys as $survey)
                            <tr>

                                <td>
                                    <a href="/edit-survey/{{$survey->id}}">{{ $survey->name }}</a>
                                    <!--{{ $survey->name }}-->
                                </td>
                                <td class="hidden-480">{{ $survey->id }}</td>
                                <?php
                                $count = 0;
                                ?>
                                @foreach($survey->questions as $question )
                                <?php $count++;?>
                                @endforeach

                                <td class="hidden-480"> {{$count}} </td>

                                <td class="hidden-480">
                                    <span class="label label-sm label-warning">Collecting</span>
                                </td>

                                <td>
                                    <div class="hidden-sm hidden-xs btn-group">
                                        <button onclick="window.location.href='/view-survey/{{$survey->id}}'"
                                                class="btn btn-xs btn-success">
                                            <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                        </button>

                                    </div>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                        {{ $surveys->links() }}

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div>
</div>
<script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("simple-table");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];

            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
@endsection
