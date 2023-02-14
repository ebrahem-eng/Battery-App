@extends('Admin.empty')
@section('title', 'اضافة مسؤول')
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
                        <h5 class="card-title ">اضافة مسؤول:</h5>
                        <form class="justify-content-center" action="{{ route('admin.store.administrators') }}" method="post">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">الاسم الكامل:</label>
                                            <input type="text" class="form-control" id="nametext"
                                                aria-describedby="name" placeholder="الاسم والكنية" name="name"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">البريد الالكتروني:</label>
                                            <input  type="email" class="form-control"
                                                placeholder="example@gmail.com" name="email" 
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label">كلمة المرور:</label>
                                            <input  type="password" class="form-control"
                                                placeholder="يجب ان تكون كلمة المرور اكثر من ٨ احرف" name="password" required>
                                        </div>
                                    </div>
                                </div>
                               
                                <br>

                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <button class="btn btn-primary mb-3" type="submit">اضافة</button>
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
