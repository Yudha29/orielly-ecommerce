<x-layout>
    <x-slot name="title">
        Orielly E-Commerce
    </x-slot>
    <x-slot name="navbarCategories">
        {{ $recommendedCategories }}
    </x-slot>
    <section class="mt-8 mb-12">
        <x-container>
            <div class="h-96 bg-gray-400 rounded-md bg-img" style="background-image: url('assets/illustration/Banner.jpg');"></div>
        </x-container>
    </section>
    <section class="mt-8 mb-12">
        <x-container>
            <p class="quick-sand text-2xl orielly-text-primary mb-6 font-bold">Cari kategori apa?</p>
            <div class="flex flex-wrap">
                @foreach($categories as $c)
                    <div class="w-2/12 p-1"><a href="/search?category={{$c->id}}">
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
        </x-container>
    </section>
    <section class="mt-8 mb-12">
        <x-container>
            <x-product-deck
                title="Diskon nih"
                url="/search?label=discount"
            >
                <div class="flex">
                    <div class="bg-gray-400 md:w-6/12 m-1 rounded-md bg-img"
                         style="background-image: url('assets/illustration/Discount.jpg');"></div>
                    <div class="flex flex-wrap w-6/12">
                        @foreach($hasSpecialOfferProducts as $p)
                            <div class="md:w-2/6 p-1">
                                <x-product-card
                                    id="{{$p->id}}"
                                    name="{{$p->name}}"
                                    merk="{{$p->merk}}"
                                    numOfSold="{{$p->num_of_sold}}"
                                    discount="{{$p->discount}}"
                                    price="{{$p->price}}"
                                    thumbnail="{{$p->photos[0]->name}}"
                                >
                                </x-product-card>
                            </div>
                        @endforeach
                    </div>
                </div>
            </x-product-deck>
        </x-container>
    </section>
    <section class="mt-8 mb-12">
        <x-container>
            <x-product-deck
                title="Paling Populer"
                url="/search?label=inDemand"
            >
                <div class="flex flex-wrap">
                    @foreach($mostPopularProducts as $p)
                        <div class="md:w-2/12 p-1">
                            <x-product-card
                                id="{{$p->id}}"
                                name="{{$p->name}}"
                                merk="{{$p->merk}}"
                                numOfSold="{{$p->num_of_sold}}"
                                discount="{{$p->discount}}"
                                price="{{$p->price}}"
                                thumbnail="{{$p->photos[0]->name}}"
                            >
                            </x-product-card>
                        </div>
                    @endforeach
                </div>
            </x-product-deck>
        </x-container>
    </section>
    <section class="mt-8 mb-12">
        <x-container>
            <x-product-deck
                title="Rekomendasi"
                url="/search?label=inDemand"
            >
                <div class="flex flex-wrap">
                    @foreach($recommendedProducts as $p)
                        <div class="md:w-2/12 p-1">
                            <x-product-card
                                id="{{$p->id}}"
                                name="{{$p->name}}"
                                merk="{{$p->merk}}"
                                numOfSold="{{$p->num_of_sold}}"
                                discount="{{$p->discount}}"
                                price="{{$p->price}}"
                                thumbnail="{{$p->photos[0]->name}}"
                            >
                            </x-product-card>
                        </div>
                    @endforeach
                </div>
            </x-product-deck>
        </x-container>
    </section>
</x-layout>
