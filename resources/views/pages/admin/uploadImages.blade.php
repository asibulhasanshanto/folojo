<x-app-layout>
    <div class="container mt-10 px-4  sm:px-6  lg:px-8">
        {{-- create product button --}}
        <div class="flex justify-between items-center">
            <h2 class="text-2xl font-semibold text-gray-900">Upload Images</h2>
            <a href="{{ route('admin.product.show', ['product' => $product]) }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-3 rounded float-right ">go back
            </a>
        </div>

        <div class="p-4 sm:p-8 bg-white  shadow sm:rounded-lg">
            {{-- form to upload multiple images --}}
            <form action="{{ route('admin.product.image.upload', ['product' => $product]) }}" method="post"
                id="upload_images" class="w-full" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <h4 class="mb-3 font-bold">Upload Images</h4>
                        <input type="file" name="images[]" id="images" multiple
                            class="w-full border border-gray-300 p-2 rounded-md">
                    </div>
                    <div>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-3 rounded float-right">Upload
                            Images</button>
                    </div>
                </div>
            </form>

        </div>






</x-app-layout>
