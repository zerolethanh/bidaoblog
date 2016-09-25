<?php
$blogs = App\Blog::latest()
        ->simplePaginate();

?>
<div class="row">
    <ol>
        @foreach($blogs as $blog)
            <li>
                <a href="{{$blog->link}}">
                    {{$blog->title}}
                </a>
            </li>
        @endforeach
    </ol>
</div>
<div class="row">
    <div class="text-center">
        {{ $blogs->appends(['id' => request('id')])->links() }}
    </div>
</div>

{{--<nav>--}}
    {{--<ul class="pager">--}}
        {{--<li><a href="#">Previous</a></li>--}}
        {{--<li><a href="#">Next</a></li>--}}
    {{--</ul>--}}
{{--</nav>--}}