<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>County</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        #container{
            margin: 20px;
        }
        #body {
            margin-top: 60px;
        }
        .messes {
            color: green;
            margin-left: 20px;
            margin-top : 15px;
            float: left;
        }
    </style>
</head>
<body>

<div id="container">
    <div style="font-size:16px;float:right;">Hello <i><?php echo $username;?> </i><b><a href="<?php echo base_url();?>index.php/county/logout" >LogOut</a> </b></div>
	<div style = "text-align:center;"><h1>List of County!</h1></div>
  <div><div style="float:left"><a href="<?php echo base_url();?>index.php/add" class="btn btn-info" role="button">Add County</a></div>
  <div class="messes"><?php  if(isset($mess) && $mess != ''){
            echo $mess;
    }?></div>
  </div>
	<div id="body">
         <div class="table-responsive">
          <table class="table table-bordered" >
	     <thead>
		   <tr class="success">
             <th>Name</th>
             <th>Type</th>
             <th>Code</th>
             <th>Option</th>
           </tr>
		 </thead>
		 <tbody>
            <?php 
            foreach ($counties as $key=>$value) { ?>
		     <tr class = <?php echo $class = ($key%2 != 0) ? "active" : "warning";?> >
		     <td><?php echo $value->name ; ?></td>
		     <td><?php echo $value->type; ?></td>
		     <td><?php echo $value->code ; ?></td>
             <td><a href="<?php echo base_url();?>index.php/edit?id=<?php echo $value->id?>" class="btn btn-info" role="button">Edit</a>
             <a href="<?php echo base_url();?>index.php/delete?id=<?php echo $value->id?>" class="btn btn-info">Delete</a>
             <a href="<?php echo base_url();?>index.php/district?id=<?php echo $value->id?>" class="btn btn-info">List district</a></td>
			 </tr>
			 <?php } ?>
		 </tbody>
       </table>
       </div>
	</div>
</div>

</body>
</html>
