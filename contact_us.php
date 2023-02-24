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
  <style>
  .white{color:white;
  font-weight: bolder;
  }
  .headerColor{color: rgb(255,6,4);}
  </style>
</head>

<body>
<?php $active ='contact';
include 'head.php'; ?>
<?php
if(isset($_POST["send"])){
  $name=$_POST['fullname'];
$number=$_POST['contactno'];
$email=$_POST['email'];
$message=$_POST['message'];
$conn=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
$sql= "insert into contact_query (query_name,query_mail,query_number,query_message) values('{$name}','{$email}','{$number}','{$message}')";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");
  echo '<div class="alert alert-success alert_dismissible"><b><button type="button" class="close" data-dismiss="alert">&times;</button></b><b>Query Sent, We will contact you shortly. </b></div>';
}?>

<div id="page-container" style="position: relative;min-height: 88vh; background-image:url('./image/Nile3.webp'); background-repeat: no-repeat;background-size:cover; background-position:center;">
  <div class="container" style="background-color:rgba(0,0,0,0.25)">
  <div id="content-wrap" style="padding-bottom:50px;">
    <h1 class="mt-4 mb-3 white">Contact</h1>
    <div class="row">
      <div class="col-lg-8 mb-4">
        <h3 class="white">Send us a Message</h3>
        <form name="sentMessage"  method="post">
            <div class="control-group form-group">
                <div class="controls">
                    <label class="white">Full Name:</label>
                    <input type="text" class="form-control " id="name" name="fullname" required>
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label class="white">Phone Number:</label>
                    <input type="tel" class="form-control" id="phone" name="contactno"  required >
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label class="white">Email Address:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label class="white">Message:</label>
                    <textarea rows="10" cols="100" class="form-control" id="message" name="message" required  maxlength="999" style="resize:none"></textarea>
                </div>
            </div>
            <button type="submit" name="send"  class="btn btn-primary" style="background-color:rgb(255,6,4); border-color:rgb(255,6,4);">Send Message</button>
        </form>
    </div>
    <div class="col-lg-4 mb-4">
        <h2 class="white">Contact Details</h2>
        <?php
          include 'conn.php';
          $sql= "select * from contact_info";
          $result=mysqli_query($conn,$sql);
          if(mysqli_num_rows($result)>0)   {
              while($row = mysqli_fetch_assoc($result)) { ?>
        <br>
        <p>
            <h4 class="white">Address :</h4><?php echo $row['contact_address']; ?>
        </p>
        <p>
            <h4 class="white">Contact Number :</h4><?php echo $row['contact_phone']; ?>
        </p>
        <p>
          <h4 class="white">  Email: </h4><a href="#"><?php echo $row['contact_mail']; ?></a>
          </a></b>
        </p>
        <?php }
      } ?>
    </div>
</div>
<!-- /.row -->


</div>
</div>
<?php include 'footer.php' ?>
</div>
</body>

</html>
