<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

    <title>Home</title>
</head>

<body data-new-gr-c-s-check-loaded="14.1011.0" data-gr-ext-installed="">
<div id="root">
    <div class="orielly-bg-primary sticky top-0 z-50">
        <div class="mx-auto px-2.5 max-w-6xl">
            <div class="flex">
                <div class="pt-1.5 pb-0 text-xs ml-auto text-white">
                    <a href="/about">
                        <span class="hover:underline">Tentang Kami</span>
                    </a>
                    <a href="/contact">
                        <span class="ml-5 hover:underline">Hubungi Kami</span>
                    </a>
                    <a href="/signin">
                        <span class="ml-5 hover:underline">Masuk</span>
                    </a>
                </div>
            </div>
            <div class="flex pt-4 pb-3 items-center">
                <a href="/">
                    <img class="w-36 -mt-5" src="assets/logo-dark.png" alt="logo">
                </a>
                <div class="mx-auto text-sm flex-1 text-center">
                    <form class="relative w-8/12 mx-auto">
                        <input type="text" class="w-full py-2.5 focus:outline-none px-4 bg-gray-50 rounded-sm" name="q" placeholder="Sneakers" value="" />
                        <div class="absolute" style="top: 4px; right: 5px;">
                            <button type="submit" class="orielly-bg-primary focus:outline-none py-1.5 px-2 text-white rounded-sm">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                        <div class="flex">
                            @foreach($recommendedCategories as $rc)
                                <div class="mt-1">
                                    <a href="/search?category={{$rc->name}}">
                                        <span class="mr-4 text-xs text-gray-100 hover:underline">{{$rc->name}}</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
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
    <section class="mt-8 mb-12">
        <div class="mx-auto px-2.5 max-w-6xl">
            <div class="h-96 bg-gray-400 rounded-md bg-img "
                 style="background-image: url('assets/illustration/Banner.jpg');"></div>
        </div>
    </section>
    <section class="mt-8 mb-12">
        <div class="mx-auto px-2.5 max-w-6xl">
            <p class="quick-sand text-2xl orielly-text-primary mb-6 font-bold">Cari kategori apa?</p>
            <div class="flex flex-wrap">
                @foreach($categories as $c)
                    <div class="w-2/12 p-1"><a href="/search?category={{$c->name}}">
                            <div
                                class="h-52 w-full rounded-md"
                                style="background-position: center center; background-size: cover; background-repeat: no-repeat; background-image: url('assets/categories/{{$c->picture}}');"
                            >
                            </div>
                            <p class="text-gray-600 font-bold pt-2 pb-3 text-sm text-center">{{$c->name}}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="mt-8 mb-12">
        <div class="mx-auto px-2.5 max-w-6xl">
            <div class="flex items-center mt-4">
                <p class="quick-sand text-2xl orielly-text-primary mb-6 font-bold">Diskon nih</p>
                <div class="ml-auto text-sm"><a href="/search?label=discount">
                        <span class="undefined orielly-text-primary hover:underline">
                            <span class="mr-2">Lihat lainnya</span>
                            <i class="fa fa-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="flex">
                <div class="bg-gray-400 md:w-6/12 m-1 rounded-md bg-img"
                     style="background-image: url('assets/illustration/Discount.jpg');"></div>
                <div class="flex flex-wrap w-6/12">
                    @foreach($hasSpecialOfferProducts as $p)
                        <div class="md:w-2/6 p-1"><a href="/{{$p->name}}">
                                <div
                                    class="bg-white rounded-md overflow-hidden shadow-md w-full hover:shadow-lg transition cursor-pointer"
                                    style="min-height: 22rem;"
                                >
                                    <div class="h-52 w-full" style="background-position: center center; background-size: cover; background-repeat: no-repeat; background-image: url('assets/products/{{$p->photos[0]->name}}');">
                                    </div>
                                    <div class="px-2 py-1">
                                        <p class="text-gray-500 text-xs mb-0">{{$p->merk}}</p>
                                        <p class="text-gray-700 font-semibold text-sm mb-2 truncate-2-lines">
                                            {{$p->name}}
                                        </p>
                                        <div class="mb-2">
                                            @if(\App\Helpers\ProductHelper::isHasSpecialOffer($p->discount))
                                                <p class="text-xs line-through orielly-text-primary font-semibold">
                                                    RP {{\App\Helpers\ProductHelper::formatPrice($p->price)}}
                                                </p>
                                            @endif
                                            <p class="text-md orielly-text-primary font-bold">
                                                <span class="text-xs mr-1">RP</span>
                                                <span>
                                                    {{\App\Helpers\ProductHelper::formatPrice(\App\Helpers\ProductHelper::priceAfterDiscount($p->price, $p->discount))}}
                                                </span>
                                            </p>
                                            <p class="text-gray-400 text-xs">{{\App\Helpers\ProductHelper::serializeNumOfSold($p->num_of_sold)}}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="mt-8 mb-12">
        <div class="mx-auto px-2.5 max-w-6xl">
            <div class="flex items-center mt-4">
                <p class="quick-sand text-2xl orielly-text-primary mb-6 font-bold">Paling Populer</p>
                <div class="ml-auto text-sm"><a href="/search?label=inDemand">
                        <span class="undefined orielly-text-primary hover:underline">
                            <span class="mr-2">Lihat lainnya</span>
                            <i class="fa fa-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="flex flex-wrap">
                @foreach($mostPopularProducts as $p)
                    <div class="md:w-2/12 p-1"><a href="/{{$p->name}}">
                            <div
                                class="bg-white rounded-md overflow-hidden shadow-md w-full hover:shadow-lg transition cursor-pointer"
                                style="min-height: 22rem;"
                            >
                                <div class="h-52 w-full" style="background-position: center center; background-size: cover; background-repeat: no-repeat; background-image: url('assets/products/{{$p->photos[0]->name}}');">
                                </div>
                                <div class="px-2 py-1">
                                    <p class="text-gray-500 text-xs mb-0">{{$p->merk}}</p>
                                    <p class="text-gray-700 font-semibold text-sm mb-2 truncate-2-lines">
                                        {{$p->name}}
                                    </p>
                                    <div class="mb-2">
                                        @if(\App\Helpers\ProductHelper::isHasSpecialOffer($p->discount))
                                            <p class="text-xs line-through orielly-text-primary font-semibold">
                                                RP {{\App\Helpers\ProductHelper::formatPrice($p->price)}}
                                            </p>
                                        @endif
                                        <p class="text-md orielly-text-primary font-bold">
                                            <span class="text-xs mr-1">RP</span>
                                            <span>
                                                    {{\App\Helpers\ProductHelper::formatPrice(\App\Helpers\ProductHelper::priceAfterDiscount($p->price, $p->discount))}}
                                                </span>
                                        </p>
                                        <p class="text-gray-400 text-xs">{{\App\Helpers\ProductHelper::serializeNumOfSold($p->num_of_sold)}}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="mt-8 mb-12">
        <div class="mx-auto px-2.5 max-w-6xl">
            <div class="flex items-center mt-4">
                <p class="quick-sand text-2xl orielly-text-primary mb-6 font-bold">Rekomendasi</p>
                <div class="ml-auto text-sm"><a href="/search">
                        <span class="undefined orielly-text-primary hover:underline">
                            <span class="mr-2">Lihat lainnya</span>
                            <i class="fa fa-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="flex flex-wrap">
                @foreach($recommendedProducts as $p)
                    <div class="md:w-2/12 p-1">
                        <a href="/{{$p->name}}">
                            <div
                                class="bg-white rounded-md overflow-hidden shadow-md w-full hover:shadow-lg transition cursor-pointer"
                                style="min-height: 22rem;"
                            >
                                <div class="h-52 w-full" style="background-position: center center; background-size: cover; background-repeat: no-repeat; background-image: url('assets/products/{{$p->photos[0]->name}}');">
                                </div>
                                <div class="px-2 py-1">
                                    <p class="text-gray-500 text-xs mb-0">{{$p->merk}}</p>
                                    <p class="text-gray-700 font-semibold text-sm mb-2 truncate-2-lines">
                                        {{$p->name}}
                                    </p>
                                    <div class="mb-2">
                                        @if(\App\Helpers\ProductHelper::isHasSpecialOffer($p->discount))
                                            <p class="text-xs line-through orielly-text-primary font-semibold">
                                                RP {{\App\Helpers\ProductHelper::formatPrice($p->price)}}
                                            </p>
                                        @endif
                                        <p class="text-md orielly-text-primary font-bold">
                                            <span class="text-xs mr-1">RP</span>
                                            <span>
                                                    {{\App\Helpers\ProductHelper::formatPrice(\App\Helpers\ProductHelper::priceAfterDiscount($p->price, $p->discount))}}
                                                </span>
                                        </p>
                                        <p class="text-gray-400 text-xs">{{\App\Helpers\ProductHelper::serializeNumOfSold($p->num_of_sold)}}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="border-t-4 bg-gray-50 orielly-border-primary text-sm">
        <div class="mx-auto px-2.5 max-w-6xl">
            <div class="flex pt-14 pb-16">
                <div class="w-2/12 pr-2">
                    <p class="text-gray-700 font-bold mb-4">O'rielly</p>
                    <ul class="p-0 m-0 list-none">
                        <li class="mb-4"><a href="/about"><span class="text-gray-500 mb-2">Tentang O'rielly</span></a></li>
                        <li class="mb-4"><a href="/contact"><span class="text-gray-500 mb-2">Hubungi Kami</span></a></li>
                    </ul>
                </div>
                <div class="w-3/12 pr-2">
                    <p class="text-gray-700 font-bold mb-4">Panduan</p>
                    <ul class="p-0 m-0 list-none">
                        <li class="mb-4"><a href="/terms"><span class="text-gray-500 mb-2">Syarat dan Ketentuan</span></a></li>
                        <li class="mb-4"><a href="/policies"><span class="text-gray-500 mb-2">Kebijakan Privasi</span></a></li>
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

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
