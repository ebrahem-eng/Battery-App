@extends('layouts.userSidebar')
@section('title', 'تواصل معنا')
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="{{asset('assets_contact_us/css/style.css')}}">

<section style="direction: rtl;" class="ftco-section">
    <div class="container">


        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">

                    <div class="row no-gutters mb-5">
                        <!--  error section -->
                        @if (session('store_success_message'))
                            <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                                id="success-alert" role="alert">
                                {{ session('store_success_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if (session('store_error_message'))
                            <div style="direction: rtl" class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                                id="success-alert" role="alert">
                                {{ session('store_error_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <!-- end error section -->
                        <div class="col-md-7">
                            <div style="text-align: right" class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">تواصل معنا</h3>
                                <div id="form-message-warning" class="mb-4"></div>

                                <form method="POST" class="contactForm" action="{{route('store.contactus')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label">الاسم الكامل:</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="الاسم">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label">البريد الالكتروني:</label>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="example@gmail.com">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label">الموضوع:</label>
                                                <input type="text" class="form-control" name="subject"
                                                    placeholder="الموضوع">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label">الرسالة:</label>
                                                <textarea name="message" class="form-control" cols="30" rows="4" placeholder="الرسالة"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">ارسال الرسالة</button>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 d-flex align-items-stretch">
                            <div id="map">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="text">
                                    <p><span>الموقع:</span>عدرا الصناعية </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="text">
                                    <p><span>للتواصل:</span> <a href="">9170</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-paper-plane"></span>
                                </div>
                                <div class="text">
                                    <p><span>الفيسبوك:</span> <a href="">شركة الحضارة لصناعة المنظمات الكهربائية
                                            -Alhadara</a></p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-globe"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Website</span> <a href="#">yoursite.com</a></p>
				          </div>
			          </div>
							</div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('assets_contact_us/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets_contact_us/js/popper.js') }}"></script>
<script src="{{ asset('assets_contact_us/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets_contact_us/js/jquery.validate.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('assets_contact_us/js/google-map.js') }}"></script>
<script src="{{ asset('assets_contact_us/js/main.js') }}"></script>
