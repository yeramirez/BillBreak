<footer class="footer">
  <div class="container">
    <ul class="nav navbar-nav navbar-left">
        @if (Auth::guest())
        <li><a href="{{ url('/index') }}">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="{{ url('/signin') }}">Sign In</a></li>
        <li><a href="{{ url('/register') }}">Register</a></li>
        @else
        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
        <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
        @endif
      </ul>
  </div>
</footer>