@extends('layouts.frontend')

@section('content')

@include('includes.error')


<div class="tr-breadcrumb">
        <div class="breadcrumb-content section-before bg-image" style="background-image: url({{asset('assets/images/cshoe.jpg')}});">
            <div class="container">
                <ol class="breadcrumb global-list">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item">Donate</li>
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


<div id="contact" class="tr-contact-section">
        <div class="section-content tr-bg-white">
            <div class="container">
                <div class="section-header section-header-2">
                    <div class="sub-title title-before">
                            <h1>Please Fill The Form</h1>

                    </div>
                </div><!-- /.section-header -->
                <div class="row">
                    <div class="col-md-7">
                    <form action="{{route('frontend.store')}}" method="POST" class="tr-form" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Title/Name</label>
                                    <input class="form-control" name="givers_name" value="{{old('givers_name')}}" type="text" placeholder="Mr Ogu " value="" size="30" aria-required="true" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input class="form-control" id="email" name="givers_email" type="email" placeholder="ogu@gmail.com" value="" size="30" aria-required="true" required="required">
                                    </div>
                                </div>
                            </div><!-- /.row -->
                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Resident Area</label>
                                            <input class="form-control" name="giver_area" type="text" placeholder="Yaba" value="" size="30" aria-required="true" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Email">Phone No</label>
                                            <input class="form-control" id="email" name="giver_phoneno" type="text" placeholder="0800000040" value="" size="30" aria-required="true" required="required">
                                        </div>
                                </div>
                            </div><!-- /.row -->
                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Goods Name</label>
                                            <input class="form-control" name="product_name" type="text" placeholder="Men's Polo Shirts" value="" size="30" aria-required="true" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Price">Goods Price - Please note very low or free</label>
                                            <input class="form-control"  name="product_price" type="text" placeholder="&#8358 50" value="" size="30" aria-required="true" required="required">
                                        </div>
                              </div>
                            </div><!-- /.row -->

                            <div class="form-group">
                                    <label for="">Goods Image</label>
                                    <input type="file" name="product_image" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Goods Description -less than 20 words</label>
                                <textarea name="product_bio" class="form-control" required="required" rows="7" placeholder=" I wore it for only one month"></textarea>
                            </div>


                            <input type="submit" class="btn btn-primary btn-full" value="Submit your form">
                    </form><!-- /.tr-form -->
                    </div>
                    <div class="col-md-5">
                        <div class="contact-info">
                            <ul class="global-list">

                                <li>
                                   <div class="contact-icon">
                                       <img src="{{asset('assets/images/presets/preset2/contact.png')}}" alt="Image" class="img-fluid">
                                   </div>
                                   <div class="tr-info">
                                       <h2>Contact</h2>
                                      <ul class="global-list">
                                          <li>Tel : 2348108638691</li>
                                      </ul>
                                   </div>
                                </li>
                            </ul>
                        </div><!-- /.contact-info -->
                    </div>
                </div>
            </div><!-- /.container -->
        </div><!-- /.section-content -->
</div><!-- /.tr-contact-section -->

@endsection
