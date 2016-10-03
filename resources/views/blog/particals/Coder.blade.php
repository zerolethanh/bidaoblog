{{-- ace --}}
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

@push('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.5/ace.js"></script>
@endpush

@push('end-scripts')
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

    var editor = ace.edit("editor");
    editor.getSession().setMode("ace/mode/php");


    $('#coder_lang_select').change(function (e) {
        var lang = $('#coder_lang_select :selected').text();
        editor.getSession().setMode("ace/mode/" + lang);
    });
    //        Prism.highlightAll();


</script>
@endpush
