@extends('layouts.navbar')
<main id="main" class="main" dir="rtl">
    <section>
        <div class="row">
            <div class="col-lg-7 m-auto">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title ">الرجاء اختيار الساعات:</h5>
                        <form class="justify-content-center" action="{{ route('calculate.watt.time') }}" method="get">
                            @csrf
                            <div class="col-md-4">
                                <label for="validationDefault01" class="form-label">مجموع الاحمال:</label>
                                <input type="number" class="form-group" name="total-watt" value="{{$sum}}" readonly>
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
