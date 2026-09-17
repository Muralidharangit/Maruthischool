@extends('admin.layouts.index')
@section('content')
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
                        <h3 class="text-lg card-title leading-none">Create Project Image</h3>
                        <a href="{{ route('project.index') }}" type="button"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">Back</span>
                            {{-- <i class="ri-code-line text-inherit text-[15px]"></i> --}}

                        </a>
                    </div>
                   
                    {{-- <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="p-6 space-y-4 mt-2">
                            <div>
                                <div class="mt-2">
                                    <label for="first_name" class="form-label">Title&#40optional&#41</label>
                                    <input type="text" id="first_name" class="form-input" placeholder="Title"
                                        name="name" autocomplete="off">
                                    @error('name')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mt-2">
                                    <label for="description" class="form-label">Description&#40optional&#41</label>
                                    <input type="text" id="description" class="form-input" placeholder="Title"
                                        name="description" autocomplete="off">
                                    @error('description')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <div class="flex flex-col">
                                        <label for="first_name" class="form-label">Category</label>
                                        <select class="form-input w-full" name="category_id" id="statusselect">
                                            <option value="">Choose</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mt-2">
                                        <label for="images" class="form-label">Cover Images(Main Image):</label>
                                        <input type="file" class="form-control" id="multilpeimageUpload" name="image"
                                            required>
                                        <div id="imagePreviewContainer" class="d-flex"></div>
                                    </div>

                                    <div class="mt-2">
                                        <label for="gallery_images" class="form-label">Gallery Images(Sub Image)</label>
                                        <input type="file" name="gallery_images[]" id="gallery_images" multiple>
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn b-solid btn-info-solid">Submit</button>
                                    </div>

                                </div>
                            </div>
                    </form> --}}


                    <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="p-6 space-y-4 mt-2">
                            <!-- Title -->
                            <div class="mt-2">
                                <label for="name" class="form-label font-medium">Title (Optional)</label>
                                <input type="text" id="name" name="name" class="form-input w-full" placeholder="e.g. Science Lab Exhibition" value="{{ old('name') }}" autocomplete="off">
                                @error('name')
                                    <span class="text-danger text-sm" style="color: red;">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Description -->
                            <div class="mt-2">
                                <label for="description" class="form-label font-medium">Description (Optional)</label>
                                <textarea id="description" name="description" class="form-input w-full" rows="3" placeholder="Brief details about the gallery album">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="text-danger text-sm" style="color: red;">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Category -->
                            <div class="mt-2">
                                <label for="category_id" class="form-label font-medium">Category <span class="text-danger" style="color: red;">*</span></label>
                                <select class="form-input w-full" name="category_id" id="category_id" required>
                                    <option value="">-- Select Category --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="text-danger text-sm" style="color: red;">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Status -->
                            <div class="mt-2">
                                <label for="status" class="form-label font-medium">Status</label>
                                <select class="form-input w-full" name="status" id="status">
                                    <option value="1" {{ old('status', '1') == '1' ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                                </select>
                                @error('status')
                                    <span class="text-danger text-sm" style="color: red;">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Main Cover Image -->
                            <div class="mt-2">
                                <label for="multilpeimageUpload" class="form-label font-medium">Cover Image (Main Display) <span class="text-danger" style="color: red;">*</span></label>
                                <input type="file" name="image" id="multilpeimageUpload" class="form-control w-full" accept="image/*" required>
                                @error('image')
                                    <span class="text-danger text-sm" style="color: red;">{{ $message }}</span>
                                @enderror
                                <div id="imagePreviewContainer" class="mt-3"></div>
                            </div>

                            <!-- Sub / Gallery Images -->
                            <div class="mt-2">
                                <label for="gallery_images" class="form-label font-medium">Additional Gallery Sub-Images (Multiple allowed)</label>
                                <input type="file" name="gallery_images[]" id="gallery_images" class="form-control w-full" accept="image/*" multiple>
                                @error('gallery_images')
                                    <span class="text-danger text-sm" style="color: red;">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Submit -->
                            <div class="mt-4 pt-2">
                                <button type="submit" class="btn b-solid btn-info-solid px-6 py-2.5 font-bold">
                                    Save Gallery Album
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
    <script>
        document.getElementById('multilpeimageUpload').addEventListener('change', function(event) {
            const imagePreviewContainer = document.getElementById('imagePreviewContainer');
            imagePreviewContainer.innerHTML = '';
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const image = document.createElement('img');
                    image.src = e.target.result;
                    image.style.width = '160px';
                    image.style.height = '160px';
                    image.style.objectFit = 'cover';
                    image.style.borderRadius = '12px';
                    image.style.border = '2px solid #e2e8f0';
                    imagePreviewContainer.appendChild(image);
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection
