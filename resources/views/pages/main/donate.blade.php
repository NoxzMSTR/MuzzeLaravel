@extends('layout.main')
@section('content')
    <!-- mainHeadingHead -->
    <header class="mainHeadingHead text-center position-relative bgCover w-100 d-flex text-white"
        style="background-image: url(http://via.placeholder.com/1920x300);">
        <div class="mhhAlignHolder d-flex w-100 align-items-center position-relative">
            <div class="container py-6">
                <h1 class="text-white mb-0">Donate</h1>
            </div>
        </div>
    </header>
    <!-- annualFundBlock -->
    <article class="annualFundBlock pt-8 pb-8 pb-md-4 pt-lg-13 pb-lg-10 pt-xl-20 pb-xl-15">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h2 class="mb-5">Support the Annual Fund!</h2>
                    <!-- eabDescrText -->
                    <div class="eabDescrText fontSerif eabDescrTextII text-gray888">
                        <p class="mb-5">With your help, 2019 will be an extraordinary year at The Muzze. A gift from you
                            will allow us to:</p>
                    </div>
                    <p class="mb-5">Hackathon interaction design channels crowdsource holy grail backing funding success
                        scrum project growth hacking influencer twitter beta prototype. Crowdfunding user experience.</p>
                    <!-- bulletList -->
                    <ul class="bulletList bulletListIII bulletListIV list-unstyled mb-5">
                        <li>Handshake beta ramen first mover advantage infrastructure assets metrics scrum project
                            marketing.</li>
                        <li>Branding buzz iPhone freemium user experience android.</li>
                        <li>Growth hacking mass market bootstrapping social media partnership traction pivot backing churn.
                        </li>
                    </ul>
                    <p class="mb-6">Look, just because I don't be givin' no man a foot massage don't make it right for
                        Marsellus to throw Antwone into a glass.</p>
                    <p class="mb-6">Thank you for your support. <em class="text-secondary">All contributions are
                            tax-deductible to the extent provided by law</em>. If you have questions, comments or
                        suggestions about our donation, please call us on <a href="tel:+6179876543"
                            class="textDecorationNone colorInherit">+(617) 987-6543</a> or email <a
                            href="mailto:contact@artandhistory.org.au"
                            class="textDecorationNone colorInherit">contact@artandhistory.org.au</a>.</p>
                </div>
                <div class="col-12 col-md-6">
                    <!-- donationBoxWrap -->
                    <div class="donationBoxWrap border px-3 pb-4 px-md-6 pb-md-9 mt-2">
                        <form action="#">
                            <!-- dbHeadingWrap -->
                            <div class="dbHeadingWrap bg-brown mx-n3 px-3 mx-md-n6 px-md-6 py-3 mb-6">
                                <h3 class="text-white mb-0">Make Donation Now</h3>
                            </div>
                            <!-- dbSpentShow -->
                            <div class="dbSpentShow d-flex w-100 text-secondary position-relative mb-4">
                                <strong
                                    class="curr text-center position-absolute font-weight-normal border-right d-flex align-items-center justify-content-center bg-grayf7f7f7">??</strong>
                                <input type="text" class="showField" readonly value="50">
                            </div>
                            <!-- dnRadioList -->
                            <ul class="list-unstyled dnRadioList text-secondary text-center d-flex flex-wrap mb-5">
                                <li>
                                    <input id="dn1" type="radio" name="donationPay" class="custom-control-input"
                                        checked>
                                    <label for="dn1">??50.00</label>
                                </li>
                                <li>
                                    <input id="dn2" type="radio" name="donationPay" class="custom-control-input">
                                    <label for="dn2">??100.00</label>
                                </li>
                                <li>
                                    <input id="dn3" type="radio" name="donationPay" class="custom-control-input">
                                    <label for="dn3">??150.00</label>
                                </li>
                                <li>
                                    <input id="dn4" type="radio" name="donationPay" class="custom-control-input">
                                    <label for="dn4">200.00</label>
                                </li>
                            </ul>
                            <strong class="font-weight-normal d-block h4 fontBase mb-4">Personal Information</strong>
                            <div class="form-row mx-n2">
                                <div class="col-12 px-2 col-sm-6 col-md-12 col-lg-6">
                                    <div class="form-group position-relative mb-2">
                                        <label class="d-block">
                                            <strong class="d-block font-weight-normal mb-1">First Name <span
                                                    class="text-brown">*</span></strong>
                                            <input type="text" class="form-control formControlMedium">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 px-2 col-sm-6 col-md-12 col-lg-6">
                                    <div class="form-group position-relative mb-2">
                                        <label class="d-block">
                                            <strong class="d-block font-weight-normal mb-1">Last Name <span
                                                    class="text-brown">*</span></strong>
                                            <input type="text" class="form-control formControlMedium">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 px-2">
                                    <div class="form-group position-relative mb-2">
                                        <label class="d-block">
                                            <strong class="d-block font-weight-normal mb-1">Email Address <span
                                                    class="text-brown">*</span></strong>
                                            <input type="email" class="form-control formControlMedium">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- dbSpentShow -->
                            <div class="dbSpentShow dbSpentShowII d-flex w-100 text-secondary position-relative mb-4 mt-2">
                                <strong
                                    class="curr text-center position-absolute font-weight-normal border-right d-flex align-items-center justify-content-center bg-grayf7f7f7 px-3">Donation
                                    Total:</strong>
                                <input type="text" class="showField" readonly value="??50">
                            </div>
                            <input type="submit" class="btn btn-secondary text-uppercase d-block w-100 mt-6"
                                value="donate now">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!-- queryCalloutBlock -->
    <aside class="queryCalloutBlock bg-grayf8f8f8 hasBdr border-bottom-0 text-center d-flex w-100">
        <div class="qcbHolder d-flex align-items-center w-100 py-6">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3">
                        <h2 class="h2Medium mb-5">Any Queries? <br>Give us a call at (617) 789-4563</h2>
                        <div class="px-md-14">
                            <p class="mb-5 mb-lg-9">We are always here to help the needy peoples any where in the world.</p>
                        </div>
                        <a href="contact-us.html" class="btn btn-outline-secondary btnMidMinWidth bdr2">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
    </aside>
@endsection
