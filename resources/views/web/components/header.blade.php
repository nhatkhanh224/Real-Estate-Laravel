<!-- Top header start -->
<header class="top-header top-header-bg" id="top-header-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-7">
                <div class="list-inline">
                    <a href="tel:1-7X0-555-8X22"><i class="fa fa-phone"></i>+0477 85X6 552</a>
                    <a href="#" class="mr-0"><i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>20/F Green Road, Dhanmondi,</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-5">
                <ul class="top-social-media pull-right">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li>
                        <a href="login.html" class="sign-in"><i class="fa fa-sign-in"></i> Login or Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->

<!-- main header start -->
<header class="main-header do-sticky" id="main-header-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class="navbar-brand logo-2" href="/">
                        <img src="{{asset('web/assets/img/logos/black-logo.png')}}" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav  justify-content-center">
                            @foreach ($category_menus as $key => $categoryParent)
                            <li class="nav-item dropdown {{$key == 0 ? 'active' : '' }}">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{$categoryParent->name}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    @foreach ($categoryParent->categoryChildren as $categoryChild)
                                    <li><a class="dropdown-item" href="{{route('homepage.list',['slug'=>$categoryChild->slug])}}">{{$categoryChild->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pages
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">My Account</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="user-profile.html">User profile</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="my-properties.html">My Properties</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="favorited-properties.html">Favorited Properties</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="submit-property.html">Submit Property</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">About</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="about.html">About Us</a></li>
                                            <li><a class="dropdown-item" href="about-me.html">About Me</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Services</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="services.html">Services 1</a></li>
                                            <li><a class="dropdown-item" href="services-2.html">Services 2</a></li>
                                            <li><a class="dropdown-item" href="services-details.html">Services Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Pricing Tables</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="pricing-tables-1.html">Pricing Tables 1</a></li>
                                            <li><a class="dropdown-item" href="pricing-tables-2.html">Pricing Tables 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Gallery</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="gallery-1.html">Gallery 1</a></li>
                                            <li><a class="dropdown-item" href="gallery-2.html">Gallery 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Faq</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="faq-1.html">Faq 1</a></li>
                                            <li><a class="dropdown-item" href="faq-2.html">Faq 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Typography</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="typography.html">Typography 1</a></li>
                                            <li><a class="dropdown-item" href="typography-2.html">Typography 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">404 Error</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="pages-404.html">404 Error 1</a></li>
                                            <li><a class="dropdown-item" href="pages-404-2.html">404 Error 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="properties-comparison.html">Properties Comparison</a></li>
                                    <li><a class="dropdown-item" href="search-brand.html">Search Brand</a></li>
                                    <li><a class="dropdown-item" href="elements.html">Elements</a></li>
                                    <li><a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>
                                    <li><a class="dropdown-item" href="login.html">Login/Register</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Agents
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Agent List</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="agent-list.html">Agent List 1</a></li>
                                            <li><a class="dropdown-item" href="agent-list-2.html">Agent List 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Agent Grid</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="agent-grid.html">Agent Grid 1</a></li>
                                            <li><a class="dropdown-item" href="agent-grid-2.html">Agent Grid 2</a></li>
                                            <li><a class="dropdown-item" href="agent-grid-3.html">Agent Grid 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="agent-detail.html">Agent Detail</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Blog
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Columns</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="blog-columns-2col.html">2 Columns</a></li>
                                            <li><a class="dropdown-item" href="blog-columns-3col.html">3 Columns</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Classic</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="blog-classic-sidebar-right.html">Right Sidebar</a></li>
                                            <li><a class="dropdown-item" href="blog-classic-sidebar-left.html">Left Sidebar</a></li>
                                            <li><a class="dropdown-item" href="blog-classic-fullwidth.html">FullWidth</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Blog Details</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="blog-single-sidebar-right.html">Right Sidebar</a></li>
                                            <li><a class="dropdown-item" href="blog-single-sidebar-left.html">Left Sidebar</a></li>
                                            <li><a class="dropdown-item" href="blog-single-fullwidth.html">Fullwidth</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Shop
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                    <a class="dropdown-item" href="shop-list.html">Shop List</a>
                                    <a class="dropdown-item" href="shop-cart.html">Shop Cart</a>
                                    <a class="dropdown-item" href="shop-checkout.html">Shop Checkout</a>
                                    <a class="dropdown-item" href="shop-single.html">Shop Details</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Contact
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                    <a class="dropdown-item" href="contact-1.html">Contact 1</a>
                                    <a class="dropdown-item" href="contact-2.html">Contact 2</a>
                                    <a class="dropdown-item" href="contact-3.html">Contact 3</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav ml-auto  justify-content-end">
                            <li class="nav-item">
                                <a href="{{route('homepage.submitPropertyPage')}}" class="submit-btn">
                                    Submit Property
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- main header end -->