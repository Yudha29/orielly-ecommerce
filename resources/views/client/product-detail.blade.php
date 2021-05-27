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
                    <div class="border-gray-100 shadow-md w-3/12 rounded-md bg-white mr-4 p-4">
                        <p class="text-gray-500 mb-4 font-bold text-lg quick-sand">Atur jumlah</p>
                        <div class="mb-4 flex items-center"><span class="mr-6 text-sm text-gray-500 font-semibold">Jumlah</span>
                            <div class="ml-auto">
                                <div class="w-24 flex items-center border text-gray-600 py-1 px-2 rounded-md border-gray-200">
                                    <button class="focus:outline-none mr-auto" onclick="decrement()">
                                        <i class="fa fa-minus fa-sm"></i>
                                    </button>
                                    <span id="quantityText">1</span>
                                    <button class="focus:outline-none ml-auto" onclick="increment()">
                                        <i class="fa fa-plus fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="flex my-3">
                            <span class="text-gray-500">Total</span>
                            <span id="grandPrice" class="orielly-text-primary ml-auto font-bold">
                                Rp{{\App\Helpers\ProductHelper::formatPrice(\App\Helpers\ProductHelper::priceAfterDiscount($product->price, $product->discount))}}
                            </span>
                        </div>
                        <button class="rounded-md orielly-bg-primary text-white  w-full focus:outline-none py-2.5 px-4">
                            <i class="fa fa-shopping-bag fa-lg"></i>
                            Masukan Tas
                        </button>
                    </div>
                </div>
                <div>
                    <input id="quantity" type="number" style="display: none" value="1">
                    <input id="productPrice" type="number" style="display: none" value="{{\App\Helpers\ProductHelper::priceAfterDiscount($product->price, $product->discount)}}">
                </div>
            </div>
        </div>
    </section>

    <x-slot name="script">
        <script>
            var grandPrice = $('#grandPrice');
            var quantityInput = $('#quantity');
            var productPrice = $('#productPrice');
            var quantityText = $('#quantityText');

            function formatPrice(x) {
                return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ".");
            }

            function increment() {
                var quantity = Number(quantityInput.val());
                var price = Number(productPrice.val());
                quantityInput.val(quantity + 1);
                quantityText.text(quantityInput.val());
                var formattedPrice = formatPrice((price * (quantity + 1)));
                grandPrice.text('Rp'+formattedPrice);
            }

            function decrement() {
                var quantity = Number(quantityInput.val());
                var price = Number(productPrice.val());

                if (quantity > 1) {
                    quantityInput.val(quantity - 1);
                    quantityText.text(quantityInput.val());
                    var formattedPrice = formatPrice((price * (quantity - 1)));
                    grandPrice.text('Rp'+formattedPrice);
                }
            }
        </script>
    </x-slot>
</x-layout>
