@extends('layouts.admin')

@section('title')
<title>Admin</title>
@endsection

@section('content')
<div class="content-wrapper">

  @include('partials.content-header', ['name' => 'Properties', 'key' => 'Home'])

  <div class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tên bất động sản</th>
                <th scope="col">Giá</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
              @foreach($properties as $property)
              <tr>
                <th scope="row"></th>
                <td>{{$property->title}}</td>
                <td>{{$property->price}}</td>
                
                <td>
                <a href="{{route('properties.detail',['id'=>$property->id])}}" class="btn btn-success">Xem chi tiết</a>
                  <a href="{{route('properties.edit',['id'=>$property->id])}}" class="btn btn-default">Edit</a>


                  <a href="{{route('properties.delete',['id'=>$property->id])}}" class="btn btn-danger">Delete</a>

                </td>

              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
        <div class="col-md-12">
        {{$properties->links()}}
        </div>
      </div>

    </div>
  </div>

</div>



<aside class="control-sidebar control-sidebar-dark">

  <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
  </div>
</aside>
@endsection