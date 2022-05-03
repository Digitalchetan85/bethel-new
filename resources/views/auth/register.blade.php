{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<x-guest-layout>
    <!-- Breadcrumbs Block -->
    <div class="block bottom-sm-1" id="bread">
        <div class="container">
            <div class="breadcrumbs">
                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">Register</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //Breadcrumbs Block -->


    <div id="login-form" class="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form id="contactform1" class="contact-form" method="POST" action="{{route('register')}}">
                        @csrf
                        <h2>Register Form</h2>
                        <x-jet-validation-errors class="mb-4" />
                        <div class="inputs-col">
                            <div class="input-wrapper">
                                <label>Name<span class="required">*</span></label>
                                <input type="text" name="name" class="input-custom input-full" :value="old('email')" required autofocus>
                            </div>
                            <div class="input-wrapper">
                                <label>Email<span class="required">*</span></label>
                                <input type="email" name="email" class="input-custom input-full" :value="old('email')" required autofocus>
                            </div>
                            <div class="input-wrapper">
                                <label>Password<span class="required">*</span></label>
                                <input type="password" name="password" class="input-custom input-full"
                                    >
                            </div>
                            <div class="input-wrapper">
                                <label>Password<span class="required">*</span></label>
                                <input type="password" name="password_confirmation" class="input-custom input-full"
                                    >
                            </div>
                        </div>
                        <button type="submit" id="submit1" class="btn btn-border"><span>Register</span></button>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</x-guest-layout>