<style>
  .sidebar .nav li:hover>a, .sidebar .nav li .dropdown-menu a:hover, .sidebar .nav li .dropdown-menu a:focus, .sidebar .nav li.active>[data-toggle="collapse"] {
    background-color: #9c27b0;
    color: white;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4)
  }

</style>
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Post Get
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="{{ Request::is('admin/dashboard') ? 'nav-item active' : 'nav-item' }} ">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="{{ Request::segment(2) === 'request' ? 'nav-item active' : 'nav-item' }}">
                    <a class="nav-link" href="#navbar-products" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                        <i class="material-icons" aria-hidden="true">person</i>{{ __('Request Line') }}
                    </a>

                    <div class="collapse " id="navbar-products">
                        <ul class="nav nav-sm flex-column">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.request.index') }}">
                                        {{ __('All Request Line') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.request.create') }}">
                                        {{ __('Create Request') }}
                                    </a>
                                </li>
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="">--}}
{{--                                        {{ __('Add Sub Category') }}--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="">--}}
{{--                                        {{ __('Add Product') }}--}}
{{--                                    </a>--}}
{{--                                </li>--}}
                            </ul>
                        </ul>
                    </div>
                </li>
          <li class="nav-item ">
            <a class="nav-link" href="">
              <i class="material-icons">content_paste</i>
              <p>RDM</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">
              <i class="material-icons">library_books</i>
              <p>Requests</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">
              <i class="material-icons">bubble_chart</i>
              <p>Purchases</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
