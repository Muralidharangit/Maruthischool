@extends('admin.layouts.index')
@section('content')
    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] px-4 group-data-[theme-width=box]:xl:px-0 ac-transition">
        <div class="grid grid-cols-12 gap-x-4">
            <!-- BASIC INPUT -->
            <div class="col-span-full lg:col-span-12">

                <div class="card p-0">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Slider Form</h3>
                        <a href="{{ route('slider.index') }}" type="button"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">Back</span>
                        </a>
                    </div>
                    @php
                        $sliderCount = \App\Models\Slider::count(); // Count total sliders
                    @endphp
                    <form action="{{ route('slider.update', $slider_data->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT') {{-- Specify PUT method correctly --}}

                        <div class="p-6 space-y-4 mt-2">
                            <div>
                                <div class="mt-2">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-input" placeholder="Title" name="title"
                                        autocomplete="off" required value="{{ old('title', $slider_data->title) }}">
                                    @error('title')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mt-2">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" class="form-input" placeholder="Description" name="description"
                                        autocomplete="off" 
                                        value="{{ old('description', $slider_data->description) }}">
                                    @error('description')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mt-2">
                                    <label for="images" class="form-label">Images:</label>
                                    <input type="file" class="form-control" id="multilpeimageUpload" name="image">
                                    {{-- Image upload is optional during edit --}}
                                    <div id="imagePreviewContainer" class="d-flex">
                                        @if ($slider_data->image)
                                            <img src="{{ asset('storage/' . $slider_data->image) }}" width="100">
                                        @endif
                                    </div>
                                    @error('image')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                                </div>

                                <div class="mt-2">
                                    <label for="order" class="form-label">Order</label>
                                    <select id="order" class="form-input w-full" name="order" required>
                                        <option value="">Choose Order</option>
                                        @for ($i = 1; $i <= $sliderCount; $i++)
                                            <option value="{{ $i }}"
                                                {{ old('order', $slider_data->order) == $i ? 'selected' : '' }}>
                                                {{ $i }}
                                            </option>
                                        @endfor
                                    </select>
                                    @error('order')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mt-2">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-input w-full" name="status" id="statusselect" required>
                                        <option value="" disabled
                                            {{ old('status', $slider_data->status) === null ? 'selected' : '' }}>Choose
                                        </option>
                                        <option value="1"
                                            {{ old('status', $slider_data->status) == '1' ? 'selected' : '' }}>Active
                                        </option>
                                        <option value="0"
                                            {{ old('status', $slider_data->status) == '0' ? 'selected' : '' }}>Inactive
                                        </option>
                                    </select>
                                    @error('status')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-3">
                                <button class="btn b-solid btn-info-solid">Update</button>
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
