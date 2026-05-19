@extends('admin.layouts.index')
@section('content')
    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] px-4 group-data-[theme-width=box]:xl:px-0 ac-transition">
        {{-- <div class="card">
            <h2 class="card-title">Slider Form</h2>
        </div> --}}
        <div class="grid grid-cols-12 gap-x-4">
            <!-- BASIC INPUT -->
            <div class="col-span-full lg:col-span-12">
                <div class="card p-0">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Create Event Form</h3>
                        <a href="{{ route('event.index') }}" type="button"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">Back</span>
                        </a>
                    </div>
                   


            <form action="{{ route('event.store') }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

    <div class="p-6 space-y-4 mt-2">

        <div class="grid grid-cols-12 gap-4">

            <!-- Title -->
            <div class="col-span-12 lg:col-span-6">

                <label class="form-label">
                    Title
                </label>

                <input type="text"
                       class="form-input"
                       placeholder="Title"
                       name="title"
                       autocomplete="off"
                       required
                       value="{{ old('title') }}">

                @error('title')
                    <span style="color:red">{{ $message }}</span>
                @enderror

            </div>

            <!-- Event Date -->
            <div class="col-span-12 lg:col-span-6">

                <label class="form-label">
                    Event Date
                </label>

                <input type="date"
                       class="form-input"
                       name="event_date"
                       required
                       value="{{ old('event_date') }}">

                @error('event_date')
                    <span style="color:red">{{ $message }}</span>
                @enderror

            </div>

            <!-- Description -->
            <div class="col-span-12 lg:col-span-6">

                <label class="form-label">
                    Description
                </label>

                <textarea class="form-input"
                          placeholder="Description"
                          name="description"
                          rows="4">{{ old('description') }}</textarea>

                @error('description')
                    <span style="color:red">{{ $message }}</span>
                @enderror

            </div>

            <!-- Image -->
            <div class="col-span-12 lg:col-span-6">

                <label class="form-label">
                    Image
                </label>

                <input type="file"
                       class="form-control"
                       id="multilpeimageUpload"
                       name="image"
                       required>

                <div id="imagePreviewContainer"
                     class="flex mt-3">
                </div>

                @error('image')
                    <span style="color:red">{{ $message }}</span>
                @enderror

            </div>

            <!-- Status -->
            <div class="col-span-12 lg:col-span-6">

                <label class="form-label">
                    Status
                </label>

                <select class="form-input w-full"
                        name="status">

                    <option value="">
                        Choose
                    </option>

                    <option value="1"
                        {{ old('status') == '1' ? 'selected' : '' }}>

                        Active

                    </option>

                    <option value="0"
                        {{ old('status') == '0' ? 'selected' : '' }}>

                        Inactive

                    </option>

                </select>

                @error('status')
                    <span style="color:red">{{ $message }}</span>
                @enderror

            </div>

        </div>

        <!-- Submit -->
        <div class="mt-4">

            <button type="submit"
                    class="btn b-solid btn-info-solid">

                Submit

            </button>

        </div>

    </div>

</form>










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
