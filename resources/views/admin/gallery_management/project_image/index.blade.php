@extends('admin.layouts.index')

@section('content')
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] px-4 group-data-[theme-width=box]:xl:px-0 ac-transition">

        @if ($message = Session::get('success'))
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
                        <h3 class="text-lg card-title leading-none">Project Images</h3>
                        <a href="{{ route('project.create') }}"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">Add Project Image </span>
                        </a>
                    </div>
                    <div class="p-6 space-y-4">
                        <table id="basicDataTable">
                            <thead>
                                <tr>
                                    <th class="bg-[#B2E8D9]">Sl.no</th>
                                    <th class="bg-[#B2E8D9]">Category</th>
                                    <th class="bg-[#B2E8D9]">Title</th>
                                    <th class="bg-[#B2E8D9]">Images</th>
                                    <th class="bg-[#B2E8D9]">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-dark-border">
                                @foreach ($project_images as $index => $project_image)
                                    <tr>

                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $project_image->category->name }}</td>
                                        <td>{{ $project_image->name }}</td>

                                        <td>

                                            <img src="{{ asset('storage/' . $project_image->image) }}" alt="Image"
                                                class="img-thumbnail" style="width: 50px; height: 50px;">

                                        </td>
                                        <td>
                                            <a href="{{ route('project.edit', $project_image->id) }}"
                                                class="text-blue-500 mr-2"><i class="ri-edit-box-line text-info"></i>
                                            </a>
                                            {{-- <form method="POST" action="{{ route('project.delete', $project_image->id) }}"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    onclick="return confirm('Are you sure you want to delete this item?')"><i
                                                        class="ri-delete-bin-fill text-danger"></i>
                                                </button>
                                            </form> --}}
                                            <form method="POST" action="{{ route('project.delete', $project_image->id) }}"
                                                id="delete-form-{{ $project_image->id }}" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="delete-btn"
                                                    data-id="{{ $project_image->id }}">
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
    </script>
@endsection
