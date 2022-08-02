<header id="pageHeader" class="position-absolute w-100 bg-gray1b1d1f">
    <!-- hTopHolder -->
    <div class="hTopHolder hTopHolderViv pt-2 pb-2 pt-md-3 pb-md-3 pt-xl-6 pb-xl-6">
        <div class="container">
            <div class="row">
                <div class="col-4 col-sm-3 col-lg-2">
                    <!-- logo -->
                    <div class="logo logoViv mt-1">
                        <a href="home.html">
                            <img src="{{asset('assets/images/Logo_D_Guillermo_Galeria_transparent.png')}}" class="img-fluid" alt="Muzze || Art &amp; History Museum">
                            
                        </a>
                    </div>
                </div>
                <div class="col-8 col-sm-9 col-lg-10">
                    <div class="d-flex align-items-center justify-content-end w-100">
                        <!-- hdrAddress -->
                        <address class="d-none d-md-flex hdrAddress mx-n2 mx-lg-n5 mb-0">
                            <div class="wrap d-flex align-items-center px-2 px-lg-5">
                                <span class="icnWrap d-block flex-shrink-0 mr-3">
                                    <img src="{{asset('assets/images/icn14.svg')}}" width="36" height="37" class="img-fluid" alt="icon">
                                </span>
                                <div class="descrWrap">
                                    <span class="d-block">
                                        <a href="tel:18493610323">1 (849) 361-0323</a>
                                    </span>
                                    <span class="d-block">
                                        <a href="mailto:linaresamalia@gmail.com">linaresamalia@gmail.com</a>
                                    </span>
                                </div>
                            </div>
                            <div class="wrap d-flex align-items-center px-2 px-lg-5">
                                <span class="icnWrap d-block flex-shrink-0 mr-3">
                                    <img src="{{asset('assets/images/icn15.svg')}}" width="36" height="37" class="img-fluid" alt="icon">
                                </span>
                                <div class="descrWrap">
                                    <span class="d-block">{{__('C/ Lorenzo Alvarez')}} <br>{{__('Cabrera, Maria Trinidad Sanchez')}}</span>
                                </div>
                            </div>
                        </address>
                        <!-- btn -->
                        <!-- <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalLong" class="btn btnSmMinWidth btn-outline-dark btnOutlineDarkInverse btn-sm text-capitalize bdr2 ml-4 ml-lg-7 ml-xl-10 hdBtn mr-18 mr-md-0 mt-lg-1">tickets</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hdHolder -->
    <div class="hdHolder headerFixer bg-white">
        <div class="container">
            <!-- navbar -->
            <nav class="navbar navbar-expand-md navbar-light d-block px-0 pt-0 pb-0 pt-md-2 pb-md-2 pt-lg-3">
                <div class="row">
                    <div class="col-9 position-static">
                        <!-- navbar collapse -->
                        <div class="collapse navbar-collapse pageNavigationCollapse" id="pageNavigationCollapse">
                            <!-- mainNavigation -->
                            <ul class="navbar-nav mainNavigation text-capitalize">
                                <li class="nav-item active dropdown">
                                    <a class="nav-link" href="index.html" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                                    <!-- <a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a> -->
                                    <!-- dropdown menu -->
                                    <!-- <div class="dropdown-menu mndDropMenu mndDropMenuSmall p-0"> -->
                                        <!-- mnDropList -->
                                        <!-- <ul class="list-unstyled mnDropList mb-0 pt-1 pb-1 pt-md-4 pb-md-6">
                                            <li><a target="_blank" href="home.html">Home Default</a></li>
                                            <li><a target="_blank" href="home-classic.html">Home Classic</a></li>
                                            <li><a target="_blank" href="home-creative.html">Home Creative</a></li>
                                            <li><a target="_blank" href="home-fullscreen.html">Home FullScreen</a></li>
                                            <li><a target="_blank" href="home-exhibition.html">Home Exhibition</a></li>
                                            <li><a target="_blank" href="home-modern.html">Home Modern</a></li>
                                            <li><a target="_blank" href="home-minimal.html">Home Minimal</a></li>
                                            <li><a target="_blank" href="home-simple-boxed.html">Home Simple Boxed</a></li>
                                            <li><a target="_blank" href="home-parallax.html">Home Parallax</a></li>
                                            <li><a target="_blank" href="home-event.html">Home Event</a></li>
                                        </ul> -->
                                    <!-- </div> -->
                                </li>
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">What’s On</a>

                                    <div class="dropdown-menu mndDropMenu mndDropMenuSmall p-0">
                                        
                                        <ul class="list-unstyled mnDropList mb-0 pt-1 pb-1 pt-md-4 pb-md-6">
                                            <li class="hasDropdown">
                                                <a href="javascript:void(0);">Event &amp; Programs</a>
                    
                                                <ul class="list-unstyled mnDropList mb-0 pt-1 pb-1 pt-md-4 pb-md-6">
                                                    <li><a target="_blank" href="events-list.html">Event List</a></li>
                                                    <li><a target="_blank" href="event-grid.html">Event Grid</a></li>
                                                    <li><a target="_blank" href="event-compact.html">Event Compact</a></li>
                                                    <li><a target="_blank" href="single-events.html">Single Event</a></li>
                                                </ul>
                                            </li>
                                            <li class="hasDropdown">
                                                <a href="javascript:void(0);">Exhibition</a>
                    
                                                <ul class="list-unstyled mnDropList mb-0 pt-1 pb-1 pt-md-4 pb-md-6">
                                                    <li><a target="_blank" href="exhibition-list.html">Exhibition List</a></li>
                                                    <li><a target="_blank" href="exhibition-grid.html">Exhibition Grid</a></li>
                                                    <li><a target="_blank" href="exhibition-compact.html">Exhibition Compact</a></li>
                                                    <li><a target="_blank" href="single-exhibition.html">Exhibition Event</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Visit</a>

                                    <div class="dropdown-menu mndDropMenu p-0">
            
                                        <ul class="list-unstyled mnDropList mb-0 pt-1 pb-1 pt-md-4 pb-md-6">
                                            <li>
                                                <a target="_blank" href="visit-us-block.html">Plan Your Visit</a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="visit-us-block.html">Hours &amp; Admission</a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="visit-us-block.html">Directions</a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="visit-us-block.html">Accessibility</a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="visit-us-block.html">Group Tours</a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="visit-us-block.html">Rental</a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="visit-us-block.html">Other Facilities</a>
                                            </li>
                                        </ul>
                                        <address class="mndAdress position-absolute text-gray888 mb-0">
                                            <strong class="d-block mb-1 mndaTitle font-weight-normal fontSerif text-graydfdfdf">Hours</strong>
                                            <p class="mb-5"><time datetime="2011-01-12">Daily 9.30 am–6.00 pm</time></p>
                                            <strong class="d-block mndaTitle font-weight-normal mb-1 fontSerif text-graydfdfdf">Location</strong>
                                            <p class="mb-5">C/ Lorenzo Alvarez Cabrera, Maria Trinidad Sanchez, Republica Dominicana</p>
                                            <a href="javascript:void(0);" class="mndLink text-uppercase">
                                                <i class="fas fa-map-marker-alt icn"><span class="sr-only">icon</span></i>
                                                Geting Here
                                            </a>
                                        </address>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>

                                    <div class="dropdown-menu mndDropMenu mndDropMenuSmall p-0">
            
                                        <ul class="list-unstyled mnDropList mb-0 pt-1 pb-1 pt-md-4 pb-md-6">
                                            <li><a target="_blank" href="mission-history.html">Mission &amp; History</a></li>
                                            <li><a target="_blank" href="board-staff.html">On Board &amp; Staff</a></li>
                                            <li><a target="_blank" href="career.html">Career</a></li>
                                            <li><a target="_blank" href="sponsers.html">Sponsers</a></li>
                                            <li><a target="_blank" href="contact-us.html">Contact Us</a></li>
                                            <li><a target="_blank" href="membership.html">Membership</a></li>
                                            <li><a target="_blank" href="donate.html">Donate</a></li>
                                            <li><a target="_blank" href="facility-rental.html">Facility Rental</a></li>
                                            <li><a target="_blank" href="career-details.html">Career Details</a></li>
                                        </ul>
                                    </div>
                                </li> -->
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Collections</a>

                                    <div class="dropdown-menu mndDropMenu mndDropMenuSmall p-0">
            
                                        <ul class="list-unstyled mnDropList mb-0 pt-1 pb-1 pt-md-4 pb-md-6">
                                            <li><a target="_blank" href="collection-type-1.html">Collection Type-1</a></li>
                                            <li><a target="_blank" href="collection-type-2.html">Collection Type-2</a></li>
                                            <li><a target="_blank" href="single-works.html">Single Works</a></li>
                                            <li><a target="_blank" href="artists.html">Artists</a></li>
                                            <li><a target="_blank" href="single-artist.html">Single Artist</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>

                                    <div class="dropdown-menu mndDropMenu mndDropMenuSmall p-0">
            
                                        <ul class="list-unstyled mnDropList mb-0 pt-1 pb-1 pt-md-4 pb-md-6">
                                            <li class="hasDropdown">
                                                <a href="javascript:void(0);">News</a>
                    
                                                <ul class="list-unstyled mnDropList mb-0 pt-1 pb-1 pt-md-4 pb-md-6">
                                                    <li><a target="_blank" href="news-grid.html">News Grid</a></li>
                                                    <li><a target="_blank" href="news-list.html">News Grid W/S</a></li>
                                                    <li><a target="_blank" href="news-classic.html">News Classic</a></li>
                                                    <li><a target="_blank" href="single-post.html">Single Post</a></li>
                                                </ul>
                                            </li>
                                            <li class="hasDropdown">
                                                <a href="javascript:void(0);">Shop</a>
                    
                                                <ul class="list-unstyled mnDropList mb-0 pt-1 pb-1 pt-md-4 pb-md-6">
                                                    <li><a target="_blank" href="shop.html">Shop</a></li>
                                                    <li><a target="_blank" href="single-product.html">Single Product</a></li>
                                                    <li><a target="_blank" href="cart.html">Cart</a></li>
                                                    <li><a target="_blank" href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li class="hasDropdown">
                                                <a href="javascript:void(0);">Image Gallery</a>
                    
                                                <ul class="list-unstyled mnDropList mb-0 pt-1 pb-1 pt-md-4 pb-md-6">
                                                    <li><a target="_blank" href="image-gallery.html">Image Gallery</a></li>
                                                    <li><a target="_blank" href="gallery-grid.html">Gallery Grid</a></li>
                                                    <li><a target="_blank" href="gallery-masonry.html">Gallery Masonry</a></li>
                                                    <li><a target="_blank" href="gallery-caption.html">Gallery Caption</a></li>
                                                    <li><a target="_blank" href="gallery-fullwidth.html">Gallery Fullwidth</a></li>
                                                </ul>
                                            </li>
                                            <li><a target="_blank" href="venues.html">Venues</a></li>
                                            <li><a target="_blank" href="faq.html">Faq</a></li>
                                            <li><a target="_blank" href="my-account.html">My Account</a></li>
                                            <li><a target="_blank" href="404-page.html">404 Error</a></li>
                                        </ul>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-3 position-static">
                        <div class="d-flex justify-content-end align-items-center w-100 ">
                            <!-- hdSearchForm -->
                            <form action="#" class="hdSearchForm">
                                <!-- hdSearchOpener -->
                                <a class="hdSearchOpener hdSearchOpenerViv d-block" data-toggle="collapse" href="#hdSearchFieldCollapse" role="button" aria-expanded="false" aria-controls="hdSearchFieldCollapse">
                                    <i class="icomoon-search"><span class="sr-only">search</span></i>
                                </a>
                                <!-- hdSearchFieldCollapse -->
                                <div class="collapse hdSearchFieldCollapse position-fixed w-100 h-100 d-flex align-items-center" id="hdSearchFieldCollapse">
                                    <!-- hdsfcHolder -->
                                    <div class="hdsfcHolder w-100 mx-auto py-4 px-3">
                                        <strong class="d-block font-weight-normal mb-2">Type anything to Find in Pages</strong>
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Search&hellip;">
                                            <div class="input-group-append">
                                                <button class="btn btn-secondary" type="button">
                                                    <i class="icomoon-search"><span class="sr-only">search</span></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="hdSearchClose d-flex align-items-center justify-content-center position-absolute" data-toggle="collapse" href="#hdSearchFieldCollapse" role="button" aria-expanded="true" aria-controls="hdSearchFieldCollapse">
                                        <i class="fas fa-times"><span class="sr-only">search</span></i>
                                    </a>
                                </div>
                            </form>
                            <!-- hdMenuOpener -->
                            <a href="javascript:void(0);" class="hdMenuOpener hdSideMenuOpener position-relative ml-4 d-none d-md-block">
                                <span class="icnBar position-absolute"><span class="sr-only">menu</span></span>
                            </a>
                            <!-- navbar toggler -->
                            <button class="navbar-toggler pgNavOpener pgNavOpenerViv position-absolute" type="button" data-toggle="collapse" data-target="#pageNavigationCollapse" aria-controls="pageNavigationCollapse" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"><span class="sr-only">menu</span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <nav class="navbar navbar-light d-flex flex-column navbarSide position-fixed h-100 px-6 pt-10 pb-6 px-md-10 pb-md-10">
        <ul class="navbar-nav mainNavigation w-100 flex-grow-1 mainSideNavigation text-capitalize d-block">
            <li class="nav-item active dropdown">
                <a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>

                <div class="dropdown-menu mndDropMenu mndDropMenuSmall p-0">
                    <ul class="list-unstyled mnDropList mb-0">
                        <li><a target="_blank" href="home.html">Home Default</a></li>
                        <li><a target="_blank" href="home-classic.html">Home Classic</a></li>
                        <li><a target="_blank" href="home-creative.html">Home Creative</a></li>
                        <li><a target="_blank" href="home-fullscreen.html">Home FullScreen</a></li>
                        <li><a target="_blank" href="home-exhibition.html">Home Exhibition</a></li>
                        <li><a target="_blank" href="home-modern.html">Home Modern</a></li>
                        <li><a target="_blank" href="home-minimal.html">Home Minimal</a></li>
                        <li><a target="_blank" href="home-simple-boxed.html">Home Simple Boxed</a></li>
                        <li><a target="_blank" href="home-parallax.html">Home Parallax</a></li>
                        <li><a target="_blank" href="home-event.html">Home Event</a></li>
                    </ul>
                </div>
            </li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">What’s On</a>

                <div class="dropdown-menu mndDropMenu mndDropMenuSmall p-0">
                    <ul class="list-unstyled mnDropList mb-0">
                        <li class="hasDropdown">
                            <a href="javascript:void(0);">Event &amp; Programs</a>

                            <ul class="list-unstyled mnDropList mb-0">
                                <li><a target="_blank" href="events-list.html">Event List</a></li>
                                <li><a target="_blank" href="event-grid.html">Event Grid</a></li>
                                <li><a target="_blank" href="event-compact.html">Event Compact</a></li>
                                <li><a target="_blank" href="single-events.html">Single Event</a></li>
                            </ul>
                        </li>
                        <li class="hasDropdown">
                            <a href="javascript:void(0);">Exhibition</a>

                            <ul class="list-unstyled mnDropList mb-0">
                                <li><a target="_blank" href="exhibition-list.html">Exhibition List</a></li>
                                <li><a target="_blank" href="exhibition-grid.html">Exhibition Grid</a></li>
                                <li><a target="_blank" href="exhibition-compact.html">Exhibition Compact</a></li>
                                <li><a target="_blank" href="single-exhibition.html">Exhibition Event</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </li> -->
            <!-- <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Visit</a>

                <div class="dropdown-menu mndDropMenu p-0">
                    <ul class="list-unstyled mnDropList mb-0">
                        <li>
                            <a target="_blank" href="visit-us-block.html">Plan Your Visit</a>
                        </li>
                        <li>
                            <a target="_blank" href="visit-us-block.html">Hours &amp; Admission</a>
                        </li>
                        <li>
                            <a target="_blank" href="visit-us-block.html">Directions</a>
                        </li>
                        <li>
                            <a target="_blank" href="visit-us-block.html">Accessibility</a>
                        </li>
                        <li>
                            <a target="_blank" href="visit-us-block.html">Group Tours</a>
                        </li>
                        <li>
                            <a target="_blank" href="visit-us-block.html">Rental</a>
                        </li>
                        <li>
                            <a target="_blank" href="visit-us-block.html">Other Facilities</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>

                <div class="dropdown-menu mndDropMenu mndDropMenuSmall p-0">
                    <ul class="list-unstyled mnDropList mb-0">
                        <li><a target="_blank" href="mission-history.html">Mission &amp; History</a></li>
                        <li><a target="_blank" href="board-staff.html">On Board &amp; Staff</a></li>
                        <li><a target="_blank" href="career.html">Career</a></li>
                        <li><a target="_blank" href="sponsers.html">Sponsers</a></li>
                        <li><a target="_blank" href="contact-us.html">Contact Us</a></li>
                        <li><a target="_blank" href="membership.html">Membership</a></li>
                        <li><a target="_blank" href="donate.html">Donate</a></li>
                        <li><a target="_blank" href="facility-rental.html">Facility Rental</a></li>
                        <li><a target="_blank" href="career-details.html">Career Details</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Collections</a>

                <div class="dropdown-menu mndDropMenu mndDropMenuSmall p-0">
                    <ul class="list-unstyled mnDropList mb-0">
                        <li><a target="_blank" href="collection-type-1.html">Collection Type-1</a></li>
                        <li><a target="_blank" href="collection-type-2.html">Collection Type-2</a></li>
                        <li><a target="_blank" href="single-works.html">Single Works</a></li>
                        <li><a target="_blank" href="artists.html">Artists</a></li>
                        <li><a target="_blank" href="single-artist.html">Single Artist</a></li>
                    </ul>
                </div>
            </li> -->
            <!-- <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>

                <div class="dropdown-menu mndDropMenu mndDropMenuSmall p-0">
                    <ul class="list-unstyled mnDropList mb-0">
                        <li class="hasDropdown">
                            <a href="javascript:void(0);">News</a>

                            <ul class="list-unstyled mnDropList mb-0">
                                <li><a target="_blank" href="news-grid.html">News Grid</a></li>
                                <li><a target="_blank" href="news-list.html">News Grid W/S</a></li>
                                <li><a target="_blank" href="news-classic.html">News Classic</a></li>
                                <li><a target="_blank" href="single-post.html">Single Post</a></li>
                            </ul>
                        </li>
                        <li class="hasDropdown">
                            <a href="javascript:void(0);">Shop</a>

                            <ul class="list-unstyled mnDropList mb-0">
                                <li><a target="_blank" href="shop.html">Shop</a></li>
                                <li><a target="_blank" href="single-product.html">Single Product</a></li>
                                <li><a target="_blank" href="cart.html">Cart</a></li>
                                <li><a target="_blank" href="checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                        <li class="hasDropdown">
                            <a href="javascript:void(0);">Image Gallery</a>

                            <ul class="list-unstyled mnDropList mb-0">
                                <li><a target="_blank" href="image-gallery.html">Image Gallery</a></li>
                                <li><a target="_blank" href="gallery-grid.html">Gallery Grid</a></li>
                                <li><a target="_blank" href="gallery-masonry.html">Gallery Masonry</a></li>
                                <li><a target="_blank" href="gallery-caption.html">Gallery Caption</a></li>
                                <li><a target="_blank" href="gallery-fullwidth.html">Gallery Fullwidth</a></li>
                            </ul>
                        </li>
                        <li><a target="_blank" href="venues.html">Venues</a></li>
                        <li><a target="_blank" href="faq.html">Faq</a></li>
                        <li><a target="_blank" href="my-account.html">My Account</a></li>
                        <li><a target="_blank" href="404-page.html">404 Error</a></li>
                    </ul>
                </div>
            </li> -->
        </ul>
        <div class="nvbBottomWrap w-100 flex-shrink-0 text-gray888 pt-10 pb-1">
            <address class="mb-0">
                <p>
                    <a href="tel:18493610323" class="colorInherit textDecorationNone">1 (849) 361-0323</a>
                    <br>
                    <a href="mailto:linaresamalia@gmail.com" class="colorInherit textDecorationNone">linaresamalia@gmail.com</a>
                </p>
                <ul class="list-unstyled socialNetworks ftSocialNetworks ftSocialNetworksVix d-flex flex-wrap mb-2 mt-11">
                    <li>
                        <a href="javascript:void(0);">
                            <i class="fab fa-twitter" aria-hidden="true"><span class="sr-only">twitter</span></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="fab fa-pinterest" aria-hidden="true"><span class="sr-only">pinterest</span></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="fab fa-facebook-f" aria-hidden="true"><span class="sr-only">facebook</span></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="fab fa-instagram" aria-hidden="true"><span class="sr-only">instagram</span></i>
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled ftTermLinks ftTermLinksVix d-flex flex-wrap mb-0">
                    <li>
                        <a href="javascript:void(0);">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">Terms of Use</a>
                    </li>
                </ul>
            </address>
        </div>
        <a href="javascript:void(0);" class="hdMenuOpener hdSideMenuOpener position-absolute">
            <span class="icnBar position-absolute"><span class="sr-only">menu</span></span>
        </a>
    </nav>
</header>