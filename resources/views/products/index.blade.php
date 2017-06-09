@extends('layouts.app')
<div class="container">
  @foreach ($products as $product)
  <div class="col-md-4">
    <h3>{{$product->name}}</3>
    <p>{{$product->description}}</p>
    <button class="btn btn warning" name="button">Agregar al carrito</button>
    @include('products.delete',['product'=>$product])
  </div>
  @endforeach
</div>
