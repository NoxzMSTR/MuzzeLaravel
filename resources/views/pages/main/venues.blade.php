@extends('layout.main')
@section('content')
	<!-- mainHeadingHead -->
	<header class="mainHeadingHead text-center position-relative bgCover w-100 d-flex text-white" style="background-image: url(http://via.placeholder.com/1920x300);">
		<div class="mhhAlignHolder d-flex w-100 align-items-center position-relative">
			<div class="container py-6">
				<h1 class="text-white mb-0">Venues</h1>
			</div>
		</div>
	</header>
	<!-- specialIntroAside -->
	<article class="specialIntroAside pt-7 pt-md-10 pt-lg-14 pt-xl-21">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2">
					<div class="extraWrap px-lg-5">
						<h2 class="mb-5">One Museum, Three Locations</h2>
						<!-- eabDescrText -->
						<div class="eabDescrText eabDescrTextII fontSerif">
							<p class="mb-5">The Museum of Art and History is located in three locations. You can visit your nearby location on muzze opening hours.</p>
						</div>
						<p class="mb-6">We want you to be part of our museums, experience its beauty and this is why we offer several ways to let you engage with us to help maintain and develop the museums visitors experience. please email us at info@art&historymuseum.org</p>
					</div>
				</div>
			</div>
		</div>
	</article>
	<!-- upcomingEventsBlock -->
	<section class="upcomingEventsBlock text-center pt-4 pt-md-9 pb-3 pb-md-7 pb-lg-10 pb-xl-14">
		<div class="container">
			<div class="row mx-xl-n4 justify-content-center">
				<div class="col-12 col-md-6 col-lg-4 px-xl-4">
					<!-- upcEveColumn -->
					<article class="upcEveColumn border position-relative py-8 px-4 mb-6 mb-xl-8 mx-auto mx-md-0">
						<div class="imgHolder mb-5 overflow-hidden">
							<a href="javascript:void(0);">
								<img src="http://via.placeholder.com/365x200" class="img-fluid w-100" alt="image description">
							</a>
						</div>
						<h2 class="mb-0">
							<a href="javascript:void(0);">Modern Homestead</a>
						</h2>
						<time datetime="2011-01-12" class="simupTime d-block text-gray777 mb-2">Open Daily 10AM-9PM</time>
						<address class="mb-5">
							<p class="mb-0"><i class="fas fa-map-marker-alt icn" aria-hidden="true"><span class="sr-only">icon</span></i> 11 West 52 Street, Mangatha</p>
						</address>
						<a href="javascript:void(0);" class="btn btnGre5 btnGre5Outline bdr2 btnMdMinWidth btn-sm">Plan Your Visit</a>
					</article>
				</div>
				<div class="col-12 col-md-6 col-lg-4 px-xl-4">
					<!-- upcEveColumn -->
					<article class="upcEveColumn border position-relative py-8 px-4 mb-6 mb-xl-8 mx-auto mx-md-0">
						<div class="imgHolder mb-5 overflow-hidden">
							<a href="javascript:void(0);">
								<img src="http://via.placeholder.com/365x200" class="img-fluid w-100" alt="image description">
							</a>
						</div>
						<h2 class="mb-0">
							<a href="javascript:void(0);">The Max Sixth Avenue</a>
						</h2>
						<time datetime="2011-01-12" class="simupTime d-block text-gray777 mb-2">Open Daily 10AM-9PM</time>
						<address class="mb-5">
							<p class="mb-0"><i class="fas fa-map-marker-alt icn" aria-hidden="true"><span class="sr-only">icon</span></i> 22 Max Sixth Avenue, Queens</p>
						</address>
						<a href="javascript:void(0);" class="btn btnGre5 btnGre5Outline bdr2 btnMdMinWidth btn-sm">Plan Your Visit</a>
					</article>
				</div>
				<div class="col-12 col-md-6 col-lg-4 px-xl-4">
					<!-- upcEveColumn -->
					<article class="upcEveColumn border position-relative py-8 px-4 mb-6 mb-xl-8 mx-auto mx-md-0">
						<div class="imgHolder mb-5 overflow-hidden">
							<a href="javascript:void(0);">
								<img src="http://via.placeholder.com/365x200" class="img-fluid w-100" alt="image description">
							</a>
						</div>
						<h2 class="mb-0">
							<a href="javascript:void(0);">Uvan-Muzze Center</a>
						</h2>
						<time datetime="2011-01-12" class="simupTime d-block text-gray777 mb-2">Open Daily 10AM-9PM</time>
						<address class="mb-5">
							<p class="mb-0"><i class="fas fa-map-marker-alt icn" aria-hidden="true"><span class="sr-only">icon</span></i> 143 Chantilly, Virginia 20151</p>
						</address>
						<a href="javascript:void(0);" class="btn btnGre5 btnGre5Outline bdr2 btnMdMinWidth btn-sm">Plan Your Visit</a>
					</article>
				</div>
			</div>
		</div>
	</section>
@endsection