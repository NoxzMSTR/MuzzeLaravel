@extends('layout.main')
@section('content')
	<!-- mainHeadingHead -->
	<header class="mainHeadingHead position-relative bgCover w-100 d-flex text-white" style="background-image: url(http://via.placeholder.com/1920x300);">
		<div class="mhhAlignHolder d-flex w-100 align-items-center position-relative">
			<div class="container py-6">
				<h1 class="text-white mb-0">Shop</h1>
			</div>
		</div>
	</header>
	<!-- shopContentBlock -->
	<section class="shopContentBlock pt-7 pb-7 pb-md-9 pt-lg-10 pb-lg-14 pt-xl-16 pb-xl-22">
		<div class="container">
			<!-- sorterHead -->
			<header class="sorterHead text-center text-md-left text-gray777 mb-7 mb-md-10">
				<div class="row align-items-md-center">
					<div class="col-12 col-md-8">
						<p class="m-2 m-md-0">Showing 1-16 of 20 Products</p>
					</div>
					<div class="col-12 col-md-4 text-md-right">
						<select class="chosenSelect csSelect" data-placeholder="Default Shorting">
							<option value="1">A-Z</option>
							<option value="2">Z-A</option>
						</select>
					</div>
				</div>
			</header>
			<div class="row">
				<div class="col-12 col-sm-6 col-lg-3">
					<!-- 	shopItemColumn -->
					<article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
						<div class="imgHolder position-relative mb-4 overflow-hidden">
							<a href="{{route('single-product')}}">
								<img src="http://via.placeholder.com/270x270" class="img-fluid w-100" alt="image description">
							</a>
							<a href="{{route('single-product')}}" class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add to Cart</a>
						</div>
						<h3 class="mb-2">
							<a href="{{route('single-product')}}">Museum Jaggur Aceumale</a>
						</h3>
						<h4 class="fontBase">£67.00</h4>
					</article>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<!-- 	shopItemColumn -->
					<article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
						<div class="imgHolder position-relative mb-4 overflow-hidden">
							<a href="{{route('single-product')}}">
								<img src="http://via.placeholder.com/270x270" class="img-fluid w-100" alt="image description">
							</a>
							<a href="{{route('single-product')}}" class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add to Cart</a>
							<strong class="prdctTag position-absolute rounded-circle bg-brown text-white d-flex align-items-center justify-content-center text-uppercase">new</strong>
						</div>
						<h3 class="mb-2">
							<a href="{{route('single-product')}}">Blcak Fancy Vavoom Cap</a>
						</h3>
						<h4 class="fontBase">£99.00</h4>
					</article>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<!-- 	shopItemColumn -->
					<article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
						<div class="imgHolder position-relative mb-4 overflow-hidden">
							<a href="{{route('single-product')}}">
								<img src="http://via.placeholder.com/270x270" class="img-fluid w-100" alt="image description">
							</a>
							<a href="{{route('single-product')}}" class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add to Cart</a>
						</div>
						<h3 class="mb-2">
							<a href="{{route('single-product')}}">Zerabis Caritime Mhoker Art</a>
						</h3>
						<h4 class="fontBase">£51.00</h4>
					</article>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<!-- 	shopItemColumn -->
					<article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
						<div class="imgHolder position-relative mb-4 overflow-hidden">
							<a href="{{route('single-product')}}">
								<img src="http://via.placeholder.com/270x270" class="img-fluid w-100" alt="image description">
							</a>
							<a href="{{route('single-product')}}" class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add to Cart</a>
						</div>
						<h3 class="mb-2">
							<a href="{{route('single-product')}}">Mia Calimao Uttliparian Plate</a>
						</h3>
						<h4 class="fontBase">£49.00</h4>
					</article>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<!-- 	shopItemColumn -->
					<article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
						<div class="imgHolder position-relative mb-4 overflow-hidden">
							<a href="{{route('single-product')}}">
								<img src="http://via.placeholder.com/270x270" class="img-fluid w-100" alt="image description">
							</a>
							<a href="{{route('single-product')}}" class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add to Cart</a>
						</div>
						<h3 class="mb-2">
							<a href="{{route('single-product')}}">Magzine Extreame Measure Can Andre Saraiva X </a>
						</h3>
						<h4 class="fontBase">£72.00</h4>
					</article>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<!-- 	shopItemColumn -->
					<article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
						<div class="imgHolder position-relative mb-4 overflow-hidden">
							<a href="{{route('single-product')}}">
								<img src="http://via.placeholder.com/270x270" class="img-fluid w-100" alt="image description">
							</a>
							<a href="{{route('single-product')}}" class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add to Cart</a>
						</div>
						<h3 class="mb-2">
							<a href="{{route('single-product')}}">ART Xhoopee Juke by kai Art</a>
						</h3>
						<h4 class="fontBase">£35.00</h4>
					</article>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<!-- 	shopItemColumn -->
					<article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
						<div class="imgHolder position-relative mb-4 overflow-hidden">
							<a href="{{route('single-product')}}">
								<img src="http://via.placeholder.com/270x270" class="img-fluid w-100" alt="image description">
							</a>
							<a href="{{route('single-product')}}" class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add to Cart</a>
							<strong class="prdctTag position-absolute rounded-circle bg-brown text-white d-flex align-items-center justify-content-center text-uppercase">new</strong>
						</div>
						<h3 class="mb-2">
							<a href="{{route('single-product')}}">Geor Museum Mesh Toy/Jen-1</a>
						</h3>
						<h4 class="fontBase">£29.00</h4>
					</article>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<!-- 	shopItemColumn -->
					<article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
						<div class="imgHolder position-relative mb-4 overflow-hidden">
							<a href="{{route('single-product')}}">
								<img src="http://via.placeholder.com/270x270" class="img-fluid w-100" alt="image description">
							</a>
							<a href="{{route('single-product')}}" class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add to Cart</a>
						</div>
						<h3 class="mb-2">
							<a href="{{route('single-product')}}">Mind The Cyber Things</a>
						</h3>
						<h4 class="fontBase">£30.00</h4>
					</article>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<!-- 	shopItemColumn -->
					<article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
						<div class="imgHolder position-relative mb-4 overflow-hidden">
							<a href="{{route('single-product')}}">
								<img src="http://via.placeholder.com/270x270" class="img-fluid w-100" alt="image description">
							</a>
							<a href="{{route('single-product')}}" class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add to Cart</a>
						</div>
						<h3 class="mb-2">
							<a href="{{route('single-product')}}">Shrigley Silk Arty Purse</a>
						</h3>
						<h4 class="fontBase">£88.00</h4>
					</article>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<!-- 	shopItemColumn -->
					<article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
						<div class="imgHolder position-relative mb-4 overflow-hidden">
							<a href="{{route('single-product')}}">
								<img src="http://via.placeholder.com/270x270" class="img-fluid w-100" alt="image description">
							</a>
							<a href="{{route('single-product')}}" class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add to Cart</a>
						</div>
						<h3 class="mb-2">
							<a href="{{route('single-product')}}">Trap Door: Trans Cultural Art</a>
						</h3>
						<h4 class="fontBase">£75.00</h4>
					</article>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<!-- 	shopItemColumn -->
					<article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
						<div class="imgHolder position-relative mb-4 overflow-hidden">
							<a href="{{route('single-product')}}">
								<img src="http://via.placeholder.com/270x270" class="img-fluid w-100" alt="image description">
							</a>
							<a href="{{route('single-product')}}" class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add to Cart</a>
						</div>
						<h3 class="mb-2">
							<a href="{{route('single-product')}}">Hercules Segers: Painter Upson Study in Beauty & Classic</a>
						</h3>
						<h4 class="fontBase">£51.00</h4>
					</article>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<!-- 	shopItemColumn -->
					<article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
						<div class="imgHolder position-relative mb-4 overflow-hidden">
							<a href="{{route('single-product')}}">
								<img src="http://via.placeholder.com/270x270" class="img-fluid w-100" alt="image description">
							</a>
							<a href="{{route('single-product')}}" class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add to Cart</a>
						</div>
						<h3 class="mb-2">
							<a href="{{route('single-product')}}">Vadosharee Classic T-shirt</a>
						</h3>
						<h4 class="fontBase">£59.00</h4>
					</article>
				</div>
			</div>
			<!-- btnHolder -->
			<footer class="btnHolder text-center">
				<a href="{{route('single-product')}}" class="btn laodMore btn-outline-light bdr2 btnMidMinWidth">Load More</a>
			</footer>
		</div>
	</section>
@endsection