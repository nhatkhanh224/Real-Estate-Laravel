@extends('layouts.web')
<!-- Banner start -->
@section('content')
<div class="banner" id="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active item-bg">
                <img class="d-block w-100 h-100" src="http://placehold.it/1920x1050" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container-fluid b1-inner-2">
                        <div class="t-left">
                            <h5 data-animation="animated fadeInDown delay-05s">The Best Real Estate Deals</h5>
                            <h1 data-animation="animated fadeInDown delay-05s">Discover <span>Modern</span> Villa</h1>
                            <a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-lg btn-theme">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item-bg">
                <img class="d-block w-100 h-100" src="http://placehold.it/1920x1050" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container-fluid b1-inner-2">
                        <div class="t-left">
                            <h5 data-animation="animated fadeInDown delay-05s">The Best Real Estate Deals</h5>
                            <h1 data-animation="animated fadeInDown delay-05s">Best <span>Place For Sell</span> Properties</h1>
                            <a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-lg btn-theme">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item-bg">
                <img class="d-block w-100 h-100" src="http://placehold.it/1920x1050" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container-fluid b1-inner-2">
                        <div class="t-left">
                            <h5 data-animation="animated fadeInDown delay-05s">The Best Real Estate Deals</h5>
                            <h1 data-animation="animated fadeInDown delay-05s">Best Place For <span>Sell Properties</span></h1>
                            <a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-lg btn-theme">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-secton">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- Search area start -->
<div class="search-area" id="search-area-1">
    <div class="container-fluid">
        <div class="search-area-inner">
            <div class="search-contents ">
                <form action="index.html" method="GET">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="area">
                                    <option>Area From</option>
                                    <option>1500</option>
                                    <option>1200</option>
                                    <option>900</option>
                                    <option>600</option>
                                    <option>300</option>
                                    <option>100</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-status">
                                    <option>Property Status</option>
                                    <option>For Sale</option>
                                    <option>For Rent</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="location">
                                    <option>Location</option>
                                    <option>United Kingdom</option>
                                    <option>American Samoa</option>
                                    <option>Belgium</option>
                                    <option>Canada</option>
                                    <option>Delaware</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="category">
                                    <option>Property Types</option>
                                    <option>Residential</option>
                                    <option>Commercial</option>
                                    <option>Land</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="bedrooms">
                                    <option>Bedrooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="bathrooms">
                                    <option>Bathrooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="form-group">
                                <div class="range-slider">
                                    <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="form-group">
                                <button class="search-button btn-md btn-color" type="submit">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search area end -->

<!-- Featured properties start -->
<div class="featured-properties content-area-2">
    <div class="container-fluid">
        <div class="main-title">
            <h1>Featured Properties</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="property-box-2">
                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                            </div>
                            <div class="tag-for">For Sale</div>
                            <img src="http://placehold.it/438x561" alt="property-2" class="img-fluid">
                            <div class="info">
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <p>Sq Ft:980</p>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <p>3 Beds</p>
                                    </li>
                                    <li>
                                        <i class="flaticon-bath"></i>
                                        <p>2 Baths</p>
                                    </li>
                                </ul>
                            </div>
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="http://placehold.it/700x900" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="http://placehold.it/700x900" class="hidden"></a>
                                <a href="http://placehold.it/700x900" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h5 class="title"><a href="properties-details.html">Real Luxury Villa</a></h5>
                        <h4 class="price">
                            $56700
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="property-box-2">
                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                            </div>
                            <div class="tag-for">For Sale</div>
                            <img src="http://placehold.it/438x561" alt="property-2" class="img-fluid">
                            <div class="info">
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <p>Sq Ft:980</p>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <p>3 Beds</p>
                                    </li>
                                    <li>
                                        <i class="flaticon-bath"></i>
                                        <p>2 Baths</p>
                                    </li>
                                </ul>
                            </div>
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="http://placehold.it/700x900" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="http://placehold.it/700x900" class="hidden"></a>
                                <a href="http://placehold.it/700x900" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h5 class="title"><a href="properties-details.html">Sweet Family Home</a></h5>
                        <h4 class="price">
                            $142.99
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                <div class="property-box-2">
                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                            </div>
                            <div class="tag-for">For Sale</div>
                            <img src="http://placehold.it/438x561" alt="property-2" class="img-fluid">
                            <div class="info">
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <p>Sq Ft:980</p>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <p>3 Beds</p>
                                    </li>
                                    <li>
                                        <i class="flaticon-bath"></i>
                                        <p>2 Baths</p>
                                    </li>
                                </ul>
                            </div>
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="http://placehold.it/700x900" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="http://placehold.it/700x900" class="hidden"></a>
                                <a href="http://placehold.it/700x900" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h5 class="title"><a href="properties-details.html">Masons Villas</a></h5>
                        <h4 class="price">
                            $781.99
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                <div class="property-box-2">
                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                            </div>
                            <div class="tag-for">For Sale</div>
                            <img src="http://placehold.it/438x561" alt="property-2" class="img-fluid">
                            <div class="info">
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <p>Sq Ft:980</p>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <p>3 Beds</p>
                                    </li>
                                    <li>
                                        <i class="flaticon-bath"></i>
                                        <p>2 Baths</p>
                                    </li>
                                </ul>
                            </div>
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="http://placehold.it/700x900" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="http://placehold.it/700x900" class="hidden"></a>
                                <a href="http://placehold.it/700x900" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h5 class="title"><a href="properties-details.html">Beautiful Single Home</a></h5>
                        <h4 class="price">
                            $650.99
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured properties end -->

