@extends('layouts.frontend')

@section('content')

<div class="tr-breadcrumb">
    <div class="breadcrumb-content section-before bg-image" style="background-image: url({{asset('assets/images/cshoe.jpg')}});">
        <div class="container">
            <ol class="breadcrumb global-list">
                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                <li class="breadcrumb-item">Avaliable Goods</li>
            </ol><!-- /.breadcrumb -->

            <div class="section-header section-header-2">
                <div class="sub-title title-before">
                        <h3>Please Contact Us After Goods Has Been Collected</h3>
                        <div class="tr-button">
                            <a href="{{route('frontend.message')}}" class="btn btn-primary">Contact Us</a>
                            </div><!-- /.tr-buttons -->


                </div>
            </div><!-- /.section-header -->
        </div><!-- /.container -->
        <div class="tr-page-title">
            <div class="container">
            </div>
        </div><!-- /.tr-page-title -->
    </div><!-- /.breadcrumb -->
</div><!-- /.tr-breadcrumb -->


<div class="section-content">
    <div class="container">
        <div class="section-header section-header-2">
            <div class="sub-title title-before">
                    <h1>Avaliable Goods</h1>
            </div>
        </div><!-- /.section-header -->
        <div class="row">
                @foreach ($products as $product)
                <div class="col-md-6 col-lg-4">
                        <div class="tr-post">
                            <div class="entry-header">
                                <div class="entry-thumbnail">
                                <a href="blog-details.html"><img src="{{asset($product->product_image)}}" alt="Image" class="img-fluid"></a>
                                </div>
                                <div class="entry-footer clearfix">
                                    <ul class="tr-list">
                                        <li >
                                                <label for="">Name:</label>
                                            {{$product->givers_name}}</li>
                                    </ul>
                                    <ul class="tr-list">
                                            <li >
                                                    <label for="">Phone No:</label>
                                                {{$product->giver_phoneno}}</li>
                                        </ul>

                                        <ul class="tr-list">
                                                <li >
                                                        <label for="">Resident Area:</label>
                                                    {{$product->giver_area}}</li>
                                            </ul>

                                            <ul class="tr-list">
                                                    <li >
                                                            <label for="">Goods Name / Type:</label>
                                                        {{$product->product_name}}</li>
                                                </ul>
                                                <ul class="tr-list">
                                                        <li >
                                                                <label for="">Goods Price:</label>
                                                                &#8358 {{$product->product_price}}</li>
                                                    </ul>

                                            <ul class="tr-list">
                                                    <li >
                                                            <label for="">Goods description:</label>
                                                        {{$product->product_bio}}</li>
                                                </ul>
                                </div>
                            </div><!-- /.entry-header -->
                        </div><!-- /.tr-post -->
                    </div>
                @endforeach
            </div><!-- /.row -->

    </div><!-- /.container -->
</div><!-- /.blog-content -->
@endsection
