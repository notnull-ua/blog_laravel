<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 15.09.17
 * Time: 11:53
 */

?>

{!! Form::model($model,['route'=> $route]) !!}

<div class="form-group">
    {!! Form::label('Name:') !!}
    {!! Form::text('name',$model->name,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit("Send",['class' => 'btn btn-success']) !!}
</div>
{!! Form::close() !!}
