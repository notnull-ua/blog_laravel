<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 12.09.17
 * Time: 11:02
 */ ?>

@extends('admin/layouts/main')
@section('title','Create category')

@section('content')
    <h1>Update category #{{ $model->id }}</h1>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif

    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))

                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
        @endforeach
    </div> <!-- end .flash-message -->

    @include('admin/category/_form',['route' => ['admin.category.store','id' => $model->id]])
@endsection


