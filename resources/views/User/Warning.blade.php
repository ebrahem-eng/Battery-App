@extends('layouts.userSidebar')
@section('title', 'تحذير')
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
                        <h5  style="color: red" class="card-title ">تحذير:</h5>
                      <div>
                        <span>
                          ان استطاعة المنزل الطبيعية تتراوح بين 500 الى 1500 واط والحمل الخاص بك هو  
                          <div style="color: blue">
                            {{$watt_time}} 
                            واط
                          </div>    
                            للمتابعة اضغط على كلمة متابعة ، لتعديل الاحمال اضغط على كلمة تعديل الاحمال ،لتعديل ساعات التشغيل اضغط على كلمة تعديل الساعات
                        </span>
                        <div class="d-flex align-items-center mt-3">
                            <form action="{{route('calculate.watt.time.continu')}}" method="GET">
                                @csrf
                                <input type="hidden" name="load_warning" value="{{$watt_time}}">
                                <button style="margin-right: 15px" class="btn btn-success" type="submit">متابعة</button>
                            </form> 
                            <form action="{{route('calculate.watt.time.edit')}}" method="GET">
                                @csrf
                                <input type="hidden" name="sum_watt_warning" value="{{$sum_watt}}">
                                <input type="hidden" name="time_warning" value="{{$time}}">
                                <button style="margin-right: 15px" class="btn btn-warning" type="submit">تعديل الاحمال</button>
                            </form> 
                            <form action="{{route('calculate.watt.time.edit.time')}}" method="GET">
                                @csrf
                                <input type="hidden" name="sum_watt_warning" value="{{$sum_watt}}">
                                <input type="hidden" name="time_warning" value="{{$time}}">
                                <button style="margin-right: 15px" class="btn btn-dark" type="submit">تعديل الساعات</button>
                            </form> 
                        </div>
                        
                        </div>
                      </div>

                </div>
            </div>

        </div>
        </div>
    </section>
</main>
