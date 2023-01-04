<x-guest-layout>
    <x-auth-card>
        
        <div class="flex flex-col justify-center items-center">
        
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <a href="/">
                        <x-application-logo />
                    </a>
                </div>
                

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Full Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex flex-col md:flex-row">

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>

                <!-- Contact Number -->
                <div class="mt-4">
                    <x-input-label for="contact_num" :value="__('Contact Number')" />

                    <x-text-input id="contact_num" class="block mt-1 w-full"
                                    :value="old('contact_num')"
                                    type="number"
                                    name="contact_num"
                                    required />

                    <x-input-error :messages="$errors->get('contact_num')" class="mt-2" />
                </div>

                <!-- address -->
                <div class="mt-4">
                    <x-input-label for="address" :value="__('Address')" />

                    <x-text-input id="address" class="block mt-1 w-full"
                                    :value="old('address')"
                                    type="text"
                                    name="address"
                                    required />

                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ml-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
