@extends('layout.main')
@section('content')
    <!-- eveProgBlock -->
    <section class="eveProgBlock pt-6 pb-3 pt-md-8 pb-md-8 pt-lg-13 pb-lg-11 pt-xl-20 pb-xl-17">
        <div class="container">
            <!-- topHeadingHead -->
            <header class="topHeadingHead text-center mb-6 mb-lg-10">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                        <h1 class="h1Large mb-4">Events &amp; Program</h1>
                        <!-- eabDescrText -->
                        <div class="fontSerif eabDescrText eabDescrTextII">
                            <p>Find out what's on at the museum’s: from current and upcoming exhibitions, to guided tours,
                                workshops, children's activities and events.</p>
                        </div>
                    </div>
                </div>
            </header>
            <!-- eveProFiltersBox -->
            <div class="eveProFiltersBox bg-graye9ebed pt-4 pb-1 pb-md-4 px-4 pt-lg-8 pb-lg-8 px-lg-8 mb-8 mb-md-14">
                <form action="#">
                    <div class="form-row">
                        <div class="form-group mb-md-0">
                            <div class="dtPickerWrap position-relative">
                                <input type="text" class="form-control d-block w-100 formControlDatepicker"
                                    placeholder="Select Date">
                            </div>
                        </div>
                        <div class="form-group mb-md-0">
                            <select class="chosenSelect csSelect" data-placeholder="Event Types">
                                <option value="1">lorem</option>
                                <option value="2">ipsum</option>
                                <option value="3">dolor</option>
                            </select>
                        </div>
                        <div class="form-group mb-md-0">
                            <select class="chosenSelect csSelect" data-placeholder="Audience Types">
                                <option value="1">lorem</option>
                                <option value="2">ipsum</option>
                                <option value="3">dolor</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- ueEveColumn -->
                    <article
                        class="ueEveColumn w-100 position-relative border text-gray777 gridView mb-6 mb-xl-12 mx-auto mx-md-0">
                        <time datetime="2011-01-12"
                            class="ueecTimeTag position-absolute text-uppercase d-flex bg-white text-secondary">
                            <strong
                                class="day d-flex align-items-center font-weight-normal bg-brown text-white px-1">01</strong>
                            <span class="d-flex align-items-center px-2">MAR 2019</span>
                        </time>
                        <div class="imgHolder flex-shrink-0">
                            <img src="http://via.placeholder.com/365x320" class="w-100 h-100 imgFit"
                                alt="image description">
                        </div>
                        <div class="descrWrap pt-5 pb-6 pl-3 pr-3 pl-xl-5 pr-xl-5">
                            <strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-3">Gallery
                                Talk</strong>
                            <h2 class="h2Small h2SmallViv mb-2">
                                <a href="{{route('single-events')}}">Rough Cut: Independent Japanese Antiquity</a>
                            </h2>
                            <address class="mb-6"><time datetime="2011-01-12">12:30pm - 1:00pm</time><span>/</span>32
                                Quincy Street, Cambridge, MA</address>
                            <a href="{{route('single-events')}}"
                                class="btn btnGre5 btnGre5Outline bdr2 mb-1 btnSmMinWidth btn-sm">Details</a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- ueEveColumn -->
                    <article
                        class="ueEveColumn w-100 position-relative border text-gray777 gridView mb-6 mb-xl-12 mx-auto mx-md-0">
                        <time datetime="2011-01-12"
                            class="ueecTimeTag position-absolute text-uppercase d-flex bg-white text-secondary">
                            <strong
                                class="day d-flex align-items-center font-weight-normal bg-brown text-white px-1">01</strong>
                            <span class="d-flex align-items-center px-2">MAR 2019</span>
                        </time>
                        <div class="imgHolder flex-shrink-0">
                            <img src="http://via.placeholder.com/365x320" class="w-100 h-100 imgFit"
                                alt="image description">
                        </div>
                        <div class="descrWrap pt-5 pb-6 pl-3 pr-3 pl-xl-5 pr-xl-5">
                            <strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-3">Gallery
                                Talk</strong>
                            <h2 class="h2Small h2SmallViv mb-2">
                                <a href="{{route('single-events')}}">Rough Cut: Independent Japanese Antiquity</a>
                            </h2>
                            <address class="mb-6"><time datetime="2011-01-12">12:30pm - 1:00pm</time><span>/</span>32
                                Quincy Street, Cambridge, MA</address>
                            <a href="{{route('single-events')}}"
                                class="btn btnGre5 btnGre5Outline bdr2 mb-1 btnSmMinWidth btn-sm">Details</a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- ueEveColumn -->
                    <article
                        class="ueEveColumn w-100 position-relative border text-gray777 gridView mb-6 mb-xl-12 mx-auto mx-md-0">
                        <time datetime="2011-01-12"
                            class="ueecTimeTag position-absolute text-uppercase d-flex bg-white text-secondary">
                            <strong
                                class="day d-flex align-items-center font-weight-normal bg-brown text-white px-1">01</strong>
                            <span class="d-flex align-items-center px-2">MAR 2019</span>
                        </time>
                        <div class="imgHolder flex-shrink-0">
                            <img src="http://via.placeholder.com/365x320" class="w-100 h-100 imgFit"
                                alt="image description">
                        </div>
                        <div class="descrWrap pt-5 pb-6 pl-3 pr-3 pl-xl-5 pr-xl-5">
                            <strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-3">Gallery
                                Talk</strong>
                            <h2 class="h2Small h2SmallViv mb-2">
                                <a href="{{route('single-events')}}">Rough Cut: Independent Japanese Antiquity</a>
                            </h2>
                            <address class="mb-6"><time datetime="2011-01-12">12:30pm - 1:00pm</time><span>/</span>32
                                Quincy Street, Cambridge, MA</address>
                            <a href="{{route('single-events')}}"
                                class="btn btnGre5 btnGre5Outline bdr2 mb-1 btnSmMinWidth btn-sm">Details</a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- ueEveColumn -->
                    <article
                        class="ueEveColumn w-100 position-relative border text-gray777 gridView mb-6 mb-xl-12 mx-auto mx-md-0">
                        <time datetime="2011-01-12"
                            class="ueecTimeTag position-absolute text-uppercase d-flex bg-white text-secondary">
                            <strong
                                class="day d-flex align-items-center font-weight-normal bg-brown text-white px-1">01</strong>
                            <span class="d-flex align-items-center px-2">MAR 2019</span>
                        </time>
                        <div class="imgHolder flex-shrink-0">
                            <img src="http://via.placeholder.com/365x320" class="w-100 h-100 imgFit"
                                alt="image description">
                        </div>
                        <div class="descrWrap pt-5 pb-6 pl-3 pr-3 pl-xl-5 pr-xl-5">
                            <strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-3">Gallery
                                Talk</strong>
                            <h2 class="h2Small h2SmallViv mb-2">
                                <a href="{{route('single-events')}}">Rough Cut: Independent Japanese Antiquity</a>
                            </h2>
                            <address class="mb-6"><time datetime="2011-01-12">12:30pm - 1:00pm</time><span>/</span>32
                                Quincy Street, Cambridge, MA</address>
                            <a href="{{route('single-events')}}"
                                class="btn btnGre5 btnGre5Outline bdr2 mb-1 btnSmMinWidth btn-sm">Details</a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- ueEveColumn -->
                    <article
                        class="ueEveColumn w-100 position-relative border text-gray777 gridView mb-6 mb-xl-12 mx-auto mx-md-0">
                        <time datetime="2011-01-12"
                            class="ueecTimeTag position-absolute text-uppercase d-flex bg-white text-secondary">
                            <strong
                                class="day d-flex align-items-center font-weight-normal bg-brown text-white px-1">01</strong>
                            <span class="d-flex align-items-center px-2">MAR 2019</span>
                        </time>
                        <div class="imgHolder flex-shrink-0">
                            <img src="http://via.placeholder.com/365x320" class="w-100 h-100 imgFit"
                                alt="image description">
                        </div>
                        <div class="descrWrap pt-5 pb-6 pl-3 pr-3 pl-xl-5 pr-xl-5">
                            <strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-3">Gallery
                                Talk</strong>
                            <h2 class="h2Small h2SmallViv mb-2">
                                <a href="{{route('single-events')}}">Rough Cut: Independent Japanese Antiquity</a>
                            </h2>
                            <address class="mb-6"><time datetime="2011-01-12">12:30pm - 1:00pm</time><span>/</span>32
                                Quincy Street, Cambridge, MA</address>
                            <a href="{{route('single-events')}}"
                                class="btn btnGre5 btnGre5Outline bdr2 mb-1 btnSmMinWidth btn-sm">Details</a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- ueEveColumn -->
                    <article
                        class="ueEveColumn w-100 position-relative border text-gray777 gridView mb-6 mb-xl-12 mx-auto mx-md-0">
                        <time datetime="2011-01-12"
                            class="ueecTimeTag position-absolute text-uppercase d-flex bg-white text-secondary">
                            <strong
                                class="day d-flex align-items-center font-weight-normal bg-brown text-white px-1">01</strong>
                            <span class="d-flex align-items-center px-2">MAR 2019</span>
                        </time>
                        <div class="imgHolder flex-shrink-0">
                            <img src="http://via.placeholder.com/365x320" class="w-100 h-100 imgFit"
                                alt="image description">
                        </div>
                        <div class="descrWrap pt-5 pb-6 pl-3 pr-3 pl-xl-5 pr-xl-5">
                            <strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-3">Gallery
                                Talk</strong>
                            <h2 class="h2Small h2SmallViv mb-2">
                                <a href="{{route('single-events')}}">Rough Cut: Independent Japanese Antiquity</a>
                            </h2>
                            <address class="mb-6"><time datetime="2011-01-12">12:30pm - 1:00pm</time><span>/</span>32
                                Quincy Street, Cambridge, MA</address>
                            <a href="{{route('single-events')}}"
                                class="btn btnGre5 btnGre5Outline bdr2 mb-1 btnSmMinWidth btn-sm">Details</a>
                        </div>
                    </article>
                </div>
            </div>
            <nav aria-label="Page navigation">
                <!-- csPaging -->
                <ul class="pagination csPaging justify-content-center py-6 mb-0">
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">
                            1
                            <span class="sr-only">(current)</span>
                        </span>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">Next <i class="fas fa-angle-right icn"><span
                                    class="sr-only">icon</span></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
@endsection
