@extends('layouts.userSidebar')
@section('title', 'معلومات المستخدم')
<main id="main" class="main" dir="rtl">
    <section>
        <div class="row">
            <div class="col-lg-7 m-auto">

                <div class="card">

                    <!--  error section -->
                    @if (session('store_error_message'))
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                            id="success-alert" role="alert">
                            {{ session('store_error_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <!-- end error section -->

                    <div class="card-body">
                        <h5 class="card-title ">ادخال معلومات المستخدم:</h5>
                        <form class="justify-content-center" action="{{ route('store.user.details') }}" method="post">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">الاسم الكامل:</label>
                                            <input type="text" class="form-control" id="nametext"
                                                aria-describedby="name" placeholder="مثال: محمد احمد(اجباري)"
                                                name="name" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">البريد الالكتروني:</label>
                                            <input style="direction: rtl" type="email" class="form-control"
                                                placeholder="example@gmail.com(اختياري)" name="email">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label">رقم الموبايل:</label>
                                            <input type="tel" class="form-control" placeholder="09--------(اجباري)"
                                                name="phone" required>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label">مكان السكن:</label>
                                            <input style="direction: rtl" type="text" class="form-control"
                                                placeholder="دمشق(اختياري)" name="address">
                                        </div>
                                    </div>


                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label class="form-label">الملاحظات:</label>
                                            <textarea class="form-control" name="note" rows="6" id="details" placeholder="الملاحظات(اجباري)" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <br>

                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <button class="btn btn-primary mb-3" type="submit">تم</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
