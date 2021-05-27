<div>
    <a href="/{{$id}}">
        <div
            class="bg-white rounded-md overflow-hidden shadow-md w-full hover:shadow-lg transition cursor-pointer"
            style="min-height: 22rem;"
        >
            <div class="h-52 w-full" style="background-position: center center; background-size: cover; background-repeat: no-repeat; background-image: url('assets/products/{{$thumbnail}}');">
            </div>
            <div class="px-2 py-1">
                <p class="text-gray-500 text-xs mb-0">{{$merk}}</p>
                <p class="text-gray-700 font-semibold text-sm mb-2 truncate-2-lines">
                    {{$name}}
                </p>
                <div class="mb-2">
                    @if(\App\Helpers\ProductHelper::isHasSpecialOffer($discount))
                        <p class="text-xs line-through orielly-text-primary font-semibold">
                            RP {{\App\Helpers\ProductHelper::formatPrice($price)}}
                        </p>
                    @endif
                    <p class="text-md orielly-text-primary font-bold">
                        <span class="text-xs mr-1">RP</span>
                        <span>
                        {{\App\Helpers\ProductHelper::formatPrice(\App\Helpers\ProductHelper::priceAfterDiscount($price, $discount))}}
                    </span>
                    </p>
                    <p class="text-gray-400 text-xs">{{\App\Helpers\ProductHelper::serializeNumOfSold($numOfSold)}}</p>
                </div>
            </div>
        </div>
    </a>
</div>
