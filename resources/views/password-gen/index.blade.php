@extends('page')

{{--@include('blog.particals.flatUI')--}}

@section('content')
    <div class="container">
        <div class="row">

                <div class="form-group">
                    <label for="pw" class="col-sm-2 control-label">Password: </label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input id="pw" class="form-control" value="{{$random_pw}}"/>
                            <div class="input-group-btn">
                                <button data-copytarget="pw" class="btn btn-success" onclick="copy()">Copy</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="len" class="col-sm-2 control-label">Password Length: </label>
                    <div class="col-sm-2">
                        <input type="number" class="col-sm-10 form-control " name="len" id="len" value="20">
                    </div>
                </div>
                <br>
                <br>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="l" id="l" checked> abcdefghjkmnpqrstuvwxyz
                    </label>
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="u" id="u" checked> ABCDEFGHJKMNPQRSTUVWXYZ
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="d" id="d" checked> 0123456789
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="s" id="s" checked> !@#$%&*?
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="add_dashes" id="add_dashes"> add dashes
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <button class="btn btn-danger" onclick="query()">Regenerate</button>
                    </label>
                </div>
        </div>

    </div>

@endsection

@push('end-scripts')

<script>
    function query() {
        var text = "?";

        text += "&len=" + document.getElementById("len").value;
        if (document.getElementById("l").checked == true) text += "&l=1";
        if (document.getElementById("u").checked == true) text += "&u=1";
        if (document.getElementById("d").checked == true) text += "&d=1";
        if (document.getElementById("s").checked == true) text += "&s=1";
        if (document.getElementById("add_dashes").checked == true) text += "&add_dashes=1";

        //get json
        text += "&json=1";

        $.get('/password-gen' + text, function (res) {
            console.log(res);
            var pw = res.random_pw;
            $('#pw').val(pw);
            $('#pwlen').val("passwords length: " + pw.length);
        });

    }
    function copy() {

        var resultField = id(event.target.dataset.copytarget);

        try {
            resultField.select();
            document.execCommand('copy');

        } catch (e) {
            console.log(e);
        }

    }
    function id($id) {
        return document.getElementById($id);
    }

</script>

@endpush
