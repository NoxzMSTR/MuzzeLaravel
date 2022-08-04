@extends('layout.main')

@section('content')
    <!-- bsSlidViv -->
    @include('includes.home-slides', [
        'slides' => [
            ['title' => 'Bienvenido a la galeria de arte','heading' => 'Experimenta decadas de arte Dominicano','img' => asset('assets/images/IMG_8975.jfif'),'button_title' => 'Planea tu visita', 'button_link' => 'javascript:void(0);'],
            ['title' => 'Explora el arte dominicano','heading' => 'Obras del maestro Guillo Perez','img' => asset('assets/images/d0dee64853976ef255dfca075907f666_XL.jpg'),'button_title' => 'Explora Mas', 'button_link' => 'javascript:void(0);'], 
            ['title' => 'Conoce mas del','heading' => 'Maestro de la luz y el color','img' => 'https://4.bp.blogspot.com/-5_paXwm8bCM/XJu4lFDZRgI/AAAAAAAAJms/AJIvEa_bG2Y5pDjU1RdHqBv40pHe4ulDACLcBGAs/s1600/Sabor%2Ba%2Bca%25C3%25B1a.jpg','button_title' => 'Leer Mas', 'button_link' => 'javascript:void(0);']

        ]
    ])
    <!-- calloutAside -->
    @include('includes.home-callout')
    <!-- aboutOnviewBlock -->
    @include('includes.home-about')
    <!-- onviewMuseumAside -->
    @include('includes.home-museum')
    <!-- upcomingEveBlock -->
    @include('includes.home-upcoming',[
        'upcomingEvents' => [
            ['day' => '01', 'date' => 'JUL 2022' ,'title' => 'Feria del Coco 2022', 'event_img' => asset('assets/images/PHOTO-2022-07-22-22-20-55.jpg'), 'location' => 'Parque Central, Cabrera','time_slot' => '09:30am - 6:00pm'],
            ['day' => '02', 'date' => 'JUL 2022' ,'title' => 'Exhibicion Parque de Cabrera', 'event_img' => asset('assets/images/PHOTO-2022-07-28-15-05-05.jpg'), 'location' => 'Parque Central, Cabrera','time_slot' => '09:30am - 6:00pm']
        ]
    ])
    <!-- ourGalleryBlock -->
    @include('includes.home-gallery',[
        'exhibitions' => [
        ['title' => 'Placeholder', 'image' => 'http://via.placeholder.com/390x400'],
        ['title' => 'Placeholder', 'image' => 'http://via.placeholder.com/390x400'],
        ['title' => 'Placeholder', 'image' => 'http://via.placeholder.com/390x400'],
        ['title' => 'Placeholder', 'image' => 'http://via.placeholder.com/390x400'],
        ]
        ])
    <!-- visitorsSayBlock -->
    @include('includes.home-visitors',[
        'visitors' => [
            ['comment' => 'Excelente lugar para comprar arte','visitor_img' => 'https://lh3.googleusercontent.com/a-/AFdZucqJHvXZH0tIoDB6Xe7FqLi5xNvv-dcMx93S0PmGf2k=w60-h60-p-rp-mo-ba5-br100', 'visitor_name' => 'Estalin Sanchez', 'visitor_type' => 'Local guide'],
            ['comment' => 'Very nice staff ... professional framework, work at affordable prices ... great', 'visitor_img' => 'https://lh3.googleusercontent.com/a/AItbvmkekzYZ7DeA3jAfe21tdxB-Vxz-lDh1j5MKWmdU=w36-h36-p-c0x00000000-rp-mo-ba4-br100', 'visitor_name' => 'Vincenzo Mancini', 'visitor_type' => 'Visitor']
        ]
    ])
    <!-- mapBlock -->
    @include('includes.map')
    <!-- sponsorsAside -->
    @include('includes.home-sponsors',[
        'sponsors' => [
            ['img' => asset('assets/images/sponsors/banreservas.png'), 'alt' => 'greateVillage'],
            ['img' => 'https://yt3.ggpht.com/X-yBX6JynP6rtdYSxhfRh7xyWpvxgw-G1FjLkP9dbO4_nFwKwWVk25UqO7U94VLFp-_mU7j07Q=s900-c-k-c0x00ffffff-no-rj', 'alt' => 'dilly'],
            ['img' => 'https://www.galeriaguilloperez.com/templates/vt_weightloss/css/styles/vt_logo_style4.png', 'alt' => 'walkers'],
            ['img' => 'https://orgullodemitierra.com.do/wp-content/themes/omt/assets/img/omt-logo.png', 'alt' => 'walkers']
        ]
    ])
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