<footer class="shadow bg-[#2f4e37]">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="#" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="h-[50px] w-auto">
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="{{url('/about')}}" class="hover:underline me-4 md:me-6">About Us</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Blogs</a>
                </li>

            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="#" class="hover:underline">Folojo</a>. All Rights Reserved.</span>
    </div>
</footer>