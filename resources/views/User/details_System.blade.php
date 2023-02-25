@extends('layouts.userSidebar')
@section('title', 'تفاصيل الاقتراح')
<main id="main" class="main" dir="rtl">
    <section>
        <div class="row">
            <div class="col-lg-7 m-auto">

                <div class="card">
                   
                    <div class="card-body">
                        <h5 class="card-title ">تفاصيل الاقتراح:</h5>

                        <!--one - one -->
                        @if (session('one_possibilities_one_choice'))
                            @foreach (session('one_possibilities_one_choice') as $details)
                                <div>
                                    <span>
                                        الاسم:<span style="margin-right: 8px; color:gray">{{ $details->name }}</span>
                                    </span>

                                    <br>
                                    <span>
                                        عدد البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_battery }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        عدد الانفيرترات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_inverters }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة الانفيرتر:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_inverters }}</span>
                                        واط
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_battery }}</span>
                                    </span>
                                    <br>

                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر رقما:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_number }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر كتابة:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_write }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          معلومات اخرى:<span
                                            style="margin-right: 8px; color:green">{{ $details->details }}</span>
                                    </span>
                                    <br>
                                    <pre style="text-align: center; color:blue">-----------------------</pre>
                                </div>
                            @endforeach
                        @endif

                        <!-- one - two -->
                        @if (session('one_possibilities_two_choice'))
                            @foreach (session('one_possibilities_two_choice') as $details)
                                <div>
                                    <span>
                                        الاسم:<span style="margin-right: 8px; color:gray">{{ $details->name }}</span>
                                    </span>

                                    <br>
                                    <span>
                                        عدد البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_battery }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        عدد الانفيرترات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_inverters }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة الانفيرتر:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_inverters }}</span>
                                        واط
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_battery }}</span>
                                    </span>
                                    <br>

                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر رقما:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_number }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر كتابة:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_write }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          معلومات اخرى:<span
                                            style="margin-right: 8px; color:green">{{ $details->details }}</span>
                                    </span>
                                    <br>
                                    <pre style="text-align: center; color:blue">-----------------------</pre>
                                </div>
                            @endforeach
                        @endif

                        <!-- two - one -->

                        @if (session('two_possibilities_one_choice'))
                            @foreach (session('two_possibilities_one_choice') as $details)
                                <div>
                                    <span>
                                        الاسم:<span style="margin-right: 8px; color:gray">{{ $details->name }}</span>
                                    </span>

                                    <br>
                                    <span>
                                        عدد البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_battery }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        عدد الانفيرترات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_inverters }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة الانفيرتر:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_inverters }}</span>
                                        واط
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_battery }}</span>
                                    </span>
                                    <br>

                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر رقما:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_number }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر كتابة:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_write }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          معلومات اخرى:<span
                                            style="margin-right: 8px; color:green">{{ $details->details }}</span>
                                    </span>
                                    <br>
                                    <pre style="text-align: center; color:blue">-----------------------</pre>
                                </div>
                            @endforeach
                        @endif

                        <!-- two - two -->

                        @if (session('two_possibilities_two_choice'))
                            @foreach (session('two_possibilities_two_choice') as $details)
                                <div>
                                    <span>
                                        الاسم:<span style="margin-right: 8px; color:gray">{{ $details->name }}</span>
                                    </span>

                                    <br>
                                    <span>
                                        عدد البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_battery }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        عدد الانفيرترات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_inverters }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة الانفيرتر:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_inverters }}</span>
                                        واط
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_battery }}</span>
                                    </span>
                                    <br>

                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر رقما:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_number }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر كتابة:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_write }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          معلومات اخرى:<span
                                            style="margin-right: 8px; color:green">{{ $details->details }}</span>
                                    </span>
                                    <br>
                                    <pre style="text-align: center; color:blue">-----------------------</pre>
                                </div>
                            @endforeach
                        @endif

                        <!-- two - three -->

                        @if (session('two_possibilities_three_choice'))
                            @foreach (session('two_possibilities_three_choice') as $details)
                                <div>
                                    <span>
                                        الاسم:<span style="margin-right: 8px; color:gray">{{ $details->name }}</span>
                                    </span>

                                    <br>
                                    <span>
                                        عدد البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_battery }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        عدد الانفيرترات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_inverters }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة الانفيرتر:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_inverters }}</span>
                                        واط
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_battery }}</span>
                                    </span>
                                    <br>

                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر رقما:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_number }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر كتابة:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_write }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          معلومات اخرى:<span
                                            style="margin-right: 8px; color:green">{{ $details->details }}</span>
                                    </span>
                                    <br>
                                    <pre style="text-align: center; color:blue">-----------------------</pre>
                                </div>
                            @endforeach
                        @endif

                        <!-- two - four -->

                        @if (session('two_possibilities_four_choice'))
                            @foreach (session('two_possibilities_four_choice') as $details)
                                <div>
                                    <span>
                                        الاسم:<span style="margin-right: 8px; color:gray">{{ $details->name }}</span>
                                    </span>

                                    <br>
                                    <span>
                                        عدد البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_battery }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        عدد الانفيرترات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_inverters }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة الانفيرتر:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_inverters }}</span>
                                        واط
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_battery }}</span>
                                    </span>
                                    <br>

                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر رقما:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_number }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر كتابة:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_write }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          معلومات اخرى:<span
                                            style="margin-right: 8px; color:green">{{ $details->details }}</span>
                                    </span>
                                    <br>
                                    <pre style="text-align: center; color:blue">-----------------------</pre>
                                </div>
                            @endforeach
                        @endif

                        <!-- three - one -->

                        @if (session('three_possibilities_one_choice'))
                            @foreach (session('three_possibilities_one_choice') as $details)
                                <div>
                                    <span>
                                        الاسم:<span style="margin-right: 8px; color:gray">{{ $details->name }}</span>
                                    </span>

                                    <br>
                                    <span>
                                        عدد البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_battery }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        عدد الانفيرترات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_inverters }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة الانفيرتر:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_inverters }}</span>
                                        واط
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_battery }}</span>
                                    </span>
                                    <br>

                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر رقما:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_number }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر كتابة:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_write }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          معلومات اخرى:<span
                                            style="margin-right: 8px; color:green">{{ $details->details }}</span>
                                    </span>
                                    <br>
                                    <pre style="text-align: center; color:blue">-----------------------</pre>
                                </div>
                            @endforeach
                        @endif

                        <!-- three - two -->

                        @if (session('three_possibilities_two_choice'))
                            @foreach (session('three_possibilities_two_choice') as $details)
                                <div>
                                    <span>
                                        الاسم:<span style="margin-right: 8px; color:gray">{{ $details->name }}</span>
                                    </span>

                                    <br>
                                    <span>
                                        عدد البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_battery }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        عدد الانفيرترات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_inverters }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة الانفيرتر:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_inverters }}</span>
                                        واط
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_battery }}</span>
                                    </span>
                                    <br>

                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر رقما:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_number }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر كتابة:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_write }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          معلومات اخرى:<span
                                            style="margin-right: 8px; color:green">{{ $details->details }}</span>
                                    </span>
                                    <br>
                                    <pre style="text-align: center; color:blue">-----------------------</pre>
                                </div>
                            @endforeach
                        @endif

                        <!-- three - three -->

                        @if (session('three_possibilities_three_choice'))
                            @foreach (session('three_possibilities_three_choice') as $details)
                                <div>
                                    <span>
                                        الاسم:<span style="margin-right: 8px; color:gray">{{ $details->name }}</span>
                                    </span>

                                    <br>
                                    <span>
                                        عدد البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_battery }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        عدد الانفيرترات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_inverters }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة الانفيرتر:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_inverters }}</span>
                                        واط
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_battery }}</span>
                                    </span>
                                    <br>

                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر رقما:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_number }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر كتابة:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_write }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          معلومات اخرى:<span
                                            style="margin-right: 8px; color:green">{{ $details->details }}</span>
                                    </span>
                                    <br>
                                    <pre style="text-align: center; color:blue">-----------------------</pre>
                                </div>
                            @endforeach
                        @endif

                        <!-- four - one -->

                        @if (session('four_possibilities_one_choice'))
                            @foreach (session('four_possibilities_one_choice') as $details)
                                <div>
                                    <span>
                                        الاسم:<span style="margin-right: 8px; color:gray">{{ $details->name }}</span>
                                    </span>

                                    <br>
                                    <span>
                                        عدد البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_battery }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        عدد الانفيرترات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_inverters }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة الانفيرتر:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_inverters }}</span>
                                        واط
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_battery }}</span>
                                    </span>
                                    <br>

                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر رقما:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_number }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر كتابة:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_write }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          معلومات اخرى:<span
                                            style="margin-right: 8px; color:green">{{ $details->details }}</span>
                                    </span>
                                    <br>
                                    <pre style="text-align: center; color:blue">-----------------------</pre>
                                </div>
                            @endforeach
                        @endif

                        <!-- four - two -->

                        @if (session('four_possibilities_two_choice'))
                            @foreach (session('four_possibilities_two_choice') as $details)
                                <div>
                                    <span>
                                        الاسم:<span style="margin-right: 8px; color:gray">{{ $details->name }}</span>
                                    </span>

                                    <br>
                                    <span>
                                        عدد البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_battery }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        عدد الانفيرترات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_inverters }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة الانفيرتر:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_inverters }}</span>
                                        واط
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_battery }}</span>
                                    </span>
                                    <br>

                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر رقما:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_number }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر كتابة:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_write }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          معلومات اخرى:<span
                                            style="margin-right: 8px; color:green">{{ $details->details }}</span>
                                    </span>
                                    <br>
                                    <pre style="text-align: center; color:blue">-----------------------</pre>
                                </div>
                            @endforeach
                        @endif

                        <!-- four - three -->

                        @if (session('four_possibilities_three_choice'))
                            @foreach (session('four_possibilities_three_choice') as $details)
                                <div>
                                    <span>
                                        الاسم:<span style="margin-right: 8px; color:gray">{{ $details->name }}</span>
                                    </span>

                                    <br>
                                    <span>
                                        عدد البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_battery }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        عدد الانفيرترات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_inverters }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة الانفيرتر:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_inverters }}</span>
                                        واط
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_battery }}</span>
                                    </span>
                                    <br>

                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر رقما:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_number }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر كتابة:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_write }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          معلومات اخرى:<span
                                            style="margin-right: 8px; color:green">{{ $details->details }}</span>
                                    </span>
                                    <br>
                                    <pre style="text-align: center; color:blue">-----------------------</pre>
                                </div>
                            @endforeach
                        @endif

                        <!-- five - one -->

                        @if (session('five_possibilities_one_choice'))
                            @foreach (session('five_possibilities_one_choice') as $details)
                                <div>
                                    <span>
                                        الاسم:<span style="margin-right: 8px; color:gray">{{ $details->name }}</span>
                                    </span>

                                    <br>
                                    <span>
                                        عدد البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_battery }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        عدد الانفيرترات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_inverters }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة الانفيرتر:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_inverters }}</span>
                                        واط
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_battery }}</span>
                                    </span>
                                    <br>

                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر رقما:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_number }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر كتابة:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_write }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          معلومات اخرى:<span
                                            style="margin-right: 8px; color:green">{{ $details->details }}</span>
                                    </span>
                                    <br>
                                    <pre style="text-align: center; color:blue">-----------------------</pre>
                                </div>
                            @endforeach
                        @endif

                        <!-- five - two -->

                        @if (session('five_possibilities_two_choice'))
                            @foreach (session('five_possibilities_two_choice') as $details)
                                <div>
                                    <span>
                                        الاسم:<span style="margin-right: 8px; color:gray">{{ $details->name }}</span>
                                    </span>

                                    <br>
                                    <span>
                                        عدد البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_battery }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        عدد الانفيرترات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_inverters }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة الانفيرتر:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_inverters }}</span>
                                        واط
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_battery }}</span>
                                    </span>
                                    <br>

                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر رقما:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_number }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر كتابة:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_write }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          معلومات اخرى:<span
                                            style="margin-right: 8px; color:green">{{ $details->details }}</span>
                                    </span>
                                    <br>
                                    <pre style="text-align: center; color:blue">-----------------------</pre>
                                </div>
                            @endforeach
                        @endif


                        <!-- six - two -->

                        @if (session('six_possibilities_two_choice'))
                            @foreach (session('six_possibilities_two_choice') as $details)
                                <div>
                                    <span>
                                        الاسم:<span style="margin-right: 8px; color:gray">{{ $details->name }}</span>
                                    </span>

                                    <br>
                                    <span>
                                        عدد البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_battery }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        عدد الانفيرترات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_inverters }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة الانفيرتر:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_inverters }}</span>
                                        واط
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_battery }}</span>
                                    </span>
                                    <br>

                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر رقما:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_number }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر كتابة:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_write }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          معلومات اخرى:<span
                                            style="margin-right: 8px; color:green">{{ $details->details }}</span>
                                    </span>
                                    <br>
                                    <pre style="text-align: center; color:blue">-----------------------</pre>
                                </div>
                            @endforeach
                        @endif

                        <!-- six - three -->

                        @if (session('six_possibilities_three_choice'))
                            @foreach (session('six_possibilities_three_choice') as $details)
                                <div>
                                    <span>
                                        الاسم:<span style="margin-right: 8px; color:gray">{{ $details->name }}</span>
                                    </span>

                                    <br>
                                    <span>
                                        عدد البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_battery }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        عدد الانفيرترات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->number_inverters }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة الانفيرتر:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_inverters }}</span>
                                        واط
                                    </span>
                                    <br>
                                    <span>
                                        استطاعة البطاريات:<span
                                            style="margin-right: 8px; color:gray">{{ $details->watt_battery }}</span>
                                    </span>
                                    <br>

                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                        يتم الشحن خلال:<span
                                            style="margin-right: 8px; color:green">{{ $details->Number_hours_for_charge }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر رقما:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_number }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          السعر كتابة:<span
                                            style="margin-right: 8px; color:green">{{ $details->price_write }}</span>
                                    </span>
                                    <br>
                                    <span>
                                          معلومات اخرى:<span
                                            style="margin-right: 8px; color:green">{{ $details->details }}</span>
                                    </span>
                                    <br>
                                    <pre style="text-align: center; color:blue">-----------------------</pre>
                                </div>
                            @endforeach
                        @endif


                    </div>
                </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title ">مشاركة المعلومات:</h5>
                    <div>
                        <span>
                            اذا اردت ان يصلك كل جديد شاركنا معلوماتك
                        </span>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                      
                        <a class="btn btn-primary" type="button" href="{{route('show.user.details')}}"> مشاركة <i class="bi bi-share-fill"></i></a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</main>
