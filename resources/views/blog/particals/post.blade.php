<div class="blog-post">
    <h1 class="blog-post-title"><a href="{{$blog->link}}"> {{ $blog->title }}</a></h1>
    <p class="blog-post-meta"> {{ $blog->created_at }}</p>
    <div>
        {{ nl2br(str_limit($blog->body, 150)) }}
    </div>
    <hr>
</div>