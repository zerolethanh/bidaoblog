<div class="blog-post">

    <p class="blog-post-meta"> {{ $blog->created_at }}</p>

    <div>
        {!! nl2br($blog->body) !!}
    </div>
</div>