@extends('admin.layouts.index')
@section('content')
    <div id="loader" class="w-screen h-screen flex-center bg-white dark:bg-dark-card fixed inset-0 z-[9999]">
        <img src="{{ asset('admin/assets/images/loader.gif') }}" alt="loader">
    </div>
    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] px-4 group-data-[theme-width=box]:xl:px-0 ac-transition">

        <div class="grid grid-cols-12 gap-x-4">
            <!-- BASIC INPUT -->
            <div class="col-span-full lg:col-span-12">
                <div class="card p-0">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Role Create Form</h3>
                        {{-- <a href="{{route('role.create')}}"type="button"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">Add</span>

                            <i class="ri-add-line text-inherit text-[15px]"></i>
                    </a> --}}
                        <a href="{{ route('role.index') }}" type="button"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">Back</span>
                        </a>
                    </div>
                    <form action="{{ route('role.store') }}" method="POST">
                        @csrf
                        <div class="p-6 space-y-4 mt-2">
                            <div>
                                <div>
                                    <label for="first_name" class="form-label">Role</label>
                                    <input type="text" id="first_name" class="form-input" placeholder="First Name"
                                        name="name" autocomplete="off" required>
                                </div>



                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="statusSelect" class="form-label">Permission</label>
                                        @foreach ($permissions as $key => $value)
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox{{ $value->id }}" type="checkbox" name="permission[]"
                                                    value="{{ $value->id }}">
                                                <label for="checkbox{{ $value->id }}">
                                                    {{ $value->name }} </label>
                                            </div>
                                        @endforeach
                                        @error('permission')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="mt-3">
                                    <button class="btn b-solid btn-info-solid">Submit</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
    <!-- End Main Content -->
@endsection
