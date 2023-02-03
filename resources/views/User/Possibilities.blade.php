@extends('layouts.navbar')
<main id="main" class="main" dir="rtl">
    <section>
        <div class="row">
            <div class="col-lg-7 m-auto">

                <div class="card">
                    @if (session('one_Possibilities'))
                    <div class="card-body">
                        <h5 class="card-title ">المنظومات المناسبة:</h5>
                        <label for="validationDefault01" class="form-label">1-تركيب منظومة واحدة من المنظومة الاولى</label>
                        <br>
                        <label for="validationDefault01" class="form-label">2-تركيب منظومة واحدة من المنظومة الثانية</label> 
                            <div class="col-12 d-flex justify-content-center">
                            <a class="btn btn-primary " type="button" href="{{route('one_table.system')}}">اظهار تفاصيل المنظومات المذكورة اعلاه</a>
                            </div>      
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</main>