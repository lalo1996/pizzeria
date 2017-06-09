@extends('layouts.app')
<!-- se tiene que llamar así porque así viene en el layout -->
@section('content')
<!-- El método post nos envia al controlador donde estemos -->
{!!Form::open(['url' => '/products/', 'method' => 'POST', 'class' => 'inline-block']) !!}

Nombre del producto:
{{ Form::text('name','',['class'=>'form-control']) }}

Descripcion del producto:
{{ Form::textarea('description','',['class'=>'form-control']) }}

Precio del producto:
{{ Form::text('price','',['class'=>'form-control']) }}

Categoría del producto:
{{ Form::select('category_id',$categories,['class'=>'form-control']) }}

<input type="submit" class="btn btn-success" value="guardar">

{!! Form::close() !!}

@endsection
