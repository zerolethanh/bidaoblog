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

{{--@include('blog.particals.flatUI')--}}

@section('content')
  <div class="container-fluid">
    <div class="row">

      <div class="col-sm-12" style="padding-top: 10px">
        @if(auth()->user())
          @include('blog.particals.write_form')
        @else
          <div class="text-center">
            <a href="/login">LOGIN to write somethings</a>
          </div>
        @endif
      </div>
    </div>
  </div>
@endsection

@push('end-scripts')
<script>
  document.title = 'Write';
</script>
@endpush