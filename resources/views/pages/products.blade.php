@extends('layouts.master')

@section('content')
    <div class="bg-[#d8e0a5] min-h-[80vh]">
        <div class="container  px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-5xl mt-10 font-bold tracking-tight bn_text ">আম</h2>

            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($products as $product)
                    {{-- single product --}}
                    <a href="{{ route('product.show', ['product' => $product->id]) }}"
                        class="group relative bg-[#faf3e6]  rounded-b-md hover:scale-105 transition-all duration-200 cursor-pointer">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-t-md  lg:aspect-none  lg:h-80">
                            @if ($product->images->count() > 0)
                                <img src="{{ asset('images/products/' . $product->images->first()->image) }}"
                                    alt="Front of men&#039;s Basic Tee in black."
                                    class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                            @else
                                <img src="{{ asset('images/products/default.jpg') }}"
                                    alt="Front of men&#039;s Basic Tee in black."
                                    class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                            @endif
                        </div>
                        <div class=" flex flex-col items-center justify-center p-2">

                            <p class="mt-1 bn_text text-bold text-text_color text-center ">{{ $product->name }}</p>
                            <p class="mt-1 bn_text text-bold text-sm text-text_color text-center ">
                                {{ $product->extra_info }}
                            </p>

                            <h3 class="bn_text font-bold text-2xl text-text_color">{{ $product->price }}/- টাকা </h3>


                        </div>
                    </a>
                @endforeach


            </div>
            <div class="paginator mt-10 ">
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection
