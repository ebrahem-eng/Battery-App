@extends('Admin.empty')
@section('title', 'اعادة تعين كلمة المرور')

<main id="main" class="main" dir="rtl">

    <div class="pagetitle">
        <h1>جدول المسؤولين</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">الرئيسية</a></li>
                <li class="breadcrumb-item ">المسؤولين</li>
                <li class="breadcrumb-item active">استعراض المسؤولين</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">

                    <!--  error section -->

                    @if (session('update_success_message'))
                        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                            id="success-alert" role="alert">
                            {{ session('update_success_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <!-- end error section -->

                    <div class="card-body">
                        <div class="card-title">
                          
                        </div>
                        @if (count($administrators) > 0)
                            <div style="overflow-x:auto;">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">الاسم الكامل</th>
                                            <th scope="col">البريد الالكتروني</th>
                                            <th scope="col">تاريخ الاضافة</th>
                                            <th scope="col">تاريخ اخر تعديل</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($administrators as $administrator)
                                            <tr style="font-size: 22px">
                                                <th scope="row">{{ $administrator->id }}</th>
                                                <td>{{ $administrator->name }}</td>
                                                <td>{{ $administrator->email }}</td>
                                                <td>{{ $administrator->created_at }}</td>
                                                <td>{{ $administrator->updated_at }}</td>
                                                <td class="text-center"><a
                                                        href="{{ route('admin.edit.password.administrators', $administrator->id) }}">
                                                        <i class="bi bi-shield-lock"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <div class="card-title text-center">
                                            <h4
                                                style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                                                لا يوجد بيانات</h4>
                                        </div>
                        @endif
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
 
           </div>
        </div>
    </section>

</main>

