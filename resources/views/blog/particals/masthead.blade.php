<?php
function requestIs($uri)
{
    return request()->is($uri) ? ' active' : '';
}

?>

<nav class="navbar navbar-default navbar-static-top blog-masthead blog-nav">
    <div class="navbar-header">
        <button class="navbar-toggler pull-left" type="button" aria-expanded="false" id="menu-toggle">
            ☰
        </button>

        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Branding Image -->
    </div>
    <div class="container">

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            {{--<ul class="nav navbar-nav">--}}
                {{--<li><a class="blog-nav-item {{ requestIs('blogs') }}" href="{{url('blogs')}}">Blogs</a></li>--}}
                {{--<li><a class="blog-nav-item {{ requestIs('blog/write') }}" href="{{ url('blog/write') }}">Write</a></li>--}}
                {{--<li><a class="blog-nav-item {{ requestIs('password-gen') }}" href="{{ url('password-gen') }}">Password-Gen</a>--}}
                {{--</li>--}}
            {{--</ul>--}}

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">

                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu" id="user_menu">
                            <li>
                                <a href="/user/setting">
                                    Setting
                                </a>
                                <a href="{{ url('/logout') }}" style="color: red"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>


        </div>
    </div>
</nav>

{{--<div class="blog-masthead">--}}
{{--<div class="container">--}}
{{--<nav class="blog-nav ">--}}
{{--<a class="blog-nav-item {{ requestIs('home') }}" href="{{ url('home') }}">Home</a>--}}
{{--<a class="blog-nav-item {{ requestIs('blogs') }}" href="{{url('blogs')}}">Blogs</a>--}}
{{--<a class="blog-nav-item {{ requestIs('blog/write') }}" href="{{ url('blog/write') }}">Write</a>--}}
{{--<a class="blog-nav-item {{ requestIs('password-gen') }}" href="{{ url('password-gen') }}">Password-Gen</a>--}}
{{--<a class="blog-nav-item login-button" href="/login">Login</a>--}}
{{--<a class="blog-nav-item register-button" href="/register">Register</a>--}}

{{--<a class="blog-nav-item {{ requestIs('vn') }}" href="{{url('vn')}}">VietNam</a>--}}
{{--<a class="blog-nav-item {{ requestIs('jp') }}" href="{{url('jp')}}">Japan</a>--}}
{{--<a class="blog-nav-item {{ requestIs('about') }}" href="{{ url('about') }}">About</a>--}}
{{--</nav>--}}
{{--</div>--}}
{{--</div>--}}