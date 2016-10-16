<div class="blog-post">
    <h1 class="blog-post-title"><a href="{{$blog->link}}"> {{ $blog->title }}</a></h1>
    <p class="blog-post-meta"> {{ $blog->created_at }}</p>
    <div class="blog-post-body">
        <?php
        //show first 5 lines in post body
        $body = htmlspecialchars(implode(PHP_EOL, array_slice(explode(PHP_EOL, $blog->body), 0, 5)), ENT_NOQUOTES);
        ?>
        @markdown( $body )
    </div>
    @can('edit',$blog)
        <button class="btn btn-warning" onclick="location.href='{{ url('/blog/edit/'.$blog->id) }}'">Edit</button>
    @endcan
    <hr>
</div>
{{--@push('end-scripts')--}}
{{--<script>--}}
{{--$('.blog-post-body').each(function () {--}}
{{--$(this).html(marked($(this).html()));--}}
{{--})--}}

{{--</script>--}}
{{--@endpush--}}