@extends('layouts.navbar')
<main id="main" class="main" dir="rtl">
    <section>
        <div class="row">
            <div class="col-lg-7 m-auto">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title ">الرجاء اختيار الساعات:</h5>
                        <form class="justify-content-center" action="{{ route('show.possibilities') }}" method="get">
                            @csrf
                            <div class="col-md-4">
                                <label for="validationDefault01" class="form-label"> الاستطاعة الكلية:</label>
                                <input type="number" class="form-group" name="total-watt" value="{{$watt_time}}" readonly>
                            </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button class="btn btn-primary" type="submit">اظهار المنظومات المناسبة</button>
                    </div>
                    </form>

                </div>
            </div>

        </div>
        </div>
    </section>
</main>
