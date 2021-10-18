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
  <style>
  .ck-editor__editable_inline {
    min-height: 400px;
  }
  </style>
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
              electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
              of
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
                        <label>Tỉnh/Thành phố</label>
                        <select class="selectpicker search-fields" name="province_id" id="province">
                          <option>Chọn tỉnh/thành phố</option>
                          @foreach($province as $province)
                          <option value="{{$province->id}}">{{$province->_name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Quận/Huyện</label>
                        <select class="selectpicker search-fields" name="district_id" id="district">

                        </select>
                      </div>
                    </div>
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
                      <textarea name="discription" id="editor" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-lg-4 col-md-4">
                      <div class="form-group">
                        <label>Hướng nhà (optional)</label>
                        <select class="selectpicker search-fields" name="direction">
                          <option>Không xác định</option>
                          <option>Đông</option>
                          <option>Tây</option>
                          <option>Nam</option>
                          <option>Bắc</option>
                          <option>Đông-Bắc</option>
                          <option>Tây-Bắc</option>
                          <option>Tây-Nam</option>
                          <option>Đông-Nam</option>
                        </select>
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
<script src="{{asset('web/assets/js/jquery-2.2.0.min.js')}}"></script>
<script src="{{asset('web/assets/js/popper.min.js')}}"></script>
<script src="{{asset('web/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('web/assets/js/jquery.selectBox.js')}}"></script>
<script src="{{asset('web/assets/js/rangeslider.js')}}"></script>
<script src="{{asset('web/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('web/assets/js/jquery.filterizr.js')}}"></script>
<script src="{{asset('web/assets/js/wow.min.js')}}"></script>
<script src="{{asset('web/assets/js/backstretch.js')}}"></script>
<script src="{{asset('web/assets/js/jquery.countdown.js')}}"></script>
<script src="{{asset('web/assets/js/jquery.scrollUp.js')}}"></script>
<script src="{{asset('web/assets/js/particles.min.js')}}"></script>
<script src="{{asset('web/assets/js/typed.min.js')}}"></script>
<script src="{{asset('web/assets/js/dropzone.js')}}"></script>
<script src="{{asset('web/assets/js/jquery.mb.YTPlayer.js')}}"></script>
<script src="{{asset('web/assets/js/leaflet.js')}}"></script>
<script src="{{asset('web/assets/js/leaflet-providers.js')}}"></script>
<script src="{{asset('web/assets/js/leaflet.markercluster.js')}}"></script>
<script src="{{asset('web/assets/js/slick.min.js')}}"></script>
<script src="{{asset('web/assets/js/maps.js')}}"></script>
<script src="{{asset('web/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('web/assets/js/ie-emulation-modes-warning.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
<!-- Custom JS Script -->
<script>
$(document).ready(function() {
  $('#province').on('change', function() {
    var province_id = this.value;
    $("#district").html('');
    $.ajax({
      url: "{{route('homepage.getDistrict')}}",
      type: "POST",
      data: {
        province_id: province_id,
        _token: '{{csrf_token()}}'
      },
      dataType: 'json',
      success: function(result) {
        $('#district').html('<option value="">Chọn quận/huyện</option>');
        $.each(result.districts, function(key, value) {
          $("#district").append('<option value="' + value.id + '">' + value._name + '</option>');
        });
      }
    });
  });
});
</script>
<script>
ClassicEditor
  .create(document.querySelector('#editor'))
  .catch(error => {
    console.error(error);
  });
</script>

</html>