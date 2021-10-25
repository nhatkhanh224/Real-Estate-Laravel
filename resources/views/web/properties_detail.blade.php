@extends('layouts.web')
<!-- Banner start -->
@section('content')
<div class="sub-banner">
  <div class="container">
    <div class="breadcrumb-area">
      <h1>Property Detail</h1>
      <ul class="breadcrumbs">
        <li><a href="index.html">Home</a></li>
        <li class="active">Property Detail</li>
      </ul>
    </div>
  </div>
</div>
<div class="properties-details-page content-area-15">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12 col-xs-12 slider">
        <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-30">
          <div class="heading-properties">
            <div class="row">
              <div class="col-md-12">
                <div class="pull-left">
                  <h3>{{$property->title}}</h3>
                  <p><i class="fa fa-map-marker"></i> 20/F Green Road, Dhanmondi, Dhaka</p>
                </div>
                <div class="p-r">
                  <h3>{{$property->price}}</h3>
                  <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i></p>
                </div>
              </div>
            </div>
          </div>
          <!-- main slider carousel items -->
          <div class="carousel-inner">
            @foreach ($property->images as $key=>$image)
            <div class="{{$key == 0 ? 'active' : '' }} item carousel-item" data-slide-number="{{$key}}">
              <img src="{{$image->image_path}}" style="width:730px;height:486px" class="img-fluid" alt="property-4">
            </div>
            @endforeach

            <a class="carousel-control left" href="#propertiesDetailsSlider" data-slide="prev"><i
                class="fa fa-angle-left"></i></a>
            <a class="carousel-control right" href="#propertiesDetailsSlider" data-slide="next"><i
                class="fa fa-angle-right"></i></a>
          </div>
          <!-- main slider carousel nav controls -->
          <ul class="carousel-indicators smail-properties list-inline nav nav-justified">
            @foreach ($property->images as $key=>$image)
            <li class="list-inline-item {{$key == 0 ? 'active' : '' }}">
              <a id="carousel-selector-0" class="selected" data-slide-to="{{$key}}"
                data-target="#propertiesDetailsSlider">
                <img src="{{$image->image_path}}" style="width:146px;height:97px" class="img-fluid" alt="property-4">
              </a>
            </li>
            @endforeach
          </ul>
        </div>
        <!-- Search area start -->
        <div class="widget-2 search-area advanced-search as-2">
          <h5 class="sidebar-title">Advanced Search</h5>
          <div class="search-area-inner">
            <div class="search-contents ">
              <form method="GET">
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
                <div class="form-group">
                  <select class="selectpicker search-fields" name="Status">
                    <option>Property Status</option>
                    <option>For Sale</option>
                    <option>For Rent</option>
                  </select>
                </div>
                <div class="form-group">
                  <select class="selectpicker search-fields" name="Location">
                    <option>Location</option>
                    <option>United Kingdom</option>
                    <option>American Samoa</option>
                    <option>Belgium</option>
                    <option>Canada</option>
                    <option>Delaware</option>
                  </select>
                </div>
                <div class="form-group">
                  <select class="selectpicker search-fields" name="types">
                    <option>Property Types</option>
                    <option>Residential</option>
                    <option>Commercial</option>
                    <option>Land</option>
                  </select>
                </div>
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
                <div class="form-group mb-30">
                  <select class="selectpicker search-fields" name="bedrooms">
                    <option>Bathrooms</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
                <div class="form-group clearfix">
                  <label>Area</label>
                  <div class="range-slider">
                    <div data-min="0" data-max="150000" data-unit="Sq ft" data-min-name="min_price"
                      data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <div class="form-group clearfix">
                  <label>Price</label>
                  <div class="range-slider">
                    <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price"
                      data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <button class="search-button btn-md btn-color">Search</button>
              </form>
            </div>
          </div>
        </div>
        <!-- Tabbing box start -->
        <div class="tabbing tabbing-box mb-60">
          <ul class="nav nav-tabs" id="carTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active show" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one"
                aria-selected="false">Mô tả</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="two"
                aria-selected="false">Tình trạng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="three"
                aria-selected="true">Liên hệ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="4-tab" data-toggle="tab" href="#4" role="tab" aria-controls="4"
                aria-selected="true">Video</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="5-tab" data-toggle="tab" href="#5" role="tab" aria-controls="5"
                aria-selected="true">Địa chỉ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="6-tab" data-toggle="tab" href="#6" role="tab" aria-controls="6"
                aria-selected="true">Bất động sản khác</a>
            </li>
          </ul>
          <div class="tab-content" id="carTabContent">
            <div class="tab-pane fade active show" id="one" role="tabpanel" aria-labelledby="one-tab">
              <h3 class="heading-3">Thông tin chi tiết</h3>
              <?php echo $property->discription?>
            </div>
            <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">
              <div class="floor-plans mb-60">
                <table>
                  <tbody>
                    <tr>
                      <td><strong>Diện tích</strong></td>
                      <td><strong>Số tầng</strong></td>
                      <td><strong>Số phòng ngủ</strong></td>
                      <td><strong>Số phòng tắm</strong></td>
                      <td><strong>Hướng nhà</strong></td>
                      <td><strong>Đã sử dụng</strong></td>
                    </tr>
                    <tr>
                      <td>{{$property->area}} m2</td>
                      <td>{{$conditions->number_of_floors}}</td>
                      <td>{{$conditions->number_of_bedrooms}}</td>
                      <td>{{$conditions->number_of_bathrooms}}</td>
                      <td>{{$conditions->direction}}</td>
                      <td>{{$conditions->building_age}}</td>
                    </tr>
                  </tbody>
                </table>
                <img src="{{$property->avatar->image_path}}" style="width:730px;height:370px" alt="floor-plans"
                  class="img-fluid">
              </div>
            </div>
            <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="three-tab">
            <div class="floor-plans mb-60">
                <table>
                  <tbody>
                    <tr>
                      <td><strong>Tên liên hệ</strong></td>
                      <td><strong>Số điện thoại</strong></td>
                      <td><strong>Email</strong></td>
                      
                    </tr>
                    <tr>
                      <td>{{$contacts->name}} m2</td>
                      <td>{{$contacts->phone}}</td>
                      <td>{{$contacts->email}}</td>
                      
                    </tr>
                  </tbody>
                </table>
               
              </div>
            </div>
            <div class="tab-pane fade " id="4" role="tabpanel" aria-labelledby="4-tab">
              <div class="property-video">
                <h3 class="heading-3">Property Vedio</h3>
                <iframe src="https://www.youtube.com/embed/m5_AKjDdqaU"></iframe>
              </div>
            </div>
            <div class="tab-pane fade " id="5" role="tabpanel" aria-labelledby="5-tab">
              <div class="section location">
                <h3 class="heading-3">Địa chỉ: {{$locations->address}}</h3>
               
              </div>
            </div>
            <div class="tab-pane fade " id="6" role="tabpanel" aria-labelledby="6-tab">
              <div class="related-properties">
                <h3 class="heading-3">Related Properties</h3>
                <div class="row">
                  @foreach($properties as $property)
                  <div class="col-md-6">
                    <div class="property-box">
                      <div class="property-thumbnail">
                        <a href="{{route('homepage.detail',['id'=>$property->id])}}" class="property-img">
                          <div class="plan-price">{{$property->price}} </div>
                          <img src="{{$property->avatar->image_path}}" alt="property-1" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                          <a href="{{route('homepage.detail',['id'=>$property->id])}}" class="overlay-link">
                            <i class="fa fa-link"></i>
                          </a>
                          <a class="overlay-link property-video" title="Test Title">
                            <i class="fa fa-video-camera"></i>
                          </a>
                          <div class="property-magnify-gallery">
                            <a href="http://placehold.it/750x540" class="overlay-link">
                              <i class="fa fa-expand"></i>
                            </a>
                            <a href="http://placehold.it/750x540" class="hidden"></a>
                            <a href="http://placehold.it/750x540" class="hidden"></a>
                          </div>
                        </div>
                      </div>
                      <div class="detail">
                        <h1 class="title">
                          <a href="{{route('homepage.detail',['id'=>$property->id])}}">{{$property->title}}</a>
                        </h1>
                        </div>
                  </div>
                  
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <!-- Amenities box start -->
        <div class="amenities-box mb-45">

        </div>
        <!-- Features opions start -->

        <!-- Comments section start -->
        <div class="comments-section mb-60">
          <h3 class="heading-3">Comments Section</h3>
          <ul class="comments">
            <li>
              <div class="comment">
                <div class="comment-author">
                  <a href="#">
                    <img src="http://placehold.it/70x70" alt="avatar-13">
                  </a>
                </div>
                <div class="comment-content">
                  <div class="comment-meta">
                    <div class="comment-meta-author">
                      Brandon Miller
                    </div>
                    <div class="comment-meta-reply">
                      <a href="#">Reply</a>
                    </div>
                    <div class="comment-meta-date">
                      <cite>8:42 PM 10/3/2020</cite>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="comment-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam
                      gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel,
                      dapibus tempus nulla.</p>
                  </div>
                </div>
              </div>
              <ul>
                <li>
                  <div class="comment">
                    <div class="comment-author">
                      <a href="#">
                        <img src="http://placehold.it/70x70" alt="avatar-13">
                      </a>
                    </div>
                    <div class="comment-content">
                      <div class="comment-meta">
                        <div class="comment-meta-author">
                          Antony John
                        </div>

                        <div class="comment-meta-reply">
                          <a href="#">Reply</a>
                        </div>

                        <div class="comment-meta-date">
                          <span>8:42 PM 10/3/2020</span>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="comment-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam.
                          Aliquam gravida massa at sem vulputate interdum.</p>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li>
              <div class="comment">
                <div class="comment-author">
                  <a href="#">
                    <img src="http://placehold.it/70x70" alt="avatar-13">
                  </a>
                </div>
                <div class="comment-content">
                  <div class="comment-meta">
                    <div class="comment-meta-author">
                      Jane Doe
                    </div>
                    <div class="comment-meta-reply">
                      <a href="#">Reply</a>
                    </div>
                    <div class="comment-meta-date">
                      <span>8:42 PM 10/3/2020</span>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="comment-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam
                      gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel,
                      dapibus tempus nulla. Donec vel nulla dui.</p>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <!-- Contact 3 start -->
        <div class="contact-3">
          <h3 class="heading-3">Leave a Comment</h3>
          <div class="container">
            <div class="row">
              <form action="#" method="GET" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group name">
                      <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group email">
                      <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group subject">
                      <input type="text" name="subject" class="form-control" placeholder="Subject">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group number">
                      <input type="text" name="phone" class="form-control" placeholder="Number">
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group message">
                      <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="send-btn mb-50">
                      <button type="submit" class="btn btn-color btn-md btn-message">Send Message</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="sidebar mbl">
          <!-- Search area start -->
          <div class="widget search-area advanced-search as">
            <h5 class="sidebar-title">Advanced Search</h5>
            <div class="search-area-inner">
              <div class="search-contents ">
                <form method="GET">
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
                  <div class="form-group">
                    <select class="selectpicker search-fields" name="Status">
                      <option>Property Status</option>
                      <option>For Sale</option>
                      <option>For Rent</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <select class="selectpicker search-fields" name="Location">
                      <option>Location</option>
                      <option>United Kingdom</option>
                      <option>American Samoa</option>
                      <option>Belgium</option>
                      <option>Canada</option>
                      <option>Delaware</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <select class="selectpicker search-fields" name="types">
                      <option>Property Types</option>
                      <option>Residential</option>
                      <option>Commercial</option>
                      <option>Land</option>
                    </select>
                  </div>
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
                  <div class="form-group mb-30">
                    <select class="selectpicker search-fields" name="bedrooms">
                      <option>Bathrooms</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                  <div class="form-group clearfix">
                    <label>Area</label>
                    <div class="range-slider">
                      <div data-min="0" data-max="150000" data-unit="Sq ft" data-min-name="min_price"
                        data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <div class="form-group clearfix">
                    <label>Price</label>
                    <div class="range-slider">
                      <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price"
                        data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <button class="search-button btn-md btn-color">Search</button>
                </form>
              </div>
            </div>
          </div>
          <!-- Categories start -->
          <div class="widget categories">
            <h5 class="sidebar-title">Categories</h5>
            <ul>
              <li><a href="#">Apartments<span>(12)</span></a></li>
              <li><a href="#">Houses<span>(8)</span></a></li>
              <li><a href="#">Family Houses<span>(23)</span></a></li>
              <li><a href="#">Offices<span>(5)</span></a></li>
              <li><a href="#">Villas<span>(63)</span></a></li>
              <li><a href="#">Other<span>(7)</span></a></li>
            </ul>
          </div>
          <!-- Recent posts start -->
          <div class="widget recent-posts">
            <h5 class="sidebar-title">Recent Properties</h5>
            <div class="media mb-4">
              <a href="properties-details.html">
                <img src="http://placehold.it/60x60" alt="sub-property">
              </a>
              <div class="media-body align-self-center">
                <h5>
                  <a href="properties-details.html">Beautiful Single Home</a>
                </h5>
                <p>Feb 27, 2020 | $1045,000</p>
              </div>
            </div>
            <div class="media mb-4">
              <a href="properties-details.html">
                <img src="http://placehold.it/60x60" alt="sub-property-2">
              </a>
              <div class="media-body align-self-center">
                <h5>
                  <a href="properties-details.html">Sweet Family Home</a>
                </h5>
                <p>Mar 14, 2020 | $944,000</p>
              </div>
            </div>
            <div class="media">
              <a href="properties-details.html">
                <img src="http://placehold.it/60x60" alt="sub-property-3">
              </a>
              <div class="media-body align-self-center">
                <h5>
                  <a href="properties-details.html">Real Luxury Villa</a>
                </h5>
                <p>Apr 14, 2020 | $1420,000</p>
              </div>
            </div>
          </div>
          <!-- Social list start -->
          <div class="social-list widget clearfix">
            <h5 class="sidebar-title">Follow Us</h5>
            <ul>
              <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
              <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <!-- Helping center start -->
          <div class="helping-center clearfix">
            <div class="media">
              <i class="fa fa-mobile"></i>
              <div class="media-body  align-self-center">
                <h5 class="mt-0">Helping Center</h5>
                <h4><a href="tel:+0477-85x6-552">+01 7X0 555 8X22</a></h4>
              </div>
            </div>
          </div>
          <!-- Financing calculator  start -->
          <div class="contact-3 financing-calculator widget-3">
            <h5 class="sidebar-title">Mortgage Calculator</h5>
            <form action="#" method="GET" enctype="multipart/form-data">
              <div class="form-group">
                <label class="form-label">Property Price</label>
                <input type="text" class="form-control" placeholder="$36.400">
              </div>
              <div class="form-group">
                <label class="form-label">Interest Rate (%)</label>
                <input type="text" class="form-control" placeholder="10%">
              </div>
              <div class="form-group">
                <label class="form-label">Period In Months</label>
                <input type="text" class="form-control" placeholder="10 Months">
              </div>
              <div class="form-group">
                <label class="form-label">Down PaymenT</label>
                <input type="text" class="form-control" placeholder="$21,300">
              </div>
              <div class="form-group mb-0">
                <button type="submit" class="btn btn-color btn-md btn-message btn-block">Cauculate</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection