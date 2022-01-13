<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AutoMobile</title>
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
<link href="assets/css/iconmoon.css" rel="stylesheet">
<link href="assets/css/chosen.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/cs-automobile-plugin.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/widget.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">
<!-- <link href="assets/css/bootstrap-rtl.css" rel="stylesheet"> Uncomment it if needed! -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="assets/scripts/jquery.js"></script>
<script src="assets/scripts/modernizr.js"></script>
<script src="assets/scripts/bootstrap.min.js"></script>
<script src="{{ asset('vendor/livewire/livewire.js') }}"></script>
@livewireStyles
</head>
<body class="wp-automobile"> 
    @yield('content')
        <!-- Footer Start -->
    <footer id="footer" style="background:#19171a;padding:32px 0 0">
        <div class="cs-footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-our-partners">
                            <div class="widget-section-title">
                                <h6 style="color:#fff !important">Our Partners</h6>
                            </div>
                            <ul>
                                <li><a href="#">Apartments.com</a></li>
                                <li><a href="#">CareerBuilder.com</a></li>
                                <li><a href="#">Cars.com</a></li>
                                <li><a href="#">HomeFinder.com</a></li>
                                <li><a href="#">Detroit Newspapers in Education</a></li>
                                <li><a href="#">Michigan.com</a></li>
                                <li><a href="#">MovingCompanyReviews.com</a></li>
                                <li><a href="#">Find & Save</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-categores">
                            <div class="widget-section-title">
                                <h6 style="color:#fff !important">Top Categores</h6>
                            </div>
                            <ul>
                                <li><a href="#">All Toyota Vehicles</a></li>
                                <li><a href="#">SUVs</a></li>
                                <li><a href="#">Trucks</a></li>
                                <li><a href="#">Cars</a></li>
                                <li><a href="#">Crossovers</a></li>
                                <li><a href="#">Hybrids</a></li>
                                <li><a href="#">Hybrid Cars</a></li>
                                <li><a href="#">Hybrid SUVs</a></li>
                                <li><a href="#">Concept Vehicles</a></li>
                                <li><a href="#">TRD Pro Series</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-about-us">
                            <div class="widget-section-title">
                                <h6 style="color:#fff !important">About Us</h6>
                            </div>
                            <ul>
                                <li><a href="#">Shopping Tools</a></li>
                                <li><a href="#">Trade-In Value</a></li>
                                <li><a href="#">Customize Your Own Toyota</a></li>
                                <li><a href="#">Search Inventory</a></li>
                                <li><a href="#">Find a Dealer</a></li>
                                <li><a href="#">Local Specials</a></li>
                                <li><a href="#">Request a Quote</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Find Your Match</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-news-letter">
                            <div class="widget-section-title">
                                <h6 style="color:#fff !important">SIGN UP FOR TOYOTA UPDATES</h6>
                            </div>
                            <p>Recently received some brochures from my traders  here are some that might be of interest. </p>
                            <div class="cs-form">
                                <form>
                                    <div class="input-holder">
                                        <input type="email" placeholder="Enter Valid Email Address">
                                        <label> <i class="icon-send2"></i>
                                            <input class="cs-bgcolor" type="submit" value="submit">
                                        </label>
                                    </div>
                                </form>
                            </div>
                            <div class="cs-social-media">
                                <ul>
                                    <li><a href="#" data-original-title="facebook"><i class="icon-facebook-f"></i></a></li>
                                    <li><a href="#" data-original-title="twitter"><i class="icon-twitter4"></i></a></li>
                                    <li><a href="#" data-original-title="linkedin"><i class="icon-linkedin22"></i></a></li>
                                    <li><a href="#" data-original-title="google"><i class="icon-google-plus"></i></a></li>
                                    <li><a href="#" data-original-title="rss"><i class="icon-rss"></i></a></li>
                                    <li><a href="#" data-original-title="vimeo"><i class="icon-vimeo"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs-copyright" style="background:#141215; padding-top:37px; padding-bottom:37px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="copyright-text">
                            <p>Hello/ </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="cs-back-to-top">
                            <address>
                            <i class="icon-phone"></i> <a href="#">+0 (123) 456-789-10</a>
                            </address>
                            <a class="btn-to-top cs-bgcolor" href="#"><i class="icon-keyboard_arrow_up"></i></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End --> 
</div>
<script src="assets/scripts/responsive.menu.js"></script> 
<script src="assets/scripts/chosen.select.js"></script> 
<script src="assets/scripts/slick.js"></script> 
<script src="assets/scripts/echo.js"></script> 
<!-- Put all Functions in functions.js --> 
<script src="assets/scripts/functions.js"></script>
@livewireScripts
</body>

</html>