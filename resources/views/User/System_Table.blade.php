@extends('layouts.navbar')
<main id="main" class="main" dir="rtl">
    <section>
        <div class="row">
            <div class="col-lg-7 m-auto">

                <div class="card">
                    @if (session('one_table_system'))
                    <div class="card-body">
                        <h5 class="card-title ">جدول المنظومات المناسبة:</h5>   
                        <table class="table datatable">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">الاسم</th> 
                                <th scope="col"> عدد البطاريات</th>
                                <th scope="col">عدد الانفيرترات</th>
                                <th scope="col">استطاعة الانفيرتر</th>
                                <th scope="col">استطاعة البطارية</th>
                                <th scope="col">عدد ساعات الشحن</th>
                                <th scope="col">معلومات اخرى</th>
                              
                              </tr>
                            </thead>
                            <tbody>
                                @foreach(session('one_table_systems') as $table)
                              <tr>
                                <th scope="row">{{$table->id}}</th>
                                <td>{{$table->name}}</td>                                     
                                <td>{{$table->number_battery}}</td>                    
                                <td>{{$table->number_inverters}}</td>
                                <td>{{$table->watt_inverters}}</td> 
                                <td>{{$table->watt_battery}}</td>
                                <td>{{$table->Number_hours_for_charge}}</td>  
                                <td>{{$table->details}}</td>  
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</main>