<?php

function requestIs($uri)
{
    return request()->is($uri) ? ' active' : '';
}

?>
<div class="blog-masthead navbar-fixed-top">
    <div class="container">
        <nav class="blog-nav ">
            {{--<a class="blog-nav-item {{ requestIs('home') }}" href="{{ url('home') }}">Home</a>--}}
            <a class="blog-nav-item {{ requestIs('blogs') }}" href="{{url('blogs')}}">Blogs</a>
            <a class="blog-nav-item {{ requestIs('blog/write') }}" href="{{ url('blog/write') }}">Write</a>
            {{--<a class="blog-nav-item {{ requestIs('vn') }}" href="{{url('vn')}}">VietNam</a>--}}
            {{--<a class="blog-nav-item {{ requestIs('jp') }}" href="{{url('jp')}}">Japan</a>--}}
            {{--<a class="blog-nav-item {{ requestIs('about') }}" href="{{ url('about') }}">About</a>--}}
        </nav>
    </div>
</div>