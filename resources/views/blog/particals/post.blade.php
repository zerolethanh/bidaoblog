<div class="blog-post">
    <h1 class="blog-post-title"><a href="{{$blog->link}}"> {{ $blog->title }}</a></h1>
    <p class="blog-post-meta"> {{ $blog->created_at }}</p>
    <div class="blog-post-body">
        <?php
        $body = htmlspecialchars(str_limit($blog->body, 150), ENT_NOQUOTES);
        ?>
        @markdown( $body )
    </div>
    <hr>
</div>
{{--@push('end-scripts')--}}
{{--<script>--}}
{{--$('.blog-post-body').each(function () {--}}
{{--$(this).html(marked($(this).html()));--}}
{{--})--}}

{{--</script>--}}
{{--@endpush--}}