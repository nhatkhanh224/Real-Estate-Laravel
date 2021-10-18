@extends('layouts.admin')

@section('title')
<title>Trang chu</title>
@endsection


@section('content')

<div class="content-wrapper">
  @include('partials.content-header', ['name' => 'Property', 'key' => 'Detail'])

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">

          <div class="form-group">
            <label>Tiêu đề:</label>
            <h3>{{$property->title}}</h3>
          </div>
          <div class="form-group">
            <label>Giá:</label>
            <p>{{$property->price}}</p>
          </div>
          <div class="form-group">
            <label>Ảnh :</label>
            <div class="row">
              @foreach($property->productImages as $propertyImageItem)
              <div class="col-md-3">
                <img style="width:200px" src="{{ $propertyImageItem->image_path }}" alt="">
              </div>
              @endforeach
            </div>
            <div class="form-group">
              <label>Mô tả:</label>
              <?php echo $property->discription ?>
            </div>
            <table class="table">
              <thead class="thead-light">
                <tr>

                  <th scope="col">Hướng nhà</th>
                  <th scope="col">Số tầng</th>
                  <th scope="col">Số phòng ngủ</th>
                  <th scope="col">Số phòng vệ sinh</th>
                  <th scope="col">Tuổi căn nhà</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td>{{$conditions->direction}}</td>
                  <td>{{$conditions->number_of_floors}}</td>
                  <td>{{$conditions->number_of_bedrooms}}</td>
                  <td>{{$conditions->number_of_bathrooms}}</td>
                  <td>{{$conditions->building_age}}</td>
                </tr>

              </tbody>
            </table>
            <div class="form-group">
              <label>Địa chỉ: {{$locations->address}}</label>
             
            </div>
            <table class="table">
              <thead class="thead-light">
                <tr>

                  <th scope="col">Tên</th>
                  <th scope="col">Số điện thoại</th>
                  <th scope="col">Email</th>
                  
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td>{{$contacts->name}}</td>
                  <td>{{$contacts->phone}}</td>
                  <td>{{$contacts->email}}</td>
                  
                </tr>

              </tbody>
            </table>
         
            <button class="btn btn-primary">Duyệt</button>
          



          </div>

        </div>
      </div>
    </div>
  </div>

</div>

@endsection