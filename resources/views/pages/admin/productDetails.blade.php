<x-app-layout>
    <div class="container mt-10 px-4  sm:px-6  lg:px-8">
        <div class="p-4 sm:p-8 bg-white  shadow sm:rounded-lg">
            <div class="">
                <h4 class="mb-3 font-bold">Product Images</h4>
                <div class=" w-full grid grid-cols-3 gap-4">
                    <div class="h-48 w-auto rounded-md relative">
                        <img src="{{ asset('images/product.jpg') }}" alt="Front of men&#039;s Basic Tee in black."
                            class="h-full w-full object-cover object-center rounded-md">

                        {{-- delete button --}}
                        <button
                            class="absolute bottom-2 right-2 bg-red-600 hover:bg-red-700 text-xs font-bold text-white px-2 py-1 rounded-md">Delete</button>
                    </div>

                    <a
                        class="h-48 w-auto rounded-md flex cursor-pointer text-8xl bg-gray-200 text-gray-600 hover:bg-gray-300  transition-all duration-300 items-center justify-center">
                        +
                    </a>

                </div>

            </div>
        </div>

    </div>

</x-app-layout>
