<!DOCTYPE html>
<html>

<head>
    <title>
       Login
    </title>
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" />
    <link href="assets/stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="assets/stylesheets/font-awesome.css" media="all" rel="stylesheet" type="text/css" />
    <link href="assets/stylesheets/se7en-font.css" media="all" rel="stylesheet" type="text/css" />
    <link href="assets/stylesheets/style.css" media="all" rel="stylesheet" type="text/css" />
    <script src="../../../code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="../../../code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>
    <script src="javascripts/bootstrap.min.js" type="text/javascript"></script>
    <script src="javascripts/modernizr.custom.js" type="text/javascript"></script>
    <script src="javascripts/main.js" type="text/javascript"></script>

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
</head>
<body class="login2">
<!-- Login Screen -->
<div class="login-wrapper">
    <a href="#"><img width="200" height="200" src="assets/images/logo.png" /></a>
    <form action="otentikasi.php" method="post">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="icon-envelope"></i></span><input class="form-control" placeholder="Username " type="text" name="username">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="icon-lock"></i></span><input class="form-control" placeholder="Password" type="password" name="password">
            </div>
        </div>


        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Log in">

    </form>

</div>
<!-- End Login Screen -->
</body>

</html>