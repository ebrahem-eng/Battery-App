@extends('layouts.navbar')
<main id="main" class="main" dir="rtl">
    <section>
        <div class="row">
            <div class="col-lg-7 m-auto">

                <div class="card">

                    <!-- ========== error message  ========-->
                    @if (session('error_null_number_message'))
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                            id="error-alert" role="alert">
                            {{ session('error_null_number_message') }}
                        </div>
                        {{ header('refresh : 2') }}
                    @endif
                    @if (session('error_minus_number_message'))
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                            id="error-alert" role="alert">
                            {{ session('error_minus_number_message') }}
                        </div>
                        {{ header('refresh : 2') }}
                    @endif

                    @if (session('error_message'))
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                            id="error-alert" role="alert">
                            {{ session('error_message') }}
                        </div>
                        {{ header('refresh : 2') }}
                    @endif
                    <!-- ========== end error message  ========-->

                    <div class="card-body">
                        <h5 class="card-title ">الرجاء اختيار الساعات:</h5>
                        <form class="justify-content-center" action="{{ route('calculate.watt.time') }}" method="get">
                            @csrf
                            <div class="col-md-4">
                                <label for="validationDefault01" class="form-label">مجموع الاحمال:</label>
                                <input type="number" class="form-group" name="total-watt" value="{{ $sum }}"
                                    readonly>
                                <label for="validationDefault01" class="form-label">الوقت المقدر للتشغيل:</label>
                                <input type="number" class="form-group" name="time" placeholder="1 - 10" required>
                            </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button class="btn btn-primary" type="submit">حساب</button>
                    </div>
                    <div class="col-12 d-flex justify-content-center mt-2 ">
                        <a class="btn btn-primary " type="button" href="{{ url('/') }}">رجوع</a>
                    </div>

                    </form>

                </div>
            </div>

        </div>
        </div>
    </section>
</main>
