@extends('Admin.empty')
@section('title', 'صلاحيات المسؤولين')


<main id="main" class="main" dir="rtl">

    <div class="pagetitle">
        <h1>جدول الصلاحيات</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">الرئيسية</a></li>
                <li class="breadcrumb-item ">الصلاحيات</li>
                <li class="breadcrumb-item active">استعراض الصلاحيات</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6 m-auto">

                <div class="card">

                    <!--  error section -->

                    @if (session('delete_success_message'))
                        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                            id="success-alert" role="alert">
                            {{ session('delete_success_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if (session('delete_error_message'))
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                            id="success-alert" role="alert">
                            {{ session('delete_error_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if (session('store_success_message'))
                        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                            id="success-alert" role="alert">
                            {{ session('store_success_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

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
                        @if (count($permissions) > 0)
                            <div style="overflow-x:auto;">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">الاسم</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($permissions as $permission)
                                            <tr style="font-size: 22px">
                                                <th scope="row">{{ $permission->id }}</th>
                                                <td>{{ $permission->name }}</td>
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
