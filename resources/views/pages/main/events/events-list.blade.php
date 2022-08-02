@extends('layout.main')
@section('content')
<main>
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
							<p>Find out what's on at the museum’s: from current and upcoming exhibitions, to guided tours, workshops, children's activities and events.</p>
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
								<input type="text" class="form-control d-block w-100 formControlDatepicker" placeholder="Select Date">
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
			<!-- eveProColumn -->
			<article class="eveProColumn d-sm-flex overflow-hidden">
				<time datetime="2011-01-12" class="epcTimeStamp d-block flex-shrink-0 pt-6 pt-sm-0 mt-sm-n1 mr-2 mr-md-4 mr-lg-10 text-uppercase">
					<span class="textDate text-brown">01</span>
					<span class="textMonth fwMedium text-secondary">March</span>
					<span class="w-100 d-block textDay font-weight-normal fontSerif mt-1">WEDNESDAY</span>
				</time>
				<div class="imgHolder flex-shrink-0 mr-4 mr-lg-8">
					<img src="http://via.placeholder.com/210x185" class="img-fluid" alt="image description">
				</div>
				<div class="descrWrap pt-1">
					<strong class="tpHeadingTitle text-uppercase font-weight-normal d-block mb-3">Gallery Talk </strong>
					<h2 class="mb-3">
						<a href="{{route('single-events')}}">Rough Cut: Independent Japanese Antiquity</a>
					</h2>
					<address class="mb-5"><time datetime="2011-01-12">12:30pm - 1:00pm</time><span>/</span>32 Quincy Street, Cambridge, MA</address>
					<p class="mb-5">Doolally bloke have a gander bloody mary is she 'avin a laugh down the village green a tenner it's cracking.</p>
					<div class="btnsWrap">
						<a href="{{route('single-events')}}" class="btn btn-outline-light mr-1 bdr2 btnSmall">Details</a>
						<a href="{{route('single-events')}}" class="btn btnGree0 bdr2 mr-1 btnSmall">Free</a>
					</div>
				</div>
			</article>
			<hr class="my-4 my-md-8">
			<!-- eveProColumn -->
			<article class="eveProColumn d-sm-flex overflow-hidden">
				<time datetime="2011-01-12" class="epcTimeStamp d-block flex-shrink-0 pt-6 pt-sm-0 mt-sm-n1 mr-2 mr-md-4 mr-lg-10 text-uppercase">
					<span class="textDate text-brown">03</span>
					<span class="textMonth fwMedium text-secondary">March</span>
					<span class="w-100 d-block textDay font-weight-normal fontSerif mt-1">thursday</span>
				</time>
				<div class="imgHolder flex-shrink-0 mr-4 mr-lg-8">
					<img src="http://via.placeholder.com/210x185" class="img-fluid" alt="image description">
				</div>
				<div class="descrWrap pt-1">
					<strong class="tpHeadingTitle text-uppercase font-weight-normal d-block mb-3">Tour</strong>
					<h2 class="mb-3">
						<a href="{{route('single-events')}}">Rojo Y Negro Latin American Art</a>
					</h2>
					<address class="mb-5"><time datetime="2011-01-12">12:00pm - 5:00pm</time><span>/</span>Western Avenue, Allston, MA</address>
					<p class="mb-5">Unless you’re Vegan, in which case We’re Sorry for your Loss.</p>
					<div class="btnsWrap">
						<a href="{{route('single-events')}}" class="btn btn-outline-light mr-1 bdr2 btnSmall">Details</a>
					</div>
				</div>
			</article>
			<hr class="my-4 my-md-8">
			<!-- eveProColumn -->
			<article class="eveProColumn d-sm-flex overflow-hidden">
				<time datetime="2011-01-12" class="epcTimeStamp d-block flex-shrink-0 pt-6 pt-sm-0 mt-sm-n1 mr-2 mr-md-4 mr-lg-10 text-uppercase">
					<span class="textDate text-brown">08</span>
					<span class="textMonth fwMedium text-secondary">March</span>
					<span class="w-100 d-block textDay font-weight-normal fontSerif mt-1">saturday</span>
				</time>
				<div class="imgHolder flex-shrink-0 mr-4 mr-lg-8">
					<img src="http://via.placeholder.com/210x185" class="img-fluid" alt="image description">
				</div>
				<div class="descrWrap pt-1">
					<strong class="tpHeadingTitle text-uppercase font-weight-normal d-block mb-3">Special Event</strong>
					<h2 class="mb-3">
						<a href="{{route('single-events')}}">Naive Painting Of The 19th Century</a>
					</h2>
					<address class="mb-5"><time datetime="2011-01-12">12:30pm - 1:00pm</time><span>/</span>32 Quincy Street, Cambridge, MA</address>
					<p class="mb-5">Half-inch it bent as a nine bob note a right royal knees up damn Northeners have a bash chips pork scratchings not some!</p>
					<div class="btnsWrap">
						<a href="{{route('single-events')}}" class="btn btn-outline-light mr-1 bdr2 btnSmall">Details</a>
						<a href="{{route('single-events')}}" class="btn btn-secondary bdr2 mr-1 btnSmall">Book Online</a>
					</div>
				</div>
			</article>
			<hr class="my-4 my-md-8">
			<!-- eveProColumn -->
			<article class="eveProColumn d-sm-flex overflow-hidden">
				<time datetime="2011-01-12" class="epcTimeStamp d-block flex-shrink-0 pt-6 pt-sm-0 mt-sm-n1 mr-2 mr-md-4 mr-lg-10 text-uppercase">
					<span class="textDate text-brown">04</span>
					<span class="textMonth fwMedium text-secondary">March</span>
					<span class="w-100 d-block textDay font-weight-normal fontSerif mt-1">wednesday</span>
				</time>
				<div class="imgHolder flex-shrink-0 mr-4 mr-lg-8">
					<img src="http://via.placeholder.com/210x185" class="img-fluid" alt="image description">
				</div>
				<div class="descrWrap pt-1">
					<strong class="tpHeadingTitle text-uppercase font-weight-normal d-block mb-3">Performance</strong>
					<h2 class="mb-3">
						<a href="{{route('single-events')}}">Adam Green Cartoon and Complaint</a>
					</h2>
					<address class="mb-5"><time datetime="2011-01-12">12:00pm - 5:00pm</time><span>/</span>Western Avenue, Allston, MA</address>
					<p class="mb-5">Lancashire bocconcini cream cheese ricotta queso danish fontina cheese triangles cauliflower melted cheese. </p>
					<div class="btnsWrap">
						<a href="{{route('single-events')}}" class="btn btn-outline-light mr-1 bdr2 btnSmall">Details</a>
					</div>
				</div>
			</article>
			<hr class="my-4 my-md-8">
			<!-- eveProColumn -->
			<article class="eveProColumn d-sm-flex overflow-hidden">
				<time datetime="2011-01-12" class="epcTimeStamp d-block flex-shrink-0 pt-6 pt-sm-0 mt-sm-n1 mr-2 mr-md-4 mr-lg-10 text-uppercase">
					<span class="textDate text-brown">05</span>
					<span class="textMonth fwMedium text-secondary">March</span>
					<span class="w-100 d-block textDay font-weight-normal fontSerif mt-1">saturday</span>
				</time>
				<div class="imgHolder flex-shrink-0 mr-4 mr-lg-8">
					<img src="http://via.placeholder.com/210x185" class="img-fluid" alt="image description">
				</div>
				<div class="descrWrap pt-1">
					<strong class="tpHeadingTitle text-uppercase font-weight-normal d-block mb-3">Gallery Talk</strong>
					<h2 class="mb-3">
						<a href="{{route('single-events')}}">Joey Frank Seeker An' The Trick</a>
					</h2>
					<address class="mb-5"><time datetime="2011-01-12">12:30pm - 1:00pm</time><span>/</span>32 Quincy Street, Cambridge, MA</address>
					<p class="mb-5">Seed money A/B testing crowdsource infographic iteration business-to-consumer low hanging fruit return.</p>
					<div class="btnsWrap">
						<a href="{{route('single-events')}}" class="btn btn-outline-light mr-1 bdr2 btnSmall">Details</a>
						<a href="{{route('single-events')}}" class="btn btnGree0 bdr2 mr-1 btnSmall">Free</a>
					</div>
				</div>
			</article>
			<hr class="my-4 my-md-8">
			<!-- eveProColumn -->
			<article class="eveProColumn d-sm-flex overflow-hidden">
				<time datetime="2011-01-12" class="epcTimeStamp d-block flex-shrink-0 pt-6 pt-sm-0 mt-sm-n1 mr-2 mr-md-4 mr-lg-10 text-uppercase">
					<span class="textDate text-brown">23</span>
					<span class="textMonth fwMedium text-secondary">March</span>
					<span class="w-100 d-block textDay font-weight-normal fontSerif mt-1">thursday</span>
				</time>
				<div class="imgHolder flex-shrink-0 mr-4 mr-lg-8">
					<img src="http://via.placeholder.com/210x185" class="img-fluid" alt="image description">
				</div>
				<div class="descrWrap pt-1">
					<strong class="tpHeadingTitle text-uppercase font-weight-normal d-block mb-3">Members Event</strong>
					<h2 class="mb-3">
						<a href="{{route('single-events')}}">Living Proof: Drawing in 20th-Century</a>
					</h2>
					<address class="mb-5"><time datetime="2011-01-12">12:00pm - 5:00pm</time><span>/</span>Western Avenue, Allston, MA</address>
					<p class="mb-5">Buzz release burn rate termsheet virality influencer research & development sales vesting period investor business plan user experience.</p>
					<div class="btnsWrap">
						<a href="{{route('single-events')}}" class="btn btn-outline-light mr-1 bdr2 btnSmall">Details</a>
						<a href="{{route('single-events')}}" class="btn btn-secondary bdr2 mr-1 btnSmall">Book Online</a>
					</div>
				</div>
			</article>
			<hr class="my-4 my-md-8">
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
						<a class="page-link" href="javascript:void(0);">Next <i class="fas fa-angle-right icn"><span class="sr-only">icon</span></i></a>
					</li>
				</ul>
			</nav>
		</div>
	</section>
</main>
@endsection