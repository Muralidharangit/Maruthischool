@extends('admin.layouts.index')
@section('content')
    <div id="loader" class="w-screen h-screen flex-center bg-white dark:bg-dark-card fixed inset-0 z-[9999]">
        <img src="{{ asset('admin/assets/images/loader.gif') }}" alt="loader">
    </div>
    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] px-4 group-data-[theme-width=box]:xl:px-0 ac-transition">

        <div class="grid grid-cols-12 gap-x-4">
            <!-- BASIC INPUT -->
            <div class="col-span-full lg:col-span-12">
                <div class="card p-0">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">User Create Form</h3>
                        {{-- <button type="button"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">Add</span>
                            <i class="ri-add-line text-inherit text-[15px]"></i>
                        </button> --}}

                        <a href="{{ route('user.index') }}" type="button"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">Back</span>
                        </a>
                    </div>
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf
                        <div class="p-6 space-y-4 mt-2">
                            <div>


                                <div class="mt-2">
                                    <label for="first_name" class="form-label">Name</label>
                                    <input type="text" id="first_name" class="form-input" placeholder=" Name"
                                        name="name" autocomplete="off" required>
                                    @error('name')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mt-2">
                                    <label for="first_name" class="form-label">E-mail</label>
                                    <input type="email" id="first_name" class="form-input" placeholder="E-mail"
                                        name="email" autocomplete="off" required>

                                    @error('email')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>





                                <div class="mt-2 position-relative">
                                    <label for="first_name" class="form-label">Password</label>
                                    <input type="password" class="form-input" name="password" placeholder="Enter password"
                                        id="password-input">
                                    <i class="bx bx-show password-icon position-absolute top-50 end-0 translate-middle-y p-3 h4"
                                        onclick="togglePasswordVisibility('password-input')"
                                        style="top: 30px !important;right: 0;font-size: 20px; !important"></i>
                                    <i class="fa-solid fa-eye"></i>
                                    @error('password')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="mt-2">
                                    <label for="first_name" class="form-label"> Confirm Password</label>
                                    <div class="position-relative">
                                        <input type="password" class="form-input" name="confirm_password"
                                            placeholder="Enter confirm  password" id="confirm-password-input">
                                        <i class="bx bx-show password-icon position-absolute top-50 end-0 translate-middle-y p-3 h4"
                                            id="confirm-password-icon"
                                            onclick="togglePasswordVisibility('confirm-password-input')"
                                            style="top: 2px !important;right: 0;font-size: 20px; !important"></i>

                                        @error('confirm_password')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class=" mt-2">
                                    <div class="flex flex-col">
                                        <label class="form-label">Role</label>
                                        <select class="form-input w-full" name="roles[]">
                                            <option data-display="Selected Option">Selected Option</option>
                                            @foreach ($roles as $roleId => $roleName)
                                                <option value="{{ $roleId }}">{{ $roleName }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                {{-- <div class="mt-2">
                                    <label for="first_name" class="form-label">Type</label>
                                    <input type="text" id="first_name" class="form-input" placeholder=" Name" name="type"
                                        autocomplete="off" required>
                                </div> --}}

                                <div class="mt-2">
                                    <div class="flex flex-col">
                                        <label for="first_name" class="form-label">Status</label>
                                        <select class="form-input w-full" name="status" id="statusselect">
                                            <option value="">Choose</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                    @error('status')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="statusSelect" class="form-label">Profile
                                            Image<span></span></label>
                                        <input type="file" name="image" id="imageUpload"
                                            class="form-control" placeholder="Type something" />
                                        <br>
                                        <img id="imagePreview" src="#" alt="Image Preview"
                                            style="display: none; max-width: 20%; height: auto;">
                                    </div>
                                    @error('image')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div> --}}

                                <div class="mt-3">
                                    <button class="btn b-solid btn-info-solid">Submit</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
    <!-- End Main Content -->
    <script>
        function togglePasswordVisibility(inputId, icon) {
            const input = document.getElementById(inputId);

            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("bx-show");
                icon.classList.add("bx-hide"); // Change the icon if desired
            } else {
                input.type = "password";
                icon.classList.remove("bx-hide");
                icon.classList.add("bx-show"); // Revert the icon
            }
        }
    </script>
@endsection
