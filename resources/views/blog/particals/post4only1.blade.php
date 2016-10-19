<div class="blog-post">

    {{--<p class="blog-post-meta"> {{ $blog->created_at }}</p>--}}

    <div class="blog-post-body" id="blog-post-body">
        <?php
        $body = $blog->body;
        ?>
        @markdown($body)
    </div>
</div>