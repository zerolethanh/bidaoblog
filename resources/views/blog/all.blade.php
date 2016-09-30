@extends('blog.page')

@section('content')

    <div class="container">

        @include('blog.particals.headerForAll')

        <div class="row">

            <div class="col-sm-8 blog-main">
                @each('blog.particals.post',$blogs,'blog')
            </div>

            <div class="col-sm-4 blog-sidebar">
                @include('blog.particals.sidebar')
            </div>
        </div>

        <nav>
            <ul class="pager">
                {{--{{ dd($blogs) }}--}}
                <li style="{{$blogs->currentPage() == 1 ? 'display: none' : '' }}">
                    <a href="{{ $blogs->previousPageUrl() }}">Previous</a>
                </li>

                <li style="{{$blogs->hasMorePages() ? '' : 'display: none'}}">
                    <a href=" {{ $blogs->nextPageUrl() }}">Next</a>
                </li>
            </ul>
        </nav>
        {{--{{ dd() }}--}}
        {{--        @include('commons.disqus')--}}

    <!-- Footer -->
        {{--@include('blog.particals.footer')--}}

    </div>


@endsection
