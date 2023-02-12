@extends('layouts.userSidebar')
@section('title','اختيار ساعات التشغيل')
<main id="main" class="main" dir="rtl">
    <section>
        <div class="row">
            <div class="col-lg-7 m-auto">

                <div class="card">

                    <!-- ========== error message  ========-->
                    @if (session('error_null_number_message'))
                    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                    id="success-alert" role="alert">
                    {{ session('error_null_number_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    @endif

                    @if (session('error_minus_number_message'))
                           <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                    id="success-alert" role="alert">
                    {{ session('error_minus_number_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                    @endif

                    @if (session('error_message'))
                         <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                    id="success-alert" role="alert">
                    {{ session('error_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    @endif

                    @if (session('error_max_watt_message'))
                    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                    id="success-alert" role="alert">
                    {{ session('error_max_watt_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    @endif
                    <!-- ========== end error message  ========-->

                    <div class="card-body">
                        <h5 class="card-title ">الرجاء اختيار الساعات:</h5>
                        <form class="justify-content-center" action="{{ route('calculate.watt.time') }}" method="get">
                            @csrf
                            <div class="col-md-4">
                                <label for="validationDefault01" class="form-label">مجموع الاحمال:</label>
                                <br>
                                <input type="number" class="form-group" name="total-watt" value="{{ $sum }}"
                                    readonly>
                                <br>
                                <label for="validationDefault01" class="form-label">الوقت المقدر للتشغيل:</label>
                                <br>
                                <input type="number" class="form-group" name="time" placeholder="1 - 8" required
                                    min="1" max="8.0000000000000000">
                            </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button class="btn btn-primary mb-3" type="submit">حساب</button>
                    </div>
                    {{-- <div class="col-12 d-flex justify-content-center mt-2 ">
                        <a class="btn btn-primary " type="button" href="{{ url('/') }}">رجوع</a>
                    </div> --}}

                    </form>

                </div>
            </div>

        </div>
        </div>
    </section>
</main>
