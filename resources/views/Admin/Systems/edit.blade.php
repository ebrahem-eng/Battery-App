@extends('Admin.empty')
@section('title', 'تعديل منظومة')
<main id="main" class="main" dir="rtl">
    <section>
        <div class="row">
            <div class="col-lg-7 m-auto">

                <div class="card">

                    <!--  error section -->
                    @if (session('update_error_message'))
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                            id="success-alert" role="alert">
                            {{ session('update_error_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <!-- end error section -->

                    <div class="card-body">
                        <h5 class="card-title ">تحديث منظومة:</h5>
                        <form class="justify-content-center" action="{{ route('admin.update.systems', $systems->id) }}"
                            method="post">
                            @csrf
                            @method('put')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">اسم المنظومة:</label>
                                            <input type="text" class="form-control" id="nametext"
                                                aria-describedby="name" placeholder="اسم المنظومة" name="name"
                                                required value="{{ $systems->name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">عدد البطاريات:</label>
                                            <input style="direction: rtl" type="number" class="form-control"
                                                placeholder="1-3" name="number_battery" min="1" max="3"
                                                required value="{{ $systems->number_battery }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">عدد الانفيرترات:</label>
                                            <input style="direction: rtl" type="number" class="form-control"
                                                placeholder="1-3" name="number_inverters" min="1" max="3"
                                                required value="{{ $systems->number_inverters }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">استطاعة الانفيرتر:</label>
                                            <input style="direction: rtl" type="number" class="form-control"
                                                placeholder="3500-5000" name="watt_inverters" required
                                                value="{{ $systems->watt_inverters }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">استطاعة البطارية:</label>
                                            <input style="direction: rtl" type="number" class="form-control"
                                                placeholder="5000" name="watt_battery" required
                                                value="{{ $systems->watt_battery }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">عدد ساعات الشحن:</label>
                                            <input type="text" class="form-control"
                                                placeholder="مثال:ساعة واربعون دقيقة" name="Number_hours_for_charge"
                                                required value="{{ $systems->Number_hours_for_charge }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label class="form-label">تفاصيل اخرى:</label>
                                            <textarea class="form-control" name="details" rows="6" id="details" placeholder="التفاصيل" required>{{ $systems->details }}</textarea>

                                        </div>
                                    </div>
                                </div>
                                <br>

                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <button class="btn btn-primary mb-3" type="submit">تحديث</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        </div>
        </div>
    </section>
</main>
