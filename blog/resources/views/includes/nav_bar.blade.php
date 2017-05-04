<div class="nav_bar">
    <ul>
        @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @else
        <li class="nav_home"><a href="{{route('home_index')}}">Home</a></li>
        <li class="nav_profile"><a href="{{ route('profile_index', session('profile_name')) }}">Profile</a></li>
        <li class="logout">
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
        <li class="profile right_nav">
            <div class="profile_dropdown_nav">
                <span>
                    <a>Daryl Bernardo</a>
                </span>
                <div class="dropdown-content">
                    <ul>
                        <li>a</li>
                        <li>b</li>
                        <li>c</li>
                    </ul>
                </div>
            </div>
        </li>
        @endif
            {{--<li class="nav_about"><a href="#">About</a></li>--}}
    </ul>
</div>