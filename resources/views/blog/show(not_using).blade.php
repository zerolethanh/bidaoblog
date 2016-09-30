@extends('blog.page')

@section('content')

    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-md-8">

                <!-- Blog Post -->

                <!-- Title -->
{{--                <h2>{{$blog->title}}</h2>--}}

                <!-- Author -->
                {{--<span class="lead"> by <a href="#">Bi Dao</a></span>--}}
                {{--<span class="glyphicon glyphicon-time pull-right">  {{ $blog->created_at }}</span>--}}
                @include('blog.particals.title')
                <hr>


                <p style="color: green;">
                    <?php
                    $body = htmlspecialchars(nl2br($blog->body), ENT_QUOTES);
                    $body = str_replace('&lt;br /&gt;', '<br />', $body);
                    echo $body;
                    ?>

                </p>
                <hr>

                <!-- Blog Comments -->
                @include('commons.disqus')


            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
                @include('blog.particals.bloglist')
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; BiDaoBlog 2016</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>

@endsection
