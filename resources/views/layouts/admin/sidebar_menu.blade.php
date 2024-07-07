<div class="mt-5 h-0 flex-1 overflow-y-auto">
    <nav class="space-y-1 px-2">
        <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
        {{-- check if current route is dasboard --}}

        <a href="{{ route('dashboard') }}"
            class="{{ Route::currentRouteName() == 'dashboard' ? 'bg-gray-100' : '' }} text-gray-900 group flex items-center rounded-md py-2 px-2 text-base font-medium">
            <!-- Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500" -->
            <svg class="text-gray-500 mr-4 h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
            Dashboard
        </a>

        <a href="#"
            class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center rounded-md py-2 px-2 text-base font-medium">
            <svg class="text-gray-400 group-hover:text-gray-500 mr-4 h-6 w-6 flex-shrink-0" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
            </svg>
            Users
        </a>


        <a href="{{ route('admin.product.view') }}"
            class="{{ Str::contains(Route::currentRouteName(), 'product') ? 'bg-gray-100' : '' }} text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center rounded-md py-2 px-2 text-base font-medium">
            <svg class="text-gray-400 group-hover:text-gray-500 mr-4 h-6 w-6 flex-shrink-0"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
            </svg>

            Products
        </a>
        <a href="#"
            class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center rounded-md py-2 px-2 text-base font-medium">

            <svg class="text-gray-400 group-hover:text-gray-500 mr-4 h-6 w-6 flex-shrink-0"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
            </svg>


            Blogs
        </a>

    </nav>
</div>
