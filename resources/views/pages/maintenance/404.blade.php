@extends('layout.main')
@section('content')
    	<!-- pageNotFoundBlock -->
			<article class="pageNotFoundBlock hdIsVii d-flex w-100 text-center">
				<div class="lbAlignWrap d-flex align-items-center w-100">
					<div class="container py-6">
						<div class="row">
							<div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3">
								<div class="extraWrap px-md-12">
									<i class="icnWrap d-block mb-5">
										<img src="{{asset('assets/images/icn16.svg')}}" width="72" height="73" alt="icon">
									</i>
									<h2 class="mb-3">Ohh! Page Not Found</h2>
									<p class="mb-7">It looks like nothing was found at this location. Click the button below to return home.</p>
									<a href="{{route('home')}}" class="btn btn-secondary text-uppercase btnMdMinWidth">Back to home</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</article>
@endsection