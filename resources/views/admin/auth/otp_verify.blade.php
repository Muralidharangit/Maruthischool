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
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .forget_password {
            font-size: 16px;
            color: #d79e0d;
            margin-top: 18px;
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
    <!-- Start Main Content -->
    <div class="main-content m-4">
        <div class="">
            <!-- Start Form Area -->
            <div class="center_div">
                <div class="col-span-full lg:col-span-12 w-full lg:max-w-[600px]">

                    <div
                        class="border border-form dark:border-dark-border p-5 md:p-10 rounded-20 md:rounded-30 dk-theme-card-square">
                        <h3 class="text-xl md:text-[28px] leading-none font-semibold text-heading">
                            OPT Verification
                        </h3>
                        {{-- <p class="font-medium text-gray-500 dark:text-dark-text mt-4">
                            Enter OTP code sent to your email
                        </p> --}}

                        {{-- Display Overall Error Message --}}
                        @if (session('error'))
                            <div class="alert alert-danger text-danger mb-4">
                                <span class=""> {{ session('error') }}</span>
                            </div>
                        @endif

                        {{-- Existing form --}}
                        <form action="{{ route('otp_validate') }}" method="POST" class="leading-none mt-8">
                            @csrf
                            <div class="mb-2.5">
                                @php
                                    $email = session('forgot_email', '');
                                    if ($email) {
                                        $emailParts = explode('@', $email);
                                        $namePart = $emailParts[0]; // Before '@'
                                        $domainPart = $emailParts[1]; // After '@'

                                        // Mask middle part of name, keeping first 4 and last 2 characters
                                        if (strlen($namePart) > 6) {
                                            $maskedName =
                                                substr($namePart, 0, 4) .
                                                str_repeat('*', strlen($namePart) - 6) .
                                                substr($namePart, -4);
                                        } else {
                                            $maskedName =
                                                substr($namePart, 0, 1) .
                                                str_repeat('*', max(strlen($namePart) - 2, 1)) .
                                                substr($namePart, -1);
                                        }

                                        $maskedEmail = $maskedName . '@' . $domainPart;
                                    } else {
                                        $maskedEmail = '';
                                    }
                                @endphp

                                <label for="otp" class="form-label">
                                    Enter OTP code sent to your email <strong>{{ $maskedEmail }}</strong>
                                </label>
                                <input type="number" name="otp" placeholder="123456"
                                    class="form-input px-4 py-3.5 rounded-lg" required />
                                @error('otp')
                                    <div class="invalid-feedback mt-3">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>


                            <button type="submit" class="btn b-solid btn-info-solid w-full mt-5">
                                Verify & Proceed
                            </button>
                        </form>
                        <div class="resend_div">
                            <p>Didn't receive OTP code?</p>
                            <button id="resendOtpBtn" class="btn text-brown">Resend OTP</button>
                        </div>

                    </div>
                    </ </div>
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
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            {{-- <script>
                document.getElementById("resendOtpBtn").addEventListener("click", function() {
                    let resendBtn = document.getElementById("resendOtpBtn");

                    // Disable the button to prevent multiple clicks
                    resendBtn.disabled = true;
                    resendBtn.textContent = "Resending..."; // Change button text

                    fetch("{{ route('otp_resend') }}", {
                            method: "POST",
                            headers: {
                                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    "content"),
                                "Content-Type": "application/json",
                            },
                            body: JSON.stringify({})
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                alert(data.success);
                                resendBtn.disabled = false;
                                resendBtn.textContent = "Resend OTP";
                                // // Re-enable the button after 30 seconds
                                // setTimeout(() => {

                                // }, 30000); // 30 seconds delay
                            } else {
                                alert(data.error || "Something went wrong!");
                                resendBtn.disabled = false; // Re-enable button on failure
                                resendBtn.textContent = "Resend OTP";
                            }
                        })
                        .catch(error => {
                            console.error("Error:", error);
                            alert("Failed to resend OTP. Please try again.");
                            resendBtn.disabled = false; // Re-enable button if an error occurs
                            resendBtn.textContent = "Resend OTP";
                        });
                });
            </script> --}}
            <script>
                document.getElementById("resendOtpBtn").addEventListener("click", function() {
                    let resendBtn = document.getElementById("resendOtpBtn");

                    // Disable the button to prevent multiple clicks
                    resendBtn.disabled = true;
                    resendBtn.textContent = "Resending...";

                    fetch("{{ route('otp_resend') }}", {
                            method: "POST",
                            headers: {
                                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    "content"),
                                "Content-Type": "application/json",
                            },
                            body: JSON.stringify({})
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                // Show success alert with SweetAlert
                                Swal.fire({
                                    title: "Success!",
                                    text: "OTP has been sent to your email.",
                                    icon: "success",
                                    confirmButtonText: "OK"
                                });
                                resendBtn.disabled = false;
                                resendBtn.textContent = "Resend OTP";
                                // // Re-enable the button after 30 seconds
                                // setTimeout(() => {

                                // }, 30000);
                            } else {
                                Swal.fire({
                                    title: "Error!",
                                    text: data.error || "Something went wrong!",
                                    icon: "error",
                                    confirmButtonText: "Try Again"
                                });

                                resendBtn.disabled = false;
                                resendBtn.textContent = "Resend OTP";
                            }
                        })
                        .catch(error => {
                            console.error("Error:", error);
                            Swal.fire({
                                title: "Failed!",
                                text: "Failed to resend OTP. Please try again.",
                                icon: "error",
                                confirmButtonText: "OK"
                            });

                            resendBtn.disabled = false;
                            resendBtn.textContent = "Resend OTP";
                        });
                });
            </script>


</body>
