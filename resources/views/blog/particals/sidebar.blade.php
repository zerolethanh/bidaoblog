<?php
if (!isset($blogs)) {
    $blogs = App\Blog::latest()
            ->simplePaginate();
}
?>

<div class="sidebar-module">

    <ul class="list-unstyled">
        @foreach($blogs as $blog)
            <li>
               {{ $blog->id }} .  <a href="{{$blog->link}}">{{ $blog->title }} </a>
            </li>
        @endforeach
    </ul>

    <div class="text-center">
        {{ $blogs->appends(['id' => request('id')])->links() }}
    </div>
</div>
