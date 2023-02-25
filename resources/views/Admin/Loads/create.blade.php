@extends('Admin.empty')
@section('title', 'اضافة حمل')
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
                        <h5 class="card-title ">اضافة حمل:</h5>
                        <form class="justify-content-center" action="{{ route('admin.store.loads') }}" method="post">
                            @csrf
                          
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">الاسم:</label>                     
                                        <input type="text" class="form-control" name="name" placeholder="اسم الحمل"
                                    required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">الواط الافتراضي للحمل:</label>
                                        <input style="direction: rtl" type="number" class="form-control" name="value"
                                    placeholder="القيمة الافتراضية" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">العدد الافتراضي:</label>
                                        <input style="direction: rtl" type="number" class="form-control" name="number"
                                    placeholder="عدد الاجهزة من هذا النوع" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-primary mt-5" type="submit">اضافة</button>
                        </div> 
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
</main>
