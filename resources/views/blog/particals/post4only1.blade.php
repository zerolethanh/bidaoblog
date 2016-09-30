<div class="blog-post">
{{--    <h1 class="blog-post-title"> {{ $blog->title }}</h1>--}}
    <p class="blog-post-meta"> {{ $blog->created_at }}</p>
    <div>
        <!--        --><?php
        //        $body = htmlspecialchars(nl2br($blog->body), ENT_QUOTES);
        //        $body = str_replace('&lt;br /&gt;', '<br />', $body);
        //        echo $body;
        //        ?>

        {!! nl2br($blog->body) !!}
    </div>
</div>