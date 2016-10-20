<?php
if (!isset($blogs)) {
    $blogs = App\Blog::latest()
            ->simplePaginate();
}
?>

<div class="sidebar-module" id="sidebar-module">

    {{--<ul class="list-unstyled">--}}
    <table class="table">
        <thead>
        <tr>
            <th>Posts</th>
        </tr>
        </thead>
        <tbody>
        @foreach($blogs as $blog)
            <tr>
                <td><a href="{{$blog->link}}" onclick="show_post()">{{ $blog->title }} </a></td>
            </tr>
        </tbody>
        @endforeach
        {{--</ul>--}}
    </table>
    <div class="text-center">
        {{ $blogs->appends(['id' => request('id')])->links() }}
    </div>
</div>

@push('end-scripts')
<script>
    function show_post() {
        if (!location.pathname.match('/blogs')) {
            event.preventDefault();
            $.get(event.target.href).success(
                    function (res) {
//                        console.log(res);
                        $('#blog-title').html(res.title);
                        $('#blog-post-body').html(res.body);
                        $('html,body').animate({
                            scrollTop: 0
                        }, 100);
                    })
        }

    }

</script>
@endpush
