<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BiDaoBlog') }}</title>

    <!-- Styles -->
{{--<link href="/css/app.css" rel="stylesheet">--}}

<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <style>
        body {
            padding-top: 70px;
        }
    </style>

</head>
<body>

{{-- NAV START --}}
<nav class="navbar navbar-default navbar-fixed-top  navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                Bí
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">Mark Otto</a></p>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>

                </li>
            </ul>
            <p class="navbar-text">Signed in as Mark Otto</p>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

{{-- NAV END --}}

<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Data</li>
    </ol>

    <nav aria-label="Page navigation">
        <ul class="pagination pagination-lg">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
        <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
        </ul>
        <ul class="pager">
            <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
            <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
        </ul>
    </nav>
    <h3>Example heading <span class="label label-default">New</span></h3>
    <span class="label label-default">Default</span>
    <span class="label label-primary">Primary</span>
    <span class="label label-success">Success</span>
    <span class="label label-info">Info</span>
    <span class="label label-warning">Warning</span>
    <span class="label label-danger">Danger</span>

    <a href="#">Inbox <span class="badge">42</span></a>

    <button class="btn btn-primary" type="button">
        Messages <span class="badge">4</span>
    </button>
    <ul class="nav nav-pills" role="tablist">
        <li role="presentation" class="active"><a href="#">Home <span class="badge">42</span></a></li>
        <li role="presentation"><a href="#">Profile</a></li>
        <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
    </ul>
    <div class="jumbotron">
        <div class="container">
            <h1>Hello, world!</h1>
            <p>...</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>

    </div>
    <div class="page-header">
        <h1>Example page header
            <small>Subtext for header</small>
        </h1>
    </div>
    <div class="row">
        <div class="col-md-3 col-xs-6"><a href="#" class="thumbnail"> <img alt="100%x180" data-src="holder.js/100%x180"
                                                                           src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMzE5IiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDMxOSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU3NDgxYWYzNmYgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxNnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTc0ODFhZjM2ZiI+PHJlY3Qgd2lkdGg9IjMxOSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMTcuOTg0Mzc1IiB5PSI5Ny4yIj4zMTl4MTgwPC90ZXh0PjwvZz48L2c+PC9zdmc+"
                                                                           data-holder-rendered="true"
                                                                           style="height: 180px; width: 100%; display: block;">
            </a></div>
        <div class="col-md-3 col-xs-6"><a href="#" class="thumbnail"> <img alt="100%x180" data-src="holder.js/100%x180"
                                                                           src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMzE5IiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDMxOSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU3NDgxYjNlZGUgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxNnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTc0ODFiM2VkZSI+PHJlY3Qgd2lkdGg9IjMxOSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMTcuOTg0Mzc1IiB5PSI5Ny4yIj4zMTl4MTgwPC90ZXh0PjwvZz48L2c+PC9zdmc+"
                                                                           data-holder-rendered="true"
                                                                           style="height: 180px; width: 100%; display: block;">
            </a></div>
        <div class="col-md-3 col-xs-6"><a href="#" class="thumbnail"> <img alt="100%x180" data-src="holder.js/100%x180"
                                                                           src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMzE5IiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDMxOSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU3NDgxYjBhZTcgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxNnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTc0ODFiMGFlNyI+PHJlY3Qgd2lkdGg9IjMxOSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMTcuOTg0Mzc1IiB5PSI5Ny4yIj4zMTl4MTgwPC90ZXh0PjwvZz48L2c+PC9zdmc+"
                                                                           data-holder-rendered="true"
                                                                           style="height: 180px; width: 100%; display: block;">
            </a></div>
        <div class="col-md-3 col-xs-6"><a href="#" class="thumbnail"> <img alt="100%x180" data-src="holder.js/100%x180"
                                                                           src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMzE5IiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDMxOSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU3NDgxYjFmOGEgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxNnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTc0ODFiMWY4YSI+PHJlY3Qgd2lkdGg9IjMxOSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMTcuOTg0Mzc1IiB5PSI5Ny4yIj4zMTl4MTgwPC90ZXh0PjwvZz48L2c+PC9zdmc+"
                                                                           data-holder-rendered="true"
                                                                           style="height: 180px; width: 100%; display: block;">
            </a></div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img alt="100%x200" data-src="holder.js/100%x200"
                     src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMzE5IiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDMxOSAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU3NDgxYWZmM2QgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxNnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTc0ODFhZmYzZCI+PHJlY3Qgd2lkdGg9IjMxOSIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMTcuOTg0Mzc1IiB5PSIxMDcuMiI+MzE5eDIwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg=="
                     data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">

                <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                        at
                        eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default"
                                                                                       role="button">Button</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="alert alert-success" role="alert">...</div>
    <div class="alert alert-info" role="alert">...</div>
    <div class="alert alert-warning" role="alert">...</div>
    <div class="alert alert-danger" role="alert">...</div>

    <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
             style="width: 60%;">
            <span class="sr-only">60% Complete</span>
        </div>
    </div>
    <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
             style="width: 60%;">
            60%
        </div>
    </div>
    <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
             style="min-width: 2em;">
            0%
        </div>
    </div>
    <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"
             style="min-width: 2em; width: 2%;">
            2%
        </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
             aria-valuemax="100" style="width: 40%">
            <span class="sr-only">40% Complete (success)</span>
        </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0"
             aria-valuemax="100" style="width: 20%">
            <span class="sr-only">20% Complete</span>
        </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0"
             aria-valuemax="100" style="width: 60%">
            <span class="sr-only">60% Complete (warning)</span>
        </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0"
             aria-valuemax="100" style="width: 80%">
            <span class="sr-only">80% Complete (danger)</span>
        </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40"
             aria-valuemin="0" aria-valuemax="100" style="width: 40%">
            <span class="sr-only">40% Complete (success)</span>
        </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20"
             aria-valuemin="0" aria-valuemax="100" style="width: 20%">
            <span class="sr-only">20% Complete</span>
        </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60"
             aria-valuemin="0" aria-valuemax="100" style="width: 60%">
            <span class="sr-only">60% Complete (warning)</span>
        </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80"
             aria-valuemin="0" aria-valuemax="100" style="width: 80%">
            <span class="sr-only">80% Complete (danger)</span>
        </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0"
             aria-valuemax="100" style="width: 45%">
            <span class="sr-only">45% Complete</span>
        </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-success" style="width: 35%">
            <span class="sr-only">35% Complete (success)</span>
        </div>
        <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 20%">
            <span class="sr-only">20% Complete (warning)</span>
        </div>
        <div class="progress-bar progress-bar-danger" style="width: 10%">
            <span class="sr-only">10% Complete (danger)</span>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#">
                <img class="media-object" src="/images/fun100.png" alt="...">
            </a>
        </div>
        <div class="media-body">
            <h4 class="media-heading">Top aligned media</h4>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras
            purus
            odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
            Donec lacinia congue felis in faucibus.

            Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et
            magnis
            dis parturient montes, nascetur ridiculus mus.
        </div>
    </div>
    <div class="media">
        <div class="media-left media-middle">
            <a href="#">
                <img class="media-object" src="/images/fun100.png" alt="...">
            </a>
        </div>
        <div class="media-body">
            <h4 class="media-heading">Middle aligned media</h4>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras
            purus
            odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
            Donec lacinia congue felis in faucibus.

            Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et
            magnis
            dis parturient montes, nascetur ridiculus mus.
            Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et
            magnis
            dis parturient montes, nascetur ridiculus mus.
            Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et
            magnis
            dis parturient montes, nascetur ridiculus mus.
        </div>
    </div>

    <div class="media">
        <div class="media-left"><a href="#"> <img alt="64x64" class="media-object" data-src="holder.js/64x64"
                                                  src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTc0ODE5ODdmOCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1NzQ4MTk4N2Y4Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4="
                                                  data-holder-rendered="true" style="width: 64px; height: 64px;"> </a>
        </div>
        <div class="media-body"><h4 class="media-heading">Media heading</h4> Cras sit amet nibh libero, in gravida
            nulla.
            Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus
            viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            <div class="media">
                <div class="media-left"><a href="#"> <img alt="64x64" class="media-object" data-src="holder.js/64x64"
                                                          src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTc0ODE5NDU2NCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1NzQ4MTk0NTY0Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4="
                                                          data-holder-rendered="true"
                                                          style="width: 64px; height: 64px;">
                    </a></div>
                <div class="media-body"><h4 class="media-heading">Nested media heading</h4> Cras sit amet nibh libero,
                    in
                    gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in
                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
                    lacinia
                    congue felis in faucibus.
                </div>
            </div>
        </div>
    </div>

    <ul class="media-list">
        <li class="media">
            <div class="media-left"><a href="#"> <img alt="64x64" class="media-object" data-src="holder.js/64x64"
                                                      src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTc0ODE5NGZhNiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1NzQ4MTk0ZmE2Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4="
                                                      data-holder-rendered="true" style="width: 64px; height: 64px;">
                </a>
            </div>
            <div class="media-body"><h4 class="media-heading">Media heading</h4>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                    Cras
                    purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                <div class="media">
                    <div class="media-left"><a href="#"> <img alt="64x64" class="media-object"
                                                              data-src="holder.js/64x64"
                                                              src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTc0ODE5NTg0YSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1NzQ4MTk1ODRhIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4="
                                                              data-holder-rendered="true"
                                                              style="width: 64px; height: 64px;"> </a></div>
                    <div class="media-body"><h4 class="media-heading">Nested media heading</h4> Cras sit amet nibh
                        libero,
                        in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio,
                        vestibulum
                        in vulputate at, tempus viverra turpis.
                        <div class="media">
                            <div class="media-left"><a href="#"> <img alt="64x64" class="media-object"
                                                                      data-src="holder.js/64x64"
                                                                      src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTc0ODE5M2FmNyB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1NzQ4MTkzYWY3Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4="
                                                                      data-holder-rendered="true"
                                                                      style="width: 64px; height: 64px;"> </a></div>
                            <div class="media-body"><h4 class="media-heading">Nested media heading</h4> Cras sit amet
                                nibh
                                libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras
                                purus
                                odio, vestibulum in vulputate at, tempus viverra turpis.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left"><a href="#"> <img alt="64x64" class="media-object"
                                                              data-src="holder.js/64x64"
                                                              src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTc0ODE5Nzc0OSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1NzQ4MTk3NzQ5Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4="
                                                              data-holder-rendered="true"
                                                              style="width: 64px; height: 64px;"> </a></div>
                    <div class="media-body"><h4 class="media-heading">Nested media heading</h4> Cras sit amet nibh
                        libero,
                        in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio,
                        vestibulum
                        in vulputate at, tempus viverra turpis.
                    </div>
                </div>
            </div>
        </li>

    </ul>

    <ul class="list-group">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li>
    </ul>

    <ul class="list-group">
        <li class="list-group-item">
            <span class="badge">14</span>
            Cras justo odio
        </li>
    </ul>
    <div class="list-group">
        <a href="#" class="list-group-item active">
            Cras justo odio
        </a>
        <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
        <a href="#" class="list-group-item">Morbi leo risus</a>
        <a href="#" class="list-group-item">Porta ac consectetur ac</a>
        <a href="#" class="list-group-item">Vestibulum at eros</a>
    </div>

    <div class="list-group">
        <button type="button" class="list-group-item">Cras justo odio</button>
        <button type="button" class="list-group-item">Dapibus ac facilisis in</button>
        <button type="button" class="list-group-item">Morbi leo risus</button>
        <button type="button" class="list-group-item">Porta ac consectetur ac</button>
        <button type="button" class="list-group-item">Vestibulum at eros</button>
    </div>

    <ul class="list-group">
        <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
        <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
        <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
        <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
    </ul>
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-success">Dapibus ac facilisis in</a>
        <a href="#" class="list-group-item list-group-item-info">Cras sit amet nibh libero</a>
        <a href="#" class="list-group-item list-group-item-warning">Porta ac consectetur ac</a>
        <a href="#" class="list-group-item list-group-item-danger">Vestibulum at eros</a>
    </div>

    <div class="list-group">
        <a href="#" class="list-group-item active">
            <h4 class="list-group-item-heading">List group item heading</h4>
            <p class="list-group-item-text">List group item text</p>
        </a>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            Basic panel example
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">Panel heading without title</div>
        <div class="panel-body">
            Panel content
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
            Panel content
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            Panel content
        </div>
        <div class="panel-footer">Panel footer</div>
    </div>

    <div class="panel panel-primary">Panel title</div>
    <div class="panel panel-success">Panel title</div>
    <div class="panel panel-info">Panel title</div>
    <div class="panel panel-warning">Panel title</div>
    <div class="panel panel-danger">Panel title</div>

    <div class="panel panel-default">
        <div class="panel-heading">Panel heading</div>
        <div class="panel-body"><p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean
                lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam
                venenatis
                vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p></div>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="embed-responsive embed-responsive-16by9">
        {{--<iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen=""></iframe>--}}
    </div>
    <div class="well">Look, I'm in a well!</div>
    <div class="well well-lg">Look, I'm in a large well!</div>
    <div class="well well-sm">Look, I'm in a small well!</div>

    <div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">home</div>
            <div role="tabpanel" class="tab-pane" id="profile">profile</div>
            <div role="tabpanel" class="tab-pane" id="messages">messages</div>
            <div role="tabpanel" class="tab-pane" id="settings">settings</div>
        </div>

    </div>
</div>


{{-- content --}}
@yield('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

</body>
</html>
