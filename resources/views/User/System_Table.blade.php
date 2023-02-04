@extends('layouts.navbar')
<main id="main" class="main" dir="rtl">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <!-- one table system -->
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
                                    @foreach (session('one_table_systems') as $table)
                                        <tr>
                                            <th scope="row">{{ $table->id }}</th>
                                            <td>{{ $table->name }}</td>
                                            <td>{{ $table->number_battery }}</td>
                                            <td>{{ $table->number_inverters }}</td>
                                            <td>{{ $table->watt_inverters }}</td>
                                            <td>{{ $table->watt_battery }}</td>
                                            <td>{{ $table->Number_hours_for_charge }}</td>
                                            <td>{{ $table->details }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif


                    <!-- two table system -->
                    @if (session('two_table_system'))
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
                                    @foreach (session('two_table_systems') as $table)
                                        <tr>
                                            <th scope="row">{{ $table->id }}</th>
                                            <td>{{ $table->name }}</td>
                                            <td>{{ $table->number_battery }}</td>
                                            <td>{{ $table->number_inverters }}</td>
                                            <td>{{ $table->watt_inverters }}</td>
                                            <td>{{ $table->watt_battery }}</td>
                                            <td>{{ $table->Number_hours_for_charge }}</td>
                                            <td>{{ $table->details }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif

                    <!-- three table system -->
                    @if (session('three_table_system'))
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
                                    @foreach (session('three_table_systems') as $table)
                                        <tr>
                                            <th scope="row">{{ $table->id }}</th>
                                            <td>{{ $table->name }}</td>
                                            <td>{{ $table->number_battery }}</td>
                                            <td>{{ $table->number_inverters }}</td>
                                            <td>{{ $table->watt_inverters }}</td>
                                            <td>{{ $table->watt_battery }}</td>
                                            <td>{{ $table->Number_hours_for_charge }}</td>
                                            <td>{{ $table->details }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif

                     <!-- fourth table system -->
                     @if (session('fourth_table_system'))
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
                                 @foreach (session('fourth_table_systems') as $table)
                                     <tr>
                                         <th scope="row">{{ $table->id }}</th>
                                         <td>{{ $table->name }}</td>
                                         <td>{{ $table->number_battery }}</td>
                                         <td>{{ $table->number_inverters }}</td>
                                         <td>{{ $table->watt_inverters }}</td>
                                         <td>{{ $table->watt_battery }}</td>
                                         <td>{{ $table->Number_hours_for_charge }}</td>
                                         <td>{{ $table->details }}</td>
                                     </tr>
                                 @endforeach
                             </tbody>
                         </table>
                     </div>
                 @endif

                     <!-- five table system -->
                     @if (session('five_table_system'))
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
                                 @foreach (session('five_table_systems') as $table)
                                     <tr>
                                         <th scope="row">{{ $table->id }}</th>
                                         <td>{{ $table->name }}</td>
                                         <td>{{ $table->number_battery }}</td>
                                         <td>{{ $table->number_inverters }}</td>
                                         <td>{{ $table->watt_inverters }}</td>
                                         <td>{{ $table->watt_battery }}</td>
                                         <td>{{ $table->Number_hours_for_charge }}</td>
                                         <td>{{ $table->details }}</td>
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
