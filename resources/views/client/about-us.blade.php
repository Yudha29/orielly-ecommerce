<x-layout>
    <x-slot name="title">
        About us
    </x-slot>
    <x-slot name="navbarCategories">
        {{ $recommendedCategories }}
    </x-slot>
    <section class="my-8">
        <x-container>
            <div class="flex mb-32">
                <div class="w-5/12 flex justify-center items-center">
                    <img src="/assets/logo-light.png" alt="logo">
                </div>
                <div class="w-7/12 text-gray-600">
                    <p class="quick-sand text-xl orielly-text-primary font-bold my-4">Tentang kami</p>
                    <p>Orielly adalah E-Commerce yang menjual berbagai jenis busana seperti sepatu, kemeja, kacamata dan lainnya
                        dari berbagai merk-merk dan dengan jaminan busana-busana yang kami jual 100% adalah original</p>
                </div>
            </div>
            <div class="mb-32">
                <p class="quick-sand text-center text-xl orielly-text-primary font-bold my-12">Mengapa Kami</p>
                <div class="flex">
                    <div class="w-1/3">
                        <img class="w-6/12 mx-auto mb-16" src="/assets/illustration/Secure.svg" alt="Secure">
                        <p class="font-bold text-gray-500 text-center">Aman</p>
                    </div>
                    <div class="w-1/3">
                        <img class="w-6/12 mx-auto mb-16" src="/assets/illustration/Time.svg" alt="Speed">
                        <p class="font-bold text-gray-500 text-center">Tepat waktu</p>
                    </div>
                    <div class="w-1/3">
                        <img class="w-6/12 mx-auto mb-16" src="/assets/illustration/World.svg" alt="World-wide">
                        <p class="font-bold text-gray-500 text-center">Pengiriman dimana saja</p>
                    </div>
                </div>
            </div>
        </x-container>
    </section>
</x-layout>
