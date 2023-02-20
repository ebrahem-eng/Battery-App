@extends('layouts.userSidebar')
@section('title', 'تعديل ساعات التشغيل')
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
                        <h5 class="card-title ">تعديل ساعات التشغيل:</h5>
                        <form class="justify-content-center" action="{{route('update.time')}}" method="get">
                            @csrf
                            <span>
                                سيتم حساب الحمل النهائي بناء على قيمة الحمل الخاصة بك 
                                <div style="color: blue">
                                      قيمة الاحمال هي  {{$sum_watt}} واط :
                                </div>
                            </span>
                            <br>
                            
                            <input type="hidden" name="total-watt-edit-time" value="{{$sum_watt}}">
                            <input style="direction: rtl" type="number" class="form-group" name="time_warning_edit"
                                value="{{$time}}">
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
