@extends('admin.layouts.index')
@section('content')
    <div id="loader" class="w-screen h-screen flex-center bg-white dark:bg-dark-card fixed inset-0 z-[9999]">
        <img src="{{ asset('admin/assets/images/loader.gif') }}" alt="loader">
    </div>
    <!-- Start Main Content -->
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

        <div class="grid grid-cols-12">
            <!-- INITIALIZE CSS CLASS -->
            <div class="hidden">
                <div
                    class="self-center md:col-span-6 md:place-self-end lg:col-span-full inline-block w-auto ml-2 dark:bg-dark-card-two dark:text-white align-middle">
                </div>
                <div
                    class="hover:bg-primary-500 hover:text-white dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                </div>
                <div
                    class="text-slate-300 border-slate-300 dark:!bg-gray-400 dark:text-slate-300 bg-slate-200/50 first:rounded-l-lg last:rounded-r-lg">
                </div>
                <div
                    class=" dark:bg-gray-700 dark:!rounded-none transition-all duration-150 ease-linear [&.selected]:bg-[#F2F4F9] dark:[&.selected]:bg-dark-icon">
                </div>
                <div
                    class="group-[.bordered]:rounded-none group-[.bordered]:border group-[.bordered]:border-gray-200 dark:group-[.bordered]:border-dark-border">
                </div>
            </div>
            <!-- INITIALIZE CSS CLASS -->
            <div class="tablejs sr-only size-0"></div>
            <!-- BASIC DATA TABLE -->
            <div class="col-span-full">
                <div class="card p-0">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">User Management / Roles</h3>
                        <a href="{{ route('role.create') }}"type="button"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">Add Role</span>
                            {{-- <i class="ri-code-line text-inherit text-[15px]"></i> --}}
                        </a>
                    </div>
                    <div class="p-6 space-y-4">
                        <table id="basicDataTable">
                            <thead>
                                <tr>
                                    <th class="bg-[#B2E8D9]">Sl.no</th>
                                    <th class="bg-[#B2E8D9]">Name</th>
                                    <th class="bg-[#B2E8D9]">Permission</th>

                                    <th class="bg-[#B2E8D9]">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-dark-border">

                                @foreach ($roles as $index => $role)
                                    <tr>
                                        <td>{{ (int) $index + 1 }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            @foreach ($role->permissions as $permission)
                                                {{ $permission->name }},
                                            @endforeach
                                        <td class="d-flex gap-2">
                                            <a href ="{{ route('role.edit', $role->id) }}"><i
                                                    class="ri-edit-box-line text-info"></i></a>

                                            <form method="post" action="{{ route('role.delete', $role->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    onclick="return confirm('Are you sure you want to delete this item?')"><i
                                                        class="ri-delete-bin-fill text-danger"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Prism Code -->
                    <div class="p-6 hidden">
                        <pre>
                            <code class="language-markup">
                                &lt;p>Sorry we can't show the huge data table&lt;/p>
                            </code>
                        </pre>
                    </div>
                    <!-- Prism Code -->
                </div>
            </div>

        </div>
    </div>
    <!-- End Main Content -->
@endsection