<!-- Services 2 start -->
<div class="services-2 overview-bgi">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 align-self-center wow fadeInLeft delay-04s">
                <div class="main-title main-title-2">
                    <h1>What Are you Looking For?</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span>typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown</span></p>
                    <a href="#" class="btn important-btn btn-theme btn-md">Contact us</a>
                </div>
            </div>
            <div class="col-lg-7 offset-lg-1 wow fadeInRight delay-04s">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="media services-info si2">
                            <i class="flaticon-hotel-building"></i>
                            <div class="media-body">
                                <h5 class="mt-0">Apartments</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown</p>
                                <h4>01</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="media services-info si2">
                            <i class="flaticon-house"></i>
                            <div class="media-body">
                                <h5 class="mt-0">Houses</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown</p>
                                <h4>02</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="media services-info si2">
                            <i class="flaticon-call-center-agent"></i>
                            <div class="media-body">
                                <h5 class="mt-0">Support 24/7</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown</p>
                                <h4>03</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="media services-info si2">
                            <i class="flaticon-office-block"></i>
                            <div class="media-body">
                                <h5 class="mt-0">Commercial</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown</p>
                                <h4>04</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services 2 end -->

<!-- Most popular places start -->
<div class="most-popular-places mpp content-area-23">
    <div class="main-title">
        <h1>Most Popular Places</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-12 cp-2">
                <div class="row">
                    <div class="col-md-12 col-pad wow fadeInLeft delay-04s">
                        <div class="overview overview-box">
                            <img src="http://placehold.it/1076x354" alt="popular-places">
                            <div class="mask">
                                <div class="info align-self-center">
                                    <div class="ds">
                                        <h2>New York</h2>
                                        <p>14 Properties</p>
                                        <a href="properties-details.html" class="btn btn-border">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-pad wow fadeInUp delay-04s">
                        <div class="overview overview-box">
                            <img src="http://placehold.it/530x354" alt="popular-places">
                            <div class="mask">
                                <div class="info">
                                    <div class="ds">
                                        <h2>Rome</h2>
                                        <p>14 Properties</p>
                                        <a href="properties-details.html" class="btn btn-border">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-pad wow fadeInUp delay-04s">
                        <div class="overview overview-box">
                            <img src="http://placehold.it/530x354" alt="popular-places">
                            <div class="mask">
                                <div class="info">
                                    <div class="ds">
                                        <h2>California</h2>
                                        <p>201 Properties</p>
                                        <a href="properties-details.html" class="btn btn-border">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-pad cp-3 wow fadeInRight delay-04s">
                <div class="overview aa overview-box">
                    <img src="http://placehold.it/764x723" alt="popular-places" class="big-img">
                    <div class="mask">
                        <div class="info-2">
                            <div class="ds">
                                <h2>Tokyo</h2>
                                <p>72 Properties</p>
                                <a href="properties-details.html" class="btn btn-border">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Most popular places end -->

