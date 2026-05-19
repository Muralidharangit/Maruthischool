@extends('admin.layouts.index')

@section('content')
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] px-4 group-data-[theme-width=box]:xl:px-0 ac-transition">
        @if ($message = Session::get('success'))
            {{-- Extract the color from the session data --}}
            @php
                $color = Session::get('color', 'green'); // Default to green if color is not provided
            @endphp


            <div class="aleart aleart-success-solid" id="successAlert"
                style="position: absolute;
            width: 30%;
            right: 16px;">
                {{ $message }}
                <button class="close-button">
                    <i class="ri-close-line text-inherit"></i>
                </button>
            </div>
        @endif
        {{--
        <div class="card">
            <h2 class="card-title">Contact Management</h2>
        </div> --}}

        {{-- <div id="loader" class="w-screen h-screen flex-center bg-white dark:bg-dark-card fixed inset-0 z-[9999]">
            <img src="{{ asset('admin/assets/images/loader.gif') }}" alt="loader">
        </div> --}}
        <div class="grid grid-cols-12">
            <div class="col-span-full">
                <div class="card p-0">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Conatct </h3>
                        <a href="{{ route('contact.create') }}"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">Add contact</span>
                        </a>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="p-6 space-y-4" id="dataTableContainer" style="display: none;">
                            <table id="basicDataTable">
                                <thead>
                                    <tr>
                                        <th class="bg-[#B2E8D9]">Sl.no</th>
                                        <th class="bg-[#B2E8D9]">Name</th>
                                        <th class="bg-[#B2E8D9]">Email</th>
                                        <th class="bg-[#B2E8D9]">Mobile</th>
                                        <th class="bg-[#B2E8D9]">Subject</th>
                                        <th class="bg-[#B2E8D9]">Enquiry</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-dark-border">
                                    <div id="loader" class="flex justify-center items-center h-16">
                                        <svg class="animate-spin h-8 w-8 text-blue-500" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10"
                                                stroke="currentColor" stroke-width="4">
                                            </circle>
                                            <path class="opacity-75" fill="currentColor"
                                                d="M4 12a8 8 0 018-8v4l3-3-3-3V4a8 8 0 018 8h-4l3 3-3 3h4a8 8 0 01-8 8v-4l-3 3 3 3v-4a8 8 0 01-8-8z">
                                            </path>
                                        </svg>
                                    </div>
                                    @foreach ($contactDetails as $index => $contact)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->mobile_no }}</td>
                                            <td>{{ $contact->subject }}</td>
                                            <td>{{ $contact->enquiry }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Hide the loader and show the table once the page is fully loaded
            document.getElementById("loader").style.display = "none";
            document.getElementById("dataTableContainer").style.display = "block";
        });
    </script>
@endsection
