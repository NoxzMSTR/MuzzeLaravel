@extends('layout.main')
@section('content')
<main>
	<!-- exhibitionBlock -->
	<section class="exhibitionBlock pt-6 pb-6 pt-md-9 pb-md-9 pt-lg-11 pb-lg-13 pt-xl-20 pb-xl-21">
		<div class="container">
			<!-- topHeadingHead -->
			<header class="topHeadingHead text-center mb-6 mb-lg-9 mb-xl-12">
				<div class="row">
					<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
						<h1 class="h1Large mb-4">Exhibitions</h1>
						<!-- eabDescrText -->
						<div class="fontSerif eabDescrText eabDescrTextII">
							<p>Find out what's on at the museum’s: from current and upcoming exhibitions, to guided tours, workshops, children's activities and events.</p>
						</div>
					</div>
				</div>
				<!-- exhiTabList -->
				<ul class="nav nav-tabs justify-content-center exhiTabList mt-4 mt-lg-8" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="current-tab" data-toggle="tab" href="#current" role="tab" aria-controls="current" aria-selected="true">Current</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="upcoming-tab" data-toggle="tab" href="#upcoming" role="tab" aria-controls="upcoming" aria-selected="false">Upcoming</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="past-tab" data-toggle="tab" href="#past" role="tab" aria-controls="past" aria-selected="false">Past</a>
					</li>
				</ul>
			</header>
			<!-- tab-content -->
			<div class="tab-content">
				<!-- current-tab -->
				<div class="tab-pane fade show active" id="current" role="tabpanel" aria-labelledby="current-tab">
					<div class="row">
						<div class="col-12 col-md-4">
							<!-- currExibitColumn -->
							<article class="currExibitColumn mb-6 mb-lg-9 mb-xl-14 mx-auto">
								<div class="imgHolder mb-3 mb-lg-6">
									<a href="{{route('single-exhibition')}}">
										<img src="http://via.placeholder.com/370x275" class="img-fluid w-100 d-block" alt="image description">
									</a>
								</div>
								<strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-2">Exhibition</strong>
								<h2 class="mb-3">
									<a href="{{route('single-exhibition')}}">Mutiny: Works by Géricault</a>
								</h2>
								<time datetime="2011-01-12" class="d-block cecTime text-gray777">13 Oct 2018 - 15 Feb 2019</time>
							</article>
						</div>
						<div class="col-12 col-md-4">
							<!-- currExibitColumn -->
							<article class="currExibitColumn mb-6 mb-lg-9 mb-xl-14 mx-auto">
								<div class="imgHolder mb-3 mb-lg-6">
									<a href="{{route('single-exhibition')}}">
										<img src="http://via.placeholder.com/370x275" class="img-fluid w-100 d-block" alt="image description">
									</a>
								</div>
								<strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-2">Now On view</strong>
								<h2 class="mb-3">
									<a href="{{route('single-exhibition')}}">Palileo Descent VR with tim Creek</a>
								</h2>
								<time datetime="2011-01-12" class="d-block cecTime text-gray777">Open 12:30 - 1:00 Daily</time>
							</article>
						</div>
						<div class="col-12 col-md-4">
							<!-- currExibitColumn -->
							<article class="currExibitColumn mb-6 mb-lg-9 mb-xl-14 mx-auto">
								<div class="imgHolder mb-3 mb-lg-6">
									<a href="{{route('single-exhibition')}}">
										<img src="http://via.placeholder.com/370x275" class="img-fluid w-100 d-block" alt="image description">
									</a>
								</div>
								<strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-2">Exhibition</strong>
								<h2 class="mb-3">
									<a href="{{route('single-exhibition')}}">Michel Wernar Gallery</a>
								</h2>
								<time datetime="2011-01-12" class="d-block cecTime text-gray777">25 Oct 2018 - 10 May 2019</time>
							</article>
						</div>
						<div class="col-12 col-md-4">
							<!-- currExibitColumn -->
							<article class="currExibitColumn mb-6 mb-lg-9 mb-xl-14 mx-auto">
								<div class="imgHolder mb-3 mb-lg-6">
									<a href="{{route('single-exhibition')}}">
										<img src="http://via.placeholder.com/370x275" class="img-fluid w-100 d-block" alt="image description">
									</a>
								</div>
								<strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-2">Now On view</strong>
								<h2 class="mb-3">
									<a href="{{route('single-exhibition')}}">The Upstairs Room of A art Taminiau</a>
								</h2>
								<time datetime="2011-01-12" class="d-block cecTime text-gray777">25 Oct 2018 - 10 May 2019</time>
							</article>
						</div>
						<div class="col-12 col-md-4">
							<!-- currExibitColumn -->
							<article class="currExibitColumn mb-6 mb-lg-9 mb-xl-14 mx-auto">
								<div class="imgHolder mb-3 mb-lg-6">
									<a href="{{route('single-exhibition')}}">
										<img src="http://via.placeholder.com/370x275" class="img-fluid w-100 d-block" alt="image description">
									</a>
								</div>
								<strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-2">Exhibition</strong>
								<h2 class="mb-3">
									<a href="{{route('single-exhibition')}}">Meaning less Fractions </a>
								</h2>
								<time datetime="2011-01-12" class="d-block cecTime text-gray777">18 Sep 2018 - 15 Mar 2019</time>
							</article>
						</div>
						<div class="col-12 col-md-4">
							<!-- currExibitColumn -->
							<article class="currExibitColumn mb-6 mb-lg-9 mb-xl-14 mx-auto">
								<div class="imgHolder mb-3 mb-lg-6">
									<a href="{{route('single-exhibition')}}">
										<img src="http://via.placeholder.com/370x275" class="img-fluid w-100 d-block" alt="image description">
									</a>
								</div>
								<strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-2">Exhibition</strong>
								<h2 class="mb-3">
									<a href="{{route('single-exhibition')}}">Romer Young Gallery</a>
								</h2>
								<time datetime="2011-01-12" class="d-block cecTime text-gray777">13 Oct 2018 - 15 Feb 2019</time>
							</article>
						</div>
						<div class="col-12 col-md-4">
							<!-- currExibitColumn -->
							<article class="currExibitColumn mb-6 mb-lg-9 mb-xl-14 mx-auto">
								<div class="imgHolder mb-3 mb-lg-6">
									<a href="{{route('single-exhibition')}}">
										<img src="http://via.placeholder.com/370x275" class="img-fluid w-100 d-block" alt="image description">
									</a>
								</div>
								<strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-2">Exhibition</strong>
								<h2 class="mb-3">
									<a href="{{route('single-exhibition')}}">Noise! Frans Hals, Guide Otherwise</a>
								</h2>
								<time datetime="2011-01-12" class="d-block cecTime text-gray777">Open 12:30 - 1:00 Daily</time>
							</article>
						</div>
						<div class="col-12 col-md-4">
							<!-- currExibitColumn -->
							<article class="currExibitColumn mb-6 mb-lg-9 mb-xl-14 mx-auto">
								<div class="imgHolder mb-3 mb-lg-6">
									<a href="{{route('single-exhibition')}}">
										<img src="http://via.placeholder.com/370x275" class="img-fluid w-100 d-block" alt="image description">
									</a>
								</div>
								<strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-2">Exhibition</strong>
								<h2 class="mb-3">
									<a href="{{route('single-exhibition')}}">Gerord and Belly Rankie Stamped</a>
								</h2>
								<time datetime="2011-01-12" class="d-block cecTime text-gray777">25 Oct 2018 - 10 May 2019</time>
							</article>
						</div>
						<div class="col-12 col-md-4">
							<!-- currExibitColumn -->
							<article class="currExibitColumn mb-6 mb-lg-9 mb-xl-14 mx-auto">
								<div class="imgHolder mb-3 mb-lg-6">
									<a href="{{route('single-exhibition')}}">
										<img src="http://via.placeholder.com/370x275" class="img-fluid w-100 d-block" alt="image description">
									</a>
								</div>
								<strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-2">Exhibition</strong>
								<h2 class="mb-3">
									<a href="{{route('single-exhibition')}}">Kathleen White Spirits</a>
								</h2>
								<time datetime="2011-01-12" class="d-block cecTime text-gray777">13 Oct 2018 - 15 Feb 2019</time>
							</article>
						</div>
					</div>
					<!-- btnHolder -->
					<div class="btnHolder text-center">
						<a href="{{route('single-exhibition')}}" class="btn laodMore btn-outline-light bdr2 btnLgMinWidth">Load More</a>
					</div>
				</div>
				<!-- upcoming-tab -->
				<div class="tab-pane fade" id="upcoming" role="tabpanel" aria-labelledby="upcoming-tab">
					<div class="row">
						<div class="col-12 col-md-4">
							<!-- currExibitColumn -->
							<article class="currExibitColumn mb-6 mb-lg-9 mb-xl-14 mx-auto">
								<div class="imgHolder mb-3 mb-lg-6">
									<a href="{{route('single-exhibition')}}">
										<img src="http://via.placeholder.com/370x275" class="img-fluid w-100 d-block" alt="image description">
									</a>
								</div>
								<strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-2">Exhibition</strong>
								<h2 class="mb-3">
									<a href="{{route('single-exhibition')}}">Mutiny: Works by Géricault</a>
								</h2>
								<time datetime="2011-01-12" class="d-block cecTime text-gray777">13 Oct 2018 - 15 Feb 2019</time>
							</article>
						</div>
						<div class="col-12 col-md-4">
							<!-- currExibitColumn -->
							<article class="currExibitColumn mb-6 mb-lg-9 mb-xl-14 mx-auto">
								<div class="imgHolder mb-3 mb-lg-6">
									<a href="{{route('single-exhibition')}}">
										<img src="http://via.placeholder.com/370x275" class="img-fluid w-100 d-block" alt="image description">
									</a>
								</div>
								<strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-2">Now On view</strong>
								<h2 class="mb-3">
									<a href="{{route('single-exhibition')}}">The Upstairs Room of A art Taminiau</a>
								</h2>
								<time datetime="2011-01-12" class="d-block cecTime text-gray777">25 Oct 2018 - 10 May 2019</time>
							</article>
						</div>
						<div class="col-12 col-md-4">
							<!-- currExibitColumn -->
							<article class="currExibitColumn mb-6 mb-lg-9 mb-xl-14 mx-auto">
								<div class="imgHolder mb-3 mb-lg-6">
									<a href="{{route('single-exhibition')}}">
										<img src="http://via.placeholder.com/370x275" class="img-fluid w-100 d-block" alt="image description">
									</a>
								</div>
								<strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-2">Exhibition</strong>
								<h2 class="mb-3">
									<a href="{{route('single-exhibition')}}">Meaning less Fractions </a>
								</h2>
								<time datetime="2011-01-12" class="d-block cecTime text-gray777">18 Sep 2018 - 15 Mar 2019</time>
							</article>
						</div>
						<div class="col-12 col-md-4">
							<!-- currExibitColumn -->
							<article class="currExibitColumn mb-6 mb-lg-9 mb-xl-14 mx-auto">
								<div class="imgHolder mb-3 mb-lg-6">
									<a href="{{route('single-exhibition')}}">
										<img src="http://via.placeholder.com/370x275" class="img-fluid w-100 d-block" alt="image description">
									</a>
								</div>
								<strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-2">Exhibition</strong>
								<h2 class="mb-3">
									<a href="{{route('single-exhibition')}}">Romer Young Gallery</a>
								</h2>
								<time datetime="2011-01-12" class="d-block cecTime text-gray777">13 Oct 2018 - 15 Feb 2019</time>
							</article>
						</div>
					</div>
					<!-- btnHolder -->
					<div class="btnHolder text-center">
						<a href="{{route('single-exhibition')}}" class="btn laodMore btn-outline-light bdr2 btnLgMinWidth">Load More</a>
					</div>
				</div>
				<!-- past-tab -->
				<div class="tab-pane fade" id="past" role="tabpanel" aria-labelledby="past-tab">
					<div class="row">
						<div class="col-12 col-md-4">
							<!-- currExibitColumn -->
							<article class="currExibitColumn mb-6 mb-lg-9 mb-xl-14 mx-auto">
								<div class="imgHolder mb-3 mb-lg-6">
									<a href="{{route('single-exhibition')}}">
										<img src="http://via.placeholder.com/370x275" class="img-fluid w-100 d-block" alt="image description">
									</a>
								</div>
								<strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-2">Now On view</strong>
								<h2 class="mb-3">
									<a href="{{route('single-exhibition')}}">The Upstairs Room of A art Taminiau</a>
								</h2>
								<time datetime="2011-01-12" class="d-block cecTime text-gray777">25 Oct 2018 - 10 May 2019</time>
							</article>
						</div>
						<div class="col-12 col-md-4">
							<!-- currExibitColumn -->
							<article class="currExibitColumn mb-6 mb-lg-9 mb-xl-14 mx-auto">
								<div class="imgHolder mb-3 mb-lg-6">
									<a href="{{route('single-exhibition')}}">
										<img src="http://via.placeholder.com/370x275" class="img-fluid w-100 d-block" alt="image description">
									</a>
								</div>
								<strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-2">Exhibition</strong>
								<h2 class="mb-3">
									<a href="{{route('single-exhibition')}}">Meaning less Fractions </a>
								</h2>
								<time datetime="2011-01-12" class="d-block cecTime text-gray777">18 Sep 2018 - 15 Mar 2019</time>
							</article>
						</div>
						<div class="col-12 col-md-4">
							<!-- currExibitColumn -->
							<article class="currExibitColumn mb-6 mb-lg-9 mb-xl-14 mx-auto">
								<div class="imgHolder mb-3 mb-lg-6">
									<a href="{{route('single-exhibition')}}">
										<img src="http://via.placeholder.com/370x275" class="img-fluid w-100 d-block" alt="image description">
									</a>
								</div>
								<strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-2">Exhibition</strong>
								<h2 class="mb-3">
									<a href="{{route('single-exhibition')}}">Romer Young Gallery</a>
								</h2>
								<time datetime="2011-01-12" class="d-block cecTime text-gray777">13 Oct 2018 - 15 Feb 2019</time>
							</article>
						</div>
					</div>
					<!-- btnHolder -->
					<div class="btnHolder text-center">
						<a href="{{route('single-exhibition')}}" class="btn laodMore btn-outline-light bdr2 btnLgMinWidth">Load More</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
@endsection