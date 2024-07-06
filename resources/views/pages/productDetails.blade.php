@extends('layouts.master')

@section('content')

<div class="bg-[#d8e0a5] min-h-[80vh]">
    <div class="container pt-24">
        <!-- back button -->
        <a href="{{route('product.view')}}" class="bg-white hover:bg-white/70 p-2 flex w-8 h-8 sm:w-12 sm:h-12 rounded-full mt-1 mb-4 sm:mt-3 sm:mb-8 border border-text_color items-center justify-center">
            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
        </a>
        <div class="grid items-start grid-cols-1 lg:grid-cols-2 gap-6 max-lg:gap-12">

            <div class="w-full  lg:sticky top-0 flex gap-2">
                <div class="flex flex-col sm:space-y-3 w-8 sm:w-16 max-h-96 mb-4 gap-2 overflow-y-scroll no-scrollbar ">
                    <div class=" product_active rounded-md">
                        <img id="image_1" src="{{url('images/product.jpg')}}" alt="Product1" class="image_selector cursor-pointer rounded-md w-9 h-9 sm:w-16  sm:h-16 object-cover " />
                    </div>

                    <div class="  rounded-md">
                        <img id="image_2" src="{{url('images/product2.png')}}" alt="Product1" class="image_selector cursor-pointer rounded-md w-9 h-9 sm:w-16  sm:h-16 object-cover" />
                    </div>
                    <div class=" rounded-md">
                        <img id="image_3" src="{{url('images/product.jpg')}}" alt="Product1" class="image_selector cursor-pointer rounded-md  w-9 h-9 sm:w-16  sm:h-16 object-cover" />
                    </div>

                </div>
                <div class="w-4/5  rounded-md">
                    <img id="current_image" src="{{url('images/product2.png')}}" alt="Product" class="w-full max-h-[15rem] sm:max-h-[30rem] object-cover rounded-md " />
                </div>
            </div>

            <div>
                <h2 class=" text-2xl sm:text-3xl font-bold text-text_color text-bn_text "> আম্রপালি আম/Amrapali Mango - ১০ কেজি (প্যাকেজিং এবং ডেলিভারিসহ)</h2>

                <!-- pricing -->
                <div class="py-10">
                    <h3 class="text-bn_text text-text_color font-bold text-4xl sm:text-5xl">১৮০০/- টাকা </h3>
                </div>

                <!-- buy now -->
                <div class="flex gap-4 ">
                    <a href="#" class="text-white bg-text_color px-11 py-3 font-bold bn_text rounded-md hover:bg-text_color/90">এখনই কিনুন</a>

                </div>
                <div class="flex flex-col flex-wrap my-4">
                    <p class="font-bold text-text_color  ">Description:</p>
                    <p class="text-text_bn text-text_color">Dolorem et aut ratione iusto nostrum esse. Vel et animi consequatur id suscipit et omnis. Voluptas quas qui voluptatem adipisci in vel. Recusandae fuga temporibus eligendi eum.</p>

                </div>


            </div>
        </div>
    </div>
</div>

@endsection