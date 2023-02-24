
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
 <?php

 include('head.php') ?> 


<div class="row" style="width:100%;height:100%; display:flex; justify-centent: center; align-items: center; margin:auto;">
    <div class="d-flex justify-content-center align-items-center margin-auto" style="width:70%;margin:auto;">
        <h1 class="mt-4 mb-3 d-flex justify-content-center items-items-center">Registration sucessful </h1>
      </div>
</div>
<?php
sleep(7);
header("location: ./home.php");

?>
</body>
</html>
