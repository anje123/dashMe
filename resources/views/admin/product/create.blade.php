
@extends('layouts.app')

@section('content')

@include('includes.error')
<div class="card">
    <div class="card-header">
        Add a new product
    </div>

    <div class="card-body">
    <form action="{{route('frontend.store')}}" method="post" enctype="multipart/form-data">
        @csrf

              <div class="form-group">
                <label for="givers_name">Giver Name</label>
                <h6 for="" class="float-right">eg. Mr/Mrs Ajah Family</h6>
                <input type="text" name="givers_name" id="givers_name" class="form-control" >
              </div>

              <div class="form-group">
                    <label for="givers_name">Giver Email</label>
                    <h6 for="" class="float-right">eg. ajah@gmail.com</h6>
                    <input type="email" name="givers_email" id="givers_email" class="form-control" >
                  </div>

                 <div class="form-group">
                   <label for="giver_area">Giver Area</label>
                    <h6 for="" class="float-right">eg. Yaba </h6>
                   <input type="text" name="giver_area" class="form-control" >
                 </div>

                 <div class="form-group">
                        <label for="giver_area">Giver Phone No</label>
                        <h6 for="" class="float-right">eg. 080000020</h6>
                        <input type="text" name="giver_phoneno" class="form-control" >
                      </div>
              <div class="form-group">
                <label for="product_image">Product Image</label>
                <input type="file" name="product_image" id="product_image" class="form-control" >
              </div>

              <div class="form-group">
                <label for="product_name">Product Name</label>
                <h6 for="" class="float-right">eg. men's polo shirts</h6>
                <input type="text" name="product_name" id="product_name"  class="form-control" >
              </div>

              <div class="form-group">
                    <label for="product_price">Product Price</label>
                    <h6 for="" class="float-right">eg. N200</h6>
                    <input type="text" name="product_price" id="product_price"  class="form-control" >
                  </div>

              <div class="form-group" >
                  <label for="product_bio">Product Description</label>
                  <h6 for="" class="float-right">eg. used for 1 month only</h6>
                    <textarea name="product_bio" id="product_bio"  cols="5" rows="5" class="form-control"></textarea>
              </div>

              <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Add Product
                    </button>
                </div>
              </div>
       </form>
</div>

@endsection

