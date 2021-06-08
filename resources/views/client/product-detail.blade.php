<x-layout>
    <x-slot name="title">
        Orielly E-Commerce
    </x-slot>
    <x-slot name="navbarCategories">
        {{ $recommendedCategories }}
    </x-slot>

    <section class="my-8">
        <div class="mx-auto px-2.5 max-w-6xl">
            <div>
                <div class="flex items-start">
                    <div class="flex w-9/12 p-4 border-gray-100 shadow-md rounded-md bg-white mr-4">
                        <div class="w-5/12">
                            <div class="h-72 rounded-sm" style="background-position: center center; background-size: contain; background-repeat: no-repeat; background-image: url('assets/products/{{$product->photos[0]->name}}');">
                            </div>
                        </div>
                        <div class="w-7/12 ml-4">
                            <div>
                                <p class="text-gray-500 text-sm quick-sand mb-0">{{ $product->merk }}</p>
                                <p class="text-gray-700 font-semibold text-2xl mb-2 quick-sand">
                                    {{ $product->name }}
                                </p>
                                <p class="text-gray-400 text-sm">{{\App\Helpers\ProductHelper::serializeNumOfSold($product->num_of_sold)}}</p>
                            </div>
                            <div class="mt-4 mb-4">
                                @if(\App\Helpers\ProductHelper::isHasSpecialOffer($product->discount))
                                    <p class="text-md mb-1 line-through text-gray-500 font-light mr-6">
                                        RP {{\App\Helpers\ProductHelper::formatPrice($product->price)}}
                                    </p>
                                @endif
                                <p class="text-2xl orielly-text-primary font-bold">
                                    <span>
                                        Rp{{\App\Helpers\ProductHelper::formatPrice(\App\Helpers\ProductHelper::priceAfterDiscount($product->price, $product->discount))}}
                                    </span>
                                </p>
                            </div>
                            <div class="mb-8 mt-2 text-sm text-gray-600">
                                {{ $product->description }}
                            </div>
                        </div>
                    </div>
                    @livewire('add-to-bag-card', ['product' => $product])
                </div>
            </div>
        </div>
    </section>
    <section class="mt-8 mb-12">
        <x-container>
            <x-product-deck
                title="Diskon nih"
                url="/search/label=discount"
            >
                <div class="flex flex-wrap">
                    @foreach($hasSpecialOfferProducts as $p)
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
                title="Paling Populer"
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
