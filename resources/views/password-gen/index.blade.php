@extends('page')

@include('blog.particals.flatUI')

@section('content')
    <div class="container" style="padding-top:20px">
        <div class="row">

            <div class="col-md-12">
                <div class="form-group">

                    <div class="input-group">
                        <input id="pw" class="form-control" value="{{$random_pw}}"/>
                        <div class="input-group-btn">
                            <button data-copytarget="pw" class="btn btn-success" onclick="copy()">Copy</button>
                        </div>
                    </div>

                    {{--<input class="btn" id="pwlen"--}}
                    {{--value="password length: {{strlen($random_pw)}} "/><br>--}}
                    {{--<button data-copytarget="#pw" class="btn btn-success">Copy</button>--}}
                    {{--<input type="text" id="CopyOk" disabled style="border: none;">--}}
                    <label for="len">Password Length: </label>
                    <input type="number" name="len" id="len" value="20">

                    <br>
                    <input type="checkbox" name="l" id="l" checked> abcdefghjkmnpqrstuvwxyz
                    <br>
                    <input type="checkbox" name="u" id="u" checked> ABCDEFGHJKMNPQRSTUVWXYZ
                    <br>

                    <input type="checkbox" name="d" id="d" checked> 0123456789
                    <br>

                    <input type="checkbox" name="s" id="s" checked> !@#$%&*?
                    <br>

                    <input type="checkbox" name="add_dashes" id="add_dashes"> add dashes

                    <hr>
                    <button class="btn btn-danger" onclick="query()">Regenerate
                    </button>
                </div>
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
//            alert(resultField.value + '\n copied');

        } catch (e) {
            console.log(e);
        }

    }
    function id($id) {
        return document.getElementById($id);
    }

</script>

@endpush
