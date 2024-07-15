<x-app-layout>
    <div class="container mt-10 px-4  sm:px-6  lg:px-8">
        {{-- create product button --}}
        <div class="flex justify-between items-center">
            <h2 class="text-2xl font-semibold text-gray-900">Edit Product</h2>
        </div>
        <div class="p-4 sm:p-8 bg-white  shadow sm:rounded-lg">
            {{-- a form with product name, price, description --}}
            <form action="{{ route('admin.product.update', ['product' => $product]) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="space-y-4 md:space-y-0 md:grid gap-4">
                    <div>
                        <label for="name" class="font-bold bn_text">Name</label>
                        <input type="text" name="name" id="name"
                            class="w-full p-2 border  @error('name') border-red-500 @enderror rounded-md"
                            value="{{ old('name') ? old('name') : $product->name }}" placeholder="Product Name">
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- extra info --}}

                    <div>
                        <label for="extra_info" class="font-bold bn_text">Extra Info</label>
                        <input type="text" name="extra_info" id="extra_info"
                            class="w-full p-2 border  rounded-md @error('extra_info') border-red-500 @enderror"
                            placeholder="Product Extra Info"
                            value="{{ old('extra_info') ? old('extra_info') : $product->extra_info }}">
                        @error('extra_info')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="price" class="font-bold bn_text">Price</label>
                        <input type="number" name="price" id="price"
                            class="w-full p-2 border  rounded-md @error('price') border-red-500 @enderror"
                            placeholder="Product Price" value="{{ old('price') ? old('price') : $product->price }}">
                        @error('price')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <label for="description" class="font-bold bn_text">Description</label>
                        <textarea name="description" id="description"
                            class="w-full p-2 border  rounded-md @error('description') border-red-500 @enderror" rows="5"
                            placeholder="Product Description">{{ old('description') ? old('description') : $product->description }}</textarea>

                        @error('description')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror

                    </div>
                    {{-- product code will be auto generated and editable --}}
                    <div>
                        <label for="product_code" class="font-bold bn_text">Product Code</label>
                        <input type="text" name="product_code" id="product_code"
                            class="w-full p-2 border rounded-md @error('product_code') border-red-500 @enderror"
                            placeholder="Product
                            Code"
                            value="{{ old('product_code') ? old('product_code') : $product->product_code }}">
                        @error('product_code')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-2">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-3 rounded">Update
                            Product</button>
                    </div>
                </div>
            </form>
        </div>





</x-app-layout>
