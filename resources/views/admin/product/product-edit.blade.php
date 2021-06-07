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
                    <h2 class="text-2xl font-bold mt-4">Edit Produk</h2>
                    <form enctype="multipart/form-data" method="POST" action="{{ route('admin.product.update', $product->id) }}">
                        <div class="pt-4">
                            <label for="name" class="font-bold">Name</label>
                            <input id="name" type="text" name="name" class="w-full my-2 rounded-md border border-gray-300" placeholder="Enter name" value="{{old('name', $product->name)}}" required>
                        </div>
                        <div class="pt-4">
                            <label for="merk" class="font-bold">Merk</label>
                            <input id="merk" type="text" name="merk" class="w-full my-2 rounded-md border border-gray-300" placeholder="Enter merk" value="{{old('merk', $product->merk)}}" required>
                        </div>
                        <div class="pt-4">
                            <label for="description" class="font-bold">Description</label>
                            <textarea id="description" class="w-full my-2 rounded-md border border-gray-300" name="description" placeholder="Enter description" rows="6" required>{{old('description', $product->description)}}</textarea>
                        </div>
                        <div class="w-6/12">
                            <div class="flex">
                                <div class="pt-4">
                                    <label for="price" class="font-bold block">Price</label>
                                    <input id="price" type="number" min="0" name="price" class="my-2 rounded-md border border-gray-300" placeholder="Enter price" value="{{old('price', $product->price)}}" required>
                                </div>
                                <div class="pt-4 ml-4">
                                    <label for="discount" class="font-bold block">Discount</label>
                                    <select  id="discount"  name="discount" class="my-2 rounded-md border border-gray-300" required>
                                        <option {{old('discount', $product->discount) == "0" ? 'selected' : ''}} value="0">0%</option>
                                        <option {{old('discount', $product->discount) == "0.1" ? 'selected' : ''}} value="0.1">10%</option>
                                        <option {{old('discount', $product->discount) == "0.2" ? 'selected' : ''}} value="0.2">20%</option>
                                        <option {{old('discount', $product->discount) == "0.3" ? 'selected' : ''}} value="0.3">30%</option>
                                        <option {{old('discount', $product->discount) == "0.4" ? 'selected' : ''}} value="0.4">40%</option>
                                        <option {{old('discount', $product->discount) == "0.5" ? 'selected' : ''}} value="0.5">50%</option>
                                    </select>
                                </div>
                                <div class="pt-4 ml-4">
                                    <label for="category" class="font-bold block">Kategori</label>
                                    <select id="category"  name="category" class="my-2 rounded-md border border-gray-300" required>
                                        @foreach($categories as $c)
                                            <option {{old('category', $product->categories[0]->id) == $c->id ? 'selected' : ''}} value={{$c->id}}>{{$c->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="pt-4">
                                <label for="thumbnail" class="font-bold block">Thumbnail</label>
                                <input id="thumbnail" accept="image/*" type="file" min="0" name="thumbnail" class="my-2">
                            </div>
                            <input type="hidden" value="{{csrf_token()}}" name="_token">
                            <input type="hidden" value="PATCH" name="_method">
                            <div class="pt-4">
                                <button type="submit" class="flex items-center bg-green-200 rounded-md text-green-900 font-bold px-3 py-2">
                                    <i class="fa fa-pencil-alt mr-2"></i>
                                    Edit Product
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
