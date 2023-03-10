@extends('Admin.empty')
@section('title', 'اعادة تعيين كلمة المرور')

<main id="main" class="main" dir="rtl">
    <section>
        <div class="row">
            <div class="col-lg-7 m-auto">

                <div class="card">

                    <!--  error section -->
                    @if (session('update_error_message'))
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                            id="success-alert" role="alert">
                            {{ session('update_error_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <!-- end error section -->

                    <div class="card-body">
                        <h5 class="card-title ">تعديل مسؤول:</h5>
                        <form class="justify-content-center" action="{{ route('admin.update.password.administrators' , $administrators->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label">كلمة السر الجديدة:</label>
                                            <input type="password" class="form-control" id="nametext"
                                                placeholder="يجب ان تكون كلمة المرور اكثر من ٨ احرف" name="new_password"
                                                required >
                                        </div>
                                    </div>
                                 
                                </div>
                                <br>  
                                <br>

                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <button class="btn btn-primary mb-3" type="submit">تحديث</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        </div>
        </div>
    </section>
</main>
