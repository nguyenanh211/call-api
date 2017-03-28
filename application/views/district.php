<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        #container{
            margin: 20px;
        }
        #body {
            margin-top : 20px;
        }
    </style>
</head>
<body>

<div id="container">
	<h1>List of County!</h1>
   
	<div id="body">
         <div class="table-responsive">
          <table class="table table-bordered" >
	     <thead>
		   <tr class="success">
             <th>Name</th>
             <th>Type</th>
             <th>County</th>
           </tr>
		 </thead>
		 <tbody>
            <?php 
            foreach ($districts as $key=>$value) { ?>
		     <tr class = <?php echo $class = ($key%2 != 0) ? "active" : "warning";?> >
		     <td><?php echo $value->name ; ?></td>
		     <td><?php echo $value->type; ?></td>
		     <td><?php echo $value->county->name ; ?></td>
			 </tr>
			 <?php } ?>
		 </tbody>
       </table>
       </div>
	</div>
</div>

</body>
</html>
