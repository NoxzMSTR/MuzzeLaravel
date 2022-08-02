@extends('layout.main')
@section('content')
	<!-- loginBlock -->
	<article class="loginBlock hdIsVii d-flex w-100">
		<div class="lbAlignWrap d-flex align-items-center w-100">
			<div class="container py-6">
				<!-- exhiTabList -->
				<ul class="nav nav-tabs justify-content-center exhiTabList exhiTabListIV d-block d-flex mb-9" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
					</li>
				</ul>
				<div class="row">
					<div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3">
						<div class="extraWrap px-md-12">
							<!-- tab-content -->
							<div class="tab-content">
								<!-- login-tab -->
								<div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
									<form action="#">
										<div class="form-group position-relative mb-3">
											<label class="d-block mb-0">
												<strong class="d-block font-weight-normal mb-1">User Name or Email <span class="text-brown">*</span></strong>
												<input type="text" class="form-control formControlMedium d-block w-100">
											</label>
										</div>
										<div class="form-group position-relative mb-3">
											<label class="d-block mb-0">
												<strong class="d-block font-weight-normal mb-1">Password <span class="text-brown">*</span></strong>
												<input type="password" class="form-control formControlMedium d-block w-100">
											</label>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<div class="form-group position-relative mb-3">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="rm">
													<label class="custom-control-label" for="rm">Remember Me</label>
												</div>
											</div>
											<div class="form-group position-relative mb-3">
												<a href="javascript:void(0);" class="btnForget textDecorationNone text-secondary">Lost your password?</a>
											</div>
										</div>
										<div class="btnWrap mt-1">
											<input type="submit" class="d-block w-100 btn btn-secondary text-uppercase" value="login">
										</div>
									</form>
								</div>
								<!-- register-tab -->
								<div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
									<form action="#">
										<div class="form-group position-relative mb-3">
											<label class="d-block mb-0">
												<strong class="d-block font-weight-normal mb-1">Email Address <span class="text-brown">*</span></strong>
												<input type="email" class="form-control formControlMedium d-block w-100">
											</label>
										</div>
										<div class="form-group position-relative mb-3">
											<label class="d-block mb-0">
												<strong class="d-block font-weight-normal mb-1">Password <span class="text-brown">*</span></strong>
												<input type="password" class="form-control formControlMedium d-block w-100">
											</label>
										</div>
										<div class="btnWrap mt-5">
											<input type="submit" class="d-block w-100 btn btn-secondary text-uppercase" value="register">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>
@endsection