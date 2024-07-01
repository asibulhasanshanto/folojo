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
    <div class="container mx-auto ">
        <div class="flex justify-center items-center h-screen">
            <div class="text-center">
                <h2>hjhl</h2>
            </div>
        </div>
    </div>
</div>

@endsection