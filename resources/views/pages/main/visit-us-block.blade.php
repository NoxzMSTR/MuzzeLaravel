@extends('layout.main')
@section('content')
	<!-- mainHeadingHead -->
	<header class="mainHeadingHead position-relative bgCover w-100 d-flex text-white" style="background-image: url(http://via.placeholder.com/1920x300);">
		<div class="mhhAlignHolder d-flex w-100 align-items-center position-relative">
			<div class="container py-6">
				<h1 class="text-white mb-0">Plan your Visit</h1>
			</div>
		</div>
	</header>
	<!-- scrollToNav -->
	<nav class="scrollToNav text-gray777 pt-2 pb-2 pt-lg-4 pb-lg-4">
		<div class="container">
			<ul class="list-unstyled mb-0 d-flex justify-content-start">
				<li class="active">
					<a href="#hours">Hours &amp; Admission</a>
				</li>
				<li>
					<a href="#directions">Directions</a>
				</li>
				<li>
					<a href="#accessibility">Accessibility</a>
				</li>
				<li>
					<a href="#tours">Group Tours</a>
				</li>
				<li>
					<a href="#rental">Rental </a>
				</li>
				<li>
					<a href="#facilities">Other Facilities</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container pt-7 pb-7 pt-lg-13 pb-lg-10 pt-xl-20 pb-xl-14">
		<!-- vistiTwoColumn -->
		<section id="hours" class="vistiTwoColumn">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="pr-md-5 pr-lg-10 pr-xl-17">
						<h2 class="h2Medium mb-4 mb-md-7 mb-lg-10">Hours &amp; Admission</h2>
					</div>
				</div>
				<div class="col-12 col-md-6 pt-md-2">
					<h3 class="fontBase mb-3">Opening Hours</h3>
					<time datetime="2011-01-12" class="d-block mb-5">Open Daily 9:30–6:00, Monday Until 8:00</time>
					<!-- eabDescrText -->
					<div class="eabDescrText mb-9">
						<p>The Museum will be closed Independence Day, Thanksgiving, Christmas, and New Year’s Day.</p>
					</div>
					<h3 class="fontBase mb-3">Admission Prices</h3>
					<!-- apDataTable -->
					<table class="apDataTable w-100 mt-5 mb-9">
						<tbody>
							<tr>
								<td>Adults</td>
								<td>$25</td>
							</tr>
							<tr>
								<td>Seniors (55+)</td>
								<td>$10</td>
							</tr>
							<tr>
								<td>Students (12 and up)</td>
								<td>$10</td>
							</tr>
							<tr>
								<td>Members</td>
								<td>Free</td>
							</tr>
							<tr>
								<td>Children (12 and under)</td>
								<td>Free</td>
							</tr>
							<tr>
								<td>Military families</td>
								<td>Free</td>
							</tr>
						</tbody>
					</table>
					<!-- eabDescrText -->
					<div class="eabDescrText mb-7">
						<p>Visitors can park for free in the caridonm to the museum.</p>
					</div>
					<!-- vtcBtnsWrap -->
					<div class="vtcBtnsWrap d-flex flex-wrap mx-n2">
						<a href="javascript:void(0);" class="btn btn-secondary text-uppercase mx-2 mb-2">Order Ticket</a>
						<a href="javascript:void(0);" class="btn btnGre5 btnGre5Outline text-uppercase bdr2 mx-2 mb-2">Become a member</a>
					</div>
				</div>
			</div>
		</section>
		<hr class="my-8 my-lg-14">
		<!-- vistiTwoColumn -->
		<section id="directions" class="vistiTwoColumn">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="pr-md-5 pr-lg-10 pr-xl-17">
						<h2 class="h2Medium mb-4 mb-md-7 mb-lg-10">Directions</h2>
						<!-- vtcFrameWrap -->
						<div class="vtcFrameWrap position-relative w-100">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3117.259425640003!2d-90.29593598438974!3d38.61991257085702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87d8b57b271310d3%3A0x53ff7568884d5d00!2sKnox%20Industrial%20Dr%2C%20St.%20Louis%2C%20MO%2063139%2C%20USA!5e0!3m2!1sen!2s!4v1587836825553!5m2!1sen!2s" class="w-100 h-100 d-block border-0 position-absolute" aria-hidden="false"></iframe>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 pt-md-2">
					<!-- eabDescrText -->
					<div class="eabDescrText mb-7">
						<p>The Museum of Art and History is located in the awesome Snow Road neighborhood, just steps right from sachan garden and 2 minutes from uptown newyork.</p>
					</div>
					<!-- vtcAccordion -->
					<div class="accordion mt-10" id="vtcAccordion">
						<!-- vctAccItem -->
						<div class="vctAccItem">
							<h4 class="fontBase mb-0">
								<button class="position-relative pl-3 pr-6 pl-lg-6 pr-lg-12 text-left d-block w-100 vctOpener" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">By Public Transportation</button>
							</h4>
							<div id="collapse1" class="collapse show vtcAccSlide" data-parent="#vtcAccordion">
								<div class="px-3 px-lg-6 pt-4 pb-3">
									<p class="mb-6">Bus 3: get off at bus stop, Art & History Museum.</p>
									<p class="mb-6">Berm bone air fastplant rad bean plant hospital flip. 720 flypaper 900 boneless Vision Streetwear nose-bump. Acid drop pop shove-it tuna-flip judo air Tracker. Front foot impossible opposite footed gap flail skate or die.</p>
									<p class="mb-6">Intercity buses (40,75, 635, 556,784): Kidney hospital flip rip grip spine sponsored. Rob Dyrdek helipop heel flip acid drop disaster hospital flip. Pop shove-it crooked grind 900 betty rip grip. goofy footed lip baseplate vasure mute-air.</p>
								</div>
							</div>
						</div>
						<!-- vctAccItem -->
						<div class="vctAccItem">
							<h4 class="fontBase mb-0">
								<button class="position-relative pl-3 pr-6 pl-lg-6 pr-lg-12 text-left d-block w-100 vctOpener" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">By Bicycle</button>
							</h4>
							<div id="collapse2" class="collapse vtcAccSlide" data-parent="#vtcAccordion">
								<div class="px-3 px-lg-6 pt-4 pb-3">
									<p class="mb-6">Bus 3: get off at bus stop, Art & History Museum.</p>
									<p class="mb-6">Berm bone air fastplant rad bean plant hospital flip. 720 flypaper 900 boneless Vision Streetwear nose-bump. Acid drop pop shove-it tuna-flip judo air Tracker. Front foot impossible opposite footed gap flail skate or die.</p>
									<p class="mb-6">Intercity buses (40,75, 635, 556,784): Kidney hospital flip rip grip spine sponsored. Rob Dyrdek helipop heel flip acid drop disaster hospital flip. Pop shove-it crooked grind 900 betty rip grip. goofy footed lip baseplate vasure mute-air.</p>
								</div>
							</div>
						</div>
						<!-- vctAccItem -->
						<div class="vctAccItem">
							<h4 class="fontBase mb-0">
								<button class="position-relative pl-3 pr-6 pl-lg-6 pr-lg-12 text-left d-block w-100 vctOpener" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">By Car</button>
							</h4>
							<div id="collapse3" class="collapse vtcAccSlide" data-parent="#vtcAccordion">
								<div class="px-3 px-lg-6 pt-4 pb-3">
									<p class="mb-6">Bus 3: get off at bus stop, Art & History Museum.</p>
									<p class="mb-6">Berm bone air fastplant rad bean plant hospital flip. 720 flypaper 900 boneless Vision Streetwear nose-bump. Acid drop pop shove-it tuna-flip judo air Tracker. Front foot impossible opposite footed gap flail skate or die.</p>
									<p class="mb-6">Intercity buses (40,75, 635, 556,784): Kidney hospital flip rip grip spine sponsored. Rob Dyrdek helipop heel flip acid drop disaster hospital flip. Pop shove-it crooked grind 900 betty rip grip. goofy footed lip baseplate vasure mute-air.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<hr class="my-8 my-lg-14">
		<!-- vistiTwoColumn -->
		<section id="accessibility" class="vistiTwoColumn">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="pr-md-5 pr-lg-10 pr-xl-17">
						<h2 class="h2Medium mb-4 mb-md-7 mb-lg-10">Accessibility</h2>
					</div>
				</div>
				<div class="col-12 col-md-6 pt-md-2">
					<!-- bulletList -->
					<ul class="list-unstyled bulletList bulletListVvii mb-7">
						<li>We can lend you a wheelchair or a collapsible chair—just ask at the information desk.</li>
						<li>Visitors may borrow a standard manual wheelchair during their visit.</li>
						<li>We have a prayer room in our 1830 Warehouse. Let one of the team know if you’d like to use it.</li>
						<li>There is a hearing loop in the New Warehouse.</li>
						<li>Single occupancy / all gender restrooms are available.</li>
						<li>We are a breastfeeding-friendly museum.</li>
					</ul>
					<p class="mb-6">Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a glass.</p>
					<p class="mb-0">Find out everything you need to know about accessibility and facilities at the Art & History Museum. If you have questions, comments or suggestions about our facilities, please call us on <a href="tel:+6179876543" class="text-secondary textDecorationNone">+(617) 987-6543</a> or email <a href="mailto:contact@artandhistory.org.au" class="text-secondary textDecorationNone">contact@artandhistory.org.au</a>.</p>
				</div>
			</div>
		</section>
		<hr class="my-8 my-lg-14">
		<!-- vistiTwoColumn -->
		<section id="tours" class="vistiTwoColumn">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="pr-md-5 pr-lg-10 pr-xl-17">
						<h2 class="h2Medium mb-4 mb-md-7 mb-lg-10">Group Tours</h2>
					</div>
				</div>
				<div class="col-12 col-md-6 pt-md-2">
					<p class="mb-6">If you plan to visit the museum with more than 12 people, contact us ahead of time so we can help you plan your day.</p>
					<p>For more information or to schedule a tour, please contact mark Dunel, Visitor Services Manager at dunel@museum.org or by calling on +(617) 987-6543 or <a href="javascript:void(0);" class="textDecorationNone text-secondary">Fill out our group booking form</a>.</p>
					<!-- accordion -->
					<div class="accordion mt-10" id="vtcAccordion2">
						<!-- vctAccItem -->
						<div class="vctAccItem">
							<h4 class="fontBase mb-0">
								<button class="position-relative pl-3 pr-6 pl-lg-6 pr-lg-12 text-left d-block w-100 vctOpener" type="button" data-toggle="collapse" data-target="#collapse101" aria-expanded="true" aria-controls="collapse101">Student Guide Tours</button>
							</h4>
							<div id="collapse101" class="collapse show vtcAccSlide" data-parent="#vtcAccordion2">
								<div class="px-3 px-lg-6 pt-4 pb-3">
									<p class="mb-6">Group visits of eight or more people should register trillion shores of the cosmic ocean Jean-François Champollion prime number worldlets kindling the energy hidden in matter. The carbon in our apple pies Orion's sword network of wormholes two ghostly white figures in coveralls and helmets are soflty dancing.</p>
									<a href="javascript:void(0);" class="btnLearnMore textDecorationNone d-inline-block mb-7">Learn More <i class="fa fa-angle-right align-middle icn"><span class="sr-only">icon</span></i></a>
								</div>
							</div>
						</div>
						<!-- vctAccItem -->
						<div class="vctAccItem">
							<h4 class="fontBase mb-0">
								<button class="position-relative pl-3 pr-6 pl-lg-6 pr-lg-12 text-left d-block w-100 vctOpener" type="button" data-toggle="collapse" data-target="#collapse202" aria-expanded="false" aria-controls="collapse202">By Bicycle</button>
							</h4>
							<div id="collapse202" class="collapse vtcAccSlide" data-parent="#vtcAccordion2">
								<div class="px-3 px-lg-6 pt-4 pb-3">
									<p class="mb-6">Bus 3: get off at bus stop, Art & History Museum.</p>
									<p class="mb-6">Berm bone air fastplant rad bean plant hospital flip. 720 flypaper 900 boneless Vision Streetwear nose-bump. Acid drop pop shove-it tuna-flip judo air Tracker. Front foot impossible opposite footed gap flail skate or die.</p>
									<p class="mb-6">Intercity buses (40,75, 635, 556,784): Kidney hospital flip rip grip spine sponsored. Rob Dyrdek helipop heel flip acid drop disaster hospital flip. Pop shove-it crooked grind 900 betty rip grip. goofy footed lip baseplate vasure mute-air.</p>
								</div>
							</div>
						</div>
						<!-- vctAccItem -->
						<div class="vctAccItem">
							<h4 class="fontBase mb-0">
								<button class="position-relative pl-3 pr-6 pl-lg-6 pr-lg-12 text-left d-block w-100 vctOpener" type="button" data-toggle="collapse" data-target="#collapse303" aria-expanded="false" aria-controls="collapse303">By Car</button>
							</h4>
							<div id="collapse303" class="collapse vtcAccSlide" data-parent="#vtcAccordion2">
								<div class="px-3 px-lg-6 pt-4 pb-3">
									<p class="mb-6">Bus 3: get off at bus stop, Art & History Museum.</p>
									<p class="mb-6">Berm bone air fastplant rad bean plant hospital flip. 720 flypaper 900 boneless Vision Streetwear nose-bump. Acid drop pop shove-it tuna-flip judo air Tracker. Front foot impossible opposite footed gap flail skate or die.</p>
									<p class="mb-6">Intercity buses (40,75, 635, 556,784): Kidney hospital flip rip grip spine sponsored. Rob Dyrdek helipop heel flip acid drop disaster hospital flip. Pop shove-it crooked grind 900 betty rip grip. goofy footed lip baseplate vasure mute-air.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<hr class="my-8 my-lg-14">
		<!-- vistiTwoColumn -->
		<section id="rental" class="vistiTwoColumn">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="pr-md-5 pr-lg-10 pr-xl-17">
						<h2 class="h2Medium mb-4 mb-md-7 mb-lg-10">Rentals</h2>
					</div>
				</div>
				<div class="col-12 col-md-6 pt-md-2">
					<p class="mb-10">Our team offers unique event spaces that can accommodate a wide range of events and group sizes. Members of any level can utilize our numerous indoor spaces or sprawling 40,000-square-foot garden for festivals, film shoots, galas, conferences, screenings, dinners, weddings, and a host of other occasions. Please fill out our facility inquiry form so we may better understand your needs and be prepared.</p>
					<!-- vtcBtnsWrap -->
					<div class="vtcBtnsWrap d-flex flex-wrap mx-n2 mb-3">
						<a href="javascript:void(0);" class="btn btnGre5 btnGre5Outline bdr2 mx-2">View Rental Packages <i class="fa fa-angle-right align-middle icn" aria-hidden="true"><span class="sr-only">icon</span></i></a>
					</div>
					<!-- vtcBtnsWrap -->
					<div class="vtcBtnsWrap d-flex flex-wrap mx-n2">
						<a href="javascript:void(0);" class="btn btnGre5 btnGre5Outline bdr2 mx-2">Request a Rental <i class="fa fa-angle-right align-middle icn" aria-hidden="true"><span class="sr-only">icon</span></i></a>
					</div>
				</div>
			</div>
		</section>
		<hr class="my-8 my-lg-14">
		<!-- vistiTwoColumn -->
		<section id="facilities" class="vistiTwoColumn">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="pr-md-5 pr-lg-10 pr-xl-17">
						<h2 class="h2Medium mb-4 mb-md-7 mb-lg-10">Amenities &amp; <br>Other Facilities</h2>
					</div>
				</div>
				<div class="col-12 col-md-6 pt-md-2">
					<p class="mb-6">We want you to be part of our museums, experience its beauty and this is why we offer several ways to let you engage with us to help maintain and develop the museums visitors experience.</p>
					<p class="mb-11">For general questions and questions about accessibility, please email us at <a href="mailto:info@art&historymuseum.org" class="text-secondary textDecorationNone">info@art&historymuseum.org</a></p>
					<!-- shopPostColumn -->
					<article class="shopPostColumn position-relative d-flex bgCover w-100 mb-8" style="background-image: url(http://via.placeholder.com/585x200);">
						<a href="javascript:void(0);" class="spcAlignHolder textDecorationNone d-flex w-100 align-items-end position-relative">
							<div class="my-5 mx-6 w-100">
								<h3 class="mb-0 fontBase text-white">Museum Cafe</h3>
							</div>
						</a>
					</article>
					<!-- shopPostColumn -->
					<article class="shopPostColumn position-relative d-flex bgCover w-100 mb-8" style="background-image: url(http://via.placeholder.com/585x200);">
						<a href="javascript:void(0);" class="spcAlignHolder textDecorationNone d-flex w-100 align-items-end position-relative">
							<div class="my-5 mx-6 w-100">
								<h3 class="mb-0 fontBase text-white">Museum Shop</h3>
							</div>
						</a>
					</article>
				</div>
			</div>
		</section>
	</div>
@endsection