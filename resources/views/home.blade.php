@extends('layouts.admin')

@section('title')
<title>Admin</title>
@endsection

@section('content')
<div class="content-wrapper">
  
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('adminlte/dist/img/AdminLTELogo.png')}}" alt=""AdminLTELogo" height="60" width="60">
  </div>
  @include('partials.content-header', ['name' => 'Home', 'key' => 'home'])
   

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        Trang chu
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