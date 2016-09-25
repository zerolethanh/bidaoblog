@extends('blog.page')

@section('content')

    <div class="container">

{{--        @include('blog.particals.header')--}}

        <div class="row">

            <div class="col-sm-8 blog-main">

                @each('blog.particals.post',$blogs,'blog')
            </div>

            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                @include('blog.particals.sidebar')
            </div>
        </div>


        {{--        @include('commons.disqus')--}}

    <!-- Footer -->
        {{--@include('blog.particals.footer')--}}

    </div>

@endsection