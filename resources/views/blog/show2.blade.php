@extends('blog.page')
{{--@include('blog.particals.flatUI')--}}
@push('stylesheets')
<link href=" {{url("blog/prism.css")}} " rel="stylesheet"/>
@endpush
@push('scripts')
<script src="{{url("blog/prism.js") }}"></script>
@endpush

@section('content')

    <div class="container" id="content">

        <div class="row">
            <div class="col-sm-9 blog-main" id="blog-main">
                @include('blog.particals.header')
                @include('blog.particals.post4only1')
            </div>

            <div class="col-sm-3 blog-sidebar" id="blog-sidebar">
                @include('blog.particals.sidebar')
            </div>
        </div>
        {{--        @include('commons.disqus')--}}
    </div>
@endsection

@push('end-scripts')
<script>
    document.title = "{{ $blog->title }}"
</script>
@endpush