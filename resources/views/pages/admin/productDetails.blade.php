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
                    <form action="" method="post" id="images_holder"
                        class=" w-full  grid grid-cols-3 gap-4 relative" enctype="multipart/form-data">
                        {{-- check if $product have images --}}
                        @if ($product->images)
                            @foreach ($product->images as $image)
                                <div class="h-48 w-auto rounded-md relative">
                                    <img src="{{ asset('images/product.jpg') }}"
                                        alt="Front of men&#039;s Basic Tee in black."
                                        class="h-full w-full object-cover object-center rounded-md">

                                    <a href="/" type="button"
                                        class="absolute bottom-2 right-2 bg-red-600 hover:bg-red-700 text-xs font-bold text-white px-2 py-1 rounded-md">Delete</a>
                                </div>
                            @endforeach
                        @endif

                        @csrf
                        <label id="image_input" for="image"
                            class=" rounded-full z-50 absolute h-10 w-10 right-0 bottom-0  flex cursor-pointer text-3xl bg-blue-500 text-white hover:bg-blue-600  transition-all duration-300 items-center justify-center">
                            +
                            <input type="file" name="image" id="image" class="hidden">
                        </label>
                    </form>


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
                            <td class="font-bold bn_text">Price</td>
                            <td>{{ $product->price }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold bn_text">Product Code</td>
                            <td>{{ $product->product_code }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="mt-10">
                <h4 class="mb-3 font-bold">Product Description</h4>
                <p>{{ $product->description }}</p>
            </div>

        </div>

</x-app-layout>
