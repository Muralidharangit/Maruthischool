@extends('admin.layouts.index')
@section('content')
    <style>
        .d-flex.flex-wrap.mt-2 .m-2 {
            padding: 10px;
        }
    </style>
    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] px-4 group-data-[theme-width=box]:xl:px-0 ac-transition">
        <div id="loader" class="w-screen h-screen flex-center bg-white dark:bg-dark-card fixed inset-0 z-[9999]">
            <img src="{{ asset('admin/assets/images/loader.gif') }}" alt="loader">
        </div>
        <div class="grid grid-cols-12 gap-x-4">
            <!-- BASIC INPUT -->
            <div class="col-span-full lg:col-span-12">
                <div class="card p-0">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Project Edit Form</h3>
                        <a href="{{ route('project.index') }}" type="button"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">Back</span>
                            {{-- <i class="ri-code-line text-inherit text-[15px]"></i> --}}

                        </a>
                    </div>
                    <form action="{{ route('project.update', $project_image->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="p-6 space-y-4 mt-2">
                            <div>

                                <div class="mt-2">
                                    <label for="first_name" class="form-label">Title</label>
                                    <input type="text" id="first_name" class="form-input" placeholder="Title"
                                        name="name" value="{{ $project_image->name }}" autocomplete="off">
                                    @error('name')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mt-2">
                                    <div class="flex flex-col">
                                        <label for="category_id" class="form-label">Category</label>
                                        <select class="form-input w-full" name="category_id" id="statusselect">
                                            <option value="">Choose</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $category->id == $project_image->category_id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <label for="images" class="form-label">Cover Images(Main Image):</label>
                                    <input type="file" class="form-control" id="multilpeimageUpload" name="image">
                                    <img src="{{ asset('storage/' . $project_image->image) }}" alt="Image"
                                        class="img-thumbnail" style="width: 50px; height: 50px;">
                                    <div id="imagePreviewContainer" class="d-flex"></div>
                                </div>


                                <div class="mt-2">
                                    <label for="gallery_images" class="form-label">Gallery Images(Sub Image)</label>
                                    <input type="file" name="gallery_images[]" id="gallery_images" multiple>
                                    <div id="imagePreviewContainer" class="d-flex"></div>
                                </div>
                                <div class="mt-2">
                                    <label for="first_name" class="form-label">Status</label>
                                    <select class="form-input w-full" name="status" id="statusselect">
                                        <option selected value="">Choose</option>
                                        <option value="1" {{ $project_image->status == '1' ? 'selected' : '' }}>Active
                                        </option>
                                        <option value="0" {{ $project_image->status == '0' ? 'selected' : '' }}>
                                            Inactive
                                        </option>
                                        <!-- Add more options as needed -->
                                    </select>

                                    @error('status')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>



                                <div class="mt-3">
                                    <button class="btn b-solid btn-info-solid">Submit</button>
                                </div>

                            </div>
                        </div>
                    </form>


                    <div class="p-6 space-y-4 pt-0">
                        @if (count($project_related_images) > 0)
                            {{-- Gallery Images --}}
                            <div class="mt-2">
                                <label for="gallery_images" class="form-label">Already Added Images</label>
                                <div class="d-flex flex-wrap mt-2">
                                    @foreach ($project_related_images as $gallery_image)
                                        <div class="m-2 image-container position-relative">
                                            <div style="width: 155px; height: 155px;">
                                                <img src="{{ asset('gallery_images/' . $gallery_image->image) }}"
                                                    alt="Gallery Image" class="img-thumbnail"
                                                    style="height: 100%; width: 100%; object-fit: cover;border-radius:10px">
                                            </div>
                                            <form action="{{ route('gallery_image.delete', $gallery_image->id) }}"
                                                method="post" class="delete-form">
                                                <div class="d-flex justify-content-center align-items-center w-100 position-absolute top-0 end-0"
                                                    style="right:-5px;top:-6px">
                                                    <button class="btn text-danger bg-danger rounded-5"
                                                        style="background: rgb(239, 11, 11); border-radius: 50%;color: #fff;width:30px; height:30px;">X</button>
                                                </div>
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            {{-- Gallery Images --}}
                        @endif
                    </div>



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
