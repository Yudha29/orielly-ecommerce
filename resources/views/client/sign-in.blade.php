<x-basic-layout>
    <x-slot name="title">Masuk</x-slot>
    <div class="shadow-md rounded-md mx-auto mt-36 bg-white relative" style="width: 950px;">
        <div class="absolute" style="top: -70px; left: 2rem;">
            <x-link url="/">
                <img class="w-36 -mt-5" src="/assets/logo-light.png" alt="logo">
            </x-link>
        </div>
        <div class="flex">
            <div class="w-5/12 p-8 rounded-l-sm">
                <div class="text-right mb-8">
                    <x-link url="/">Skip</x-link>
                </div>
                <div class="mb-8">
                    <h1 class="quick-sand text-gray-700 text-3xl font-bold mb-3">Sign in</h1>
                    <p class="text-gray-500 text-sm">
                        Don't have account
                        <span class="ml-1">
                            <x-link url="/signup">sign up</x-link>
                        </span>
                    </p>
                </div>
                <form action="#">
                    <x-form.input
                        type="email"
                        name="email"
                        label="Email"
                        value=""
                        error=""
                        placeholder="Masukan email"
                    ></x-form.input>
                    <x-form.input
                        type="password"
                        name="password"
                        label="Password"
                        value=""
                        error=""
                        placeholder="Masukan password"
                    ></x-form.input>
                    <div class="flex items-center mb-8">
                        <div class="w-6/12">
                            <x-button type="submit">Sign in</x-button>
                        </div>
                        <div class="text-center w-6/12">
                            <x-link url="/forgot">Forgot Password</x-link>
                        </div>
                    </div>
                </form>
            </div>
            <div class="w-7/12 overflow-hidden rounded-r-sm relative">
                <div class="absolute top-0 right-0 left-0 bottom-0 w-full" style="background-position: center center; background-repeat: no-repeat; background-size: cover; background-image: url(&quot;/assets/signin-signup-photo.jpg&quot;);">
                </div>
            </div>
        </div>
    </div>
</x-basic-layout>

