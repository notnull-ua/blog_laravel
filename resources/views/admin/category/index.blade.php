<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 15.09.17
 * Time: 15:11
 */
?>

@extends('admin/layouts/main')
@section('title','Create category')

@section('content')
    <h1>Create category</h1>

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

    <a href="{{ url("admin/category/create") }}" class="btn btn-success">Create category</a>
    <div class="list container">

        @foreach($model as $item)

        <div class="row">
            <div class="id col-1">
                {{ $item->id }}
            </div>
            <div class="title col-9">
                {{ $item->name }}
            </div>
            <div class="action col-2">
                <a href="{{ url('admin/category/view') }}" class="detail glyphicon glyphicon-eye-open"></a>
                <a href="{{ url('admin/category/update',['id' => $item->id]) }}" class="update glyphicon glyphicon-pencil"></a>
                <a href="{{ url('admin/category/delete',['id' => $item->id]) }}" class="delete glyphicon glyphicon-remove" ></a>
            </div>
        </div>

            @endforeach
        {{ $model->links() }}

    </div>

@endsection