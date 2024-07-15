<x-app-layout>
    <div class="container mt-10 px-4  sm:px-6  lg:px-8">
        {{-- create product button --}}
        <div class="flex justify-between items-center">
            <h2 class="text-2xl font-semibold text-gray-900">Create new Blogs</h2>
        </div>

        <div class="p-4 sm:p-8 bg-white  shadow sm:rounded-lg">
            {{-- a form with product name, price, description --}}
            <form action="{{ route('admin.blog.store') }}" method="post">
                @csrf
                @method('POST')
                <div class="space-y-4 md:space-y-0 md:grid gap-4">
                    <div>
                        <label for="name" class="font-bold bn_text">Title</label>
                        <input type="text" name="title" id="name"
                            class="w-full p-2 border  @error('name') border-red-500 @enderror rounded-md" value=""
                            placeholder="Blog Title">
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="slug" class="font-bold bn_text">Slug</label>
                        <input type="text" name="slug" id="slug"
                            class="w-full p-2 border  rounded-md @error('slug') border-red-500 @enderror"
                            placeholder="slug">
                        @error('slug')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="price" class="font-bold bn_text">Publised status</label>
                        <select name="published_at" id="countries"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option value="1">Yes</option>
                            <option value="0" selected>No</option>

                        </select>
                        @error('price')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <label for="description" class="font-bold bn_text">Description</label>
                        <textarea name="content" id="description"
                            class="w-full p-2 border  rounded-md @error('description') border-red-500 @enderror" rows="5"
                            placeholder="Blog Description"></textarea>

                        @error('description')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror

                    </div>
                    {{-- product code will be auto generated and editable --}}


                    <div class="col-span-2">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-3 rounded">Create
                            Blog</button>
                    </div>
                </div>
            </form>
        </div>

</x-app-layout>
