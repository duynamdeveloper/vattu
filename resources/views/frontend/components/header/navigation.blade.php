<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     {{--  <a class="navbar-brand" href="#">WebSiteName</a> --}}
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Trang chủ</a></li>
        <li><a href="{{ route('fe.article') }}">Giới thiệu</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="{{ route('fe.shop') }}">Sản phẩm <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('fe.shop') }}">Máy hàn</a></li>
            <li><a href="{{ route('fe.shop') }}">Que hàn</a></li>
            <li><a href="{{ route('fe.shop') }}">Dầu nhớt</a></li>
          </ul>
        </li>
        <li><a href="{{ route('fe.blog') }}">Tin tức</a></li>
        <li><a href="{{ route('fe.article') }}">Tư vấn kỹ thuật</a></li>
        <li><a href="{{ route('fe.article') }}">Hướng dẫn mua hàng</a></li>
        <li><a href="{{ route('fe.article') }}">Liên hệ</a></li>
      </ul>
    </div>
  </div>
</nav>
  