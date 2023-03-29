@extends('layouts.userSidebar')
@section('title', 'اختيار ساعات التشغيل')
<main id="main" class="main" dir="rtl">
    <section>
        <div class="row">
            <div class="col-lg-6 m-auto">

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
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-8 col-md-5">
                                        <div class="form-group">
                                            <label class="form-label">مجموع الاحمال:</label>
                                            <input style="direction: rtl" type="number" class="form-control"
                                                id="nametext" aria-describedby="name" name="total-watt" required
                                                value="{{$sum}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-8 col-md-5">
                                        <div class="form-group">
                                            <label class="form-label">الوقت المقدر للتشغيل:</label>
                                            <input style="direction: rtl" type="number" class="form-control"
                                                placeholder="1 - 8" name="time" required min="1"
                                                max="8">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <button class="btn btn-primary mt-3" type="submit">حساب</button>
                            </div>
                      
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
