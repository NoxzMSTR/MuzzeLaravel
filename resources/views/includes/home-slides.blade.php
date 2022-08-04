<div class="bsSlidViv">
    @foreach ($slides as $slide)
    <div>
        <!-- introBannerBlock -->
        <article class="introBannerBlock introBannerBlockViv hdIsViv w-100 text-center text-white position-relative d-flex bgCover" style="background-image: url({{$slide['img']}});">
            <div class="ibbAlignHolder w-100 d-flex align-items-center">
                <div class="ibbHolder w-100 py-6">
                    <div class="container holder position-relative">
                        <div class="row">
                            <div class="col-12 col-sm-10 offset-sm-1">
                                <strong class="d-block fontSerif mainHeadingTitle font-weight-normal mb-5">{{$slide['title']}}</strong>
                                <h1 class="text-white ibbHeading ibbHeadingViv mb-4 mb-lg-8">{{$slide['heading']}}</h1>
                                <a href="{{$slide['button_link']}}" class="btn btn-dark btnDarkInverse align-top btnMdMinWidth">{{$slide['button_title']}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
    @endforeach

</div>