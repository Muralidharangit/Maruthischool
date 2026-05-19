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

        .images img::before {
            content: '';
            position: absolute;
            background: antiquewhite;
            width: 100%;
            height: 100%;
        }

        #image-viewer .close {
            position: absolute;
            top: 69px;
            right: 53px;
            color: #ffffff;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
            opacity: 9;
        }

        #image-viewer .close:hover,
        #image-viewer .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        #image-viewer {
            display: none;
            position: fixed;
            z-index: 1031;
            /* padding-top: 100px; */
            left: 0;
            top: 0;
            top: -16px;
            width: 100%;
            height: 105%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
        }

        #image-viewer img {
            height: auto;
            width: 80%;
            object-fit: contain;
        }

        @media(max-width:1024px) {
            #image-viewer img {
                height: auto;
                width: 80%;
            }
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

                                <h2 style="padding: 0px;margin: 0px;text-transform: uppercase;">Detailed-Projects
                                </h2>
                                <p style="padding: 0px;margin: 0px;">The modern architect with innovation</p>
                            </div>

                        </div>
                    </div>
                </div>
            </main>

            <div class="content">
                <div class="projects">
                    <button class="btn mb-2" style="background: burlywood; font-weight: 600; color: #111;"
                        onclick="window.history.back();">
                        <i class="fa-solid fa-arrow-left"></i> Back
                    </button>


                    <div class="grid-items js-isotope js-grid-items">
                        @if ($galleryImages->isEmpty())
                            <div class="grid-item interior js-isotope-item js-grid-item gallery__figure">
                                <h5>No related images found</h5>
                            </div>
                        @else
                            @foreach ($galleryImages as $galleryImage)
                                <div class="grid-item interior js-isotope-item js-grid-item ">
                                    <div class="">
                                        <div class="images">
                                            <span style="position: absolute;color: #fff;left: 50%;top: 50%;">
                                                <i class="fa-solid fa-eye"></i> View</span>
                                            <img alt="" class="img-responsive gallery__img"
                                                src="{{ asset('gallery_images/' . $galleryImage->image) }}"
                                                alt="{{ $galleryImage->image }}">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <!-- START FOOTER -->
                    @include('user.layouts.footer')
                    <!-- END FOOTER -->

                </div>
            </div>
            <div id="image-viewer">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="full-image">
                </div>

            </div>

            @include('user.layouts.script')
            <script>
                $(".images img").click(function() {
                    $("#full-image").attr("src", $(this).attr("src"));
                    $('#image-viewer').show();
                });

                $("#image-viewer .close").click(function() {
                    $('#image-viewer').hide();
                });
            </script>
</body>
</html>
