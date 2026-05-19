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


                    <form action="{{ route('project.store') }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

    <!-- Title -->
    <div class="mt-2">
        <label class="form-label">
            Title (Optional)
        </label>

        <input type="text"
               name="name"
               class="form-input"
               placeholder="Title">

        @error('name')
            <span style="color:red">{{ $message }}</span>
        @enderror
    </div>

    <!-- Description -->
    <div class="mt-2">
        <label class="form-label">
            Description (Optional)
        </label>

        <textarea name="description"
                  class="form-input"
                  rows="3"
                  placeholder="Description"></textarea>

        @error('description')
            <span style="color:red">{{ $message }}</span>
        @enderror
    </div>

    <!-- Category -->
    <div class="mt-2">
        <label class="form-label">
            Category
        </label>

        <select class="form-input"
                name="category_id">

            <option value="">Choose</option>

            @foreach ($categories as $category)

                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>

            @endforeach
        </select>

        @error('category_id')
            <span style="color:red">{{ $message }}</span>
        @enderror
    </div>

    <!-- Main Image -->
    <div class="mt-2">
        <label class="form-label">
            Main Image
        </label>

        <input type="file"
               name="image"
               id="multilpeimageUpload"
               class="form-control"
               accept="image/*"
               required>

        @error('image')
            <span style="color:red">{{ $message }}</span>
        @enderror

        <div id="imagePreviewContainer" class="mt-3"></div>
    </div>

    <!-- Submit -->
    <div class="mt-3">
        <button type="submit"
                class="btn b-solid btn-info-solid">
            Submit
        </button>
    </div>

</form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
 <script>
document.getElementById('multilpeimageUpload')
.addEventListener('change', function(event) {

    const imagePreviewContainer =
        document.getElementById('imagePreviewContainer');

    imagePreviewContainer.innerHTML = '';

    const file = event.target.files[0];

    if (file) {

        const reader = new FileReader();

        reader.onload = function(e) {

            const image = document.createElement('img');

            image.src = e.target.result;

            image.style.width = '200px';
            image.style.height = '200px';
            image.style.objectFit = 'cover';
            image.style.borderRadius = '10px';

            imagePreviewContainer.appendChild(image);
        };

        reader.readAsDataURL(file);
    }
});
</script>
@endsection
