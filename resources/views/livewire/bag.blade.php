<div>
    <p class="quick-sand text-2xl orielly-text-primary font-bold">
        <i class="fa fa-shopping-bag"></i>
        <span class="ml-2">Tas Belanja</span>
    </p>
    @if (\Illuminate\Support\Facades\Auth::check())
        <div class="flex mt-6">
            <div class="w-9/12 mr-4 p-4 border border-gray-100 shadow-md bg-white" style="min-height: 32rem;">
                <div class="pb-2 text-gray-500 font-bold">Isi tas kamu</div>
                <div class="my-2 border-t-2 py-4 border-gray-200">
                    @if($products->count())
                        @foreach($products as $p)
                            <div class="flex mt-2">
                                <div class="flex mr-8 w-8/12">
                                    <div class="w-18">
                                        <div class="w-16 h-16 bg-gray-300 rounded-sm overflow-hidden" style="background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url('assets/products/{{ $p->product->photos[0]->name }}');">
                                        </div>
                                    </div>
                                    <div class="ml-4 self-center">
                                        <a href="/CK_Organic_Cotton_Platform_Sneakers">
                                            <p class="text-gray-500 text-xs mb-0">{{ $p->product->merk }}</p>
                                            <p class="text-gray-700 font-semibold text-sm mb-0.5">{{ $p->product->name }}</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="self-center mx-8 text-left w-2/12">
                                    <div>
                                        @if(\App\Helpers\ProductHelper::isHasSpecialOffer($p->product->discount))
                                            <p class="text-xs line-through text-gray-500 font-light mr-2">Rp{{ \App\Helpers\ProductHelper::formatPrice($p->product->price) }}</p>
                                        @endif
                                        <p class="text-sm orielly-text-primary font-bold"><span class="mr-1">Rp{{ \App\Helpers\ProductHelper::formatPrice(\App\Helpers\ProductHelper::priceAfterDiscount($p->product->price, $p->product->discount)) }}</span></p>
                                    </div>
                                </div>
                                <div class="self-center w-2/12 flex">
                                    <div class="ml-auto">
                                        <div class="w-24 flex items-center border text-gray-600 py-1 px-2 rounded-md border-gray-200">
                                            <button class="focus:outline-none mr-auto" wire:click="decrement('{{ $p->id }}')">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                            {{ $p->quantity }}
                                            <button class="focus:outline-none ml-auto" wire:click="increment('{{ $p->id }}')">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="flex flex-col items-center">
                            <img class="mt-4 w-5/12" src="assets/illustration/void.svg">
                            <p class="mt-8 text-gray-500 font-bold text-xl text-center">
                                Tas anda kosong <br>
                                Ayo tambahkan produk
                            </p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="w-3/12">
                <div class="bg-white border text-sm text-gray-500 border-gray-100 rounded-md p-4 shadow-md">
                    <p class="font-bold">Ringkasan Belanja</p>
                    <div class="border-b-2 border-gray-200 pt-4 py-2">
                        <table class="text-left">
                            <tr>
                                <th class="font-normal w-full py-2">Total Belanja</th>
                                <td class="text-right">Rp{{ \App\Helpers\ProductHelper::formatPrice($total) }}</td>
                            </tr>
                            <tr>
                                <th class="font-normal w-full py-2">Total Diskon</th>
                                <td class="text-right">Rp{{ \App\Helpers\ProductHelper::formatPrice($totalDiscount) }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="flex my-4">
                        <p>Total</p>
                        <p class="ml-auto orielly-text-primary font-bold">Rp{{ \App\Helpers\ProductHelper::formatPrice($grandTotal) }}</p>
                    </div>
                    @if($products->count())
                        <button type="button" class="w-full orielly-bg-primary mt-2 text-white rounded-md focus:outline-none py-2.5 px-4">Checkout</button>
                    @else
                        <button type="button" class="w-full bg-gray-300 mt-2 text-gray-500 rounded-md focus:outline-none py-2.5 px-4 cursor-not-allowed">Checkout</button>
                    @endif
                </div>
            </div>
        </div>
    @else
        <div class="flex flex-col items-center">
            <p class="mt-6 mb-12 text-gray-500 font-bold text-xl">Anda belum masuk</p>
            <img class="w-5/12" src="assets/illustration/void.svg">
            <a href="{{ route('sign-in') }}">
                <button class="mt-8 rounded-md border-2 orielly-text-primary orielly-border-primary w-full focus:outline-none py-2.5 px-4">
                    Masuk ke aplikasi
                </button>
            </a>
        </div>
    @endif
</div>
