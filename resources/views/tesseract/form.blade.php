@extends('blog.page')

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <form action="{{ url('/tesseract/save') }}" enctype="multipart/form-data" method="POST">
            {{ csrf_field() }}
            <img src="{{ $s3url or '' }}" alt="">
            <input type="file" name="image">
            <p></p>
            <input type="submit" class="btn btn-primary" value="UPLOAD">
        </form>
    </div>

    <div class="container">
        <hr>
        <span id="status">Recognize status:</span>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"
                 style="width: 0%">
            </div>
        </div>
    </div>

    <div class="container">
        <hr>
        <span>recognized-text:</span>
        <pre id="recognized-text">You will see recognized-text in this field </pre>
    </div>

@endsection

@push('scripts')
<script src='https://cdn.rawgit.com/naptha/tesseract.js/1.0.10/dist/tesseract.js'></script>
@endpush

@push('end-scripts')
<script>
    var lang = "eng";
    var s3url = "{{ $s3url or '' }}";

    Tesseract.detect(s3url)
            .then(function (result) {
                console.log(result);
                var s = result.script;
                switch (s) {
                    case 'Japanese':
                        lang = "jpn";
                        break;
                    default:
                        break;
                }
                console.log(result.script);

                // START recognize

                Tesseract.recognize(s3url, {lang: lang})
                        .progress(function (p) {
//                console.log('progress', p);
                            var status = p.status;
                            $('#status').html(status);
                            var progress = (p.progress * 100) + "%";
                            $(".progress-bar").css("width", progress).html(progress);
                        })
                        .then(function (result) {
//                console.log('result', result);
                            var html = result.html;
                            $('#recognized-text').html(html);
                        })

            });


</script>
@endpush