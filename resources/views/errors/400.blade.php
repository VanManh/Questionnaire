@extends('layouts.app')

@section('content')
    <html>
    <head>
        <title>400. That’s an error...</title>
        <link rel="stylesheet" href="<?php echo asset('css/errors.css')?>"/>
    </head>
    <body>
    <div class="container">
        <div class="content">
            <div class="title">400. Bad Request...</div>
        </div>
    </div>
    </body>
    </html>
@endsection
