<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>Laravel Demo</title>
</head>
<body>

    <div class="jumbotron jumbotron-fluid">


        <h1 class="display-3 text-center">LARAVEL DEMO</h1>

        <hr class="my-3">

    </div>

    <nav style="margin-top: -285px; height:60px; padding:15px;" class="navbar-dark bg-primary text-right">

        <button type="button" class="btn btn-outline-warning active">
            HOME
        </button> 

        <a class="btn btn-outline-warning active" href="{{url('/profile')}}">
            PROFILE
        </a> 

        <a class="btn btn-outline-warning active" href="{{url('/about')}}">
            ABOUT
        </a>

    </nav>

</body>
</html>