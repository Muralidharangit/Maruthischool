@extends('admin.layouts.index')
@section('content')
    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] px-4 group-data-[theme-width=box]:xl:px-0 ac-transition">
        <div class="card">
            <h2 class="card-title">Contact Form</h2>
        </div>
        <div class="grid grid-cols-12 gap-x-4">
            <!-- BASIC INPUT -->
            <div class="col-span-full lg:col-span-12">
                <div class="card p-0">
                    {{-- <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Basic Inputs</h3>
                        <button type="button"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">Add</span>
                            <i class="ri-add-line text-inherit text-[15px]"></i>
                        </button>
                    </div> --}}
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="p-6 space-y-4 mt-2">
                            <div>
                                <div class="mt-2">
                                    <label for="first_name" class="form-label">Name</label>
                                    <input type="text" class="form-input" placeholder="Name" name="name"
                                        autocomplete="off" required value="{{ old('name') }}">
                                    @error('name')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mt-2">
                                    <label for="first_name" class="form-label">Email</label>
                                    <input type="email" class="form-input" placeholder="Email" name="email"
                                        autocomplete="off" required value="{{ old('email') }}">
                                    @error('email')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <label for="first_name" class="form-label">Mobile Number</label>
                                    <input type="text" class="form-input" placeholder="Mobile number" name="mobile_no"
                                        autocomplete="off" required value="{{ old('mobile_no') }}">
                                    @error('mobile_no')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <label for="first_name" class="form-label">Subject</label>
                                    <input type="text" class="form-input" placeholder="Subject" name="subject"
                                        autocomplete="off" required value="{{ old('subject') }}">
                                    @error('subject')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <label for="first_name" class="form-label">Enquiry</label>
                                    <input type="text" class="form-input" placeholder="Enquiry" name="enquiry"
                                        autocomplete="off" required value="{{ old('enquiry') }}">
                                    @error('enquiry')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-3">
                                <button class="btn b-solid btn-info-solid">Submit</button>
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
