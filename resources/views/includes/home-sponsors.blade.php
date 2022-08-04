<aside class="sponsorsAside bg-secondary text-white pt-5 pb-5 pt-md-8 pb-md-8 pt-lg-13 pb-lg-13 pt-xl-20 pb-xl-19">
    <div class="container">
        <!-- logosSlider -->
        <div class="logosSlider text-center">
            @foreach ($sponsors as $sponsor)
            <div>
                <!-- spLogoWrap -->
                <div class="spLogoWrap w-100 d-flex align-items-center">
                    <span class="d-block w-100 px-3">
                        <img src="{{$sponsor['img']}}" class="img-fluid" alt="{{$sponsor['alt']}}">
                    </span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</aside>