<!DOCTYPE html>
<html lang="en" class="group" data-sidebar-size="lg" data-card-style="square">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FIO</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="web development agency">
    <meta name="viewport" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/images/favicon.png') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/output.css') }}">
    <style>
        .login_style {
            font-size: 16px;
            color: #d79e0d;
            justify-content: end;
        }

        .center_div {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .resend_div {
            margin-top: 30px;
            text-align: center;
        }

        .text-brown {
            color: #d79e0d;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="main-content m-4">
        <div class="">


            <!-- Start Form Area -->
            <div class="center_div">
                <div class="col-span-full lg:col-span-6 w-full lg:max-w-[600px]">

                    <div
                        class="border border-form dark:border-dark-border p-5 md:p-10 rounded-20 md:rounded-30 dk-theme-card-square">
                        <h3 class="text-xl md:text-[28px] leading-none font-semibold text-heading">
                            Reset Password
                        </h3>
                        {{-- Display Overall Error Message --}}
                        @if (session('error'))
                            <div class="alert alert-danger text-danger mb-4">
                                <span class=""> {{ session('error') }}</span>
                            </div>
                        @endif

                        {{-- Existing form --}}
                        <form action="{{ route('reset_validate') }}" method="POST" class="leading-none mt-8">
                            @csrf
                            <div class="mt-5 mb-2">
                                <label for="new_password" class="form-label">New Password</label>
                                <div class="relative">
                                    <input type="password" id="new_password" name="new_password"
                                        placeholder="New Password" class="form-input px-4 py-3.5 rounded-lg"
                                        value="{{ old('new_password') }}" />
                                    <label for="toggleNewPassword"
                                        class="size-8 rounded-md flex-center hover:bg-gray-200 dark:hover:bg-dark-icon focus:bg-gray-200 dark:focus:bg-dark-icon position-center left-[95%] cursor-pointer">
                                        <input type="checkbox" id="toggleNewPassword" class="inputTypeToggle hidden" />
                                        <i id="eyeNewPassword"
                                            class="ri-eye-off-line text-gray-500 dark:text-dark-text"></i>
                                    </label>

                                </div>
                                @error('new_password')
                                    <div class="invalid-feedback mt-3">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>

                            <div class="mt-5 mb-2">
                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                <div class="relative">
                                    <input type="password" id="confirm_password" name="confirm_password"
                                        placeholder="Confirm Password" class="form-input px-4 py-3.5 rounded-lg"
                                        value="{{ old('confirm_password') }}" />
                                    <label for="toggleConfirmPassword"
                                        class="size-8 rounded-md flex-center hover:bg-gray-200 dark:hover:bg-dark-icon focus:bg-gray-200 dark:focus:bg-dark-icon position-center left-[95%] cursor-pointer">
                                        <input type="checkbox" id="toggleConfirmPassword"
                                            class="inputTypeToggle hidden" />
                                        <i id="eyeConfirmPassword"
                                            class="ri-eye-off-line text-gray-500 dark:text-dark-text"></i>
                                    </label>

                                </div>
                                @error('confirm_password')
                                    <div class="invalid-feedback mt-3">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>


                            {{-- <p class="d-flex login_style">Login?</p> --}}
                            <button type="submit" class="btn b-solid btn-info-solid w-full mt-5">
                                Reset Password
                            </button>
                        </form>

                    </div>
                </div>
            </div>

            <!-- End Form Area -->
        </div>
    </div>
    <!-- End Main Content -->

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('admin/assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/flowbite.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/smooth-scrollbar/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/dashboard-admin-lms.js') }}"></script>
    <script src="{{ asset('admin/assets/js/component/app-menu-bar.js') }}"></script>
    <script src="{{ asset('admin/assets/js/switcher.js') }}"></script>
    <script src="{{ asset('admin/assets/js/layout.js') }}"></script>
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>

    <!-- datatable -->
    <script src="admin/assets/js/vendor/datatables/data-tables.min.js"></script>
    <script src="admin/assets/js/vendor/datatables/data-tables.tailwindcss.min.js"></script>
    <script src="admin/assets/js/vendor/datatables/datatables.buttons.min.js"></script>
    <script src="admin/assets/js/vendor/datatables/datatables.init.js"></script>
    <!-- datatable -->
    <script>
        // Toggle password visibility
        function togglePassword(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);

            if (input.type === "password") {
                input.type = "text";
                icon.classList.replace("ri-eye-off-line", "ri-eye-line");
            } else {
                input.type = "password";
                icon.classList.replace("ri-eye-line", "ri-eye-off-line");
            }
        }

        document.getElementById('toggleNewPassword').addEventListener('change', function() {
            togglePassword('new_password', 'eyeNewPassword');
        });

        document.getElementById('toggleConfirmPassword').addEventListener('change', function() {
            togglePassword('confirm_password', 'eyeConfirmPassword');
        });
    </script>

</body>
