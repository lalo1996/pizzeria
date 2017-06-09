
@extends('layouts.app')
{!!Form::open(['url' => '/products/'.$product->id, 'method' => 'DELETE', 'class' => 'inline-block']) !!}
<input type="submit" class="btn btn-danger"name="" value="DELETE">
{!! Form::close() !!}
