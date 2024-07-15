<x-app-layout>
    <div class="container mt-10 px-4  sm:px-6  lg:px-8">
        {{-- create product button --}}
        <div class="flex justify-between items-center">
            <h2 class="text-2xl font-semibold text-gray-900">Edit Blogs</h2>
        </div>

        <div class="p-4 sm:p-8 bg-white  shadow sm:rounded-lg">
            {{-- a form with product name, price, description --}}
            <form action="{{ route('admin.blog.update', ['blog' => $blog]) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="space-y-4 md:space-y-0 md:grid gap-4">
                    <div>
                        <label for="title" class="font-bold bn_text">Title</label>
                        <input type="text" name="title" id="title"
                            class="w-full p-2 border  @error('title') border-red-500 @enderror rounded-md"
                            value="{{ old('title') ? old('title') : $blog->title }}" placeholder="Blog Title">
                        @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="slug" class="font-bold bn_text">Slug</label>
                        <input type="text" name="slug" id="slug"
                            class="w-full p-2 border  rounded-md @error('slug') border-red-500 @enderror"
                            placeholder="slug" value="{{ old('slug') ? old('slug') : $blog->slug }}">
                        @error('slug')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="price" class="font-bold bn_text">Publised status</label>
                        <select name="is_published" id="is_published"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option value="1">Yes</option>
                            <option value="0" selected>No</option>

                        </select>
                        @error('is_published')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-2">
                        <label for="content" class="font-bold bn_text">content</label>
                        <textarea name="content" id="file-picker">
                            {{ old('content') ? old('content') : $blog->content }}
                        </textarea>
                        @error('content')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror

                    </div>
                    <div class="col-span-2">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-3 rounded">update
                            Blog</button>
                    </div>
                </div>
            </form>
        </div>



        {{-- scripts for tinymce --}}
        <script>
            tinymce.init({
                selector: 'textarea#file-picker',
                plugins: 'image code',
                toolbar: 'undo redo | link image | code',
                image_title: true,
                automatic_uploads: true,
                file_picker_types: 'image',

                file_picker_callback: (cb, value, meta) => {
                    const input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');

                    input.addEventListener('change', (e) => {
                        const file = e.target.files[0];

                        const reader = new FileReader();
                        reader.addEventListener('load', () => {
                            // upload file to server
                            const formData = new FormData();
                            formData.append('file', file);
                            formData.append('path', 'blogs');
                            formData.append('_token', '{{ csrf_token() }}');
                            fetch('/admin/blogs/images', {
                                method: 'POST',
                                body: formData
                            }).then(response => {
                                response.json().then(data => {
                                    cb(data.location, {
                                        title: file.name
                                    });
                                });
                            }).catch(error => {
                                alert('Upload failed');
                            });
                        });



                        reader.readAsDataURL(file);
                    });

                    input.click();
                },
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
            });
        </script>



</x-app-layout>
