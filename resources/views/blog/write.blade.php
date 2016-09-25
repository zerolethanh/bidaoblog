@extends('blog.page')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8" style="background-color: #98cbe8  ">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/blog/save') }}">
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
                        <label for="body" class="control-label col-md-2">Says</label>
                        <div class="col-md-8">
                            <textarea name="body" id="body" cols="30" rows="10" class="form-control"
                                      required>{{old('body')}}</textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary col-md-offset-2">SAVE</button>
                </form>
            </div>
            <div class="col-md-4">
                @include('blog.particals.bloglist')
            </div>

        </div>
    </div>

    {{--@include('commons.disqus')--}}
@endsection

