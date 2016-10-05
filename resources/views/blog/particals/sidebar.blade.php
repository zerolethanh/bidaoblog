<?php
if (!isset($blogs)) {
    $blogs = App\Blog::latest()
            ->simplePaginate();
}
?>

<div class="sidebar-module">

    <ol>
        @foreach($blogs as $blog)
            <li>
                <a href="{{$blog->link}}">{{$blog->title}}</a>
            </li>
        @endforeach
    </ol>

    <div class="text-center">
        {{ $blogs->appends(['id' => request('id')])->links() }}
    </div>
</div>
