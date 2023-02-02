@extends('layouts.navbar')
<main id="main" class="main" dir="rtl">
    <section>
        <div class="row">
            <div class="col-lg-7 m-auto">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title ">الرجاء اختيار الاحمال:</h5>
                       
                        <form class="justify-content-center" action="{{route('calculate.watt')}}" method="post">
                          @csrf
                          @foreach ($loads as $load)
                              <div class="col-md-4">
                                  <input type="checkbox" class="form-group" name="selected[{{$load->id}}]" value="{{$load->value}}">
                                  <label for="validationDefault01" class="form-label">{{$load->name}}</label>
                                  <input type="number" class="form-group" name="value[{{$load->id}}]" value="{{$load->value}}">
                              </div>
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
</main>

