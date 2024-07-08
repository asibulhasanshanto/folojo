<x-app-layout>
    <div class="container  px-4  sm:px-6  lg:px-8">
        <div class="">
            <a href="{{ route('admin.product.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-3 rounded float-right ">Create
                Product</a>
        </div>
        <h2 class="text-3xl  font-bold tracking-tight bn_text ">আম</h2>

        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @foreach ($products as $product)
                {{-- single product --}}
                <a href="{{ route('admin.product.show', ['product' => $product->id]) }}"
                    class="group relative bg-white  rounded-b-md hover:scale-105 transition-all duration-200 cursor-pointer">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-t-md  lg:aspect-none  lg:h-48">
                        <img src="{{ asset('images/product.jpg') }}" alt="Front of men&#039;s Basic Tee in black."
                            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <div class=" flex flex-col items-center justify-center p-2">

                        <p class="mt-1 bn_text text-bold text-text_color text-center ">আম্রপালি আম - ১০ কেজি</p>
                        <p class="mt-1 bn_text text-bold text-sm text-text_color text-center ">(প্যাকেজিং ও ডেলিভারী সহ
                            )
                        </p>

                        <h3 class="bn_text font-bold text-2xl text-text_color">১৮০০/- টাকা </h3>


                    </div>
                </a>
            @endforeach


        </div>
        <div class="paginator mt-10 ">
            {{ $products->links() }}
        </div>
    </div>

</x-app-layout>
