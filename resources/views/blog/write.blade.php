@extends('blog.page')

@push('stylesheets')
<link rel="stylesheet" href="{{url('/blog/prism.css') }}">
<!-- Loading Flat UI -->
<link href="{{ url('blog/flatUI/css/flat-ui.css') }}" rel="stylesheet">

@endpush

@push('scripts')
<script src="{{url('/blog/prism.js') }}" data-manual></script>
<script src="{{url('/blog/vue.min.js') }}"></script>
<script src="{{ url('blog/ace/min/ace.js') }}"></script>
<script src="{{ url('blog/ace/min/mode-php.js') }}"></script>
<script src="{{ url('blog/flatUI/js/flat-ui.min.js') }}"></script>
@endpush
@section('head')
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
@endsection

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-sm-8" style="padding-top: 10px">

                @include('blog.particals.write_form')

                {{--<div>--}}
                {{--<pre><code class="language-css" id="code">p { color: red }</code></pre>--}}
                {{--</div>--}}

                <div class="row" id="coder_control">
                    <label for="coder_lang_select" class="control-label col-sm-2">Language</label>
                    <div class="col-sm-3">
                        <select class="form-control" id="coder_lang_select">
                            <option>javascript</option>
                            <option selected>php</option>
                            <option>swift</option>
                            <option>css</option>
                            <option>sql</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div id="editor"></div>
                </div>

            </div>

            <div class="col-sm-4">
                @include('blog.particals.bloglist')

            </div>

        </div>


    </div>

    {{--@include('commons.disqus')--}}
@endsection


@section('vue')
    <script>
        $('#show_hide_coder_button').click(function () {
            var e = $("#editor");
            var coder_control = $('#coder_control');
            if (e.is(":visible")) {
                e.hide();
                coder_control.hide();
            } else {
                e.show();
                coder_control.show();
            }

//            var words = $('#words').val();
//            $('#code').html(words);
//            Prism.highlightAll();
        });
        $('#coder_lang_select').change(function (e) {
            var lang = $('#coder_lang_select :selected').text();
            editor.getSession().setMode("ace/mode/" + lang);
        });
        //        Prism.highlightAll();

        var editor = ace.edit("editor");
        //        editor.setTheme("ace/theme/twilight");
        //        editor.getSession().setMode("ace/mode/javascript");

    </script>
@endsection
