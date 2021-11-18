    <!DOCTYPE html>
    <html lang="en">
    
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Web Learn </title>
      <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
      <link rel="stylesheet" href="{{asset('vendors/simple-line-icons/css/simple-line-icons.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
      <link rel="stylesheet" href="{{asset('js/select.dataTables.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/style1.css')}}">
    </head>
    <body>
      <div class="container-scroller"> 
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
            <div class="me-3">
              <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                <span class="icon-menu"></span>
              </button>
            </div>
            <div>
              <a class="navbar-brand brand-logo" href="index.html">
                <img src="{{asset('images/logo-laravel2.png')}}" style="width: 600px; height: 50px; image-resolution: 100%;" alt="logo" />
              </a>
              <a class="navbar-brand brand-logo-mini " href="index.html">
                <img src="{{asset('images/logo-laravel2.png')}}" alt="logo" />
              </a>
            </div>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-top"> 
            <ul class="navbar-nav">
              <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                <h1 class="welcome-text">Welcome to my site, <span class="text-black fw-bold">{{(Auth::check()) ? Auth::user()->name : ''}}</span></h1>
                <h3 class="welcome-sub-text">  </h3>
              </li>
            </ul>
            @auth
              <ul class="navbar-nav ms-auto">
                <li class="nav-item  d-lg-block ">
                  <a class="nav-link" id="UserDropdown" href="{{url('user')}}" aria-expanded="false">
                    <img class="img-xs rounded-circle" src="{{asset(Auth::user()->image)}}" alt="Profile_image">
                  </a>
                </li>
              </ul>
            @endauth
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>

        
 <div class="container-fluid page-body-wrapper">
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item active">
        <a class="nav-link " href="{{url('/')}}">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      @foreach ($categories as $category )
        @if($category->parent_id==0)
      <li class="nav-item nav-category">{{$category->name}}</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui_basic_{{$category->id}}" aria-expanded="false" aria-controls="ui-basic">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">{{$category->name}}</span>
          <i class="menu-arrow"></i> 
        </a>
        <div class="collapse" id="ui_basic_{{$category->id}}">
          <ul class="nav flex-column sub-menu">

          @foreach ($category->children as $child)
      
          <li class="nav-item"> <a class="nav-link filter" href="{{\Request::fullUrlWithQuery(['category'=>$child->name])}}" >{{$child->name}}</a></li>
         
          @endforeach
          </ul>
        </div>
      </li>
      @endif
      @endforeach

      <li class="nav-item p-2"><a type="button" href="{{url('/')}}" class="btn btn-warning">Remove Filter</a></li>

      <form method="GET" action="{{url('/')}}" id="filter">
               <input type="hidden" value="{{isset($searchedCategory) && $searchedCategory ? $searchedCategory->name :null}}" name="category">
        <li class="nav-item p-2"><div class="input-group mb-3">
          <label class="container">
            <input type="checkbox" {{\Request::get('picture') && \Request::get('picture')=='on' ? 'checked' :null}}   name="picture" onchange="document.getElementById('filter').submit()">
            <span class="location">Only Picture</span>
          </label>
        </li>
      </form>


    </ul>

  </nav>
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="home-tab">
            <div class="d-sm-flex align-items-center justify-content-between border-bottom">
              <div>
                @if (Route::has('login'))
                <div class="btn-wrapper">
                  @auth
                  <a href="{{ route('logout') }}" class="btn btn-otline-dark" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                    Sign Out
                </a>
                  <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                  @else
                  <a href="{{ route('login') }}" class="btn btn-otline-dark align-items-center"><i class="fas fa-sign-in-alt"></i> Sign in</a>

                  @if (Route::has('register'))

                  <a href="{{ route('register') }}" class="btn btn-primary text-white me-0"><i class="far fa-registered"></i> Register</a>
                  @endif
                  @endauth
                </div>
                @endif
              </div>
            </div>
            </div>


