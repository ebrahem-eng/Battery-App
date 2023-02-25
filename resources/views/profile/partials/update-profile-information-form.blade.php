<main id="main" class="main" dir="rtl">
    <section>
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="card">
                    <header>

                    </header>

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

                    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                        @csrf
                    </form>

                    <form class="justify-content-center" method="post" action="{{ route('admin.profile.update' , $user->id) }}">
                        @csrf
                        @method('put')

                        <div class="card-body">
                            <h5 class="card-title ">معلومات الملف الشخصي:</h5>
                            <div class="col-md-5">

                                <label for="name" class="form-label">الاسم:</label>
                                <br>
                                <input type="text" class="form-group" name="name"
                                    value="{{ auth()->user()->name }}">
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>
                            <br>



                            <div class="col-md-5">
                                <label for="email" class="form-label">البريد الالكتروني:</label>
                                <br>
                                <input type="text" class="form-group" name="email"
                                    value="{{ auth()->user()->email }}" readonly>
                                <x-input-error class="form-group" :messages="$errors->get('email')" />

                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                    <div>
                                        <p class="text-sm mt-2 text-gray-800">
                                            {{ __('Your email address is unverified.') }}

                                            <button form="send-verification"
                                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                {{ __('Click here to re-send the verification email.') }}
                                            </button>
                                        </p>

                                        @if (session('status') === 'verification-link-sent')
                                            <p class="mt-2 font-medium text-sm text-green-600">
                                                {{ __('A new verification link has been sent to your email address.') }}
                                            </p>
                                        @endif
                                    </div>
                                @endif

                                <div class="col-12 d-flex ">
                                    <button class="btn btn-primary mt-5" type="submit">تحديث الاسم</button>
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                {{-- <x-primary-button>{{ __('Save') }}</x-primary-button> --}}

                                @if (session('status') === 'profile-updated')
                                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                                @endif
                            </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

    </section>
</main>
