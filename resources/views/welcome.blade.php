@extends('layouts.navbar')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
    integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

<main id="main" class="main" dir="rtl">
    <section>

        <div class="row">
            <div class="col-lg-7 m-auto">

                <div class="card">

                     <!-- error message  -->
                    @if (session('error_message'))
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                            id="error-alert" role="alert">
                            {{ session('error_message') }}
                        </div>
                        {{ header('refresh : 2') }}
                    @endif

                    <!-- end error message -->

                    <div class="card-body">
                        <h5 class="card-title ">الرجاء اختيار الاحمال:</h5>
                        <form class="justify-content-center" action="{{ route('calculate.watt') }}" method="get">
                            @csrf
                            @foreach ($loads as $load)
                                <div class="col-md-5">
                                    <input type="checkbox" class="form-group" name="selected[{{ $load->id }}]"
                                        value="{{ $load->value }}">
                                    <label for="validationDefault01" class="form-label">{{ $load->name }}</label>
                                    <br>
                                    <input type="number" class="form-group" name="value[{{ $load->id }}]"
                                        value="{{ $load->value }}" min="20" max="3000.00000000000000">
                                </div>
                                <br>
                            @endforeach
                            <div class="col-12 d-flex justify-content-center">
                                <button class="btn btn-primary " type="submit">حساب</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a href="#main" class="scroll-down">
        <i class="fas fa-chevron-up"></i>
    </a>

    <script>
        const scrollDown = document.querySelector(".scroll-down");

        scrollDown.addEventListener("click", () => {
            document.querySelector("#main").scrollIntoView({
                behavior: "smooth"
            });
        });
    </script>
</main>
