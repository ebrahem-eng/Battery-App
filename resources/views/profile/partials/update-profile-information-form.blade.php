<main id="main" class="main" dir="rtl">
    <section>
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="card">
                    <header>

                    </header>

                    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                        @csrf
                    </form>

                    <form class="justify-content-center" method="post" action="{{ route('profile.update') }}">
                        @csrf
                        @method('patch')

                        <div class="card-body">
                            <h5 class="card-title ">معلومات الملف الشخصي:</h5>
                            <div class="col-md-5">

                                <label for="name" class="form-label">الاسم:</label>
                                <br>
                                <input type="text" class="form-group" name="name"
                                    value="{{ auth()->user()->name }}" readonly>
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
