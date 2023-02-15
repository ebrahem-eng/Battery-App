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

                    <!-- end error message -->

                    <div class="card-body">
                        <h5 class="card-title ">الرجاء اختيار الاحمال:</h5>
                        <form class="justify-content-center" action="{{ route('calculate.watt') }}" method="get">
                            @csrf
                            @foreach ($loads as $load)
                                <div class="col-md-5">
                                    <input type="checkbox" class="form-group" name="selected[{{ $load->id }}]"
                                        value="{{ $load->value }}">
                                    <label for="validationDefault01" class="form-label">{{ $load->name }}</label>
                                    <br>
                                    <input style="direction: rtl" type="number" class="form-group"
                                        name="value[{{ $load->id }}]" value="{{ $load->value }}" min="20"
                                        max="3000.00000000000000">
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