<!-- Agent start -->
<div class="agent content-area">
    <div class="container-fluid">
        <div class="main-title">
            <h1>Meet Our Agents</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                <div class="agent-2">
                    <div class="agent-photo">
                        <img src="http://placehold.it/438x489" alt="agent-grid-2" class="img-fluid">
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.html">John Pitarshon</a></h5>
                        <p>Creative Director</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                <div class="agent-2">
                    <div class="agent-photo">
                        <img src="http://placehold.it/438x489" alt="agent-grid-2" class="img-fluid">
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.html">Martin Smith</a></h5>
                        <p>Web Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInRight delay-04s">
                <div class="agent-2">
                    <div class="agent-photo">
                        <img src="http://placehold.it/438x489" alt="agent-grid-2" class="img-fluid">
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.html">Brandon Miller</a></h5>
                        <p>Office Manager</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInRight delay-04s">
                <div class="agent-2">
                    <div class="agent-photo">
                        <img src="http://placehold.it/438x489" alt="agent-grid-2" class="img-fluid">
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="agent-details">
                        <h5><a href="#">Karen Paran</a></h5>
                        <p>Support Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div >
<!-- Agent end -->

<!-- Testimonial 4 start -->
<div class="testimonial-4 tml-4 content-area-7">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title">
                    <h1>Our Testimonial</h1>
                </div>
            </div>
        </div>
        <div class="slick-slider-area">
            <div class="row slick-carousel wow fadeInUp delay-04s" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item wow">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="arrow-down"></div>
                        <div class="media user">
                            <a href="#">
                                <img src="http://placehold.it/60x60 " alt="testimonial-4" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>Maria Blank</h5>
                                <h6>Web Developer</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item wow">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="arrow-down"></div>
                        <div class="media user">
                            <a href="#">
                                <img src="http://placehold.it/60x60 " alt="testimonial-4" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>Karen Paran</h5>
                                <h6>Support Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="arrow-down"></div>
                        <div class="media user">
                            <a href="#">
                                <img src="http://placehold.it/60x60 " alt="testimonial-4" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    John Pitarshon
                                </h5>
                                <h6>Creative Director</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="arrow-down"></div>
                        <div class="media user">
                            <a href="#">
                                <img src="http://placehold.it/60x60 " alt="testimonial-4" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    John Pitarshon
                                </h5>
                                <h6>Creative Director</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial 4 end -->

<!-- Blog start -->
<div class="blog content-area-2">
    <div class="container-fluid">
        <div class="main-title">
            <h1>Latest Blog</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 wow fadeInLeft delay-04s">
                <div class="blog-4">
                    <div class="profile-user">
                        <img src="http://placehold.it/65x65" alt="blog" class="img-fluid">
                    </div>
                    <h3>
                        <a href="blog-single-sidebar-right.html">Selling Your Real House</a>
                    </h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    <div class="blog-footer clearfix">
                        <div class="float-left">
                            <p class="date"><i class="flaticon-calendar"></i> 24 Sep, 2020</p>
                        </div>
                        <div class="float-right">
                            <a href="blog-single-sidebar-right.html">Read more..</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-none-992 wow fadeInUp delay-04s">
                <div class="blog-4">
                    <div class="profile-user">
                        <img src="http://placehold.it/65x65" alt="blog" class="img-fluid">
                    </div>
                    <h3>
                        <a href="blog-single-sidebar-right.html">Selling Your Real House</a>
                    </h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    <div class="blog-footer clearfix">
                        <div class="float-left">
                            <p class="date"><i class="flaticon-calendar"></i> 24 Sep, 2020</p>
                        </div>
                        <div class="float-right">
                            <a href="blog-single-sidebar-right.html">Read more..</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInRight delay-04s">
                <div class="blog-4">
                    <div class="profile-user">
                        <img src="http://placehold.it/65x65" alt="blog" class="img-fluid">
                    </div>
                    <h3>
                        <a href="blog-single-sidebar-right.html">Find Your Dream Real Estate</a>
                    </h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    <div class="blog-footer clearfix">
                        <div class="float-left">
                            <p class="date"><i class="flaticon-calendar"></i> 17 Feb, 2020</p>
                        </div>
                        <div class="float-right">
                            <a href="blog-single-sidebar-right.html">Read more..</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- Blog end -->