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
                        <h3 class="text-lg card-title leading-none">Slider</h3>
                        <a href="{{ route('slider.create') }}"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">Add Slider</span>
                        </a>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="p-6 space-y-4" id="dataTableContainer" style="display: none;">
                            <table id="basicDataTable">
                                <thead>
                                    <tr>
                                        <th class="bg-[#B2E8D9]">Sl.no</th>
                                        <th class="bg-[#B2E8D9]">Title</th>
                                        <th class="bg-[#B2E8D9]">Description</th>
                                        <th class="bg-[#B2E8D9]">Image</th>
                                        <th class="bg-[#B2E8D9]">Order </th>
                                        <th class="bg-[#B2E8D9]">Status</th>
                                        <th class="bg-[#B2E8D9]">Action</th>
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
                                    @foreach ($sliders as $index => $slider)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $slider->title }}</td>
                                            <td>{{ $slider->description }}</td>
                                            <td> <img src="{{ asset('storage/' . $slider->image) }}" alt="Image"
                                                    class="img-thumbnail" style="width: 50px; height: 50px;">
                                                <img src="{{ Storage::url($slider->image) }}" alt="Image"
                                                    class="img-thumbnail" style="width: 50px; height: 50px;">
                                                <img src="{{ asset('uploads/' . $slider->image) }}" alt="Image"
                                                    class="img-thumbnail" style="width: 50px; height: 50px;">
                                            </td>

                                            <td>{{ $slider->order }}</td>
                                            {{-- <td>{{ $slider->status }}</td> --}}

                                            <td
                                                class="text-bold {{ $slider->status == 0 ? 'text-danger' : 'text-success' }}">
                                                {{ $slider->status == 0 ? 'Inactive' : 'Active' }}</td>
                                            <td>
                                                <a href="{{ route('slider.edit', $slider->id) }}"
                                                    class="text-blue-500 mr-2"><i class="ri-edit-box-line text-info"></i>
                                                </a>
                                                <form method="POST" action="{{ route('slider.destroy', $slider->id) }}"
                                                    id="delete-form-{{ $slider->id }}" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="delete-btn"
                                                        data-id="{{ $slider->id }}">
                                                        <i class="ri-delete-bin-fill text-danger"></i>
                                                    </button>
                                                </form>

                                            </td>
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

    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.7/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.7/dist/sweetalert2.all.min.js"></script>

    {{-- <script>
        // Attach event listener to the delete button
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function(event) {
                const categoryId = button.getAttribute('data-id');
                const form = document.getElementById('delete-form-' + categoryId);

                // Show the SweetAlert confirmation dialog
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel!",
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If confirmed, submit the form
                        form.submit();
                        Swal.fire(
                            'Deleted!',
                            'Your item has been deleted.',
                            'success'
                        );
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        Swal.fire(
                            'Cancelled',
                            'Your item is safe :)',
                            'error'
                        );
                    }
                });
            });
        });
    </script> --}}

    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".delete-btn").forEach(button => {
                button.addEventListener("click", function(event) {
                    const categoryId = button.getAttribute("data-id");
                    const form = document.getElementById("delete-form-" + categoryId);

                    if (!form) {
                        console.error("Form not found for ID: " + categoryId);
                        return;
                    }

                    // Show the SweetAlert confirmation dialog
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Yes, delete it!",
                        cancelButtonText: "No, cancel!",
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit(); // Submit form after confirmation
                        }
                    });
                });
            });
        });
    </script> --}}

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.body.addEventListener("click", function(event) {
                if (event.target.closest(".delete-btn")) {
                    let button = event.target.closest(".delete-btn");
                    let categoryId = button.getAttribute("data-id");
                    let form = document.getElementById("delete-form-" + categoryId);

                    if (!form) {
                        console.error("Form not found for ID: " + categoryId);
                        return;
                    }

                    // Show the SweetAlert confirmation dialog
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Yes, delete it!",
                        cancelButtonText: "No, cancel!",
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                }
            });
        });
    </script>
@endsection
