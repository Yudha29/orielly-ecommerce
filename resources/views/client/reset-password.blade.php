<x-basic-layout>
    <x-slot name="title">Ganti Password</x-slot>
    <div class="shadow-md w-96 rounded-md mx-auto mt-36 bg-white p-8 relative">
        <div class="absolute" style="top: -70px; left: 45%; transform: translate(-50%, 0px);">
            <x-link url="/">
                <img class="w-36 -mt-5" src="/assets/logo-light.png" alt="logo">
            </x-link>
        </div>
        <div class="mb-8">
            <h1 class="quick-sand text-gray-700 text-3xl font-bold mb-3">Reset Password</h1>
            <p class="text-gray-500 text-sm">Please Enter and confirm your new password</p>
        </div>
        <form action="#">
            <x-form.input
                type="password"
                name="password"
                label="Password"
                value=""
                error=""
                placeholder="Masukan password"
            ></x-form.input>
            <x-form.input
                type="password"
                name="password"
                label="Konfirmasi Password"
                value=""
                error=""
                placeholder="Konfirmasikan password"
            ></x-form.input>
            <div class="mt-4">
                <x-button type="submit">Reset Password</x-button>
            </div>
        </form>
    </div>
</x-basic-layout>
