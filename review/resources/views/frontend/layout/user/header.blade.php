<div id="header">
  <div class="header-top">
    <div class="container">
      <div class="pull-left auto-width-left">
        <ul class="top-menu menu-beta l-inline">
          <li><a href=""><i class="fa fa-home"></i> 90-92 Lê Thị Riêng, Bến Thành, Quận 1</a></li>
          <li><a href=""><i class="fa fa-phone"></i> 0163 296 7751</a></li>
        </ul>
      </div>
      <div class="pull-right auto-width-right">
        <ul class="top-details menu-beta l-inline">
          @if(Auth::check())
          @if(Auth::user()->level == 1)
          <li><a>Chào {{Auth::user()->name}}</a></li>
          <li><a href="{{route('list.Register')}}">admin</a></li>
          <li><a href="{{route('LogoutUser')}}">Logout</a></li>
          @else
          <li><a>Chào {{Auth::user()->name}}</a></li>
          <li><a href="{{route('LogoutUser')}}">Logout</a></li>
          @endif
          @else
          <li><a href="{{route('create.Register')}}">Đăng kí</a></li>
          <li><a href="{{route('Login')}}">Đăng nhập</a></li>
          @endif
        </ul>
      </div>
      <div class="clearfix"></div>
    </div> <!-- .container -->
  </div> <!-- .header-top -->
  <div class="header-body">
    <div class="container beta-relative">
      <div class="pull-left">
        <a href="index.html" id="logo"><img src="assets/dest/images/logo-cake.png" width="200px" alt=""></a>
      </div>
      <div class="pull-right beta-components space-left ov">
        <div class="space10">&nbsp;</div>
        <div class="beta-comp">
          <form role="search" method="get" id="searchform" action="{{route('search')}}">
            <input type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..." />
            <button class="fa fa-search" type="submit" id="searchsubmit"></button>
          </form>
        </div>

        <div class="beta-comp">
          <div class="cart">
            <a href="{{route('show.Favorite')}}" >
              <span class="fa fa-heart text-danger"></span> Yêu Thích
              @if(Auth::check())
              @if(count(auth()->user()->restaurants) > 0)
              {{count(auth()->user()->restaurants)}}
              @endif
              @endif
            </a>
          </div>
        </div>
        <div class="clearfix"></div>
      </div> <!-- .container -->
    </div> <!-- .header-body -->
    <div class="header-bottom" style="background-color: #0277b8;">
      <div class="container">
        <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
        <div class="visible-xs clearfix"></div>
        <nav class="main-menu">
          <ul class="l-inline ov">
            <li><a href="{{route('home')}}">Trang chủ</a></li>
            <li><a href="#">Sản phẩm</a>

              <ul class="sub-menu">
                @foreach($category as $cate)
                <li><a href="{{route('show.List',$cate->id)}}">{{$cate->name}}</a></li>
                @endforeach
              </ul>

            </li>
            <li><a href="about.html">Giới thiệu</a></li>
            <li><a href="contacts.html">Liên hệ</a></li>
          </ul>
          <div class="clearfix"></div>
        </nav>
      </div> <!-- .container -->
    </div> <!-- .header-bottom -->
  </div> <!-- #header -->