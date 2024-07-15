<x-app-layout>
    <div class="container mt-10 px-4  sm:px-6  lg:px-8">
        {{-- create product button --}}
        <div class="flex justify-between items-center">
            <h2 class="text-2xl font-semibold text-gray-900">Create new Blogs</h2>
        </div>

        <div class="p-4 sm:p-8 bg-white  shadow sm:rounded-lg">
            {{-- a form with product name, price, description --}}
            <form action="{{ route('admin.blog.store') }}" method="post" enctype="multipart/form-data">
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
                    <script src="https://cdn.tiny.cloud/1/2i0g5lu7kggb6dju4j2hnmceotlq2kncvumliivlmq7ldz7d/tinymce/7/tinymce.min.js"
                        referrerpolicy="origin"></script>

                    <div class="">
                        <textarea name="content" id="file-picker"></textarea>
                        <script>
                            tinymce.init({
                                selector: 'textarea#file-picker',
                                plugins: 'image code',
                                toolbar: 'undo redo | link image | code',
                                /* enable title field in the Image dialog*/
                                image_title: true,
                                /* enable automatic uploads of images represented by blob or data URIs*/
                                automatic_uploads: true,
                                /*
                                  URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
                                  images_upload_url: 'postAcceptor.php',
                                  here we add custom filepicker only to Image dialog
                                */
                                file_picker_types: 'image',
                                /* and here's our custom image picker*/
                                file_picker_callback: (cb, value, meta) => {
                                    const input = document.createElement('input');
                                    input.setAttribute('type', 'file');
                                    input.setAttribute('accept', 'image/*');

                                    input.addEventListener('change', (e) => {
                                        const file = e.target.files[0];

                                        const reader = new FileReader();
                                        reader.addEventListener('load', () => {
                                            /*
                                              Note: Now we need to register the blob in TinyMCEs image blob
                                              registry. In the next release this part hopefully won't be
                                              necessary, as we are looking to handle it internally.
                                            */
                                            // const id = 'blobid' + (new Date()).getTime();
                                            // const blobCache = tinymce.activeEditor.editorUpload.blobCache;
                                            // const base64 = reader.result.split(',')[1];
                                            // const blobInfo = blobCache.create(id, file, base64);
                                            // blobCache.add(blobInfo);

                                            // // /* call the callback and populate the Title field with the file name */
                                            // cb(blobInfo.blobUri(), {
                                            //     title: file.name
                                            // });

                                            // upload file to server
                                            const formData = new FormData();
                                            formData.append('file', file);
                                            formData.append('path', 'blogs');
                                            formData.append('_token', '{{ csrf_token() }}');
                                            fetch('/admin/blogs/images', {
                                                method: 'POST',
                                                body: formData
                                            }).then(response => {
                                                console.log(response);
                                                response.json().then(data => {
                                                    // console.log(data);
                                                    cb(data.location, {
                                                        title: file.name
                                                    });
                                                });
                                            }).catch(error => {
                                                // console.error(error);
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

                    </div>
                    <div class="col-span-2">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-3 rounded">Create
                            Blog</button>
                    </div>
                </div>
            </form>
        </div>







</x-app-layout>
