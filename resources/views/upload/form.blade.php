@extends('blog.page')

@section('content')
    <form action="{{ url('/upload') }}" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <img src="{{ $s3url ?? '' }}" alt="">
        <input type="file" name="avatar">
        <input type="submit" value="UPLOAD">
    </form>
    +Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae excepturi iusto mollitia omnis quae sequi ut! Accusamus architecto aspernatur corporis, ipsum iure quas suscipit tempora? Ipsa minima saepe similique voluptatum?
@endsection