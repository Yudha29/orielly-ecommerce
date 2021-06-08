<x-layout>
    <x-slot name="title">
        Orielly E-Commerce
    </x-slot>
    <section class="my-8">
        <x-container>
            @livewire('bag')
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
                title="Diskon nih"
                url="/search/label=discount"
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
</x-layout>
