@extends('layouts.userSidebar')
<main id="main" class="main" dir="rtl">
    <section>
        <div class="row">
            <div class="col-lg-7 m-auto">

                <div class="card">

               <!--  error  message -->

                    @if (session('error_message'))
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                            id="error-alert" role="alert">
                            {{ session('error_message') }}
                        </div>
                        {{ header('refresh : 2') }}
                    @endif

                     <!-- end  error  message -->

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
                            <br>
                            <label for="validationDefault01" class="form-label">4- تركيب مظومة واحدة من المنظومة الاولى ومنظومة واحدة من المنظومة الثانية</label>

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

                                <br>
                            <label for="validationDefault01" class="form-label">4- تركيب ثلاث منظومات من المنظومة الاولى</label>

                            <br>
                            <label for="validationDefault01" class="form-label">5- تركيب ثلاث منظومات من المنظومة الثانية</label>

                            <br>
                            <label for="validationDefault01" class="form-label">6- تركيب منظومتان من المنظومة الثانية ومنظومة واحدة من المنظومة الاولى</label>

                            <br>
                            <label for="validationDefault01" class="form-label">7- تركيب منظومتان من المنظومة الاولى ومنظومة واحدة من المنظومة الثانية</label>

                            <div class="col-12 d-flex justify-content-center">
                                <a class="btn btn-primary " type="button"
                                    href="{{ route('three_table.system') }}">اظهار تفاصيل المنظومات المذكورة اعلاه</a>
                            </div>
                        </div>
                    @endif

                    <!-- fourth possibilities -->
                    @if (session('fourth_Possibilities'))
                    <div class="card-body">
                        <h5 class="card-title ">المنظومات المناسبة:</h5>
                        <label for="validationDefault01" class="form-label">1- تركيب المنظومة الاولى مع المنظومة
                            الرابعة</label>
                        <br>
                        <label for="validationDefault01" class="form-label">2- تركيب المنظومة الثانية مع المنظومة
                            الرابعة</label>
                        <br>
                        <label for="validationDefault01" class="form-label">3- تركيب المنظومة الاولى مع المنظومة الثانية مع المنظومة الثالثة</label>

                            <br>
                        <label for="validationDefault01" class="form-label">4- تركيب منظومتان من المنظومة الثالثة</label>

                        <br>
                        <label for="validationDefault01" class="form-label">5- تركيب منظومتان من المنظومة الاولى مع منظومتان من المنظومة الثانية</label>

                        <br>
                        <label for="validationDefault01" class="form-label">6- تركيب منظومة واحدة من المنظومة الثالثة مع منظومتان من المنظومة الاولى</label>

                        <br>
                        <label for="validationDefault01" class="form-label">7- تركيب منظومة واحدة من المنظومة الثالثة مع منظومتان من المنظومة الثانية</label>

                        <br>
                        <label for="validationDefault01" class="form-label">8- تركيب اربع منظومات من المنظومة الاولى</label>

                        <br>
                        <label for="validationDefault01" class="form-label">9- تركيب اربع منظومات من المنظومة الثانية</label>

                        <br>
                        <label for="validationDefault01" class="form-label">10- تركيب ثلاث منظومات من المنظومة الاولى مع منظومة من المنظومة الثانية</label>

                        <br>
                        <label for="validationDefault01" class="form-label">11- تركيب ثلاث منظومات من المنظومة الثانية مع منظومة من المنظومة الاولى</label>

                        <br>
                        <label for="validationDefault01" class="form-label">12- تركيب منظومتان من المنظومة الاولى مع منظومتان من المنظومة الثانية</label>

                        <div class="col-12 d-flex justify-content-center">
                            <a class="btn btn-primary " type="button"
                                href="{{ route('fourth_table.system') }}">اظهار تفاصيل المنظومات المذكورة اعلاه</a>
                        </div>
                    </div>
                @endif

                       <!-- five possibilities -->
                       @if (session('five_Possibilities'))
                       <div class="card-body">
                           <h5 class="card-title ">المنظومات المناسبة:</h5>
                           <label for="validationDefault01" class="form-label">1- تركيب المنظومة الثالثة مع المنظومة
                               الرابعة</label>
                           <br>
                           <label for="validationDefault01" class="form-label">2- تركيب المنظومة الاولى مع المنظومة الثانية مع المنظومة الرابعة</label>
                           <br>
                           <label for="validationDefault01" class="form-label">3- تركيب منظومتان من المنظومة الاولى مع منظومة من المنظومة الرابعة</label>
   
                               <br>
                           <label for="validationDefault01" class="form-label">4- تركيب منظومتان من المنظومة الثانية مع منظومة من المنظومة الرابعة</label>
   
                           <br>
                           <label for="validationDefault01" class="form-label">5- تركيب منظومتان من المنظومة الثالثة مع منظومة من المنظومة الاولى</label>
   
                           <br>
                           <label for="validationDefault01" class="form-label">6- تركيب منظومتان من المنظومة الثالثة مع منظومة من المنظومة الثانية</label>
   
                           <br>
                           <label for="validationDefault01" class="form-label">7- تركيب خمس منظومات من المنظومة الاولى</label>
   
                           <br>
                           <label for="validationDefault01" class="form-label">8- تركيب خمس منظومات من المنظومة الثانية</label>
   
                           <br>
                           <label for="validationDefault01" class="form-label">9- تركيب اربع منظومات من المنظومة الاولى مع منظومة من المنظومة الثانية</label>
   
                           <br>
                           <label for="validationDefault01" class="form-label">10- تركيب اربع منظومات من المنظومة الثانية مع منظومة من المنظومة الاولى</label>
   
                           <br>
                           <label for="validationDefault01" class="form-label">11- تركيب ثلاث منظومات من المنظومة الاولى مع منظومتان من المنظومة الثانية</label>
   
                           <br>
                           <label for="validationDefault01" class="form-label">12- تركيب ثلاث منظومات من المنظومة الثانية مع منظومتان من المنظومة الاولى</label>

                           <br>
                           <label for="validationDefault01" class="form-label">13- تركيب منظومتان من المنظومة الاولى مع ثلاث منظومات من المنظومة الثانية</label>

                           <br>
                           <label for="validationDefault01" class="form-label">14- تركيب منظومتان من المنظومة الثانية مع ثلاث منظومات من المنظومة الاولى</label>
   
                           <div class="col-12 d-flex justify-content-center">
                               <a class="btn btn-primary " type="button"
                                   href="{{ route('five_table.system') }}">اظهار تفاصيل المنظومات المذكورة اعلاه</a>
                           </div>
                       </div>
                   @endif

                     <!-- five possibilities -->
                     @if (session('six_Possibilities'))
                     <div class="card-body">
                         <h5 class="card-title ">المنظومات المناسبة:</h5>
                         <label for="validationDefault01" class="form-label">1- تركيب منظومتان من المنظومة الرابعة</label>
                         <br>
                         <label for="validationDefault01" class="form-label">2- تركيب المنظومة الرابعة مع المنظومة الثالثة مع المنظومة الاولى</label>
                         <br>
                         <label for="validationDefault01" class="form-label">3- تركيب المنظومة الرابعة مع المنظومة الثالثة مع المنظومة الثانية</label>
 
                             <br>
                         <label for="validationDefault01" class="form-label">4- تركيب ست منظومات من المنظومة الاولى</label>
 
                         <br>
                         <label for="validationDefault01" class="form-label">5- تركيب ست منظومات من المنظومة الثانية</label>
 
                         <br>
                         <label for="validationDefault01" class="form-label">6- تركيب منظومة من المنظومة الثالثة مع اربع منظومات من المنظومة الاولى</label>
 
                         <br>
                         <label for="validationDefault01" class="form-label">7- تركيب منظومة من المنظومة الثالثة مع اربع منظومات من المنظومة الثانية</label>
 
                         <br>
                         <label for="validationDefault01" class="form-label">8- تركيب منظومة من المنظومة الثالثة مع منظومتان من المنظومة الاولى ومنظومتان من المنظومةالثانية</label>
 
                         <br>
                         <label for="validationDefault01" class="form-label">9- تركيب خمس منظومات من المنظومة الاولى مع منظومة من المنظومة الثانية</label>
 
                         <br>
                         <label for="validationDefault01" class="form-label">10- تركيب خمس منظومات من المنظومة الثانية مع منظومة من المنظومة الاولى</label>
 
                         <br>
                         <label for="validationDefault01" class="form-label">11- تركيب اربع منظومات من المنظومة الاولى مع منظومتان من المنظومة الثانية</label>
 
                         <br>
                         <label for="validationDefault01" class="form-label">12- تركيب اربع منظومات من المنظومة الثانية مع منظومتان من المنظومة الاولى</label>

                         <br>
                         <label for="validationDefault01" class="form-label">13- تركيب ثلاث منظومات من المنظومة الاولى مع ثلاث منظومات من المنظومة الثانية</label>

                         <br>
                         <label for="validationDefault01" class="form-label">14- تركيب منظومتان من المنظومة الاولى مع اربع منظومات من المنظومة الثانية</label>

                         <br>
                         <label for="validationDefault01" class="form-label">15- تركيب منظومتان من المنظومة الثانية مع اربع منظومات من المنظومة الاولى</label>
 
                         <br>
                         <label for="validationDefault01" class="form-label">16- تركيب منظومة من المنظومة الرابعة مع ثلاث منظومات من المنظومة الاولى</label>
 
                         <br>
                         <label for="validationDefault01" class="form-label">17- تركيب منظومة من المنظومة الرابعة مع ثلاث منظومات من المنظومة الثانية</label>
 
                         <br>
                         <label for="validationDefault01" class="form-label">18- تركيب منظومة من المنظومة الرابعة مع منظومتان من المنظومة الاولى ومنظومة من المنظومة الثانية</label>
 
                         <br>
                         <label for="validationDefault01" class="form-label">19- تركيب منظومة من المنظومة الرابعة مع منظومتان من المنظومة الثانية ومنظومة من المنظومة الاولى</label>
 
 
                         <div class="col-12 d-flex justify-content-center">
                             <a class="btn btn-primary " type="button"
                                 href="{{ route('six_table.system') }}">اظهار تفاصيل المنظومات المذكورة اعلاه</a>
                         </div>
                     </div>
                 @endif

                </div>
            </div>
        </div>
    </section>
</main>
