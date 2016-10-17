@extends('blog.page')
{{--@include('blog.particals.flatUI')--}}
@push('stylesheets')
<link href=" {{url("blog/prism.css")}} " rel="stylesheet"/>
@endpush
@push('scripts')
<script src="{{url("blog/prism.js") }}"></script>
@endpush

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-sm-9 blog-main">
                @include('blog.particals.header')
                @include('blog.particals.post4only1')
            </div>

            <div class="col-sm-3 blog-sidebar">
                @include('blog.particals.sidebar')
            </div>
        </div>
        @include('commons.disqus')
    </div>
@endsection
