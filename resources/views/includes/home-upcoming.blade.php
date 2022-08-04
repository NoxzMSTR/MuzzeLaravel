<section class="upcomingEveBlock pt-4 pb-6 pt-lg-8 pb-md-10 pb-lg-14 pb-xl-20">
    <div class="container">
        <!-- topHeadingHead -->
        <header class="topHeadingHead text-center mb-7 mb-lg-12">
            <h1>Proximos Eventos</h1>
        </header>
        <div class="row">
            @foreach ($upcomingEvents as $event)
            <div class="col-12 col-lg-6">
                <!-- ueEveColumn -->
                <article class="ueEveColumn d-sm-flex w-100 position-relative border mb-6 mb-lg-10">
                    <time datetime="2011-01-12" class="ueecTimeTag position-absolute text-uppercase d-flex bg-white text-secondary">
                        <strong class="day d-flex align-items-center font-weight-normal bg-warning text-white px-1">{{$event['day']}}</strong>
                        <span class="d-flex align-items-center px-2">{{$event['date']}}</span>
                    </time>
                    <div class="imgHolder flex-shrink-0">
                        <img src="{{$event['event_img']}}" class="w-100 h-100 imgFit" loading="lazy" alt="image description">
                    </div>
                    <div class="descrWrap pt-5 pb-7 pl-5 pr-3">
                        <h2 class="h2Small h2SmallViv mb-2">
                            <a href="{{route('single-events')}}">{{$event['title']}}</a>
                        </h2>
                        <address class="mb-6"><time datetime="2011-01-12">{{$event['time_slot']}}</time><span>/</span>{{$event['location']}}</address>
                        <a href="{{route('single-events')}}" class="btn btnGre5 btnGre5Outline bdr2 btnSmMinWidth btn-sm">Leer Mas</a>
                    </div>
                </article>
            </div>
            @endforeach

        </div>
        <!-- btnHolder -->
        <!-- <footer class="btnHolder text-center">
            <a href="{{route('single-events')}}" class="d-inline-block align-top teeSeeAllBtn mt-2">See All Exhibitions <i class="icomoon-arrowCircleRight align-middle icn ml-1"><span class="sr-only">icon</span></i></a>
        </footer> -->
    </div>
</section>