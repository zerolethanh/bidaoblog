<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SH</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">sh.blade</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{ request()->url() }}"
                            {{--onsubmit="event.preventDefault();return run_code(this)"--}}
                    >
                        {{ csrf_field() }}
                        <label for="code">sh code:</label>
                        <textarea name="" id="code" cols="30" rows="10" style="width: 100%;">echo "http://localhost:8090/deposit/input?user_id=${RANDOM}&user_name=TEPCO太郎&access_key=1152&access_date=$(( $(date +%s) + 600))&product_id=1038&balance=500&withdrawal_product_type=point&withdrawal_product_id=1016&signature=-sign-"</textarea>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-6">
                                <button type="submit" class="btn btn-primary"
                                        data-copytarget="code_run_result"
                                        onclick="event.preventDefault();run_code(this);copy();return false;"
                                        style="width:100%;height: 60px;background-color: #2a88bd;color: white"
                                >
                                    RUN!!!
                                </button>
                            </div>
                        </div>
                    </form>
                    <div>
                        <label for="code_run_result">result:</label>
                        {{--<input type="text" id="access_date">--}}
                        <textarea name="" id="code_run_result" cols="30" rows="5" style="width: 100%;"></textarea>
                        <button class="btn btn-primary" onclick="new_tab()"
                                style="width:100%;height: 60px;background-color: green;color: white">
                            NEW TAB
                        </button>
                        <hr>
                        <button class="btn btn-primary"
                                data-copytarget="code_run_result"
                                onclick="copy()"
                                style="width:100%;height: 60px;background-color: yellowgreen;color: white">
                            COPY
                        </button>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    function run_code(form) {
        event.preventDefault();
        var code = document.getElementById('code').value;
        $.post(form.action, {code: code, _token: "{{csrf_token()}}"}, function (res) {
            console.log(res);
            if (res) {
                var result_code = res.join('\n');
                var target = document.getElementById('code_run_result');
                target.innerText = result_code;
                new_tab();
//                document.getElementById('access_date').innerText = new Date()
            }
        })
        return false;
    }
    function copy() {

        var resultField = document.getElementById(event.target.dataset.copytarget);

        try {
            resultField.select();
            document.execCommand('copy');

        } catch (e) {
            console.log(e);
        }

    }
    function new_tab() {
        var url = document.getElementById('code_run_result').value;
        if (url !== '') {
            window.open(url);
        }
    }
</script>
</body>
</html>