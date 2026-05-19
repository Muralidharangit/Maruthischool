<!DOCTYPE html>
<html lang="en" class="group" data-sidebar-size="lg" data-card-style="square">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Maruthi Senior Secondary School Puducherry | CBSE Affiliated | Pre-KG to Class 12</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="web development agency">
    <meta name="viewport" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/images/logo/favicon.png') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/output.css') }}">
    <style>
        .forget_password {
            font-size: 16px;
            color: #128e4b;
            margin-top: 18px;
            justify-content: end;
        }

        @media(max-width:996px) {
            .image_div {
                display: none;
            }
        }
    </style>
</head>

<body>
    <!-- Start Main Content -->
    <div class="main-content m-4">
        <div
            class="grid grid-cols-12 gap-y-7 sm:gap-7 card px-4 sm:px-10 2xl:px-[70px] py-15 lg:items-center lg:min-h-[calc(100vh_-_32px)] dk-theme-card-square">
            <!-- Start Overview Area -->
            <div class="col-span-full lg:col-span-6 image_div">
                <div class="flex flex-col items-end justify-center gap-10 text-center" style="align-items:end">
                    <div class="hidden sm:block">
                        <img src="{{ asset('user/assets/images/thumbs/school-hero-banner.jpg') }}" alt="loti"
                            class="group-[.dark]:hidden" width="600px" style="border-radius: 20px" />
                    </div>

                </div>
            </div>
            <!-- End Overview Area -->

            <!-- Start Form Area -->
            <div class="col-span-full lg:col-span-6 w-full lg:max-w-[600px]">
                {{-- <div>
                    <h3 class="text-xl md:text-[28px] leading-none font-semibold text-heading">
                        Welcome back!
                    </h3>
                    <p class="font-medium text-gray-500 dark:text-dark-text mt-4 px-[10%]">
                        Whether you're launching a stunning online store optimizing your
                        our object-oriented
                    </p>
                </div> --}}
                <div
                    class="border border-form dark:border-dark-border p-5 md:p-10 rounded-20 md:rounded-30 dk-theme-card-square">
                    <h3 class="text-xl md:text-[28px] leading-none font-semibold text-heading">
                        Sign In
                    </h3>
                    <p class="font-medium text-gray-500 dark:text-dark-text mt-4">
                        Welcome Back! Log in to your account
                    </p>
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">

                            @foreach ($errors->all() as $error)
                                <span class="text-danger">{{ $error }}</span>
                            @endforeach

                        </div>
                    @endif --}}
                    {{-- Display Overall Error Message --}}
                    @if (session('error'))
                        <div class="alert alert-danger text-danger mb-4">
                            <span class=""> {{ session('error') }}</span>
                        </div>
                    @endif

                    {{-- Existing form --}}
                    <form action="{{ route('admin.post.login') }}" method="POST" class="leading-none mt-8">
                        @csrf
                        <div class="mb-2.5">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" placeholder="debra.holt@example.com"
                                class="form-input px-4 py-3.5 rounded-lg" />
                            @error('email')
                                <div class="invalid-feedback mt-3">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>

                        <div class="mt-5 mb-2">
                            <label for="password" class="form-label">Password</label>
                            <div class="relative">
                                <input type="password" id="password" name="password" placeholder="Password"
                                    class="form-input px-4 py-3.5 rounded-lg" />
                                <label for="toggleInputType"
                                    class="size-8 rounded-md flex-center hover:bg-gray-200 dark:hover:bg-dark-icon foucs:bg-gray-200 dark:foucs:bg-dark-icon position-center left-[95%]">
                                    <input type="checkbox" id="toggleInputType" class="inputTypeToggle peer/it"
                                        hidden />
                                    <i
                                        class="ri-eye-off-line text-gray-500 dark:text-dark-text peer-checked/it:before:content-['\ecb5']"></i>
                                </label>
                                @error('password')
                                    <div class="invalid-feedback mt-3">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <a href="{{ route('forgot_password') }}">
                            <p class="d-flex forget_password">Forgot Password ?</p>
                        </a>
                        <button type="submit" class="btn b-solid btn-info-solid w-full mt-5">
                            Sign In
                        </button>
                    </form>

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

</body>
