@extends('Admin.empty')
@section('title', 'ارشيف الاحمال')
<main id="main" class="main" dir="rtl">

    <div class="pagetitle">
        <h1>جدول ارشيف الاحمال</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">الرئيسية</a></li>
                <li class="breadcrumb-item ">ادارة الاحمال</li>
                <li class="breadcrumb-item active">ارشيف الاحمال</li>
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


                    @if (session('restore_success_message'))
                        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                            id="error-alert" role="alert">
                            {{ session('restore_success_message') }}
                        </div>
                        {{ header('refresh : 2') }}
                    @endif

                    @if (session('restore_error_message'))
                    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                        id="error-alert" role="alert">
                        {{ session('restore_error_message') }}
                    </div>
                    {{ header('refresh : 2') }}
                @endif
                    <!-- end error section -->

                    <div class="card-body">
                        <div class="card-title">
                        </div>
                        <div style="overflow-x:auto;">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">الاسم</th>
                                        <th scope="col">القيمة الافتراضية</th>
                                        <th scope="col">تاريخ الحذف</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($loads_trashed as $load)
                                        <tr style="font-size: 22px">
                                            <th scope="row">{{ $load->id }}</th>
                                            <td>{{ $load->name }}</td>
                                            <td>{{ $load->value }}</td>
                                            <td>{{ $load->deleted_at }}</td>
                                            <td class="text-center"><a
                                                    href="{{ route('admin.restore.loads', $load->id) }}">
                                                    <i class="bi bi-arrow-clockwise"></i></a></td>
                                            <td>
                                                <button type="button" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="bi bi-person-dash-fill"></i>
                                                </button>
                                            </td>
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

        <!-- Button trigger modal -->

        <!-- Modal -->
        @foreach ($loads_trashed as $load)
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">حذف بيانات الحمل</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            هل أنت متأكد من حذف جميع بيانات الحمل ؟
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>

                            <form action="{{ route('admin.forcedelete.loads', $load->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-primary">حذف</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

</main>
