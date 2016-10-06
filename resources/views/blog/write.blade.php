@extends('blog.page')

@push('stylesheets')
<style type="text/css" media="screen">
    #editor {
        position: relative;
        height: 300px;
        top: 5px;
        right: 0;
        bottom: 0;
        left: 0;
    }
</style>
@endpush

@include('blog.particals.flatUI')

@section('content')
    <div class="container-fluid">
        <div class="row">
            {{-- sm 8 --}}
            <div class="col-sm-12" style="padding-top: 10px">
                @include('blog.particals.write_form')
                {{--@include('blog.particals.Coder')--}}
            </div>
            {{-- sm 4 --}}
            {{--<div class="col-sm-4">--}}
                {{--@include('blog.particals.bloglist')--}}
            {{--</div>--}}
        </div>
    </div>
@endsection

