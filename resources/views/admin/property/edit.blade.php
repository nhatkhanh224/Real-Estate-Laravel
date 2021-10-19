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
            <label>Property Title</label>
            <input type="text" name="title" class="form-control" placeholder="Property Title">
          </div>
          <div class="form-group">
            <label>Type</label>
            <select class="selectpicker search-fields" name="category_id">
              {!! $htmlOption !!}
            </select>
          </div>
          <div class="form-group">
            <label>Price</label>
            <input type="text" name="price" class="form-control" placeholder="VND">
          </div>
          <div class="form-group">
            <label>Area/Location</label>
            <input type="text" name="area" class="form-control" placeholder="SqFt">
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
          </div>

        </div>
      </div>
    </div>
  </div>

</div>

@endsection