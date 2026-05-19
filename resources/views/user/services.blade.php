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
        .title-box.text-center span {
            font-size: 16px;
            font-weight: 700;
            color: #000;
            display: block;
            margin-bottom: 10px;
        }

        .page-header-3 {
            margin: 3rem 0 2rem;
        }

        .section {
            padding: 50px 0;
        }

        /* Grid Container */
        .services-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            /* padding: 20px; */
            /* justify-content: center; */
        }

        /* Individual Service Card */
        .service-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: calc(33.333% - 20px);
            /* 3 cards per row */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        /* Hover Effect for Cards */
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        /* Icon Styling */
        .icon {
            display: inline-block;
            font-size: 36px;
            margin-bottom: 10px;
            color: #333;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .service-card {
                width: calc(50% - 20px);
                /* 2 cards per row */
            }
        }

        @media (max-width: 768px) {
            .service-card {
                width: 100%;
                /* 1 card per row */
            }
        }

        /* Typography */
        h4 {
            font-size: 18px;
            margin: 15px 0;
            color: #DAA520;
        }

        p {
            font-size: 14px;
            color: #555;
            line-height: 2;
        }

        /*--------*/
    </style>
    <style>
        .container-box-one {
            padding: 20px !important;
            width: 700px !important;

        }

        .faq-drawer {
            margin-bottom: 15px;
            /* border: 1px solid; */
            padding: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .faq-drawer__content p {
            margin-bottom: 10px;
            padding: 0px;
        }

        .faq-drawer__content-wrapper {
            font-size: 1.25em;
            line-height: 1.4em;
            max-height: 0px;
            overflow: hidden;
            transition: 0.25s ease-in-out;
        }

        .faq-drawer__title {
            /* border-top: #000 1px solid; */
            cursor: pointer;
            display: block;
            font-size: 1.25em;
            font-weight: 700;
            /* padding: 30px 0 0 0; */
            position: relative;
            margin-bottom: 0;
            transition: all 0.25s ease-out;
        }

        .faq-drawer__title::after {
            border-style: solid;
            border-width: 1px 1px 0 0;
            content: " ";
            display: inline-block;
            float: right;
            height: 10px;
            /* left: 2px; */
            left: -20px;
            position: relative;
            right: 20px;
            /* top: 2px; */
            top: 10px;
            transform: rotate(135deg);
            transition: 0.35s ease-in-out;
            vertical-align: top;
            width: 10px;
        }

        /* OPTIONAL HOVER STATE */
        .faq-drawer__title:hover {
            color: #4E4B52;
        }

        .faq-drawer__trigger:checked+.faq-drawer__title+.faq-drawer__content-wrapper {
            max-height: 320px;
            transition: 0.3s ease-in;
        }

        .faq-drawer__trigger:checked+.faq-drawer__title::after {
            transform: rotate(-45deg);
            transition: 0.3s ease-in-out;
        }

        input[type="checkbox"] {
            display: none;
        }

        @media only screen and (max-width: 600px) {

            .container-box-one {
                width: 100% !important;
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

                                <h2 style="padding: 0px;margin: 0px;text-transform: uppercase;">Services
                                </h2>
                            </div>

                        </div>
                    </div>
                </div>
            </main>
            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-info">

                                <div class="info-title text-center" style="margin-bottom: 15px;">

                                    <span>Enhance your future</span>
                                    Innovation stylish ideas
                                </div>
                                <div class="title-hr" style="display: flex; align-items: center; margin: auto;"></div>

                            </div>
                        </div>
                    </div>

                    <div class="services-grid">
                        <div class="service-card">
                            <!-- <span class="icon icon-apartment"></span> -->
                            <div>
                                <img src="{{ asset('user/assets/images/icon/interior.png') }}" alt="">
                            </div>
                            <h4>Interior Design</h4>
                            <p>
                                At FIO, we craft interiors that breathe life into spaces. From residential havens to
                                commercial marvels,
                                our interior design solutions blend functionality with aesthetics, creating immersive
                                environments that
                                leave a lasting impression.
                            </p>
                        </div>
                        <div class="service-card">
                            <!-- <span class="icon icon-paint-roller"></span> -->
                            <div>
                                <img src="{{ asset('user/assets/images/icon/exterior.png') }}" alt="">
                            </div>
                            <h4>Exterior Design</h4>
                            <p>
                                Our exterior designs redefine the notion of curb appeal. Whether it’s a striking facade
                                or a harmonious
                                landscape, we conceptualize and execute outdoor spaces that captivate the senses and
                                stand the test of time.
                            </p>
                        </div>
                        <div class="service-card">
                            <!-- <span class="icon icon-paint-roller"></span> -->
                            <div>
                                <img src="{{ asset('user/assets/images/icon/furniture-1.png') }}" alt="">
                            </div>

                            <h4>Furniture & Decor</h4>
                            <p>
                                Elevate your space with our curated selection of furniture and decor. From statement
                                pieces to subtle
                                accents, our collection embodies craftsmanship, quality, and timeless elegance.
                            </p>
                        </div>
                        <div class="service-card">
                            <!-- <span class="icon icon-paint-roller"></span> -->
                            <div>
                                <img src="{{ asset('user/assets/images/icon/Concept-Planning.png') }}" alt="">
                            </div>

                            <h4>Concept Planning</h4>
                            <p>
                                Behind every exceptional design lies a well-conceived concept. Our team excels in
                                translating ideas into
                                tangible plans, ensuring that every project is underpinned by a clear vision and
                                strategic framework.
                            </p>
                        </div>
                        <div class="service-card">
                            <!-- <span class="icon icon-paint-roller"></span> -->
                            <div>
                                <img src="{{ asset('user/assets/images/icon/custom-design.png') }}" alt="">
                            </div>

                            <h4>Custom Design</h4>
                            <p>
                                Tailored to your unique preferences, our custom design services offer a personalized
                                touch to every project.
                                From bespoke furniture pieces to one-of-a-kind architectural elements, we bring your
                                dreams to life with
                                meticulous attention to detail.
                            </p>
                        </div>
                    </div>

                </div>
            </section>

            <!---------->
            <div>

                <div class="page-header-3">
                    <div class="title-box text-center">

                        <span>Design that inspires</span>
                        <h2 style="padding: 0px;margin: 0px;text-transform: uppercase;">Crafting Satisfaction
                        </h2>
                    </div>
                </div>


                <div class="container-box-one">
                    <div class="faq-drawer">
                        <input class="faq-drawer__trigger" id="faq-drawer" type="checkbox" /><label
                            class="faq-drawer__title" for="faq-drawer">What sets FIO apart from other design
                            firms? </label>
                        <div class="faq-drawer__content-wrapper">
                            <div class="faq-drawer__content">
                                <p>

                                    At FIO, we believe in co-creation – involving our
                                    clients as partners in the design journey ensures
                                    that their vision is at the heart of every
                                    project.

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-drawer">
                        <input class="faq-drawer__trigger" id="faq-drawer-2" type="checkbox" /><label
                            class="faq-drawer__title" for="faq-drawer-2">How long does the design process typically
                            take?</label>
                        <div class="faq-drawer__content-wrapper">
                            <div class="faq-drawer__content">
                                <p>

                                    The duration of each project varies depending on
                                    its scope and complexity. We work closely with our
                                    clients to establish realistic timelines and
                                    milestones.

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-drawer">
                        <input class="faq-drawer__trigger" id="faq-drawer-3" type="checkbox" /><label
                            class="faq-drawer__title" for="faq-drawer-3">Do you offer sustainable design
                            solutions?</label>
                        <div class="faq-drawer__content-wrapper">
                            <div class="faq-drawer__content">
                                <p>

                                    Yes, sustainability is a core value at FIO. We
                                    integrate eco-friendly practices and materials
                                    into our designs to minimize environmental impact
                                    without compromising on aesthetics or
                                    functionality.

                                </p>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

            <!------end------>
            <!-- START FOOTER -->
            @include('user.layouts.footer')
            <!-- END FOOTER -->
        </div>
    </div>

    @include('user.layouts.script')

</body>

</html>
