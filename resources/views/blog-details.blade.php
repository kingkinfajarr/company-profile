<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="{{ asset('frontend/assets/css/tailwindcss.css') }}">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <title>Blog</title>
</head>
<body>

    
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
                                    <a class="page-scroll active" href="{{ route('home') }}">Beranda</a>
                                </li>
                                <li class="nav-item ml-5 lg:ml-11">
                                    <a class="page-scroll" href="{{ route('home') }}">Profil</a>
                                </li>
                                <li class="nav-item ml-5 lg:ml-11">
                                    <a class="page-scroll" href="{{ route('home') }}">Gallery</a>
                                </li>
                                <li class="nav-item ml-5 lg:ml-11">
                                    <a class="page-scroll" href="{{ route('home') }}">Portofolio</a>
                                </li>
                                <li class="nav-item ml-5 lg:ml-11">
                                    <a class="page-scroll" href="{{ route('home') }}">Blog</a>
                                </li>
                                <li class="nav-item ml-5 lg:ml-11">
                                    <a class="page-scroll" href="{{ route('home') }}">Contact</a>
                                </li>
                            </ul>
                        </div> <!-- navbar collapse -->
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header navbar -->

</section>

<!--====== HEADER PART ENDS ======-->
<section>
    @forelse ($blog as $item)
    <div class="container md:mt-40 md:mb-20 mt-28 mb-10 px-6 md:px-44">
        <div class="mx-auto">
            <img src="{{ asset('storage/' . $item->image_blog) }}" alt="" class="text-center rounded-lg w-full overflow-hidden mx-auto">

            <h1 class="text-center font-bold md:my-10 my-5 text-3xl">{{ $item->title }}</h1>
            <div class="content">
                {!! $item->content !!}
            </div>
            <div class="justify-between flex my-5">
                <p>{{ $item->author }}</p>
                <p>{{ $item->date }}</p>
            </div>
        </div>
    </div>
    @empty
        <p>Data Kosong</p>
    @endforelse
</section>

</body>
</html>