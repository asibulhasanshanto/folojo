@extends('layouts.master')

@section('content')

<div class="bg-[#97c74b] min-h-screen  flex items-center justify-center">
    <div class="container mt-32 flex flex-col lg:flex-row justify-center items-center lg:justify-around">

        <!-- left part -->
        <div class="left relative ">
            <img src="{{ asset('images/about.png') }}" alt="logo" class="max-h-[600px] w-auto rounded-xl">
            <div class="absolute bottom-0 bg-white/60 justify-center flex items-center  rounded-b-xl w-full">
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="h-[70px] w-auto">
            </div>
        </div>

        <!-- right part -->
        <div class="  max-w-[400px] flex flex-col mb-20 mt-20 lg:mt-0 justify-center">
            <h1 class="bn_text font-bold text-4xl text-center lg:text-start md:text-5xl text-text_color">Folojo. সম্পর্কে</h1>
            <p class="bn_text text-center lg:text-start font-bold mt-10 text-text_color">কৃষিসমৃদ্ধ এই দেশে গ্রীষ্মকাল সহ সারা বছরজুড়ে প্রচুর বৈচিত্রপূর্ন ও রসাল সব মৌসুমি ফলের সমারোহ ঘটে। এসকল ফল শুধু সুস্বাদুই নয়, পুষ্টিগুণেও ভরপুর। তুমুল চাহিদার কারণে এই সেক্টরে ক্রেতা ও বিক্রেতার অভাব না হলেও, দুঃখজনকভাবে অভাব রয়েছে দায়বদ্ধতা ও স্বচ্ছতার।</p>
            <p class="bn_text text-center lg:text-start font-bold mt-5 text-text_color"> তাই ফলোজের লক্ষ্য হলো ক্রেতা ও বিক্রেতা উভয়কেই একই প্লাটফর্মের নিচে নিয়ে এনে স্বচ্ছতা ও দায়বদ্ধতা নিশ্চিত করা। দেশের বিভিন্ন প্রান্তের বিক্রতা হতে গুণগত মান, সময়মতো ডেলিভারী এবং ২৪/৭ গ্রাহক সেবার মাধ্যমে গ্রাহকের হাতে পন্য পৌছে দিতে আমরা অঙ্গীকারাবদ্ধ।</p>
        </div>

    </div>
</div>



@endsection