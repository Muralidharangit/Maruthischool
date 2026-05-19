@extends('admin.layouts.index')

@section('content')

<div
    class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] px-4 group-data-[theme-width=box]:xl:px-0 ac-transition">

    <!-- Success Message -->
    @if ($message = Session::get('success'))

        <div class="aleart aleart-success-solid"
             id="successAlert"
             style="position:absolute; width:30%; right:16px;">

            {{ $message }}

            <button class="close-button">

                <i class="ri-close-line text-inherit"></i>

            </button>

        </div>

    @endif

    <div class="grid grid-cols-12">

        <div class="col-span-full">

            <div class="card p-0">

                <!-- Header -->
                <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">

                    <h3 class="text-lg card-title leading-none">

                        Event Management

                    </h3>

                    <a href="{{ route('event.create') }}"
                       class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">

                        <span class="shrink-0">

                            Add Events

                        </span>

                    </a>

                </div>

                <!-- Table -->
                <div class="p-6 space-y-4">

                    <div id="dataTableContainer">

                        <table id="basicDataTable">

                            <thead>

                                <tr>

                                    <th class="bg-[#B2E8D9]">Sl.no</th>

                                    <th class="bg-[#B2E8D9]">Title</th>

                                    <th class="bg-[#B2E8D9]">Description</th>

                                    <th class="bg-[#B2E8D9]">Event Date</th>

                                    <th class="bg-[#B2E8D9]">Image</th>

                                    <th class="bg-[#B2E8D9]">Status</th>

                                    <th class="bg-[#B2E8D9]">Action</th>

                                </tr>

                            </thead>

                            <tbody class="divide-y divide-gray-200 dark:divide-dark-border">

                                @foreach ($eventDetails as $index => $event)

                                    <tr>

                                        <!-- Serial -->
                                        <td>

                                            {{ $index + 1 }}

                                        </td>

                                        <!-- Title -->
                                        <td>

                                            {{ $event->title }}

                                        </td>

                                        <!-- Description -->
                                       <td class="max-w-[100px] whitespace-normal break-words">

    {{ Str::limit($event->description, 25) }}

</td>

                                        <!-- Event Date -->
                                        <td>

                                            {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}

                                        </td>

                                        <!-- Image -->
                                        <td>

                                            <img src="{{ asset('storage/' . $event->image) }}"
                                                 alt="Event Image"
                                                 class="img-thumbnail"
                                                 style="width:60px; height:60px; object-fit:cover;">

                                        </td>

                                        <!-- Status -->
                                        <td class="{{ $event->status == 1 ? 'text-success' : 'text-danger' }}">

                                            {{ $event->status == 1 ? 'Active' : 'Inactive' }}

                                        </td>

                                        <!-- Actions -->
                                        <td>

                                            <!-- Edit -->
                                            <a href="{{ route('event.edit', $event->id) }}"
                                               class="text-blue-500 mr-2">

                                                <i class="ri-edit-box-line text-info"></i>

                                            </a>

                                            <!-- Delete -->
                                            <form action="{{ route('event.destroy', $event->id) }}"
                                                  method="POST"
                                                  id="delete-form-{{ $event->id }}"
                                                  style="display:inline-block;">

                                                @csrf
                                                @method('DELETE')

                                                <button type="button"
                                                        class="delete-btn"
                                                        data-id="{{ $event->id }}">

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

<!-- SweetAlert -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.7/dist/sweetalert2.min.css"
      rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.7/dist/sweetalert2.all.min.js"></script>

<!-- Delete Confirmation -->
<script>

    document.addEventListener("DOMContentLoaded", function () {

        document.body.addEventListener("click", function (event) {

            if (event.target.closest(".delete-btn")) {

                let button = event.target.closest(".delete-btn");

                let eventId = button.getAttribute("data-id");

                let form = document.getElementById("delete-form-" + eventId);

                Swal.fire({

                    title: "Are you sure?",

                    text: "You won't be able to revert this!",

                    icon: "warning",

                    showCancelButton: true,

                    confirmButtonText: "Yes, delete it!",

                    cancelButtonText: "Cancel",

                    confirmButtonColor: "#3085d6",

                    cancelButtonColor: "#d33",

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