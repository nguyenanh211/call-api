<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit County</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        #container{
            margin: 20px 100px;
        }
        #county {
            width : 400px;
        }
    </style>
</head>
<body>

<div id="container">
	<h1>Edit County!</h1>

	<form id="county" action="<?php echo base_url(); ?>index.php/edit/submit/<?php echo $county->id; ?>" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" value ="<?php echo $county->name;?>">
      </div>
      <div class="form-group">
        <label for="type">Type:</label>
        <input type="text" class="form-control" name="type" value = "<?php echo $county->type;?>">
      </div>
       <div class="form-group">
        <label for="code">Code:</label>
        <input type="text" class="form-control" name="code" value= "<?php echo $county->code;?>">
      </div>
      <div class="form-group">
         <input type="submit" name="ok" value="Edit County" class="btn btn-info" />
      </div>
	</form>
</div>

</body>
</html>
