<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <div class="py-12 text-sm text-gray-700">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <div class="flex items-center">
                        <h2 class="text-2xl font-bold mt-4">All Produk</h2>
                        <a class="ml-auto" href="{{ route('admin.product.create') }}">
                            <button class="flex items-center bg-blue-200 rounded-md text-blue-900 font-bold px-3 py-2">
                                <i class="fa fa-plus mr-2"></i>
                                Add Product
                            </button>
                        </a>
                    </div>
                    <table class="w-full text-left my-8">
                        <thead>
                            <tr class="border-b border-gray-300">
                                <th class="font-bold p-2">No</th>
                                <th class="font-bold p-2">Name</th>
                                <th class="font-bold p-2">Price</th>
                                <th class="font-bold p-2">Discount</th>
                                <th class="font-bold p-2">Merk</th>
                                <th class="font-bold p-2">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $i => $p)
                            <tr class="border-b border-gray-300">
                                <td class="py-3 px-2">{{$i+1}}</td>
                                <td class="py-3 px-2 w-full">{{$p->name}}</td>
                                <td class="py-3 px-2 whitespace-nowrap">RP {{\App\Helpers\ProductHelper::formatPrice($p->price)}}</td>
                                <td class="py-3 px-2 text-center">
                                    <div class="bg-red-200 text-red-700 py-1 px-2 inline-block rounded-md">
                                        {{\App\Helpers\ProductHelper::formatDiscount($p->discount)}}
                                    </div>
                                </td>
                                <td class="py-3 px-2">{{$p->merk}}</td>
                                <td class="py-3 px-2">
                                    <div class="flex">
                                        <button class="flex items-center bg-gray-200 rounded-md text-gray-900 font-bold px-2 py-1">
                                            <i class="fa fa-eye mr-2"></i>
                                            View
                                        </button>
                                        <a href="{{ route('admin.product.edit', $p->id) }}">
                                            <button class="flex items-center ml-2 bg-yellow-200 rounded-md text-yellow-900 font-bold px-2 py-1">
                                                <i class="fa fa-pencil-alt mr-2"></i>
                                                Edit
                                            </button>
                                        </a>
                                        <form action="{{route('admin.product.destroy', $p->id)}}" method="POST">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="flex items-center ml-2 bg-red-200 rounded-md text-red-900 font-bold px-2 py-1">
                                                <i class="fa fa-trash-alt mr-2"></i>
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
