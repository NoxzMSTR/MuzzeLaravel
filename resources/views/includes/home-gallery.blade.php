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
            @foreach ($exhibitions as $exhibition)
            <div class="col-12 col-sm-4 col-md-3 isoCol px-3 px-xl-4">
            <figure class="galFig galFigII position-relative">
            <a data-fancybox="gallery" href="{{ $exhibition['image'] }}">
            <img src="{{ $exhibition['image'] }}" class="img-fluid imgFit" alt="image description">
            </a>
            <div class="gafCaption inaccessible d-flex align-items-center justify-content-center text-center text-white w-100 h-100">
            <div class="wrap w-100 p-4">
            <i class="rounded-circle icnWrap icomoon-search bg-brown d-flex align-items-center justify-content-center mx-auto mb-2"><span class="sr-only">icon</span></i>
            <h3 class="text-white mb-0">{{ $exhibition['title'] }}</h3>
            </div>
            </div>
            </figure>
            </div>
            @endforeach
        </div>
    </div>
</section>