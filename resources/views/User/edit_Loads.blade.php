@extends('layouts.userSidebar')
@section('title', 'تعديل الاحمال')
<main id="main" class="main" dir="rtl">
    <section>
        <div class="row">
            <div class="col-lg-7 m-auto">

                <div class="card">
                    {{-- error section --}}

                    @if (session('error_max_watt_message'))
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                            id="success-alert" role="alert">
                            {{ session('error_max_watt_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    {{-- end error section --}}

                    <div class="card-body">
                        <h5 class="card-title ">تعديل الحمل:</h5>
                        <form class="justify-content-center" action="{{ route('update.loads') }}" method="get">
                            @csrf

                            <span>
                                سيتم حساب الحمل النهائي بناءا على عدد الساعات اللتي تم ادخالها سابقا
                                <div style="color: blue">
                                    عدد ساعات التشغيل هو {{ $time }} :
                                </div>
                            </span>
                            <br>
                            <input style="direction: rtl" type="number" class="form-group" name="total-watt-edit"
                                value="{{ $sum_watt }}">
                            <input type="hidden" name="time_warning" value="{{ $time }}">
                            <br>

                    </div>
                    <div class="col-12 d-flex justify-content-center mb-3">
                        <button class="btn btn-primary" type="submit">تعديل</button>
                    </div>

                    </form>

                </div>
            </div>

        </div>

    </section>
</main>
