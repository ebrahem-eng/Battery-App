@extends('layouts.userSidebar')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
    integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
@section('title', 'اختيار الاحمال')
<main id="main" class="main" dir="rtl">
    <section>

        <div class="row">
            <div class="col-lg-7 m-auto">

                <div class="card">

                    <!-- error message  -->
                    @if (session('error_message'))
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                            id="success-alert" role="alert">
                            {{ session('error_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if (session('store_success_message'))
                        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                            id="success-alert" role="alert">
                            {{ session('store_success_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <!-- end error message -->

                    <div class="card-body">
                        <h5 class="card-title ">الرجاء اختيار الاحمال:</h5>
                        <form class="justify-content-center" action="{{ route('calculate.watt') }}" method="get">
                            @csrf
                            @foreach ($loads as $load)
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <input type="checkbox" class="form-group"
                                                    name="selected[{{ $load->id }}]" value="{{ $load->value }}">
                                                <label for="validationDefault01"
                                                    class="form-label">{{ $load->name }}</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-7 col-md-4">
                                            <input style="direction: rtl" type="number" class="form-control"
                                                name="value[{{ $load->id }}]" value="{{ $load->value }}"
                                                min="20" max="3000">
                                        </div>
                                        <div class="col-3 col-md-2">
                                            <input style="direction: rtl" type="number" class="form-control"
                                                name="number[{{ $load->id }}]" value="{{ $load->number }}"
                                                max="10" min="1">
                                        </div>
                                    </div>
                                    <br>
                            @endforeach
                            <div class="col-12 d-flex justify-content-center">
                                <button class="btn btn-primary" type="submit">حساب</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
</main>
