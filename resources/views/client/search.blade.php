<x-layout>
    <x-slot name="title">
        Search Products
    </x-slot>
    <section class="mt-8 mb-12">
        <x-container>
            @if($products->count() > 0)
                <div class="flex flex-wrap">
                    @foreach($products as $p)
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
            @else
                <div class="flex flex-col items-center">
                    <img class="mt-4 w-5/12" src="assets/illustration/void.svg">
                    <p class="mt-8 text-gray-500 font-bold text-xl text-center">
                        Produk tidak ditemukan
                    </p>
                </div>
            @endif
        </x-container>
    </section>
</x-layout>
