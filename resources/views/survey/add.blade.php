<?php
/**
 * Created by PhpStorm.
 * User: PullKa
 * Date: 2/27/2017
 * Time: 10:49 AM
 */
?>
@extends('layouts.app')

@section('content')
    <div class="widget-body">
        <div class="widget-main">
            <form action="/add-survey" method="post" class="form-search">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-xs-12 col-sm-8">
                        <!--include file to out message errors -->
                        @include('warning.warning')
                        <div class="input-group">
                            <input type="text" class="form-control search-query" placeholder="Name's Survey"
                                   name="survey"/>

                            <span class="input-group-btn">
                             <button type="submit" class="btn btn-sm btn-success">
                             Add
                                 <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                             </button>
                         </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection