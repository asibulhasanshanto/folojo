<x-app-layout>
    <div class="container mt-10 px-4  sm:px-6  lg:px-8">
        {{-- create product button --}}
        <div class="flex justify-between items-center">
            <h2 class="text-2xl font-semibold text-gray-900">Blog</h2>
            <div class="">
                <a href="{{ route('admin.blog.edit', ['blog' => $blog]) }}"
                    class="bg-blue-500 hover:bg-blue-700 mr-3 text-white font-bold py-2 px-4 my-3 rounded float-right ">Edit
                    blog</a>
            </div>
        </div>


        <div class="p-4 sm:p-8 bg-white  shadow sm:rounded-lg">
            <h1 class="text_bn font-bold">{{ $blog->title }}</h1>
            <div class="mt-5">
                slug: {{ $blog->slug }}
            </div>
            {{-- id_publshed --}}
            <div class="mt-5">
                @if ($blog->is_published)
                    <span
                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        Published
                    </span>
                @else
                    <span
                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                        Not Published
                    </span>
                @endif
                {{-- publisehd at if published is true --}}
                @if ($blog->is_published)
                    <div class="">
                        Published at:
                        {{ Carbon\Carbon::parse($blog->published_at)->timezone('Asia/Dhaka')->format('M d, Y h:i a') }}
                    </div>
                @endif
            </div>
        </div>


        <div class="p-4 mt-4 sm:p-8 bg-white  shadow sm:rounded-lg">
            {!! $blog->content !!}
        </div>







</x-app-layout>
