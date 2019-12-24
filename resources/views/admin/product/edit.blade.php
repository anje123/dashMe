
@extends('layouts.app')

@section('content')

@include('includes.error')
<div class="card">
    <div class="card-header">
        Editing  Goods  {{$product->product_name}} GIVEN BY {{$product->givers_name}}
    </div>

    <div class="card-body">
    <form action="{{route('product.update',['id' => $product->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
              <div class="form-group">
                <label for="givers_name">Giver Name</label>
              <input type="text" name="givers_name" value="{{$product->givers_name}}" id="givers_name" class="form-control" >
              </div>

              <div class="form-group">
                    <label for="givers_name">Giver Email</label>
                    <input type="email" name="givers_email" value="{{$product->givers_email}}"  id="givers_email" class="form-control" >
                  </div>

              <div class="form-group">
                <label for="product_image">Product Image</label>
                <input type="file" name="product_image"  id="product_image" class="form-control" >
              </div>

              <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" name="product_name" value="{{$product->product_name}}"  id="product_name"  class="form-control" >
              </div>

              <div class="form-group">
                    <label for="product_name">Product Price</label>
                    <input type="text" name="product_price" value="{{$product->product_price}}" id="product_price"  class="form-control" >
                  </div>



              <div class="form-group">
                  <label for="product_bio">Product Description</label>
                    <textarea name="product_bio" id="product_bio" cols="5" rows="5" class="form-control"></textarea>
              </div>

              <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Edit Product
                    </button>
                </div>
              </div>
       </form>
</div>

@endsection


