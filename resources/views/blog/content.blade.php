<div class="container-fluid" id="content">

    <div class="row">

        <div class="col-sm-9 blog-main" id="blog-main">
            @each('blog.particals.post',$blogs,'blog')
            @include('blog.particals.pager')
        </div>

        <div class="col-sm-3 blog-sidebar" id="blog-sidebar">
            @include('blog.particals.sidebar')
        </div>

    </div>

</div>

<div class="container-fluid" id="content">

    <div class="row">
        <div class="col-sm-9 blog-main" id="blog-main">
            @include('blog.particals.header')
            @include('blog.particals.post4only1')
        </div>

        <div class="col-sm-3 blog-sidebar" id="blog-sidebar">
            @include('blog.particals.sidebar')
        </div>
    </div>
    @include('commons.disqus')
</div>