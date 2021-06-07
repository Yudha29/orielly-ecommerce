<x-basic-layout>
    <x-slot name="title">Daftar</x-slot>
    <div class="shadow-md rounded-md mx-auto mt-36 bg-white relative" style="width: 950px;">
        <div class="absolute" style="top: -70px; left: 2rem;">
            <x-link url="/">
                <img class="w-36 -mt-5" src="/assets/logo-light.png" alt="logo">
            </x-link>
        </div>
        <div class="flex">
            <div class="w-5/12 p-8 rounded-l-sm my-4">
                <div class="mb-8">
                    <h1 class="quick-sand text-gray-700 text-3xl font-bold mb-3">Sign Up</h1>
                    <p class="text-gray-500 text-sm">
                        Have account?
                        <span class="ml-1">
                            <x-link url="/signin">sign in</x-link>
                        </span>
                    </p>
                </div>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <x-form.input
                        type="email"
                        name="email"
                        label="Email"
                        value="{{old('email')}}"
                        error=""
                        placeholder="Masukan email"
                    ></x-form.input>
                    <x-form.input
                        type="name"
                        name="name"
                        label="Nama"
                        value="{{old('name')}}"
                        error=""
                        placeholder="Masukan nama"
                    ></x-form.input>
                    <x-form.input
                        type="password"
                        name="password"
                        label="Password"
                        value="{{old('password')}}"
                        error=""
                        placeholder="Masukan password"
                    ></x-form.input>
                    <x-form.input
                        type="password"
                        name="password_confirmation"
                        label="Konfirmasi Password"
                        value="{{old('password_confirmation')}}"
                        error=""
                        placeholder="Konfirmasi password"
                    ></x-form.input>
                    <x-button type="submit">Sign up</x-button>
                </form>
            </div>
            <div class="w-7/12 overflow-hidden rounded-r-sm relative">
                <div
                    class="absolute top-0 right-0 left-0 bottom-0 w-full"
                    style="background-position: center center; background-repeat: no-repeat; background-size: cover; background-image: url('/assets/signin-signup-photo.jpg');"
                >
                </div>
            </div>
        </div>
    </div>
</x-basic-layout>

