<!DOCTYPE html>
<html>
<head>
    <title>
        Laravel5.1 - @yield('title')
    </title>

    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="/css/all.css" rel="stylesheet" type="text/css">

</head>
<body>


<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Laravel5.1</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li><a href="/auth/login">Login</a></li>
                <li><a href="/auth/register">Register</a></li>

            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>


<div class="container-fluid">

    @yield('content')


</div>

<script src="/js/all.js"></script>

</body>
</html>
