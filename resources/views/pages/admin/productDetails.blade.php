<x-app-layout>
    <div class="container mt-10 px-4  sm:px-6  lg:px-8">
        {{-- create product button --}}
        <div class="flex justify-between items-center">
            <h2 class="text-2xl font-semibold text-gray-900">Product Details</h2>
            <a href="{{ route('admin.product.edit', ['product' => $product]) }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-3 rounded float-right ">Edit
                Product</a>
        </div>

        <div class="p-4 sm:p-8 bg-white  shadow sm:rounded-lg">
            <div class="">
                <h4 class="mb-3 font-bold">Product Images</h4>

                <div class=" w-full ">
                    <div action="" method="post" id="images_holder"
                        class=" w-full  grid md:grid-cols-2 lg:grid-cols-3 gap-4 relative"
                        enctype="multipart/form-data">
                        {{-- hidden product id field to access from js --}}
                        <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">


                        {{-- check if $product have images --}}
                        @if ($product->images->count() > 0)
                            @foreach ($product->images as $image)
                                <div class="h-48 w-auto rounded-md relative">
                                    <img src="{{ asset('images/products/' . $image->image) }}"
                                        alt="Front of men&#039;s Basic Tee in black."
                                        class="h-full w-full object-cover object-center rounded-md">

                                    {{-- a empty  form with  delete button --}}
                                    <form
                                        action="{{ route('admin.product.image.destroy', ['product' => $product, 'image' => $image]) }}"
                                        method="post" class="absolute right-0 bottom-0">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="image_id" value="{{ $image->id }}">
                                        <button href="/" type="submit"
                                            class="absolute bottom-2 right-2 bg-red-600 hover:bg-red-700 text-xs font-bold text-white px-2 py-1 rounded-md">Delete</button>
                                    </form>
                                </div>
                            @endforeach
                        @else
                            <p class="text-red-500 text-xs mt-1">No images found</p>
                        @endif


                        @csrf
                        <a id="image_input" href="{{ route('admin.product.image.upload', ['product' => $product]) }}"
                            for="image"
                            class=" rounded-full z-50 absolute h-10 w-10 right-0 -top-12  flex cursor-pointer text-3xl bg-blue-500 text-white hover:bg-blue-600  transition-all duration-300 items-center justify-center">
                            +

                        </a>
                    </div>





                </div>

            </div>
        </div>

        {{-- product infos --}}
        <div class="p-4 sm:p-8 bg-white  shadow sm:rounded-lg mt-3">
            {{-- create a table with name, price and product code --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <h4 class="mb-3 font-bold">Product Information</h4>
                    <table class="w-full">
                        <tr>
                            <td class="font-bold bn_text">Name</td>
                            <td>{{ $product->name }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold bn_text">Extra Info</td>
                            <td>{{ $product->extra_info }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold bn_text">Price</td>
                            <td>{{ $product->price }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold bn_text">Product Code</td>
                            <td>{{ $product->product_code }}</td>
                        </tr>

                        <tr>
                            <td class="font-bold bn_text">Clicks</td>
                            <td>{{ $product->clicks }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold bn_text">Buy Clicks</td>
                            <td>{{ $product->buy_clicks }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="mt-10">
                <h4 class="mb-3 font-bold">Product Description</h4>
                <p>{{ $product->description }}</p>
            </div>


        </div>
        {{-- delete form with delete button --}}
        <form action="{{ route('admin.product.destroy', ['product' => $product]) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="hidden" name="image_id" id="image_id">

            <button type="submit"
                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 my-3 rounded float-right">Delete
                Product</button>

        </form>




</x-app-layout>
