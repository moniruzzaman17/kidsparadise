@extends('admin.layout.app')
<div class="title">
@section('title', __('Admin / Shuddhoraj'))
</div>
@section('admin_content')
	<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="" class="text-center"><img class="sidebar-img" src="}" alt=""></a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header text-center">
        <div class="user-info">
          <span class="user-name">
            <strong>Admin Name</strong>
          </span>
          <span class="user-role">moon@kidsparaise.com</span>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="">
            <a href="" class="click-without-refresh">
              {{-- <i class="fa fa-tachometer-alt"></i> --}}
              <span>DASHBOARD</span>
              {{-- <span class="badge badge-pill badge-warning">New</span> --}}
            </a>
          </li>
          <li class="sidebar-dropdown">
            <a href="">
              {{-- <i class="fas fa-dollar-sign" aria-hidden="true"></i> --}}
              <span>ORDERS</span>
              <span class="badge badge-pill badge-danger">2</span>
            </a>
            {{-- <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="{{ route('admin.order.grid',array('session_id'=>session()->getId())) }}">Orders
                  </a>
                </li>
                <li>
                  <a href="#">Invoice</a>
                </li>
              </ul>
            </div> --}}
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              {{-- <i class="fas fa-box"></i> --}}
              <span>CATALOG</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="">Products</a>
                </li>
                <li>
                  <a href="#">Categories</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              {{-- <i class="fa fa-user" aria-hidden="true"></i> --}}
              <span>CUSTOMERS</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="">All Customers</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="header-menu">
            <span>System</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              {{-- <i class="fas fa-sliders-h"></i> --}}
              <span>CONFIGURATION</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Config</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              {{-- <i class="fas fa-cog"></i> --}}
              <span>SYSTEM</span>
              {{-- <span class="badge badge-pill badge-primary">Beta</span> --}}
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li class="header-menu">
                  <span>Admin Users</span>
                </li>
                <li>
                  <a href="">All Users</a>
                </li>
                <li class="header-menu">
                  <span>Cash</span>
                </li>
                <li>
                  <a href="#">Cash Management</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fa fa-power-off"></i>
      </a>
      <form id="logout-form" action="" method="POST" class="d-none">
        @csrf
      </form>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="admin page-content">
    <div class="container" style="max-width: 1620px;">
    	{{-- @include('admin.dashboard.dashboard') --}}
      
    	@include('admin.dashboard.dashboard')
    	@yield('content')

    </div>
  <!-- page-content" -->
      <footer class="text-center" style="margin-top: 40px;">
        <div class="mb-2">
          <small>
           {{ __('Copyright') }} © 2019-{{date("Y")}} {{ __('Core Internet Technologies Limited All Rights Reserved.') }}
          </small>
        </div>
      </footer>
  </main>
</div>
<!-- page-wrapper -->
@endsection