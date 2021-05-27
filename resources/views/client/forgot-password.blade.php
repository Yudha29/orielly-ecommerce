<x-basic-layout>
    <x-slot name="title">Masuk</x-slot>
    <div class="shadow-md w-96 rounded-md mx-auto mt-36 bg-white p-8 relative">
        <div class="absolute" style="top: -70px; left: 45%; transform: translate(-50%, 0px);">
            <a href="/">
          <span class="orielly-text-primary hover:underline">
            <img class="w-36 -mt-5" src="/assets/logo-light.png"alt="logo">
            </span>
            </a>
        </div>
        <div class="mb-8">
            <h1 class="quick-sand text-gray-700 text-3xl font-bold mb-3">Forgot Password</h1>
            <p class="text-gray-500 text-sm">We will send the verification code to your email</p>
        </div>
        <form action="#">
            <x-form.input
                type="email"
                name="email"
                label="Email"
                value=""
                error=""
                placeholder="Masukan Email"
            ></x-form.input>
            <div class="mt-4">
                <x-button type="submit">Get Verification Code</x-button>
            </div>
        </form>
    </div>
</x-basic-layout>
