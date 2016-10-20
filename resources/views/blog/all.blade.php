@extends('blog.page')

{{--@include('blog.particals.flatUI')--}}
@section('content')

    <div class="container" id="content">

        {{--@include('blog.particals.headerForAll')--}}

        <div class="row">

            <div class="col-sm-9 blog-main" id="blog-main">
                @each('blog.particals.post',$blogs,'blog')
                @include('blog.particals.pager')
            </div>

            <div class="col-sm-3 blog-sidebar" id="blog-sidebar">
                @include('blog.particals.sidebar')
            </div>

        </div>

    </div>

@endsection