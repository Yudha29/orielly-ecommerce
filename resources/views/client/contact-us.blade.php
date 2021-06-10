<x-layout>
    <x-slot name="title">
        Hubungi Kami
    </x-slot>
    <x-slot name="navbarCategories">
        {{ $recommendedCategories }}
    </x-slot>
    <section id="contact" class="mb-32">
        <x-container>
            <p class="quick-sand text-center text-xl orielly-text-primary font-bold my-12">Hubungi Kami</p>
            <div class="flex">
                <div class="w-5/12 pr-8 border-r-2 border-gray-400">
                    <form action="#">
                        <x-form.input
                            type="text"
                            name="name"
                            label="Nama"
                            value=""
                            error=""
                            placeholder="Masukan nama"
                        ></x-form.input>
                        <x-form.input
                            type="email"
                            name="email"
                            label="Email"
                            value=""
                            error=""
                            placeholder="Masukan email"
                        ></x-form.input>
                        <x-form.textarea
                            name="message"
                            label="Pesan"
                            value=""
                            error=""
                            placeholder="Masukan pesan"
                        ></x-form.textarea>
                        <div class="flex items-center mb-8">
                            <button type="submit" class="orielly-bg-primary text-white rounded-md focus:outline-none py-2 px-3">
                                <i class="fa fa-paper-plane fa-sm"></i>
                                <span class="ml-2 text-sm">Kirim</span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="w-7/12 text-gray-600 pl-8">
                    <ul>
                        <li class="flex items-center">
                            <div class="w-10 my-3">
                               <i class="fa fa-map-marked fa-lg"></i>
                            </div>
                            <span>Jl. New terbaru paling baru No -1 Sebelah kawah Hellas, Planet Mars</span>
                        </li>
                        <li class="flex items-center">
                            <div class="w-10 my-3">
                                <i class="fa fa-phone-alt fa-lg"></i>
                            </div>
                            <span>-62 6390-6390-6390</span>
                        </li>
                        <li class="flex items-center">
                            <div class="w-10 my-3">
                                <i class="fa fa-envelope fa-lg"></i>
                            </div>
                            <span>cs@orielly.com</span>
                        </li>
                    </ul>
                </div>
            </div>
        </x-container>
    </section>
</x-layout>
