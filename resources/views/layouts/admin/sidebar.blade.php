<!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
<div id="mobile_sidebar" class="relative z-40 hidden lg:hidden" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

    <div class="fixed inset-0 z-40 flex">

        <div class="relative flex w-full max-w-xs flex-1 flex-col bg-white pt-5 pb-4">

            <div class="absolute top-0 right-0 -mr-12 pt-2">
                <button id="mobile_sidebar_close" type="button" class="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <span class="sr-only">Close sidebar</span>
                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="flex flex-shrink-0 items-center px-4">
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            </div>
            @include('layouts.admin.sidebar_menu')
        </div>

        <div class="w-14 flex-shrink-0">
            <!-- Dummy element to force sidebar to shrink to fit close icon -->
        </div>
    </div>
</div>


<!-- Static sidebar for desktop -->
<div class="hidden lg:fixed lg:inset-y-0 lg:flex lg:w-64 lg:flex-col">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex flex-grow flex-col overflow-y-auto border-r border-gray-200 bg-white pt-5">
        <div class="flex flex-shrink-0 items-center px-4">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
        </div>
        @include('layouts.admin.sidebar_menu')

    </div>
</div>