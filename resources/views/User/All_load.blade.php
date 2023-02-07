@extends('layouts.userSidebar')
<main id="main" class="main" dir="rtl">
    <section>
        <div class="row">
            <div class="col-lg-7 m-auto">

                <div class="card">
                    @if (session('error_max_watt_message'))
                    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                        id="error-alert" role="alert">
                        {{ session('error_max_watt_message') }}
                    </div>
                     {{ header('refresh : 2') }}
                     @endif
                    <div class="card-body">
                        <h5 class="card-title ">الرجاء اختيار الساعات:</h5>
                        <form class="justify-content-center" action="{{ route('show.possibilities') }}" method="get">
                            @csrf
                            <div class="col-md-4">
                                <label for="validationDefault01" class="form-label"> الاستطاعة الكلية:</label>
                                <br>
                                <input type="number" class="form-group" name="total-watt" value="{{$watt_time}}" readonly>
                                <br>
                            </div>    
                    </div>
                    <div class="col-12 d-flex justify-content-center mb-3">
                        <button class="btn btn-primary" type="submit">اظهار المنظومات المناسبة</button>
                    </div>
                    
                    </form>

                </div>
            </div>

        </div>
        </div>
    </section>
</main>
