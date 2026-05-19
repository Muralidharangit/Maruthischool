<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Templatemanja" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SITE TITLE -->
    <title>Maruthi Senior Secondary School Puducherry | CBSE Affiliated | Pre-KG to Class 12</title>
    @include('user.layouts.links')

    <style>
        .gallery__figure {
            display: flex;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            animation: fade-in 1s;
            transition: opacity .3s;
        }

        .gallery__img {
            transition: all .3s;
            width: 100%;
            aspect-ratio: 1;
            object-fit: cover;
            height: auto;
            max-width: 100%;
        }

        .project-title.text-black {
            color: black;
            padding: 13px;
            /* margin-top: 10px; */
            background-color: burlywood;
            position: absolute;
            bottom: 0;
            width: 100%;
            left: 0;
        }

        .project-item:hover .project-hover .project-title {
            padding: 0;
            background-color: transparent;
        }

        .project-item:hover .project-hover {
            background-color: #deb887ad !important;
        }
        .logo_img {
            width: 111px !important;
            background-size: contain;
            filter: invert(1) !important;
        }

        .navbar {
            height: 10rem;
        }
        @media (max-width:969px) {
            .logo_img {
                width: 90px !important;
            }
        }
    </style>

</head>

<body>

    <div class="animsition">
        <div class="wrapper boxed">


            <!-- START HEADER -->
            @include('user.layouts.header')
            <!-- END HEADER -->

            <main class="page-header-3">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <div class="title-box text-center">

                                <h2 style="padding: 0px;margin: 0px;text-transform: uppercase;">Our Projects
                                </h2>
                            </div>

                        </div>
                    </div>
                </div>
            </main>

            <div class="content">
                <div class="projects">
                    <div class="container">
                        <div class="filter-content-2">
                            {{-- <ul class="filter js-filter">
                                <li class="active"><a href="#" data-filter="*">All</a></li>
                                <!-- <li><a href="#" data-filter=".building">Building</a></li> -->
                                <li><a href="#" data-filter=".villa">Villa</a></li>
                                <li><a href="#" data-filter=".interior">Interior</a></li>
                                <li><a href="#" data-filter=".exterior">Exterior</a></li>

                                @foreach ($imagecategories as $category)
                                    <input type="radio" id="{{ $category->id }}" name="categories"
                                    value="{{ $category->id }}">
                                <label for="{{ $category->id }}">{{ $category->name }}</label>
                                    <li><a href="#" data-filter="{{ $category->name }}">{{ $category->name }}
                                            {{ $category->id }}</a></li>
                                @endforeach
                            </ul> --}}

                            <ul class="filter js-filter">
                                <li class="active"><a href="#" data-filter="*">All</a></li>
                                @foreach ($imagecategories as $category)
                                    <li>
                                        <a href="#"
                                            data-filter=".{{ strtolower($category->name) }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>


                    <!-- Grid Items -->
                    <div class="grid-items js-isotope js-grid-items">



                        @foreach ($galleries as $gallery)
                            <div
                                class="grid-item {{ strtolower($gallery->category->name) }} js-isotope-item js-grid-item gallery__figure">

                                <div class="project-item item-shadow">
                                    <img alt="{{ $gallery->title }}" class="img-responsive gallery__img"
                                        src="{{ asset('storage/' . $gallery->image) }}">
                                    <div class="project-hover">
                                        <div class="project-hover-content">
                                            <h3 class="project-title text-black">{{ $gallery->name }}</h3>
                                            <p class="project-description">{{ $gallery->description }}</p>
                                        </div>
                                        <a href="{{ route('project.detail', ['id' => $gallery->id]) }}"
                                            class="link-arrow">See More <i class="icon ion-ios-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- <div class="grid-items js-isotope js-grid-items">
                        <div class="grid-item interior js-isotope-item js-grid-item">
                            <div class="project-item item-shadow">
                                <img alt="" class="img-responsive"
                                    src="{{ asset('user/assets/images/projects/home-about.jpg') }} ">
                                <div class="project-hover">
                                    <div class="project-hover-content">
                                        <!-- <h3 class="project-title">Triangle<br>Concrete House<br>On Lake</h3> -->
                                        <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil
                                            pcing elit. Proin nunc
                                            leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec
                                            tincidunt velit nec laoreet
                                            semper...</p>
                                    </div>
                                    <a href="project-detail.html" class="link-arrow">See project <i
                                            class="icon ion-ios-arrow-right"></i></a>
                                </div>

                            </div>
                            <div class="">
                                <h3 class="project-title text-black">Hotel Sunlight</h3>

                            </div>
                        </div>



                    </div> --}}
                </div>
            </div>

            <!-- START FOOTER -->
            @include('user.layouts.footer')
            <!-- END FOOTER -->
        </div>
    </div>

    @include('user.layouts.script')

</body>

</html>
