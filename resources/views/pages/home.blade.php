@extends('layouts.master')

@section('styles')
    <style>
        .background-home {
            background-image: url("{{ asset('images/home_bg.png') }}");
        }
    </style>
@endsection

@section('content')
    <div class="background-home">
    </div>
    <!-- hero section -->
    <div class="container mx-auto md:min-h-screen ">
        <div class="hero_section flex flex-col items-center">
            <h1
                class="text-text_color bn_text font-bold text-4xl sm:text-6xl md:text-7xl xl:text-8xl text-center mt-32 md:mt-60">
                রসালো আমের স্বাদে</h1>
            <h1 class="text-text_color bn_text font-bold text-4xl sm:text-6xl md:text-7xl xl:text-8xl text-center md:mt-10">
                মুগ্ধতার ছোঁয়া</h1>
            <h3 class="bn_text text-text_color text-center text-lg sm:text-xl md:text-2xl leading-10 mt-16 md:mt-32">সরাসরি
                বাগান থেকে তাজা ও সুস্বাদু আম সংগ্রহ করে <br>সময়মতো ও স্বচ্ছতার সাথে আপনাদের কাছে পৌঁছে দিতে প্রতিশ্রুতিবদ্ধ
            </h3>
            <a href="https://www.facebook.com/Foolojo?mibextid=ZbWKwL" target="_blank"
                class="text-white bg-text_color mt-28 px-11 py-3 font-bold bn_text rounded-md hover:bg-text_color/90">এখনই
                কিনুন</a>
        </div>
    </div>

    <!-- order method -->
    <div class="order_method bg-[#a7d65b] mt-20 md:mt-0">
        <div class="container pb-20 pt-16">
            <h2 class="bn_text font-bold text-4xl md:text-5xl text-center text-text_color">অর্ডার প্রক্রিয়া</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-4 gap-y-5 mt-10">
                <!-- step 1 -->
                <div class="grid_item w-full bg-white rounded-md flex items-center  flex-col p-5 relative min-h-[350px]">
                    <img src="{{ asset('images/first.png') }}" alt="choose_product" class="h-[100px] w-auto">
                    <h3 class="text-text_color bn_text font-bold text-2xl mt-5">অর্ডার কনফার্মেশন</h3>
                    <p class="text-text_color bn_text text-center mt-3 font-bold">আপনার পছন্দের আমটি ক্রয় করতে, আমাদের
                        ফেসবুক পেইজে আমের নাম ও কাঙ্খিত পরিমাণ জানিয়ে ইনবক্স করুন। আমাদের প্রতিনিধি আপনার নিকট হতে সকল
                        প্রয়োজনীয় তথ্য সংগ্রহ করে অর্ডারটি কনফার্ম করবেন।</p>
                    <h2 class="bn_text font-bold text-6xl text-text_color absolute top-16 right-10">০১</h2>
                </div>

                <!-- step 2 -->
                <div class="grid_item w-full bg-white rounded-md flex items-center  flex-col p-5 relative min-h-[350px]">
                    <img src="{{ asset('images/second.png') }}" alt="choose_product" class="h-[100px] w-auto">
                    <h3 class="text-text_color bn_text font-bold text-2xl mt-5">আম সংগ্রহ</h3>
                    <p class="text-text_color bn_text text-center mt-3 font-bold">অর্ডার কনফার্ম করার পরে আমাদের প্রতিনিধিদল
                        কতৃক চাহিদা অনুযায়ী নিজস্ব বাগান হতে সর্বোচ্চ মান, স্বাদ ও ওজন নিশ্চিত করে আম সংগ্রহ করা হবে।</p>
                    <h2 class="bn_text font-bold text-6xl text-text_color absolute top-16 right-10">০২</h2>
                </div>

                <!-- step 3 -->
                <div class="grid_item w-full bg-white rounded-md flex items-center  flex-col p-5 relative min-h-[350px]">
                    <img src="{{ asset('images/third.png') }}" alt="choose_product" class="h-[100px] w-auto">
                    <h3 class="text-text_color bn_text font-bold text-2xl mt-5">সুরক্ষিত প্যাকেজিং</h3>
                    <p class="text-text_color bn_text text-center mt-3 font-bold">আম সংগ্রহের পর তার সুরক্ষিত ডেলিভারীর জন্য
                        সর্বোচ্চ মানের প্যাকেজিং নিশ্চিত করা হয়।</p>
                    <h2 class="bn_text font-bold text-6xl text-text_color absolute top-16 right-10">০৩</h2>
                </div>

                <!-- step 4 -->
                <div class="grid_item w-full bg-white rounded-md flex items-center  flex-col p-5 relative min-h-[350px]">
                    <img src="{{ asset('images/fourth.png') }}" alt="choose_product" class="h-[100px] w-auto">
                    <h3 class="text-text_color bn_text font-bold text-2xl mt-5">কুরিয়ার বুকিং</h3>
                    <p class="text-text_color bn_text text-center mt-3 font-bold">প্যাকেজিংয়ের পরে আপনার নির্বাচিত কুরিয়ার
                        সার্ভিসে আমরা আপনার আম ডেলিভারীর জন্য বুকিং করবো।</p>
                    <h2 class="bn_text font-bold text-6xl text-text_color absolute top-16 right-10">০৪</h2>
                </div>

                <!-- step 5 -->
                <div class="grid_item w-full bg-white rounded-md flex items-center  flex-col p-5 relative min-h-[350px]">
                    <img src="{{ asset('images/fifth.png') }}" alt="choose_product" class="h-[100px] w-auto">
                    <h3 class="text-text_color bn_text font-bold text-2xl mt-5">কুরিয়ার কমফার্মেশন</h3>
                    <p class="text-text_color bn_text text-center mt-3 font-bold">কুরিয়ার বুকিংয়ের সাথে সাথে ফলোজের তরফ থেকে
                        আপনাকে বুকিং নিশ্চিত করা হবে এবং বুকিং স্লিপের একটি কপি ট্র্যাকিং নাম্বারসহ সরবরাহ করা হবে।</p>
                    <h2 class="bn_text font-bold text-6xl text-text_color absolute top-16 right-10">০৫</h2>
                </div>

                <!-- step 6 -->
                <div class="grid_item w-full bg-white rounded-md flex items-center  flex-col p-5 relative min-h-[350px]">
                    <img src="{{ asset('images/fifth.png') }}" alt="choose_product" class="h-[100px] w-auto">
                    <h3 class="text-text_color bn_text font-bold text-2xl mt-5">ডেলিভারী নিশ্চিতকরণ</h3>
                    <p class="text-text_color bn_text text-center mt-3 font-bold">কুরিয়ার বুকিং থেকে শুরু করে ডেলিভারী
                        তারিখ, অনাকাঙ্ক্ষিত বিলম্ব বা যেকোন জটিলতায় ফলোজ টিম আপনার পাশে থাকবে ও ডেলিভারী নিশ্চিত করবে।
                    </p>
                    <h2 class="bn_text font-bold text-6xl text-text_color absolute top-16 right-10">০৬</h2>
                </div>


            </div>
        </div>
    </div>
@endsection
