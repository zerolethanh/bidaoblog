<div class="blog-post">
    <h1 class="blog-post-title"><a href="{{$blog->link}}"> {{ $blog->title }}</a></h1>
    <p class="blog-post-meta"> {{ $blog->created_at }}</p>
    <div class="blog-post-body" id="blog-post-body">
        <?php
        //show first 5 lines in post body
        $body = implode(PHP_EOL, array_slice(explode(PHP_EOL, $blog->body), 0, 5));
        echo markdown($body);
        ?>
    </div>
    <div class="row">
        <a class="btn btn-warning" href="{{$blog->link}}" class="pull-left" style="margin-left: 12px">Read more...</a>
        @can('edit',$blog)
            <a href="{{ url('/blog/edit/'.$blog->id) }}" class="pull-right">Edit</a>
        @endcan
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