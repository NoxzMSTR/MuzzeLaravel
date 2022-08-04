<section class="visitorsSayBlock pt-7 pb-7 pt-lg-14 pb-lg-13 pt-xl-20 pb-xl-19">
    <div class="container">
        <!-- topHeadingHead -->
        <header class="topHeadingHead text-center mb-6 mb-lg-11">
            <h1>Lo que dicen nuestros visitantes!</h1>
        </header>
        <div class="row d-block px-sm-16 px-xlwd-0">
            <!-- vsQuoteSlider -->
            <div class="vsQuoteSlider">
                @foreach ($visitors as $visitor)
                <div>
                    <div class="col-12">
                        <!-- vsQuote -->
                        <blockquote class="vsQuote text-gray777 mb-0 pl-12 pl-xl-22 pr-11 pt-6 pt-xl-10 pb-4 pb-xl-8 position-relative">
                            <q class="d-block mb-4">{{$visitor['comment']}}</q>
                            <cite class="d-flex align-items-center">
                                <span class="rounded-circle vsqImage d-block flex-shrink-0 mr-3">
                                    <img src="{{$visitor['visitor_img']}}" class="rounded-circle img-fluid" alt="image description">
                                </span>
                                <span class="citeWrap d-block">
                                    <strong class="d-block font-weight-normal fontSerif text-capitalize text-secondary mb-1">{{$visitor['visitor_name']}} - <span class="text-gray777">{{$visitor['visitor_type']}}</span></strong>
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
                @endforeach
 
         
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