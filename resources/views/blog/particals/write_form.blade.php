<form id="write_form" style="margin-bottom: 5px" class="form-horizontal" role="form" method="POST"
      action="{{ url('blog/save') }}">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="date" class="col-sm-2 control-label">Date</label>
        <div class="col-sm-3">
            <input type="date" class="form-control" id="date" name="date" value="{{date('Y-m-d')}}">
        </div>
    </div>
    <div class="form-group">
        <label for="title" class="control-label col-md-2">Title</label>

        <div class="col-md-8">
            <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}"
                   required
                   autofocus>
        </div>

    </div>

    <div class="form-group">
        <label for="body" class="control-label col-md-2">Say</label>
        <div class="col-md-8">
            <textarea name="body" id="words" cols="30" rows="10" class="form-control"
                      v-model="words">{{old('body')}}</textarea>
        </div>
    </div>

    <button type="submit" class="btn btn-info col-md-offset-2">SAVE</button>
    {{--<a class="btn btn-danger" id="preview_button" style="margin-left: 10px">Preview</a>--}}

</form>

@push('stylesheets')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
@endpush
@push('scripts')
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
@endpush
@push('end-scripts')
<script>
    var simplemde = new SimpleMDE({
        element: document.getElementById("words"),
        spellChecker: false,
        renderingConfig: {
            codeSyntaxHighlighting: true,
        },
        autosave: {
            enabled: true,
            uniqueId: "{{session('_token')}}",
            delay: 1000,
        },
    });

    $("#write_form").submit(function(ev) {
        ev.preventDefault(); // to stop the form from submitting
        /* Validations go here */
        simplemde.toTextArea();
        simplemde = null;
        this.submit(); // If all the validations succeeded
    });
</script>
@endpush