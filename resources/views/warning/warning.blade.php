<?php
/**
 * Created by PhpStorm.
 * User: PullKa
 * Date: 2/16/2017
 * Time: 5:31 AM
 */
?>

@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li style=" list-style: none; " class="text-warning bigger-110 orange">
                <i class="ace-icon fa fa-exclamation-triangle"></i>
                {{ $error }}
            </li>
        @endforeach
    </ul>
@endif