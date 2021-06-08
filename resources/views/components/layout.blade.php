<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    @toastr_css
    @livewireStyles
    <title>{{ $title }}</title>
</head>

<body data-new-gr-c-s-check-loaded="14.1011.0" data-gr-ext-installed="">
    <div id="root">
        <div class="orielly-bg-primary sticky top-0 z-50">
            <div class="mx-auto px-2.5 max-w-6xl">
                <div class="flex">
                    <div class="flex pt-1.5 pb-0 text-xs ml-auto text-white">
                        <a href="/about">
                            <span class="hover:underline">Tentang Kami</span>
                        </a>
                        <a href="/contact">
                            <span class="ml-5 hover:underline">Hubungi Kami</span>
                        </a>
                        @if (\Illuminate\Support\Facades\Auth::check())
                            <x-jet-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <span class="ml-5 hover:underline cursor-pointer">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Account') }}
                                    </div>

                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                            {{ __('API Tokens') }}
                                        </x-jet-dropdown-link>
                                    @endif

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-jet-dropdown-link
                                            href="{{ route('logout') }}"
                                            onclick="event.preventDefault();this.closest('form').submit();"
                                        >
                                            {{ __('Log Out') }}
                                        </x-jet-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-jet-dropdown>
                        @else
                            <a href="/signin">
                                <span class="ml-5 hover:underline">Masuk</span>
                            </a>
                        @endif
                    </div>
                </div>
                <div class="flex pt-4 pb-3 items-center">
                    <a href="/">
                        <img class="w-36 -mt-5" src="assets/logo-dark.png" alt="logo">
                    </a>
                    <div class="mx-auto text-sm flex-1 text-center">
                        <form class="relative w-8/12 mx-auto">
                            <input type="text" class="w-full py-2.5 focus:outline-none px-4 bg-gray-50 rounded-sm border-0 leading-none" name="q" placeholder="Sneakers" value="" />
                            <div class="absolute" style="top: 4px; right: 5px;">
                                <button type="submit" class="orielly-bg-primary focus:outline-none py-1.5 px-2 text-white rounded-sm">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
{{--                            <div class="flex">--}}
{{--                                @foreach($navbarCategories as $rc)--}}
{{--                                    <div class="mt-1">--}}
{{--                                        <a href="/search?category={{$c->name}}">--}}
{{--                                            <span class="mr-4 text-xs text-gray-100 hover:underline">{{$c->name}}</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
                        </form>
                    </div>
                    <div class="flex ml-auto text-white">
                        <a href="/bag">
                            <i class="fa fa-2x fa-shopping-bag"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{ $slot }}
        <div class="border-t-4 bg-gray-50 orielly-border-primary text-sm">
            <div class="mx-auto px-2.5 max-w-6xl">
                <div class="flex pt-14 pb-16">
                    <div class="w-2/12 pr-2">
                        <p class="text-gray-700 font-bold mb-4">O'rielly</p>
                        <ul class="p-0 m-0 list-none">
                            <li class="mb-4">
                                <a href="/about">
                                    <span class="text-gray-500 mb-2">Tentang O'rielly</span>
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="/contact">
                                    <span class="text-gray-500 mb-2">Hubungi Kami</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-3/12 pr-2">
                        <p class="text-gray-700 font-bold mb-4">Panduan</p>
                        <ul class="p-0 m-0 list-none">
                            <li class="mb-4">
                                <a href="/terms">
                                    <span class="text-gray-500 mb-2">Syarat dan Ketentuan</span>
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="/policies">
                                    <span class="text-gray-500 mb-2">Kebijakan Privasi</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-2/12 pr-2">
                        <p class="text-gray-700 font-bold mb-4">Ikuti Kami</p>
                        <ul class="p-0 m-0 list-none">
                            <li class="mb-4">
                                <a href="/">
                                    <span class="text-gray-500 mb-2">
                                        <i class="fab fa-instagram fa-lg mr-1"></i>
                                        Instagram
                                    </span>
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="/">
                                    <span class="text-gray-500 mb-2">
                                        <i class="fab fa-twitter fa-lg mr-1"></i>
                                        Twitter
                                    </span>
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="/">
                                    <span class="text-gray-500 mb-2">
                                        <i class="fab fa-facebook fa-lg mr-1"></i>
                                        Facebook
                                    </span>
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="/">
                                    <span class="text-gray-500 mb-2">
                                        <i class="fab fa-linkedin-in fa-lg mr-1"></i>
                                        Linkedin
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-5/12 text-gray-500"><img class="w-36 mb-4" src="/assets/logo-light.png" alt="logo">
                        <p>
                            Orielly adalah E-Commerce yang menjual berbagai jenis busana seperti sepatu, kemeja, kacamata
                            dan lainnya dari berbagai merk-merk dan dengan jaminan busana-busana yang kami jual 100% adalah
                            original
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
      This HTML file is a template.
      If you open it directly in the browser, you will see an empty page.

      You can add webfonts, meta tags, or analytics to this file.
      The build step will place the bundled scripts into the <body> tag.

      To begin the development, run `npm start` or `yarn start`.
      To create a production bundle, use `npm run build` or `yarn build`.
    -->
{{--    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>--}}
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    @jquery
    @toastr_js
    @toastr_render
    @livewireScripts
    {{ $script ?? '' }}
    <script>
        window.addEventListener('alert', event => {
            toastr[event.detail.type](event.detail.message,
                event.detail.title ?? ''), toastr.options = {
                "closeButton": true,
                "progressBar": true,
            }
        });
    </script>
</body>
</html>
