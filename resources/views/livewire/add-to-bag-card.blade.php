<div class="border-gray-100 shadow-md w-3/12 rounded-md bg-white mr-4 p-4">
    <p class="text-gray-500 mb-4 font-bold text-lg quick-sand">Atur jumlah</p>
    <div class="mb-4 flex items-center"><span class="mr-6 text-sm text-gray-500 font-semibold">Jumlah</span>
        <div class="ml-auto">
            <div class="w-24 flex items-center border text-gray-600 py-1 px-2 rounded-md border-gray-200">
                <button class="focus:outline-none mr-auto" wire:click="decrement()">
                    <i class="fa fa-minus fa-sm"></i>
                </button>
                <span id="quantityText">{{ $quantity }}</span>
                <button class="focus:outline-none ml-auto" wire:click="increment()">
                    <i class="fa fa-plus fa-sm"></i>
                </button>
            </div>
        </div>
    </div>
    <hr>
    <div class="flex my-3">
        <span class="text-gray-500">Total</span>
        <span id="grandPrice" class="orielly-text-primary ml-auto font-bold">
            Rp{{\App\Helpers\ProductHelper::formatPrice(\App\Helpers\ProductHelper::priceAfterDiscount($product->price * $quantity, $product->discount))}}
        </span>
    </div>
    @if (\Illuminate\Support\Facades\Auth::check())
        <button class="rounded-md orielly-bg-primary text-white  w-full focus:outline-none py-2.5 px-4" wire:click="addToBag()">
            <i class="fa fa-shopping-bag fa-lg"></i>
            Masukan Tas
        </button>
    @else
        <a href="{{ route('sign-in') }}">
            <button class="rounded-md orielly-bg-primary text-white  w-full focus:outline-none py-2.5 px-4">
                Masuk
            </button>
        </a>
    @endif
</div>
