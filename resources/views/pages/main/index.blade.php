@extends('layout.main')

@section('content')
<main>
    <!-- bsSlidViv -->
    <div class="bsSlidViv">
        <div>
            <!-- introBannerBlock -->
            <article class="introBannerBlock introBannerBlockViv hdIsViv w-100 text-center text-white position-relative d-flex bgCover" style="background-image: url({{asset('assets/images/IMG_8975.jfif')}});">
                <div class="ibbAlignHolder w-100 d-flex align-items-center">
                    <div class="ibbHolder w-100 py-6">
                        <div class="container holder position-relative">
                            <div class="row">
                                <div class="col-12 col-sm-10 offset-sm-1">
                                    <strong class="d-block fontSerif mainHeadingTitle font-weight-normal mb-5">Bienvenido a la galeria de arte</strong>
                                    <h1 class="text-white ibbHeading ibbHeadingViv mb-4 mb-lg-8">Experimenta decadas de arte Dominicano</h1>
                                    <a href="javascript:void(0);" class="btn btn-dark btnDarkInverse align-top btnMdMinWidth">Planea tu visita</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div>
            <!-- introBannerBlock -->
            <article class="introBannerBlock introBannerBlockViv hdIsViv w-100 text-center text-white position-relative d-flex bgCover" style="background-image: url({{asset('assets/images/d0dee64853976ef255dfca075907f666_XL.jpg')}});">
                <div class="ibbAlignHolder w-100 d-flex align-items-center">
                    <div class="ibbHolder w-100 py-6">
                        <div class="container holder position-relative">
                            <div class="row">
                                <div class="col-12 col-sm-10 offset-sm-1">
                                    <strong class="d-block fontSerif mainHeadingTitle font-weight-normal mb-5">Explora el arte dominicano</strong>
                                    <h1 class="text-white ibbHeading ibbHeadingViv mb-4 mb-lg-8">Obras del maestro Guillo Perez</h1>
                                    <a href="javascript:void(0);" class="btn btn-dark btnDarkInverse align-top btnMdMinWidth">Explora Mas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div>
            <!-- introBannerBlock -->
            <article class="introBannerBlock introBannerBlockViv hdIsViv w-100 text-center text-white position-relative d-flex bgCover" style="background-image: url(https://4.bp.blogspot.com/-5_paXwm8bCM/XJu4lFDZRgI/AAAAAAAAJms/AJIvEa_bG2Y5pDjU1RdHqBv40pHe4ulDACLcBGAs/s1600/Sabor%2Ba%2Bca%25C3%25B1a.jpg);">
                <div class="ibbAlignHolder w-100 d-flex align-items-center">
                    <div class="ibbHolder w-100 py-6">
                        <div class="container holder position-relative">
                            <div class="row">
                                <div class="col-12 col-sm-10 offset-sm-1">
                                    <strong class="d-block fontSerif mainHeadingTitle font-weight-normal mb-5">Conoce mas del</strong>
                                    <h1 class="text-white ibbHeading ibbHeadingViv mb-4 mb-lg-8">Maestro de la luz y el color</h1>
                                    <a href="javascript:void(0);" class="btn btn-dark btnDarkInverse align-top btnMdMinWidth">Leer Mas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <!-- calloutAside -->
    <aside class="calloutAside text-center bg-warning text-gray1b1d1f pt-2 pb-2 pt-lg-6 pb-lg-6">
        <div class="container">
            <time datetime="2011-01-12"><i class="far fa-clock icn align-middle mr-1" aria-hidden="true"></i> Abierto desde 9:00 am - 6:00 pm.</time>
            . C/ Lorenzo Alvarez, Cabrera, Republica Dominicana.
            <!-- <a href="javascript:void(0);" class="text-gray1b1d1f">Buy tickets now</a> -->
            <span class="d-block d-lg-inline">
                <a href="tel:18493610323" class="calloutBtn btn btn-dark btnDarkInverse rounded-pill mx-5 mt-2 mt-lg-0">Llamar: 1 (849) 361-0323</a>
            </span>
        </div>
    </aside>
    <!-- aboutOnviewBlock -->
    <article class="bg-grayf8f8f8 hasBdr aboutOnviewBlock pt-7 pb-10 pt-lg-13 pb-lg-16 pt-xl-15 pb-xl-21">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 order-md-2 pt-lg-5 pt-xl-11">
                    <h2 class="h2Medium mb-4">Acerca de Nosotros</h2>
                    <!-- eabDescrText -->
                    <div class="eabDescrText mb-5">
                        <p>D'Guillermo Galeria &amp; enmarcados es una galería de arte ubicada en la República Dominicana que se especializa en las obras de Guillo Pérez y otros pintores del país.</p>
                    </div>
                    <p class="mb-7">Tenemos una amplia variedad de pinturas en exhibición, desde paisajes hasta retratos y todo lo demás. Hay algo para todos en D'guillermo Galeria, y los visitantes seguramente encontrarán una pintura que les encante. La galería también ofrece un servicio de enmarcado, para que los visitantes puedan llevarse sus nuevas obras de arte a casa y exhibirlas con orgullo.</p>
                    <a href="javascript:void(0);" class="btn btnGre5 btnGre5Outline bdr2 btnMdMinWidth">Leer Mas</a>
                </div>
                <div class="col-12 col-md-6 order-md-1">
                    <div class="imgHolder text-center position-relative overflow-hidden mx-auto mx-md-0 mt-5 mt-md-0">
                        <img src="{{asset('assets/images/478E8190-D013-418C-AB71-B1E8631125EC.JPG')}}" class="img-fluid ml-xl-7" loading="lazy" alt="image description">
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!-- onviewMuseumAside -->
    <aside class="position-relative onviewMuseumAside mt-n11 mt-md-n7 mt-lg-n22 pb-3 pb-md-7 pb-lg-12">
        <div class="container">
            <div class="rounded bg-secondary shadow px-6 pt-6 pb-6 px-lg-12 pt-lg-13 pb-lg-12">
                <div class="row">
                    <div class="col-12 col-md-4 pt-1">
                        <h3 class="text-white h3">Nuestros Servicio</h3>
                    </div>
                    <div class="col-12 col-md-8">
                        <!-- bulletList -->
                        <ul class="list-unstyled bulletList isBgDark bulletListViv listHasColumns mb-0 textAaa">
                            <li>Pinturas de Guillo Perez</li>
                            <li>Pinturas de Willy Perez</li>
                            <li>Pinturas de Joel Gonell</li>
                            <li>Serigrafias</li>
                            <li>Litografias</li>
                            <li>Dibujos</li>
                            <li>Enmarcados</li>
                            <li>Espejos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!-- upcomingEveBlock -->
    <section class="upcomingEveBlock pt-4 pb-6 pt-lg-8 pb-md-10 pb-lg-14 pb-xl-20">
        <div class="container">
            <!-- topHeadingHead -->
            <header class="topHeadingHead text-center mb-7 mb-lg-12">
                <h1>Proximos Eventos</h1>
            </header>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <!-- ueEveColumn -->
                    <article class="ueEveColumn d-sm-flex w-100 position-relative border mb-6 mb-lg-10">
                        <time datetime="2011-01-12" class="ueecTimeTag position-absolute text-uppercase d-flex bg-white text-secondary">
                            <strong class="day d-flex align-items-center font-weight-normal bg-warning text-white px-1">01</strong>
                            <span class="d-flex align-items-center px-2">JUL 2022</span>
                        </time>
                        <div class="imgHolder flex-shrink-0">
                            <img src="{{asset('assets/images/PHOTO-2022-07-22-22-20-55.jpg')}}" class="w-100 h-100 imgFit" loading="lazy" alt="image description">
                        </div>
                        <div class="descrWrap pt-5 pb-7 pl-5 pr-3">
                            <h2 class="h2Small h2SmallViv mb-2">
                                <a href="single-events.html">Feria del Coco 2022</a>
                            </h2>
                            <address class="mb-6"><time datetime="2011-01-12">09:30am - 6:00pm</time><span>/</span>Parque Central, Cabrera</address>
                            <a href="single-events.html" class="btn btnGre5 btnGre5Outline bdr2 btnSmMinWidth btn-sm">Leer Mas</a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-lg-6">
                    <!-- ueEveColumn -->
                    <article class="ueEveColumn d-sm-flex w-100 position-relative border mb-6 mb-lg-10">
                        <time datetime="2011-01-12" class="ueecTimeTag position-absolute text-uppercase d-flex bg-white text-secondary">
                            <strong class="day d-flex align-items-center font-weight-normal bg-warning text-white px-1">03</strong>
                            <span class="d-flex align-items-center px-2">JUL 2022</span>
                        </time>
                        <div class="imgHolder flex-shrink-0">
                            <img src="{{asset('assets/images/PHOTO-2022-07-28-15-05-05.jpg')}}" class="w-100 h-100 imgFit" loading="lazy" alt="image description">
                        </div>
                        <div class="descrWrap pt-5 pb-7 pl-5 pr-3">
                            <h2 class="h2Small h2SmallViv mb-2">
                                <a href="single-events.html">Exhibicion Parque de Cabrera</a>
                            </h2>
                            <address class="mb-6"><time datetime="2011-01-12">09:30am - 6:00pm</time><span>/</span>Parque Central, Cabrera</address>
                            <a href="single-events.html" class="btn btnGre5 btnGre5Outline bdr2 btnSmMinWidth btn-sm">Leer Mas</a>
                        </div>
                    </article>
                </div>
            </div>
            <!-- btnHolder -->
            <!-- <footer class="btnHolder text-center">
                <a href="single-events.html" class="d-inline-block align-top teeSeeAllBtn mt-2">See All Exhibitions <i class="icomoon-arrowCircleRight align-middle icn ml-1"><span class="sr-only">icon</span></i></a>
            </footer> -->
        </div>
    </section>
    <!-- ourGalleryBlock -->
    <section class="bg-grayf8f8f8 hasBdr border-bottom-0 ourGalleryBlock pt-6 pt-xl-10">
        <div class="container">
            <!-- teeSideHead -->
            <header class="teeSideHead mb-3 mb-md-7 mb-xl-13 text-center text-md-left">
                <div class="row align-items-end">
                    <div class="col-12 col-md-4">
                        <h1 class="text-capitalize mb-3 mb-md-0">Galeria</h1>
                    </div>
                    <!-- ogFiltersList -->
                    <!-- <div class="col-12 col-md-8 text-right">
                        <ul class="list-unstyled isoFiltersList ogFiltersList d-flex flex-wrap justify-content-center justify-content-md-end mb-0 mb-md-2">
                            <li class="active">
                                <a href="javascript:void(0);">Show All</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-filter=".objects">Objects</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-filter=".art">Art</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-filter=".pictures">Pictures</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-filter=".installation">Installation</a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </header>
        </div>
        <div class="container-fluid px-0">
            <!-- isoContentHolder -->
            <div class="row no-gutters isoContentHolder">
                <div class="col-12 col-sm-4 col-md-3 isoCol installation">
                    <!-- galFig -->
                    <figure class="galFig galFigII mb-0 position-relative mx-auto mx-md-0">
                        <a data-fancybox="gallery" href="{{asset('assets/images/480x420/2.jpg')}}">
                            <img src="http://www.ultimasnoticias.com.do/wp-content/uploads/2014/03/97777F92-5E9F-4715-B62A-2308A0C7BFC0.jpg__680__460__CROPz0x680y460.jpeg" class="img-fluid" alt="image description">
                        </a>
                        <div class="gafCaption inaccessible d-flex align-items-center justify-content-center text-center text-white w-100 h-100">
                            <div class="wrap w-100 p-4">
                                <i class="rounded-circle icnWrap icomoon-search bg-brown d-flex align-items-center justify-content-center mx-auto mb-2"><span class="sr-only">icon</span></i>
                                <h3 class="text-white mb-0">Exposicion de Guillo Perez</h3>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-12 col-sm-4 col-md-3 isoCol objects">
                    <!-- galFig -->
                    <figure class="galFig galFigII mb-0 position-relative mx-auto mx-md-0">
                        <a data-fancybox="gallery" href="{{asset('assets/images/480x420/2.jpg')}}">
                            <img src="{{asset('assets/images/480x420/2.jpg')}}" class="img-fluid" alt="image description">
                        </a>
                        <div class="gafCaption inaccessible d-flex align-items-center justify-content-center text-center text-white w-100 h-100">
                            <div class="wrap w-100 p-4">
                                <i class="rounded-circle icnWrap icomoon-search bg-brown d-flex align-items-center justify-content-center mx-auto mb-2"><span class="sr-only">icon</span></i>
                                <h3 class="text-white mb-0">Exposicion de Guillo Perez</h3>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-12 col-sm-4 col-md-3 isoCol art">
                    <!-- galFig -->
                    <figure class="galFig galFigII mb-0 position-relative mx-auto mx-md-0">
                        <a data-fancybox="gallery" href="{{asset('assets/images/480x420/3.jpg')}}">
                            <img src="{{asset('assets/images/480x420/3.jpg')}}" class="img-fluid" alt="image description">
                        </a>
                        <div class="gafCaption inaccessible d-flex align-items-center justify-content-center text-center text-white w-100 h-100">
                            <div class="wrap w-100 p-4">
                                <i class="rounded-circle icnWrap icomoon-search bg-brown d-flex align-items-center justify-content-center mx-auto mb-2"><span class="sr-only">icon</span></i>
                                <h3 class="text-white mb-0">Exposicion de Guillo Perez</h3>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-12 col-sm-4 col-md-3 isoCol pictures">
                    <!-- galFig -->
                    <figure class="galFig galFigII mb-0 position-relative mx-auto mx-md-0">
                        <a data-fancybox="gallery" href="{{asset('assets/images/480x420/4.jpg')}}">
                            <img src="{{asset('assets/images/480x420/4.jpg')}}" class="img-fluid" alt="image description">
                        </a>
                        <div class="gafCaption inaccessible d-flex align-items-center justify-content-center text-center text-white w-100 h-100">
                            <div class="wrap w-100 p-4">
                                <i class="rounded-circle icnWrap icomoon-search bg-brown d-flex align-items-center justify-content-center mx-auto mb-2"><span class="sr-only">icon</span></i>
                                <h3 class="text-white mb-0">Exposicion de Guillo Perez</h3>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-12 col-sm-4 col-md-3 isoCol objects">
                    <!-- galFig -->
                    <figure class="galFig galFigII mb-0 position-relative mx-auto mx-md-0">
                        <a data-fancybox="gallery" href="{{asset('assets/images/480x420/5.jpg')}}">
                            <img src="{{asset('assets/images/480x420/5.jpg')}}" class="img-fluid" alt="image description">
                        </a>
                        <div class="gafCaption inaccessible d-flex align-items-center justify-content-center text-center text-white w-100 h-100">
                            <div class="wrap w-100 p-4">
                                <i class="rounded-circle icnWrap icomoon-search bg-brown d-flex align-items-center justify-content-center mx-auto mb-2"><span class="sr-only">icon</span></i>
                                <h3 class="text-white mb-0">Exposicion de Guillo Perez</h3>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-12 col-sm-4 col-md-3 isoCol pictures">
                    <!-- galFig -->
                    <figure class="galFig galFigII mb-0 position-relative mx-auto mx-md-0">
                        <a data-fancybox="gallery" href="{{asset('assets/images/480x420/6.jpg')}}">
                            <img src="{{asset('assets/images/480x420/6.jpg')}}" class="img-fluid" alt="image description">
                        </a>
                        <div class="gafCaption inaccessible d-flex align-items-center justify-content-center text-center text-white w-100 h-100">
                            <div class="wrap w-100 p-4">
                                <i class="rounded-circle icnWrap icomoon-search bg-brown d-flex align-items-center justify-content-center mx-auto mb-2"><span class="sr-only">icon</span></i>
                                <h3 class="text-white mb-0">Exposicion de Guillo Perez</h3>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-12 col-sm-4 col-md-3 isoCol objects">
                    <!-- galFig -->
                    <figure class="galFig galFigII mb-0 position-relative mx-auto mx-md-0">
                        <a data-fancybox="gallery" href="{{asset('assets/images/480x420/7.jpg')}}">
                            <img src="{{asset('assets/images/480x420/7.jpg')}}" class="img-fluid" alt="image description">
                        </a>
                        <div class="gafCaption inaccessible d-flex align-items-center justify-content-center text-center text-white w-100 h-100">
                            <div class="wrap w-100 p-4">
                                <i class="rounded-circle icnWrap icomoon-search bg-brown d-flex align-items-center justify-content-center mx-auto mb-2"><span class="sr-only">icon</span></i>
                                <h3 class="text-white mb-0">Germanian Grothery</h3>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-12 col-sm-4 col-md-3 isoCol installation">
                    <!-- galFig -->
                    <figure class="galFig galFigII mb-0 position-relative mx-auto mx-md-0">
                        <a data-fancybox="gallery" href="{{asset('assets/images/480x420/8.jpg')}}">
                            <img src="{{asset('assets/images/480x420/8.jpg')}}" class="img-fluid" alt="image description">
                        </a>
                        <div class="gafCaption inaccessible d-flex align-items-center justify-content-center text-center text-white w-100 h-100">
                            <div class="wrap w-100 p-4">
                                <i class="rounded-circle icnWrap icomoon-search bg-brown d-flex align-items-center justify-content-center mx-auto mb-2"><span class="sr-only">icon</span></i>
                                <h3 class="text-white mb-0">Germanian Grothery</h3>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- visitorsSayBlock -->
    <section class="visitorsSayBlock pt-7 pb-7 pt-lg-14 pb-lg-13 pt-xl-20 pb-xl-19">
        <div class="container">
            <!-- topHeadingHead -->
            <header class="topHeadingHead text-center mb-6 mb-lg-11">
                <h1>Lo que dicen nuestros visitantes!</h1>
            </header>
            <div class="row d-block px-sm-16 px-xlwd-0">
                <!-- vsQuoteSlider -->
                <div class="vsQuoteSlider">
                    <div>
                        <div class="col-12">
                            <!-- vsQuote -->
                            <blockquote class="vsQuote text-gray777 mb-0 pl-12 pl-xl-22 pr-11 pt-6 pt-xl-10 pb-4 pb-xl-8 position-relative">
                                <q class="d-block mb-4">Excelente lugar para comprar arte</q>
                                <cite class="d-flex align-items-center">
                                    <span class="rounded-circle vsqImage d-block flex-shrink-0 mr-3">
                                        <img src="https://lh3.googleusercontent.com/a-/AFdZucqJHvXZH0tIoDB6Xe7FqLi5xNvv-dcMx93S0PmGf2k=w60-h60-p-rp-mo-ba5-br100" class="rounded-circle img-fluid" alt="image description">
                                    </span>
                                    <span class="citeWrap d-block">
                                        <strong class="d-block font-weight-normal fontSerif text-capitalize text-secondary mb-1">Estalin Sanchez - <span class="text-gray777">Local Guide</span></strong>
                                        <span class="ratingStarListSpan d-flex">
                                            <span class="rslsItem d-block">
                                                <i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
                                            </span>
                                            <span class="rslsItem d-block">
                                                <i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
                                            </span>
                                            <span class="rslsItem d-block">
                                                <i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
                                            </span>
                                            <span class="rslsItem d-block">
                                                <i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
                                            </span>
                                            <span class="rslsItem d-block">
                                                <i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
                                            </span>
                                        </span>
                                    </span>
                                </cite>
                            </blockquote>
                        </div>
                    </div>
                    <div>
                        <div class="col-12">
                            <!-- vsQuote -->
                            <blockquote class="vsQuote text-gray777 mb-0 pl-12 pl-xl-22 pr-11 pt-6 pt-xl-10 pb-4 pb-xl-8 position-relative">
                                <q class="d-block mb-4">Very nice staff ... professional framework, work at affordable prices ... great
                                </q>
                                <cite class="d-flex align-items-center">
                                    <span class="rounded-circle vsqImage d-block flex-shrink-0 mr-3">
                                        <img src="https://lh3.googleusercontent.com/a/AItbvmkekzYZ7DeA3jAfe21tdxB-Vxz-lDh1j5MKWmdU=w36-h36-p-c0x00000000-rp-mo-ba4-br100" class="rounded-circle img-fluid" alt="image description">
                                    </span>
                                    <span class="citeWrap d-block">
                                        <strong class="d-block font-weight-normal fontSerif text-capitalize text-secondary mb-1">Vincenzo Mancini - <span class="text-gray777">Visitor</span></strong>
                                        <span class="ratingStarListSpan d-flex">
                                            <span class="rslsItem d-block">
                                                <i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
                                            </span>
                                            <span class="rslsItem d-block">
                                                <i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
                                            </span>
                                            <span class="rslsItem d-block">
                                                <i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
                                            </span>
                                            <span class="rslsItem d-block">
                                                <i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
                                            </span>
                                            <span class="rslsItem d-block">
                                                <i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
                                            </span>
                                        </span>
                                    </span>
                                </cite>
                            </blockquote>
                        </div>
                    </div>
                    <!-- <div>
                        <div class="col-12">
                            
                            <blockquote class="vsQuote text-gray777 mb-0 pl-12 pl-xl-22 pr-11 pt-6 pt-xl-10 pb-4 pb-xl-8 position-relative">
                                <q class="d-block mb-4">We provide programs for young people that build motivation, so I decided to arrange a party for them Everything went smoothly, and all the kids were very much excited!</q>
                                <cite class="d-flex align-items-center">
                                    <span class="rounded-circle vsqImage d-block flex-shrink-0 mr-3">
                                        <img src="http://via.placeholder.com/60x60" class="rounded-circle img-fluid" alt="image description">
                                    </span>
                                    <span class="citeWrap d-block">
                                        <strong class="d-block font-weight-normal fontSerif text-capitalize text-secondary mb-1">Gregory Benford - <span class="text-gray777">Visitor</span></strong>
                                        <span class="ratingStarListSpan d-flex">
                                            <span class="rslsItem d-block">
                                                <i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
                                            </span>
                                            <span class="rslsItem d-block">
                                                <i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
                                            </span>
                                            <span class="rslsItem d-block">
                                                <i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
                                            </span>
                                            <span class="rslsItem d-block">
                                                <i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
                                            </span>
                                            <span class="rslsItem d-block">
                                                <i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
                                            </span>
                                        </span>
                                    </span>
                                </cite>
                            </blockquote>
                        </div>
                    </div> -->
                    <!-- <div>
                        <div class="col-12">
                            
                            <blockquote class="vsQuote text-gray777 mb-0 pl-12 pl-xl-22 pr-11 pt-6 pt-xl-10 pb-4 pb-xl-8 position-relative">
                                <q class="d-block mb-4">My girl loves this place! I have heard so many positive things about the arts and when we finally arrived here, it all happened to be true! Thank you for the amazing works!</q>
                                <cite class="d-flex align-items-center">
                                    <span class="rounded-circle vsqImage d-block flex-shrink-0 mr-3">
                                        <img src="http://via.placeholder.com/60x60" class="rounded-circle img-fluid" alt="image description">
                                    </span>
                                    <span class="citeWrap d-block">
                                        <strong class="d-block font-weight-normal fontSerif text-capitalize text-secondary mb-1">Leando Dalvincy - <span class="text-gray777">Visitor</span></strong>
                                        <span class="ratingStarListSpan d-flex">
                                            <span class="rslsItem d-block">
                                                <i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
                                            </span>
                                            <span class="rslsItem d-block">
                                                <i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
                                            </span>
                                            <span class="rslsItem d-block">
                                                <i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
                                            </span>
                                            <span class="rslsItem d-block">
                                                <i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
                                            </span>
                                            <span class="rslsItem d-block">
                                                <i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
                                            </span>
                                        </span>
                                    </span>
                                </cite>
                            </blockquote>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- saMap -->
    <aside id="map" class="saMap w-100 position-relative">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3757.743698384349!2d-69.9046047!3d19.638252299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eae690b8533d12d%3A0x60828487ea95cd04!2sD&#39;Guillermo%20Galeria!5e0!3m2!1sen!2sdo!4v1659379670781!5m2!1sen!2sdo" class="w-100 h-100 d-block border-0 position-absolute" aria-hidden="false" tabindex="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </aside>
    <!-- sponsorsAside -->
    <aside class="sponsorsAside bg-secondary text-white pt-5 pb-5 pt-md-8 pb-md-8 pt-lg-13 pb-lg-13 pt-xl-20 pb-xl-19">
        <div class="container">
            <!-- logosSlider -->
            <div class="logosSlider text-center">
                <div>
                    <!-- spLogoWrap -->
                    <div class="spLogoWrap w-100 d-flex align-items-center">
                        <span class="d-block w-100 px-3">
                            <img src="{{asset('assets/images/sponsors/banreservas.png')}}" class="img-fluid" alt="greateVillage">
                        </span>
                    </div>
                </div>
                <div>
                    <!-- spLogoWrap -->
                    <div class="spLogoWrap w-100 d-flex align-items-center">
                        <span class="d-block w-100 px-3">
                            <img src="https://yt3.ggpht.com/X-yBX6JynP6rtdYSxhfRh7xyWpvxgw-G1FjLkP9dbO4_nFwKwWVk25UqO7U94VLFp-_mU7j07Q=s900-c-k-c0x00ffffff-no-rj" class="img-fluid" alt="dilly">
                        </span>
                    </div>
                </div>
                <div>
                    <!-- spLogoWrap -->
                    <div class="spLogoWrap w-100 d-flex align-items-center">
                        <span class="d-block w-100 px-3">
                            <img src="https://www.galeriaguilloperez.com/templates/vt_weightloss/css/styles/vt_logo_style4.png" class="img-fluid" alt="walkers">
                        </span>
                    </div>
                </div>
                <div>
                    <!-- spLogoWrap -->
                    <div class="spLogoWrap w-100 d-flex align-items-center">
                        <span class="d-block w-100 px-3">
                            <img src="https://orgullodemitierra.com.do/wp-content/themes/omt/assets/img/omt-logo.png" class="img-fluid" alt="walkers">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </aside>
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
    <aside class="newsletterAside newsletterAsideViv bg-warning pt-5 pb-5 pt-lg-9 pb-lg-9 text-center text-lg-left">
        <div class="container">
            <div class="d-lg-flex align-items-lg-center justify-content-lg-between">
                <h3 class="text-white mb-3 mb-lg-0">Subscribirse</h3>
                <form action="#">
                    <div class="form-row justify-content-center mx-n2">
                        <div class="form-group px-2 mb-2 mb-md-0">
                            <input type="text" class="form-control d-block" placeholder="Tu nombre">
                        </div>
                        <div class="form-group px-2 mb-2 mb-md-0">
                            <input type="email" class="form-control d-block" placeholder="Email Address">
                        </div>
                        <div class="form-group px-2 mb-2 mb-md-0">
                            <input type="submit" class="btn btn-secondary text-uppercase" value="sign up!">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </aside>
</main>
@endsection