<html lang="en">

<head>
    <!--
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        </meta> -->
    <title>
        Admin Adict
    </title>

    <!-- Bootstrap Core CSS -->

    <!-- Custom CSS -->
    <!-- <link href="css/one-page-wonder.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-default">
<div class="container">
            <!-- Remove This Before You Start -->
            <h1>Login Admin</h1>
            <hr>
            @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
            <form action="{{ url('/loginPost') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="user">User:</label>
                    <input type="user" class="form-control" id="user" name="user" placeholder="Input User">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Input Password"></input>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary" style="width:100%">Login</button>
                </div>
            </form>
        <!-- /.content -->
</div>
</nav>
<div class="clearfix"></div>

<nav class="navbar navbar-default" style="bottom: 0;margin: 0">
    <div class="container">
        <center>

            <ul class="nav navbar-nav">
                <li><a href="https://www.linkedin.com/in/bagus-bayu-kencana-7b8a8411a/">Copyright @ 2017 Adict Business Center. All rights reserved.</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://www.linkedin.com/in/bagus-bayu-kencana-7b8a8411a/">Develop by Adict Business Center</a></li>
            </ul>
        </center>
    </div>
</nav>
</body>
</html>