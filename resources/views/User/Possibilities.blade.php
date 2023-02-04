@extends('layouts.navbar')
<main id="main" class="main" dir="rtl">
    <section>
        <div class="row">
            <div class="col-lg-7 m-auto">

                <div class="card">
                    <!-- one possibilities -->
                    @if (session('one_Possibilities'))
                        <div class="card-body">
                            <h5 class="card-title ">المنظومات المناسبة:</h5>
                            <label for="validationDefault01" class="form-label">1-تركيب منظومة واحدة من المنظومة
                                الاولى</label>
                            <br>
                            <label for="validationDefault01" class="form-label">2-تركيب منظومة واحدة من المنظومة
                                الثانية</label>
                            <div class="col-12 d-flex justify-content-center">
                                <a class="btn btn-primary " type="button" href="{{ route('one_table.system') }}">اظهار
                                    تفاصيل المنظومات المذكورة اعلاه</a>
                            </div>
                        </div>
                    @endif

                    <!-- two possibilities -->
                    @if (session('two_Possibilities'))
                        <div class="card-body">
                            <h5 class="card-title ">المنظومات المناسبة:</h5>
                            <label for="validationDefault01" class="form-label">1- تركيب منظومتان من المنظومة
                                الاولى</label>
                            <br>
                            <label for="validationDefault01" class="form-label">2- تركيب منظومتان من المنظومة
                                الثانية</label>
                            <br>
                            <label for="validationDefault01" class="form-label">3- تركيب منظومة واحدة من المنظومة
                                الثالثة</label>
                            <div class="col-12 d-flex justify-content-center">
                                <a class="btn btn-primary " type="button" href="{{ route('two_table.system') }}">اظهار
                                    تفاصيل المنظومات المذكورة اعلاه</a>
                            </div>
                        </div>
                    @endif

                    <!-- three possibilities -->
                    @if (session('three_Possibilities'))
                        <div class="card-body">
                            <h5 class="card-title ">المنظومات المناسبة:</h5>
                            <label for="validationDefault01" class="form-label">1- تركيب المنظومة الاولى مع المنظومة
                                الثالثة</label>
                            <br>
                            <label for="validationDefault01" class="form-label">2- تركيب المنظومة الثانية مع المنظومة
                                الثالثة</label>
                            <br>
                            <label for="validationDefault01" class="form-label">3- تركيب منظومة واحدة من المنظومة
                                الرابعة</label>
                            <div class="col-12 d-flex justify-content-center">
                                <a class="btn btn-primary " type="button"
                                    href="{{ route('three_table.system') }}">اظهار تفاصيل المنظومات المذكورة اعلاه</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</main>
