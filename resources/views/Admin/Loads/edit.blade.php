@extends('Admin.empty')
@section('title', 'تعديل الاحمال')
<main id="main" class="main" dir="rtl">
    <section>
        <div class="row">
            <div class="col-lg-7 m-auto">

                <div class="card">

                    <!--  error section -->
                    @if (session('update_error_message'))
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                            id="error-alert" role="alert">
                            {{ session('update_error_message') }}
                        </div>
                        {{ header('refresh : 2') }}
                    @endif
                    <!-- end error section -->

                    <div class="card-body">
                        <h5 class="card-title ">تعديل حمل:</h5>
                        <form class="justify-content-center" action="{{ route('admin.update.loads', $loads->id) }}"
                            method="post">
                            @csrf
                            @method('PUT')
                            <div class="col-md-4">
                                <label for="validationDefault01" class="form-label">الاسم:</label>
                                <br>
                                <input type="text" class="form-group" name="name" placeholder="اسم الحمل"
                                    value="{{ $loads->name }}" required>
                                <br>
                                <label for="validationDefault01" class="form-label mt-3">الواط الافتراضي للحمل:</label>
                                <br>
                                <input style="direction: rtl" type="number" class="form-group" name="value"
                                    placeholder="القيمة الافتراضية" value="{{ $loads->value }}" required>
                            </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button class="btn btn-primary mb-3" type="submit">تحديث</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
</main>
