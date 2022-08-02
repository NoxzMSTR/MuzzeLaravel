@extends('layout.main')
@section('content')
	<!-- singleContent -->
	<article id="singleContent" class="pt-6 pb-6 pt-md-8 pb-md-8 pt-lg-12  pt-xl-20 pb-xl-11">
		<div class="container">
			<!-- scHeadingHead -->
			<header class="scHeadingHead text-center mb-7 mb-md-10 mb-lg-14">
				<!-- scBtnBack -->
				<a href="javascript:void(0);" class="scBtnBack textDecorationNone d-inline-block align-top mb-5 mb-lg-8"><i class="fas fa-angle-left icn"><span class="sr-only">icon</span></i> Back to all Events</a>
				<h1 class="mb-5">Living Proof: Drawing in 20th-Century</h1>
				<time datetime="2011-01-12" class="d-block scTime text-gray777">Thursday, November 20, 2019</time>
			</header>
			<div class="row mx-xl-n4">
				<div class="col-12 px-xl-4 col-md-8 mb-6">
					<div class="imgHolder mb-8 mb-xl-10">
						<img src="http://via.placeholder.com/765x675" class="w-100 img-fluid" alt="image description">
					</div>
					<p class="mb-6">Burgdoggen turkey jowl pork belly strip steak buffalo spare ribs rump ham hock frankfurter meat ball meatloaf shankle.</p>
					<p class="mb-6">The path of the righteous man is bee-set on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance.</p>
					<p class="mb-6">For more information about family programs, please call (617) 987-6543 or email Events@art.mus. For upcoming student programs, please visit the student exhibition calendar.</p>
					<p class="mb-6">This special event is designed for audult and students. This program cannot accept groups. To learn about group offerings, please call (617) 987-6543.</p>
					<!-- exhiTabList -->
					<ul class="nav nav-tabs justify-content-start exhiTabList exhiTabListII mt-4 mt-lg-8 mt-xl-12 mb-8" id="myTabContent" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="location-tab" data-toggle="tab" href="#location" role="tab" aria-controls="location" aria-selected="true">Location</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="ContactDetails-tab" data-toggle="tab" href="#ContactDetails" role="tab" aria-controls="ContactDetails" aria-selected="false">Contact Details</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="false">Gallery</a>
						</li>
					</ul>
					<!-- tab-content -->
					<div class="tab-content mb-3 mb-md-7">
						<!-- location-tab -->
						<div class="tab-pane fade show active" id="location" role="tabpanel" aria-labelledby="location-tab">
							<!-- lcFrameWrap -->
							<div class="lcFrameWrap position-relative">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3117.259425640003!2d-90.29593598438974!3d38.61991257085702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87d8b57b271310d3%3A0x53ff7568884d5d00!2sKnox%20Industrial%20Dr%2C%20St.%20Louis%2C%20MO%2063139%2C%20USA!5e0!3m2!1sen!2s!4v1587836825553!5m2!1sen!2s" class="w-100 h-100 d-block border-0 position-absolute" aria-hidden="false" tabindex="0"></iframe>
							</div>
						</div>
						<!-- ContactDetails-tab -->
						<div class="tab-pane fade" id="ContactDetails" role="tabpanel" aria-labelledby="ContactDetails-tab">
							<!-- cdInfoList -->
							<ul class="list-unstyled d-sm-flex flex-wrap cdInfoList text-gray777">
								<li>
									<strong class="d-block text-secondary font-weight-normal">Organizer Name:</strong>
									<span class="d-block">Art &amp; History Museum</span>
								</li>
								<li>
									<strong class="d-block text-secondary font-weight-normal">Email:</strong>
									<span class="d-block">Envato@example.com</span>
								</li>
								<li>
									<strong class="d-block text-secondary font-weight-normal">Phone:</strong>
									<span class="d-block">(617) 987-6543</span>
								</li>
								<li>
									<strong class="d-block text-secondary font-weight-normal">Website:</strong>
									<span class="d-block">examplelink.au</span>
								</li>
							</ul>
						</div>
						<!-- gallery-tab -->
						<div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
							<div class="row">
								<div class="col-6">
									<!-- ibdGalImage -->
									<div class="ibdGalImage mb-6">
										<a data-fancybox="gallery" href="http://via.placeholder.com/370x230">
											<img src="http://via.placeholder.com/370x230" class="img-fluid" alt="image description">
										</a>
									</div>
								</div>
								<div class="col-6">
									<!-- ibdGalImage -->
									<div class="ibdGalImage mb-6">
										<a data-fancybox="gallery" href="http://via.placeholder.com/370x230">
											<img src="http://via.placeholder.com/370x230" class="img-fluid" alt="image description">
										</a>
									</div>
								</div>
								<div class="col-6">
									<!-- ibdGalImage -->
									<div class="ibdGalImage mb-6">
										<a data-fancybox="gallery" href="http://via.placeholder.com/370x230">
											<img src="http://via.placeholder.com/370x230" class="img-fluid" alt="image description">
										</a>
									</div>
								</div>
								<div class="col-6">
									<!-- ibdGalImage -->
									<div class="ibdGalImage mb-6">
										<a data-fancybox="gallery" href="http://via.placeholder.com/370x230">
											<img src="http://via.placeholder.com/370x230" class="img-fluid" alt="image description">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- abtLinks -->
					<ul class="list-unstyled d-flex abtLinks">
						<li>
							<a href="javascript:void(0);">+ Google Calendar</a>
						</li>
						<li>
							<a href="javascript:void(0);">+ Ical Export</a>
						</li>
					</ul>
				</div>
				<div class="col-12 px-xl-4 col-md-4">
					<!-- scSidebar -->
					<aside class="scSidebar scSidebarII position-relative bg-secondary text-gray888 px-3 pt-3 pb-3 px-lg-8 pt-lg-8 pb-lg-8">
						<a href="javascript:void(0);" class="btn btn-dark btnDarkInverse mb-7 text-uppercase d-block w-100">Order Ticket</a>
						<dl class="mb-0 scsInfosList text-gray777">
							<dt class="d-block text-white font-weight-normal">Type:</dt>
							<dd class="d-block mb-5">Gallery Talk</dd>
							<dt class="d-block text-white font-weight-normal">Time:</dt>
							<dd class="d-block mb-5">
								<time datetime="2011-01-12" class="d-block">9:00am - 10:00am</time>
							</dd>
							<dt class="d-block text-white font-weight-normal">Venue:</dt>
							<dd class="d-block mb-5">New York, NY, United States</dd>
							<dt class="d-block text-white font-weight-normal">Duration:</dt>
							<dd class="d-block mb-5">120 Minutes (approximately)</dd>
						</dl>
						<div class="d-flex position-relative">
							<!-- btnShare -->
							<a href="javascript:void(0);" class="btnShare btnShareII text-white d-flex align-items-center textDecorationNone mt-3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-share-alt icn d-flex align-items-center justify-content-center rounded-circle text-secondary mr-2"><span class="sr-only">icon</span></i>
								Share
							</a>
							<!-- shareDropMenu -->
							<div class="dropdown-menu shareDropMenu p-0">
								<a class="dropdown-item" href="javascript:void(0);">Twitter</a>
								<a class="dropdown-item" href="javascript:void(0);">Facebook</a>
								<a class="dropdown-item" href="javascript:void(0);">Pinterest</a>
								<a class="dropdown-item" href="javascript:void(0);">Email</a>
								<a class="dropdown-item" href="javascript:void(0);">Copy URL</a>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</article>
	<!-- scPagerNav -->
	<nav class="scPagerNav hasBdr border-bottom-0 position-relative">
		<div class="container">
			<div class="d-flex">
				<!-- scpnPrev -->
				<a href="javascript:void(0);" class="scpnPrev position-relative textDecorationNone d-block w-50">
					<span class="d-block text-uppercase mb-sm-2">Prev Exhibition</span>
					<strong class="h3 mb-0 d-none d-sm-block">Mutiny: Works by Géricault</strong>
				</a>
				<!-- scpnNext -->
				<a href="javascript:void(0);" class="scpnNext position-relative textDecorationNone d-block w-50 text-right">
					<span class="d-block text-uppercase mb-sm-2">Next Exhibition</span>
					<strong class="h3 mb-0 d-none d-sm-block">Kathleen White Spirits</strong>
				</a>
			</div>
		</div>
	</nav>
@endsection