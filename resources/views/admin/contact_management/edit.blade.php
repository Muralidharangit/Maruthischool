@extends('admin.layouts.index')
@section('content')
    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] px-4 group-data-[theme-width=box]:xl:px-0 ac-transition">
        <div class="card">
            <h2 class="card-title">Forms Input Component</h2>
        </div>
        <div class="grid grid-cols-12 gap-x-4">
            <!-- BASIC INPUT -->
            <div class="col-span-full lg:col-span-12">
                <div class="card p-0">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Basic Inputs</h3>
                        <button type="button"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">Add</span>
                            {{-- <i class="ri-code-line text-inherit text-[15px]"></i> --}}
                            <i class="ri-add-line text-inherit text-[15px]"></i>
                        </button>
                    </div>
                    <form action="{{ route('image.update', $title->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="p-6 space-y-4 mt-2">
                            <div>
                                <div class="mt-2">
                                    <label for="first_name" class="form-label">Title</label>
                                    <input type="text" id="first_name" class="form-input" placeholder="Title" name="title" value="{{ $title->title }}" autocomplete="off" required>
                                    @error('title')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                    
                                <div class="mt-2">
                                    <label for="images" class="form-label">Multiple Images:</label>
                                    <input type="file" class="form-control" id="multipleImageUpload" name="multiple_image[]" multiple>
                                    <div id="imagePreviewContainer" class="d-flex mt-3 gap-2">
                                        @foreach($multipleImages as $image)
                                            <div class="image-wrapper" data-id="{{ $image->id }}">
                                                <img src="{{ asset('storage/' . $image->image) }}" class="img-thumbnail" style="width: 100px; height: 100px;">
                                                <button type="button" class="btn btn-danger btn-sm mt-1 remove-image-btn" onclick="removeImage({{ $image->id }})">Remove</button>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                    
                                <div class="mt-3">
                                    <button type="submit" class="btn b-solid btn-info-solid">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                    <script>
                    // Preview newly selected images
                    document.getElementById('multipleImageUpload').addEventListener('change', function(event) {
                        const files = event.target.files;
                        const previewContainer = document.getElementById('imagePreviewContainer');
                    
                        Array.from(files).forEach(file => {
                            if (file.type.startsWith('image/')) {
                                const reader = new FileReader();
                                reader.onload = function(e) {
                                    const wrapper = document.createElement('div');
                                    wrapper.classList.add('image-wrapper');
                    
                                    const imgElement = document.createElement('img');
                                    imgElement.src = e.target.result;
                                    imgElement.classList.add('img-thumbnail');
                                    imgElement.style.width = '100px';
                                    imgElement.style.height = '100px';
                    
                                    const removeBtn = document.createElement('button');
                                    removeBtn.classList.add('btn', 'btn-danger', 'btn-sm', 'mt-1');
                                    removeBtn.textContent = 'Remove';
                                    removeBtn.onclick = () => wrapper.remove();
                    
                                    wrapper.appendChild(imgElement);
                                    wrapper.appendChild(removeBtn);
                                    previewContainer.appendChild(wrapper);
                                };
                                reader.readAsDataURL(file);
                            }
                        });
                    });
                    
                    // Remove an image from the database
                    function removeImage(imageId) {
                        fetch(`/image/delete/${imageId}`, {
                            method: 'DELETE',
                            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                document.querySelector(`.image-wrapper[data-id='${imageId}']`).remove();
                            } else {
                                alert('Error removing image');
                            }
                        })
                        .catch(error => console.error('Error:', error));
                    }
                    </script>
                    
                </div>
            </div>


        </div>
    </div>
    <!-- End Main Content -->

    <script>
        document.getElementById('multilpeimageUpload').addEventListener('change', function(event) {
            const imagePreviewContainer = document.getElementById('imagePreviewContainer');
            imagePreviewContainer.innerHTML = '';
    
            const files = event.target.files;
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const reader = new FileReader();
    
                reader.onload = function() {
                    const image = document.createElement('img');
                    image.src = reader.result;
                    image.style.width = '200px';
                    image.style.height = '200px';
                    imagePreviewContainer.appendChild(image);
                };
    
                reader.readAsDataURL(file);
            }
        });
    </script> 
@endsection

