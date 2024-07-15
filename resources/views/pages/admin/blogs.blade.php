<x-app-layout>
    <div class="container  px-4  sm:px-6  lg:px-8">
        <div class="">
            <a href="{{ route('admin.blog.create') }}"
                class="bg-blue-500 hover:bg-blue-700 mr-3 text-white font-bold py-2 px-4 my-3 rounded float-right ">Create
                new blog</a>
        </div>
        <div class="bg-white mt-10 py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Blogs</h2>

                </div>
                <div
                    class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    @foreach ($blogs as $blog)
                        <article class="flex max-w-xl flex-col items-start justify-between">
                            <div class="flex items-center gap-x-4 text-xs">
                                <time datetime="2020-03-16" class="text-gray-500">
                                    {{ $blog->created_at->format('M d, Y') }}
                                </time>

                            </div>
                            <div class="group relative">
                                <h3
                                    class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        {{ $blog->title }}
                                    </a>
                                </h3>
                                <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">

                                    {{-- show first 100 words of content --}}
                                    {{ substr($blog->content, 0, 200) }}...

                                </p>
                            </div>

                        </article>
                    @endforeach

                </div>
                <div class="paginator mt-10 ">
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>


    </div>

</x-app-layout>
