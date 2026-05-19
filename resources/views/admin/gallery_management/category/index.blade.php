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


        <div id="loader" class="w-screen h-screen flex-center bg-white dark:bg-dark-card fixed inset-0 z-[9999]">
            <img src="{{ asset('admin/assets/images/loader.gif') }}" alt="loader">
        </div>
        <div class="grid grid-cols-12">
            <div class="col-span-full">
                <div class="card p-0">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Gallery Management / Category</h3>
                        <a href="{{ route('category.create') }}"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">Add Category</span>
                        </a>
                    </div>
                    <div class="p-6 space-y-4">
                        <table id="basicDataTable">
                            <thead>
                                <tr>
                                    <th class="bg-[#B2E8D9]">Sl.no</th>
                                    <th class="bg-[#B2E8D9]">Name</th>
                                    <th class="bg-[#B2E8D9]">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-dark-border">
                                @foreach ($categories as $index => $category)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            {{ $category->name }}
                                        </td>
                                        {{-- <td>
                                            <a href="{{ route('category.edit', $category->id) }}"
                                                class="text-blue-500 mr-2"><i class="ri-edit-box-line text-info"></i>
                                            </a>
                                            <form method="POST" action="{{ route('category.delete', $category->id) }}"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    onclick="return confirm('Are you sure you want to delete this item?')"><i
                                                        class="ri-delete-bin-fill text-danger"></i>
                                                </button>
                                            </form>
                                        </td> --}}
                                        <td>
                                            <a href="{{ route('category.edit', $category->id) }}"
                                                class="text-blue-500 mr-2">
                                                <i class="ri-edit-box-line text-info"></i>
                                            </a>
                                            <form method="POST" action="{{ route('category.delete', $category->id) }}"
                                                id="delete-form-{{ $category->id }}" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="delete-btn" data-id="{{ $category->id }}">
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

    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.7/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.7/dist/sweetalert2.all.min.js"></script>

    <script>
        // Attach event listener to the delete button
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function(event) {
                const categoryId = button.getAttribute('data-id');
                const form = document.getElementById('delete-form-' + categoryId);

                // Show the SweetAlert confirmation dialog
                Swal.fire({
                    title: "Are you sure?",
                    text: "If you delete this category, the project images will also be deleted and you won't be able to revert this!",
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
    </script>
@endsection
