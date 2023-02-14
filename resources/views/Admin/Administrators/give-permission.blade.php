@extends('Admin.empty')
@section('title', 'اعطاء صلاحية')


<main id="main" class="main" dir="rtl">

    <div class="pagetitle">
        <h1>اعطاء الصلاحيات</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">الرئيسية</a></li>
                <li class="breadcrumb-item ">المسؤولين</li>
                <li class="breadcrumb-item active">اعطاء الصلاحيات</li>
            </ol>
        </nav>
    </div>


    <section class="section">
        <div class="row">
            <div class="col-lg-10">

                <div class="card">

                    <!--  error section -->

                    @if (session('give_success_message'))
                        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                            id="success-alert" role="alert">
                            {{ session('give_success_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if (session('giv_error_message'))
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                            id="success-alert" role="alert">
                            {{ session('giv_error_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if (session('revoke_success_message'))
                        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                            id="success-alert" role="alert">
                            {{ session('revoke_success_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if (session('revoke_error_message'))
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                            id="success-alert" role="alert">
                            {{ session('revoke_error_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <!-- end error section -->

                    <div class="card-body">
                        <h5 class="card-title">اختيار الصلاحيات:</h5>
                        <form class="justify-content-center"
                            action="{{ route('admin.permissions.giv.administrators', $administrators->id) }}"
                            method="post">
                            @csrf

                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">اسم المسؤول:</label>
                                            <input type="text" class="form-control" id="nametext"
                                                aria-describedby="name" placeholder="الاسم والكنية" name="name"
                                                required readonly value="{{ $administrators->name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <div class="form-group">
                                            <label class="mr-sm-2" for="inlineFormCustomSelect">الصلاحيات:</label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="permission">
                                                @foreach ($permissions as $permission)
                                                    <option value="{{ $permission->name }}">{{ $permission->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary mt-3 " type="submit">منح الصلاحية</button>
                            </div>
                    </div>
                    </form>
                    <div class="card-body">
                        <h5 class="card-title">صلاحيات المسؤول:</h5>

                        @if (count($administrators->permissions) > 0)
                            @foreach ($administrators->permissions as $administrators_permission)
                                <form method="post"
                                    action="{{ route('admin.permissions.revoke.administrators', [$administrators->id, $administrators_permission->id]) }}">
                                    @csrf
                                    @method('delete')

                                    <button class=" list-group-item list-group-item-action btn-danger ">
                                        {{ $administrators_permission->name }}</button>


                                </form>
                            @endforeach
                        @else
                            <div class="card-title text-center">
                                <h4
                                    style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                                    لا يوجد صلاحيات لهذا المسؤول</h4>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</main>
