<main id="main" class="main" dir="rtl">
    <section>
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="card">
                    <header>

                    </header>

                    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('put')

                        <div class="card-body">
                            <h5 class="card-title ">تحديث كلمة المرور:</h5>
                            <div class="col-md-5">

                                <x-input-label for="current_password" class="form-label" :value="__('كلمة المرور القديمة:')" />
                                <br>
                                <x-text-input id="current_password" name="current_password" type="password"
                                    class="form-group" autocomplete="current-password" />

                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />

                                <x-input-error class="mt-2" :messages="$errors->get('name')" />

                                <x-input-label for="password" class="form-label mt-4" :value="__('كلمة المرور الجديدة:')" />
                                <x-text-input id="password" name="password" type="password" class="form-group"
                                    autocomplete="new-password" />
                                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />


                                <x-input-label for="password_confirmation" class="form-label mt-4" :value="__('تأكيد كلمة المرور:')" />
                                <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                                    class="form-group" autocomplete="new-password" />
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                            </div>
                            <br>


                            <div class="flex items-center gap-4">
                                <x-primary-button class="btn btn-primary">{{ __('تحديث') }}</x-primary-button>

                                @if (session('status') === 'password-updated')
                                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                                @endif
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
