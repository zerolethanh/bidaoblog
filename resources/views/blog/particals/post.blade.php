<div class="blog-post">
    <h1 class="blog-post-title"><a href="{{$blog->link}}"> {{ $blog->title }}</a></h1>
    <p class="blog-post-meta"> {{ $blog->created_at }}</p>
    <div class="blog-post-body" id="blog-post-body">
        <?php echo $blog->head_content; ?>
    </div>
    <div class="row">
        <a class="btn btn-warning" href="{{$blog->link}}" style="margin-left: 12px">Read more...</a>
        @include('blog.particals.canEditBlog')
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