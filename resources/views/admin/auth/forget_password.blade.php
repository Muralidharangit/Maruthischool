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
        .forget_password {
            font-size: 16px;
            color: red;
            justify-content: end;
        }

        .center_div {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <!-- Start Main Content -->
    <div class="main-content m-4">
        <div class="">
            <!-- Start Overview Area -->
            {{-- <div class="col-span-full lg:col-span-6">
                <div class="flex flex-col items-end justify-center gap-10 text-center" style="align-items:end">
                    <div class="hidden sm:block">
                        <img src="{{ asset('user/assets/images/projects/admin_image1.jpeg') }}" alt="loti"
                            class="group-[.dark]:hidden" width="600px" style="border-radius: 20px" />
                    </div>

                </div>
            </div> --}}
            <!-- End Overview Area -->

            <!-- Start Form Area -->
            <div class="center_div">
                <div class="col-span-full lg:col-span-12 w-full lg:max-w-[600px]">

                    <div
                        class="border border-form dark:border-dark-border p-5 md:p-10 rounded-20 md:rounded-30 dk-theme-card-square">
                        <h3 class="text-xl md:text-[28px] leading-none font-semibold text-heading">
                            Forgot Your Password?
                        </h3>
                        {{-- <p class="font-medium text-gray-500 dark:text-dark-text mt-4">
                Welcome Back! Log in to your account
            </p> --}}

                        {{-- Display Overall Error Message --}}
                        @if (session('error'))
                            <div class="alert alert-danger text-danger mb-4">
                                <span class=""> {{ session('error') }}</span>
                            </div>
                        @endif

                        {{-- Existing form --}}
                        <form action="{{ route('forgot_validate') }}" method="POST" class="leading-none mt-8"
                            id="forgotForm">
                            @csrf
                            <div class="mb-2.5">
                                <label for="email" class="form-label">Enter your registered email to reset your
                                    password.</label>
                                <input type="email" id="email" name="email" placeholder="email"
                                    class="form-input px-4 py-3.5 rounded-lg" required />
                                @error('email')
                                    <div class="invalid-feedback mt-3">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" id="submitBtn" class="btn b-solid btn-info-solid w-full mt-5">
                                Submit
                            </button>
                        </form>

                    </div>
                </div>
            </div>

            <!-- End Form Area -->
        </div>
    </div>
    <!-- End Main Content -->
    <script>
        document.getElementById("forgotForm").addEventListener("submit", function() {
            let submitBtn = document.getElementById("submitBtn");
            submitBtn.disabled = true;
            submitBtn.textContent = "Processing...";
        });
    </script>
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


</body>
