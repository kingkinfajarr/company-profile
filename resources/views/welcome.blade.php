<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Plain - Multipurpose TailwindCSS Template</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.png') }}" type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/tiny-slider.css') }}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/lineicons/font-css/LineIcons.css') }}">

    <!--====== Tailwind CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/tailwindcss.css') }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
   
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== HEADER PART START ======-->

    <section class="header_area">
        <div class="navbar-area bg-white">
            <div class="container relative">
                <div class="row items-center">
                    <div class="w-full">
                        <nav class="flex items-center justify-between py-4 navbar navbar-expand-lg">
                            <a class="navbar-brand mr-5" href="index.html">
                                <img src="{{ asset('frontend/assets/images/logo.svg') }}" alt="Logo">
                            </a>
                            <button class="block navbar-toggler focus:outline-none lg:hidden" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                
                            </button>

                            <div class="absolute left-0 z-20 hidden w-full px-5 py-3 duration-300 bg-white lg:w-auto collapse navbar-collapse lg:block top-full mt-full lg:static lg:bg-transparent shadow lg:shadow-none" id="navbarOne">
                                <ul id="nav" class="items-center content-start mr-auto lg:justify-end navbar-nav lg:flex">
                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="page-scroll active" href="#home">Beranda</a>
                                    </li>
                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="page-scroll" href="#about">Profil</a>
                                    </li>
                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="page-scroll" href="#portofolio">Portofolio</a>
                                    </li>
                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="page-scroll" href="#gallery">Gallery</a>
                                    </li>
                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="page-scroll" href="#blog">Blog</a>
                                    </li>
                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="page-scroll" href="#contact">Contact</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->

        <div id="home" class="header_hero bg-gray relative z-10 overflow-hidden lg:flex items-center">
            <div class="hero_shape shape_1">
                <img src="{{ asset('frontend/assets/images/shape/shape-1.svg') }}" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_2">
                <img src="{{ asset('frontend/assets/images/shape/shape-2.svg') }}" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_3">
                <img src="{{ asset('frontend/assets/images/shape/shape-3.svg') }}" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_4">
                <img src="{{ asset('frontend/assets/images/shape/shape-4.svg') }}" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_6">
                <img src="{{ asset('frontend/assets/images/shape/shape-1.svg') }}" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_7">
                <img src="{{ asset('frontend/assets/images/shape/shape-4.svg') }}" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_8">
                <img src="{{ asset('frontend/assets/images/shape/shape-3.svg') }}" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_9">
                <img src="{{ asset('frontend/assets/images/shape/shape-2.svg') }}" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_10">
                <img src="{{ asset('frontend/assets/images/shape/shape-4.svg') }}" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_11">
                <img src="{{ asset('frontend/assets/images/shape/shape-1.svg') }}" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_12">
                <img src="{{ asset('frontend/assets/images/shape/shape-2.svg') }}" alt="shape">
            </div><!-- hero shape -->

            <div class="container">
                <div class="row">
                    <div class="w-full lg:w-1/2">
                        <div class="header_hero_content pt-150 lg:pt-0">
                            @forelse ($hero as $item)
                                <h2 class="hero_title text-2xl sm:text-4xl md:text-5xl lg:text-4xl xl:text-5xl font-extrabold">{{ $item->title }}</h2>
                                <p class="mt-8 lg:mr-8">{{ $item->description }}</p>
                            @empty
                                <h2 class="hero_title text-2xl sm:text-4xl md:text-5xl lg:text-4xl xl:text-5xl font-extrabold">Data Kosong</h2>
                                <p class="mt-8 lg:mr-8">Data Kosong</p>
                            @endforelse
                            <div class="hero_btn mt-10">
                                <a class="main-btn" href="#0">Get Started</a>
                            </div>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header_shape hidden lg:block"></div>

            <div class="header_image flex items-center">
                <div class="image 2xl:pl-25">
                    <img src="{{ asset('frontend/assets/images/header-image.svg') }}" alt="Header Image">
                </div>
            </div> <!-- header image -->
        </div> <!-- header hero -->
    </section>

    <!--====== HEADER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section class="about_area pt-120 relative" id="about">
        <div class="section_title text-center pb-16">
            <h5 class="sub_title">Profil</h5>
            <h4 class="main_title">From my Company</h4>
        </div> 
        <div class="about_image flex items-end justify-end">
            <div class="image lg:pr-13">
                <img src="{{ asset('frontend/assets/images/about.svg') }}" alt="about">
            </div>
        </div> <!-- about image -->
        <div class="container">
            <div class="row justify-end">
                <div class="w-full lg:w-1/2">
                    <div class="about_content mx-4 pt-11 lg:pt-15 lg:pb-15">
                        {{-- Profil --}}
                        <div class="section_title pb-9">
                            <h5 class="sub_title">Profil</h5>
                            @forelse ($profil as $item)
                                <p>{{ $item->profil }}</p>
                            @empty
                                <p>Data Kosong</p>
                            @endforelse
                        </div>

                        {{-- Sejarah --}}
                        <div class="section_title pb-9">
                            <h5 class="sub_title">Sejarah</h5>
                            @forelse ($profil as $item)
                                <p>{{ $item->sejarah }}</p>
                            @empty
                                <p>Data Kosong</p>
                            @endforelse
                        </div>

                        {{-- Visi Misi --}}
                        <div class="section_title pb-9">
                            <h5 class="sub_title">Visi Misi</h5>
                            @forelse ($profil as $item)
                                <p>{{ $item->visi_misi }}</p>
                            @empty
                                <p>Data Kosong</p>
                            @endforelse
                        </div> <!-- section title -->

                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== WORK PART START ======-->

    <section id="portofolio" class="gallery_area pt-20">
        <div class="container">
            <div class="section_title text-center pb-6">
                <h5 class="sub_title">Portofolio</h5>
                <h4 class="main_title">From The Portofolio</h4>
            </div>
            <div class="md:flex row mx-auto">
                @foreach ($portofolio as $item)
                <div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto md:mb-8 mb-4">
                    <img class="w-full" src="{{ asset('storage/' . $item->foto_portofolio) }}" alt="Sunset in the mountains">

                    <div class="p-5 text-left">
                        <a href="#" class="block text-2xl font-bold text-gray-900">{{ $item->title_portofolio }}</a>
                        <span class="text-sm">{{ $item->name }}</span>
                        <p class="text-sm text-right">{{ $item->tanggal }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            </div>
        </div>
    </section>

    <!--====== WORK PART ENDS ======-->

    <!--====== GALLERY PART START ======-->

    <section id="gallery" class="gallery_area pt-32">
        <div class="container">
            <div class="section_title text-center pb-6">
                <h5 class="sub_title">Gallery</h5>
                <h4 class="main_title">From The Gallery</h4>
            </div>
            <div class="md:flex row mx-auto">
                @foreach ($gallery as $item)
                    <div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto md:mb-8 mb-4">
                        <img class="w-full" src="{{ asset('storage/' . $item->foto_gallery) }}">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--====== GALLERY PART ENDS ======-->

    <!--====== BLOG PART START ======-->

    <section id="blog" class="blog_area pt-120">
        <div class="container">
            <div class="row justify-center">
                <div class="w-full lg:w-1/2">
                    <div class="section_title text-center pb-6">
                        <h5 class="sub_title">Blog</h5>
                        <h4 class="main_title">From The Blog</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-center lg:justify-start">
                @foreach ($blog as $item)
                    <div class="w-full md:w-8/12 lg:w-6/12 xl:w-4/12">
                        <div class="single_blog mx-3 mt-8 rounded-xl bg-white transition-all duration-300 overflow-hidden hover:shadow-lg">
                            <div class="blog_image">
                                <img src="{{ asset('storage/' . $item->image_blog) }}" alt="blog" class="w-full">
                            </div>
                            <div class="blog_content p-4 md:p-5">
                                <ul class="blog_meta flex justify-between">
                                    <li class="text-body-color text-sm md:text-base">By: {{ $item->author }}</li>
                                    <li class="text-body-color text-sm md:text-base">{{ $item->date }}</li>
                                </ul>
                                <h3 class="blog_title"><a href="/blog/{{ $item->slug }}">{{ $item->title }}</a></h3>
                                <a href="/blog/{{ $item->slug }}" class="more_btn">Read More</a>
                            </div>
                        </div> <!-- row -->
                    </div>
                @endforeach
                

            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== BLOG PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact_area relative pt-18 pb-120">
        <div class="contact_image flex items-center justify-end">
            <div class="image lg:pr-13">
                <img src="{{ asset('frontend/assets/images/contact.svg') }}" alt="about">
            </div>
        </div> <!-- about image -->
        
        <div class="container">
            <div class="row justify-end">
                <div class="w-full lg:w-1/2">
                    <div class="contact_wrapper mt-11">
                        <div class="section_title pb-4">
                            <h5 class="sub_title">Contact</h5>
                            <h4 class="main_title">Get In Touch</h4>
                        </div> <!-- section title -->
                        
                        <div class="contact_form">
                            <form id="contact-form" action="{{ asset('frontend/assets/php/contact.php') }}" method="POST">
                                <div class="row">
                                    <div class="w-full md:w-1/2">
                                        <div class="mx-3">
                                            <div class="single_form mt-8">
                                                <input name="name" id="name" type="text" placeholder="Name" class="w-full rounded-md py-4 px-6 border border-solid border-body-color">
                                            </div> <!-- single form -->
                                        </div>
                                    </div>
                                    <div class="w-full md:w-1/2">
                                        <div class="mx-3">
                                            <div class="single_form mt-8">
                                                <input name="email" id="email" type="email" placeholder="Email" class="w-full rounded-md py-4 px-6 border border-solid border-body-color">
                                            </div> <!-- single form -->
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class="mx-3">
                                            <div class="single_form mt-8">
                                                <textarea name="message" id="message" placeholder="Message" rows="5" class="w-full rounded-md py-4 px-6 border border-solid border-body-color resize-none"></textarea>
                                            </div> <!-- single form -->
                                        </div>
                                    </div>
                                    <p class="form-message mx-3"></p>
                                    <div class="w-full">
                                        <div class="mx-3">
                                            <div class="single_form mt-8">
                                                <button type="submit" class="main-btn contact-btn">Submit</button>
                                            </div> <!-- single form -->
                                        </div>
                                    </div>
                                </div> <!-- row -->
                            </form>
                        </div> <!-- contact form -->
                    </div> <!-- contact wrapper -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer class="flex items-center justify-between px-6 py-4 bg-gray-500 sm:flex-row">
        <a href="{{ route('home') }}" class="text-xl font-bold text-white">
            <img src="{{ asset('frontend/assets/images/logo.svg') }}" alt="">
        </a>
        
        <p class="py-2 text-gray-800 dark:text-white sm:py-0">All rights reserved</p>

    </footer>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="scroll-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->    

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Tiny Slider js ======-->
    <script src="{{ asset('frontend/assets/js/tiny-slider.js') }}"></script>

    <!--====== Wow js ======-->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>

</body>

</html>
