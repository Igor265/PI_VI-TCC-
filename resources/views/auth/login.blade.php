{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <img class="w-20 h-20 fill-current text-gray-500" src="{{ asset('images/logo.png') }}" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Session Status -->--}}
{{--        <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <!-- Email Address -->--}}
{{--            <div>--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="current-password" />--}}
{{--            </div>--}}

{{--            <!-- Remember Me -->--}}
{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="inline-flex items-center">--}}
{{--                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-button class="ml-3">--}}
{{--                    {{ __('Log in') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}

<!DOCTYPE html>
<!--
Product Name: Metronic - Bootstrap 4 HTML Multi-purpose Admin Dashboard ThemeAuthor: KeenThemes
Purchase: https://1.envato.market/EA4JPWebsite: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.-->
<html lang="en">
<!--begin::Head-->
<head><base href="../../../">
    <meta charset="utf-8" />
    <title>Metronic Theme | Keenthemes</title>
    <meta name="description" content="Craft admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="keywords" content="Craft, bootstrap, Angular 10, Vue, React, Laravel, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
    <link rel="canonical" href="Https://preview.keenthemes.com/start" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <!--    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" /> -->
    <!--    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />-->
    <link href="{{ mix('css/essential.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="bg-white header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-size1: 100% 50%; background-image: url(assets/media/svg/illustrations/progress.svg)">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid pb-lg-20">
            <!--begin::Logo-->
            <a >
                <img alt="Logo" src="https://cdn.discordapp.com/attachments/517511609866911753/856345329887608832/Maior.png" class="h-250px" />
            </a>
            <!--end::Logo-->
            <!--begin::Wrapper-->
            <div class="w-lg-500px bg-white rounded shadow-sm p-10 p-lg-15 mx-auto">
                <!--begin::Form-->
                <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST" action="{{ route('login') }}">
                @csrf
                <!--begin::Heading-->
                    <div class="text-center mb-10">
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3">InnValueTCC</h1>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <div class="text-gray-400 fw-bold fs-4">Novo por Aqui?
                            <a href="{{ route('register') }}" class="link-primary fw-bolder">Crie sua Conta</a></div>
                        <!--end::Link-->
                    </div>
                    <!--begin::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        {{--                        <input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" />--}}
                        <x-input id="email" class="form-control form-control-lg form-control-solid block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack mb-2">
                            <!--begin::Label-->
                            <label class="form-label fw-bolder text-dark fs-6 mb-0">Senha</label>
                            <!--end::Label-->
                            <!--begin::Link-->
                            <a href="{{ route('password.request') }}" class="link-primary fs-6 fw-bolder">Esqueceu sua senha ?</a>
                            <!--end::Link-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Input-->
                        {{--                        <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />--}}
                        <x-input id="password" class="form-control form-control-lg form-control-solid block mt-1 w-full"
                                 type="password"
                                 name="password"
                                 required autocomplete="current-password" />
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <!--begin::Submit button-->
                        <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary fw-bolder me-3 my-2">
                            <span class="indicator-label">Entrar</span>
                            <span class="indicator-progress">Por Favor Aguarde...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Submit button-->
                        <!--begin::Google link-->
{{--                        <a href="#" class="btn btn-light-primary btn-lg fw-bolder my-2">--}}
{{--                            <img alt="Logo" src="assets/media/svg/social-icons/google.svg" class="h-20px me-3" />Entrar com Google</a>--}}
                        <!--end::Google link-->
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
        <div class="d-flex flex-center flex-column-auto p-10">
            <!--begin::Links-->
            <div class="d-flex align-items-center fw-bold fs-6">
                <a href="https://keenthemes.com/faqs" class="text-muted text-hover-primary px-2">Sobre</a>
                <a href="mailto:innvalue@gmail.com" class="text-muted text-hover-primary px-2">Contato</a>
                <a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Contate-Nos</a>
            </div>
            <!--end::Links-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Authentication - Sign-in-->
</div>
<!--end::Main-->
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<!--<script src="assets/plugins/global/plugins.bundle.js"></script>-->
<!--<script src="assets/js/scripts.bundle.js"></script>-->
<script src="{{ mix('js/essential.js') }}" type="text/javascript"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="assets/js/custom/authentication/sign-in/general.js"></script>
<!--end::Page Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
