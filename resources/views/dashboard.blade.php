<x-app-layout>
    <div class="container  px-4  sm:px-6  lg:px-8">
        <div class="py-8">
            <h2 class="text-2xl font-semibold mb-5 text-gray-800 ">Dashboard</h2>

            {{-- total products card --}}
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs  ">
                    <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full  ">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 2C5.03 2 1 6.03 1 11s4.03 9 9 9 9-4.03 9-9-4.03-9 -9-9zm0 16c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7zm0-2c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm-1-7h2v4h-2v-4zm0-2h2v2h-2v-2z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm">Total Products</p>
                        <p class="text-lg font-semibold text-gray-700 ">{{ $products_count }}</p>
                    </div>
                </div>

                {{-- total clicks card --}}
                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs  ">
                    <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full  ">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 2C5.03 2 1 6.03 1 11s4.03 9 9 9 9-4.03 9-9-4.03-9 -9-9zm0 16c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7zm-1-7h2v4h-2v-4zm0-2h2v2h-2v-2z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm">Total Clicks</p>
                        <p class="text-lg font-semibold text-gray-700 ">{{ $clicks_count }}</p>
                    </div>
                </div>

                {{-- buy_clicks card --}}
                <div class="flex items
                -center p-4 bg-white rounded-lg shadow-xs  ">
                    <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full  ">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 2C5.03 2 1 6.03 1 11s4.03 9 9 9 9-4.03 9-9-4.03-9 -9-9zm0 16c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7zm-1-7h2v4h-2v-4zm0-2h2v2h-2v-2z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm">Total Buy Clicks</p>
                        <p class="text-lg font-semibold text-gray-700 ">{{ $buy_clicks_count }}</p>
                    </div>
                </div>


            </div>
</x-app-layout>
