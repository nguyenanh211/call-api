<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Call api</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style>
        body {
          background: url("<?php echo base_url();?>/include/img/bg_suburb.jpg") repeat;
        }
        #error {
            color :red;
        }
        </style>
</head>
<body >
<div class="container" style ="margin-top: 90px;">
    <div class="row">
        <div class="col-md-5 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading"> <h3>Login</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" action="<?php echo base_url(); ?>index.php/welcome/login" = method="post">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">User Name:</label>
                            <div class="col-sm-8">
                                <input name="username"  type="texbox" class="form-control" id="inputUsername" placeholder="Username" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label">Password:</label>
                            <div class="col-sm-8">
                                <input name ="password" type="password" class="form-control" id="inputPassword" placeholder="Password" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label id="error" class="col-sm-offset-2 col-sm-8"><?php echo $msg;?></label>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-4 col-sm-6">
                                <input type="submit" name="ok" value="Login" class="btn btn-info" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">Not Registered? <a href="#" class="">Register here</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
