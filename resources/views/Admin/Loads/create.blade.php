@extends('Admin.empty')
@section('title','اضافة حمل')
<main id="main" class="main" dir="rtl">
    <section>
        <div class="row">
            <div class="col-lg-7 m-auto">

                <div class="card">

<div class="card-body">
    <h5 class="card-title ">اضافة حمل:</h5>
    <form class="justify-content-center" action="{{route('admin.store.loads')}}" method="post">
        @csrf
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">الاسم:</label>
            <br>
            <input type="text" class="form-group" name="name" placeholder="اسم الحمل" required>
            <br>
            <label for="validationDefault01" class="form-label mt-3">الواط الافتراضي للحمل:</label>
            <br>
            <input style="direction: rtl" type="number" class="form-group" name="value" placeholder="القيمة الافتراضية" required>
        </div>
</div>
<div class="col-12 d-flex justify-content-center">
    <button class="btn btn-primary mb-3" type="submit">اضافة</button>
</div>
</form>

</div>
</div>

</div>
</div>
</section>
</main>
