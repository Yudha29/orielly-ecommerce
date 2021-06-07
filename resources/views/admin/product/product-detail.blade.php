<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <div class="py-12 text-sm text-gray-700">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex p-6">
                    <div class="w-5/12">
                        <div class="h-72 rounded-sm" style="background-position: center center; background-size: contain; background-repeat: no-repeat; background-image: url('/assets/products/{{$product->photos[0]->name}}');">
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
                            <p class="text-2xl text-purple-600 font-bold">
                                <span>
                                    Rp{{\App\Helpers\ProductHelper::formatPrice(\App\Helpers\ProductHelper::priceAfterDiscount($product->price, $product->discount))}}
                                </span>
                            </p>
                        </div>
                        <div class="mb-8 mt-2 text-sm text-gray-600">
                            {{ $product->description }}
                        </div>
                        <div class="flex mb-8">
                            @foreach($product->categories as $c)
                                <div class="bg-purple-200 text-purple-700 font-bold py-1 px-2 mr-2 rounded-md">
                                    {{$c->name}}
                                </div>
                            @endforeach
                        </div>
                        <hr />
                        <div class="flex mt-4">
                            <p class="font-bold">Options</p>
                            <a href="{{ route('admin.product.edit', $product->id) }}" class="ml-auto">
                                <button class="flex items-center ml-2 bg-yellow-200 rounded-md text-yellow-900 font-bold px-2 py-1">
                                    <i class="fa fa-pencil-alt mr-2"></i>
                                    Edit
                                </button>
                            </a>
                            <form action="{{route('admin.product.destroy', $product->id)}}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="flex items-center ml-2 bg-red-200 rounded-md text-red-900 font-bold px-2 py-1">
                                    <i class="fa fa-trash-alt mr-2"></i>
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
