<?php
if (!isset($blogs)) {
    $blogs = App\Blog::latest()
            ->simplePaginate();
}
?>

<div class="sidebar-module">

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
                <td><a href="{{$blog->link}}">{{ $blog->title }} </a></td>
            </tr>
        </tbody>
        @endforeach
        {{--</ul>--}}
    </table>
    <div class="text-center">
        {{ $blogs->appends(['id' => request('id')])->links() }}
    </div>
</div>
