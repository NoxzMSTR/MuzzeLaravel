@extends('layout.main')

@section('content')
    <!-- bsSlidViv -->
    @include('includes.home-slides')
    <!-- calloutAside -->
    @include('includes.home-callout')
    <!-- aboutOnviewBlock -->
    @include('includes.home-about')
    <!-- onviewMuseumAside -->
    @include('includes.home-museum')
    <!-- upcomingEveBlock -->
    @include('includes.home-upcoming')
    <!-- ourGalleryBlock -->
    @include('includes.home-gallery')
    <!-- visitorsSayBlock -->
    @include('includes.home-visitors')
    <!-- mapBlock -->
    @include('includes.map')
    <!-- sponsorsAside -->
    @include('includes.home-sponsors')
    <!-- upcomingEventsBlock -->
    <!-- <section class="upcomingEventsBlock text-center pt-7 pb-5 pt-md-10 pt-lg-13 pb-lg-10 pt-xl-20 pb-xl-14">
        <div class="container">
            
            <header class="topHeadingHead mb-6 mb-lg-11">
                <h1>One Museum, Three Locations</h1>
            </header>
            <div class="row mx-xl-n4 justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 px-xl-4">
                    
                    <article class="upcEveColumn border position-relative py-8 px-4 mb-6 mb-xl-8 mx-auto mx-md-0">
                        <div class="imgHolder mb-5 overflow-hidden">
                            <a href="visit-us-block.html">
                                <img src="https://via.placeholder.com/365x200" class="img-fluid w-100" alt="image description">
                            </a>
                        </div>
                        <h2 class="mb-0">
                            <a href="visit-us-block.html">Modern Homestead</a>
                        </h2>
                        <time datetime="2011-01-12" class="simupTime d-block text-gray777 mb-2">Open Daily 10AM-9PM</time>
                        <address class="mb-5">
                            <p class="mb-0"><i class="fas fa-map-marker-alt icn" aria-hidden="true"><span class="sr-only">icon</span></i> 11 West 52 Street, Mangatha</p>
                        </address>
                        <a href="visit-us-block.html" class="btn btnGre5 btnGre5Outline bdr2 btnMdMinWidth btn-sm">Plan Your Visit</a>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4 px-xl-4">
                    
                    <article class="upcEveColumn border position-relative py-8 px-4 mb-6 mb-xl-8 mx-auto mx-md-0">
                        <div class="imgHolder mb-5 overflow-hidden">
                            <a href="visit-us-block.html">
                                <img src="http://via.placeholder.com/365x200" class="img-fluid w-100" alt="image description">
                            </a>
                        </div>
                        <h2 class="mb-0">
                            <a href="visit-us-block.html">The Max Sixth Avenue</a>
                        </h2>
                        <time datetime="2011-01-12" class="simupTime d-block text-gray777 mb-2">Open Daily 10AM-9PM</time>
                        <address class="mb-5">
                            <p class="mb-0"><i class="fas fa-map-marker-alt icn" aria-hidden="true"><span class="sr-only">icon</span></i> 22 Max Sixth Avenue, Queens</p>
                        </address>
                        <a href="visit-us-block.html" class="btn btnGre5 btnGre5Outline bdr2 btnMdMinWidth btn-sm">Plan Your Visit</a>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4 px-xl-4">
                    
                    <article class="upcEveColumn border position-relative py-8 px-4 mb-6 mb-xl-8 mx-auto mx-md-0">
                        <div class="imgHolder mb-5 overflow-hidden">
                            <a href="visit-us-block.html">
                                <img src="http://via.placeholder.com/365x200" class="img-fluid w-100" alt="image description">
                            </a>
                        </div>
                        <h2 class="mb-0">
                            <a href="visit-us-block.html">Uvan-Muzze Center</a>
                        </h2>
                        <time datetime="2011-01-12" class="simupTime d-block text-gray777 mb-2">Open Daily 10AM-9PM</time>
                        <address class="mb-5">
                            <p class="mb-0"><i class="fas fa-map-marker-alt icn" aria-hidden="true"><span class="sr-only">icon</span></i> 143 Chantilly, Virginia 20151</p>
                        </address>
                        <a href="visit-us-block.html" class="btn btnGre5 btnGre5Outline bdr2 btnMdMinWidth btn-sm">Plan Your Visit</a>
                    </article>
                </div>
            </div>
        </div>
    </section> -->
    <!-- newsletterAside -->
    @include('includes.home-news')
@endsection