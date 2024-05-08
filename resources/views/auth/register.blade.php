<x-guest-layout>
    <x-slot name="title">Register</x-slot>

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <x-main-logo></x-main-logo>

        <div class="card shrink-0 w-full max-w-xl shadow-2xl bg-base-100 m-auto">
            <form method="POST" action="{{ route('register') }}" class="card-body">
                @csrf

                <div class="border-b border-gray-900/10 mb-4">
                    <h2 class="text-base font-semibold leading-7 text-gray-900 mb-4">ข้อมูลผู้ขอเบิก</h2>

                    <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 mb-4">
                        <!-- First name -->
                        <div class="sm:col-span-3">
                            <x-input-label for="first_name" :value="__('ชื่อ')" />
                            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                                :value="old('first_name')" required autofocus autocomplete="first_name" />
                            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                        </div>

                        <!-- Last name -->
                        <div class="sm:col-span-3">
                            <x-input-label for="last_name" :value="__('นามสกุล')" />
                            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                                :value="old('last_name')" required autofocus autocomplete="last_name" />
                            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="mb-4">
                        <x-input-label for="phone" :value="__('เบอร์โทรผู้ขอเบิก')" />
                        <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone"
                            :value="old('phone')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>

                <div class="border-b border-gray-900/10 mb-4">
                    <h2 class="text-base font-semibold leading-7 text-gray-900 mb-4">ข้อมูลหน่วยงาน</h2>

                    <!-- Organization -->
                    <div class="mb-4">
                        <x-input-label for="organization" :value="__('หน่วยงาน')" />
                        <x-text-input id="organization" class="block mt-1 w-full" type="text" name="organization"
                            :value="old('organization')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('organization')" class="mt-2" />
                    </div>

                    <!-- Phone Organization -->
                    <div class="mb-4">
                        <x-input-label for="phone_og" :value="__('เบอร์โทรหน่วยงาน')" />
                        <x-text-input id="phone_og" class="block mt-1 w-full" type="tel" name="phone_og"
                            :value="old('phone_og')" required autocomplete="phone_og" />
                        <x-input-error :messages="$errors->get('phone_og')" class="mt-2" />
                    </div>

                    <!-- Address -->
                    <div class="mb-4">
                        <x-input-label for="address" :value="__('ที่อยู่หน่วยงาน')" />
                        <x-text-input id="address" class="block mt-1 w-full" type="text" name="address"
                            :value="old('address')" required autofocus autocomplete="address" />
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>
                </div>

                <div class="border-b border-gray-900/10 mb-4">
                    <h2 class="text-base font-semibold leading-7 text-gray-900 mb-4">ข้อมูลผู้ใช้งาน</h2>

                    <!-- Username -->
                    <div class="mb-4">
                        <x-input-label for="username" :value="__('Username')" />
                        <x-text-input id="username" class="block mt-1 w-full" type="text" name="username"
                            :value="old('username')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                    </div>

                    <div class="mb-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <!-- Password -->
                        <div class="sm:col-span-3">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="sm:col-span-3">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ms-4">
                        {{ __('สมัครสมาชิก') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
