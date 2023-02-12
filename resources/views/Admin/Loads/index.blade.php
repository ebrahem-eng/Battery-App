@extends('Admin.empty')
@section('title', 'ادارة الاحمال')
<main id="main" class="main" dir="rtl">

    <div class="pagetitle">
        <h1>جدول الاحمال</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">الرئيسية</a></li>
                <li class="breadcrumb-item ">الاحمال</li>
                <li class="breadcrumb-item active">استعراض الاحمال</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">

                    <!--  error section -->

                    @if (session('delete_success_message'))
                        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                            id="error-alert" role="alert">
                            {{ session('delete_success_message') }}
                        </div>
                        {{ header('refresh : 2') }}
                    @endif

                    @if (session('delete_error_message'))
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                            id="error-alert" role="alert">
                            {{ session('delete_error_message') }}
                        </div>
                        {{ header('refresh : 2') }}
                    @endif

                    @if (session('store_success_message'))
                        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                            id="error-alert" role="alert">
                            {{ session('store_success_message') }}
                        </div>
                        {{ header('refresh : 2') }}
                    @endif

                    @if (session('update_success_message'))
                        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                            id="error-alert" role="alert">
                            {{ session('update_success_message') }}
                        </div>
                        {{ header('refresh : 2') }}
                    @endif
                    <!-- end error section -->

                    <div class="card-body">
                        <div class="card-title">
                            <a type="button" href="{{ route('admin.create.loads') }}">
                                <i class="bi bi-plus-square"></i>
                            </a>
                        </div>
                        <div style="overflow-x:auto;">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">الاسم</th>
                                        <th scope="col">القيمة الافتراضية</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($loads as $load)
                                        <tr style="font-size: 22px">
                                            <th scope="row">{{ $load->id }}</th>
                                            <td>{{ $load->name }}</td>
                                            <td>{{ $load->value }}</td>
                                            <td class="text-center"><a
                                                    href="{{ route('admin.edit.loads', $load->id) }}"><i
                                                        class="bi bi-pencil-square fs-6"></i></a></td>
                                            <td>
                                                <form action="{{route('admin.softdelete.loads' , $load->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit">
                                                        <i class="bi bi-person-dash-fill"></i>
                                                </button>
                                                </form>
                                        </tr>
                                    @endforeach
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
