<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/') }}">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
viewBox="0 0 47 16.1" style="enable-background:new 0 0 47 16.1;" xml:space="preserve" class="svg-logo">
            <g>
                <defs>
                    <rect id="SVGID_1_" width="47" height="16.1"/>
                </defs>
                <clipPath id="SVGID_2_">
                    <use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
                </clipPath>
                <g class="st10">
                    <line class="st11" x1="10.6" y1="19.8" x2="20.3" y2="-2.4"/>
                    <g>
                        <defs>
                            <rect id="SVGID_3_" x="-6.3" y="-5.3" transform="matrix(0.9174 0.3979 -0.3979 0.9174 1.6445 -1.8387)" width="23.2" height="16.8"/>
                        </defs>
                        <clipPath id="SVGID_4_">
                            <use xlink:href="#SVGID_3_"  style="overflow:visible;"/>
                        </clipPath>
                        <g class="st12">
                            <text transform="matrix(1 -2.592393e-03 2.592393e-03 1 -0.4541 9.2467)" class="st13 st14 st15">Bill</text>
                        </g>
                    </g>
                    <g>
                        <defs>
                            <rect id="SVGID_5_" x="15.8" y="-5.5" transform="matrix(0.9174 0.3979 -0.3979 0.9174 8.1708 -14.4661)" width="46.2" height="35.9"/>
                        </defs>
                        <clipPath id="SVGID_6_">
                            <use xlink:href="#SVGID_5_"  style="overflow:visible;"/>
                        </clipPath>
                        <g class="st16">
                            <text transform="matrix(1 -2.592393e-03 2.592393e-03 1 12.3226 15.603)" class="st13 st14 st15">Break</text>
                        </g>
                    </g>
                </g>
            </g>
          </svg>
      </a>
    </div>
  <ul class="nav navbar-nav navbar-right">
    @if (Auth::guest())
      <li><a href="{{ url('/') }}">Home<span class="sr-only">(current)</span></a></li>
      <li><a href="{{ url('/auth/login') }}">Login</a></li>
      <li><a href="{{ url('/auth/register') }}">Register</a></li>
    @else
      <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
          </ul>
      </li>
    @endif
  </ul>
  </div>
</nav>