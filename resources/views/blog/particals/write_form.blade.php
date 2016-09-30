<form id="write_form" style="margin-bottom: 5px" class="form-horizontal" role="form" method="POST"
      action="{{ url('blog/save') }}">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="date" class="col-md-2 control-label">Date</label>
        <div class="col-md-8">
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
                      v-model="words"
                      required>{{old('body')}}</textarea>
        </div>
    </div>

    <button type="submit" class="btn btn-info col-md-offset-2">SAVE</button>

</form>
<div class="row" style="padding-bottom: 10px">
    <div class="col-md-offset-2">
        <button class="btn btn-danger" id="preview_button" style="margin-left: 10px">Preview</button>
        <button class="btn btn-default" id="show_hide_coder_button" style="margin-left: 10px">show_hide_coder_button
        </button>
    </div>
</div>

