<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>XERO - Real Estate HTML Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <!-- External CSS libraries -->
  <link type="text/css" rel="stylesheet" href="{{asset('web/assets/css/bootstrap.min.css')}}">
  <link type="text/css" rel="stylesheet" href="{{asset('web/assets/css/magnific-popup.css')}}">
  <link type="text/css" rel="stylesheet" href="{{asset('web/assets/css/jquery.selectBox.css')}}">
  <link type="text/css" rel="stylesheet" href="{{asset('web/assets/css/dropzone.css')}}">
  <link type="text/css" rel="stylesheet" href="{{asset('web/assets/css/rangeslider.css')}}">
  <link type="text/css" rel="stylesheet" href="{{asset('web/assets/css/animate.min.css')}}">
  <link type="text/css" rel="stylesheet" href="{{asset('web/assets/css/leaflet.css')}}">
  <link type="text/css" rel="stylesheet" href="{{asset('web/assets/css/slick.css')}}">
  <link type="text/css" rel="stylesheet" href="{{asset('web/assets/css/slick-theme.css')}}">
  <link type="text/css" rel="stylesheet" href="{{asset('web/assets/css/slick-theme.css')}}">
  <link type="text/css" rel="stylesheet" href="{{asset('web/assets/css/map.css')}}">
  <link type="text/css" rel="stylesheet" href="{{asset('web/assets/css/jquery.mCustomScrollbar.css')}}">
  <link type="text/css" rel="stylesheet" href="{{asset('web/assets/fonts/font-awesome/css/font-awesome.min.css')}}">
  <link type="text/css" rel="stylesheet" href="{{asset('web/assets/fonts/flaticon/font/flaticon.css')}}">
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">
  <link type="text/css" rel="stylesheet" href="{{asset('web/assets/css/style.css')}}">
  <link type="text/css" rel="stylesheet" href="{{asset('web/assets/css/skins/default.css')}}">
</head>

<body>
@include('web.components.header')
<div class="sub-banner">
  <div class="container">
    <div class="breadcrumb-area">
      <h1>Submit Property</h1>
      <ul class="breadcrumbs">
        <li><a href="index.html">Home</a></li>
        <li class="active">Submit Property</li>
      </ul>
    </div>
  </div>
</div>
<div class="user-page submit-property content-area-7">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="notification-box mb-50">
          <h4>Don't Have an Account?</h4>
          <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries.But also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing</P>
        </div>

        <div class="search-area contact-2">
          <div class="search-area-inner">
            <div class="search-contents ">
              <form action="{{route('homepage.submitProperty')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <h3 class="heading-3">Basic Information</h3>
                <div class="row mb-30">
                  <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                      <label>Property Title</label>
                      <input type="text" name="title" class="form-control" placeholder="Property Title">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                      <label>Type</label>
                      <select class="selectpicker search-fields" name="category_id">
                        {!! $htmlOption !!}
                      </select>
                      <!-- {!! $htmlOption !!} -->
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                      <label>Price</label>
                      <input type="text" name="price" class="form-control" placeholder="VND">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                      <label>Area/Location</label>
                      <input type="text" name="area" class="form-control" placeholder="SqFt">
                    </div>
                  </div>

                </div>
                <h3 class="heading-3">Property Gallery</h3>
                <div class="form-group">

                  <input type="file" multiple class="form-control-file mb-2 preview_image_detail" name="image_path[]">
                  <div class="row image_detail_wrapper">

                  </div>

                </div>
                <h3 class="heading-3">Location</h3>
                <div class="row mb-30">
                  
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Địa chỉ</label>
                      <input type="text" name="address" class="form-control" placeholder="Địa chỉ">
                    </div>
                  </div>

                </div>
                <h3 class="heading-3">Detailed Information</h3>
                <div class="row mb-30">
                  <div class="col-lg-12">
                    <div class="form-group message">
                      <label>Detailed Information</label>
                      <textarea class="form-control" name="discription" placeholder=""></textarea>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Building Age (optional)</label>
                      <select class="selectpicker search-fields" name="building_age">
                        <option>0-5 Years</option>
                        <option>0-10 Years</option>
                        <option>0-15 Years</option>
                        <option>0-20 Years</option>
                        <option>0-25 Years</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Bedrooms (optional)</label>
                      <select class="selectpicker search-fields" name="number_of_bedrooms">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Bathrooms (optional)</label>
                      <select class="selectpicker search-fields" name="number_of_bathrooms">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Floors (optional)</label>
                      <select class="selectpicker search-fields" name="number_of_floors">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                </div>


                <h3 class="heading-3">Contact Details</h3>
                <div class="row">
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Phone</label>
                      <input type="text" name="phone" class="form-control" placeholder="Phone">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-md btn-color">Submit</button>


                </div>
              </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
@include('web.components.footer')
</body>


</html>