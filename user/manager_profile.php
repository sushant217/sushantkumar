
<?php
require_once("core/sessioncheck.php");

?>
<script type="text/javascript">
function mydetail()
{

<?php

require("config/connection.php");
$qlid=$_SESSION["qlid"];
echo $qlid;
  $sql = "SELECT * from employee where Quick_ID='$qlid'";
  echo $sql;
$result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result)) {
   
    while($row = mysqli_fetch_assoc($result)) 
    {
    $name=$row["E_Name"];
    $address=$row["E_Address"];
    $email=$row["E_Mail"];
    $mname=$row["M_ID"];
    $dept=$row["Dept"];
    $contact=$row["E_Contact"];
    echo $name;
        }
} else {
    echo "0 results";
}
 
?>
}
</script>

<!DOCTYPE html>
<html>
<head>
</head>
<body onload="mydetail()">

<?php
	require_once("core/head.php");
//Script Here
?>


<?php
require_once("core/logo.php");

?>
<div class="page-header col-lg-10 col-lg-offset-1">
         <h1>Edit my Profile</h1>
</div>
              
 <div class="content">
    <div class="col-lg-12">
      <div class="col-md-8 col-md-offset-1 well">
                    
                    <div class="row col-sm-offset-1">   
                    <form method="POST" action="#" class="col-md-8">

<div class="form-group">
<label><h4>Quick Look ID</h4></label>
<input name="qid" id="qid"  value="<?php echo $qlid ?>" readonly="true" class="form-control" type="text" placeholder="" />
</div>

<div class="form-group">
<label><h4>Manager Id</h4></label>        
<input name="mname" id="mname" value="<?php echo $mname ?>" class="form-control" type="text"  />
</div>   

<div class="form-group">
<label><h4>Email_Id</h4></label>  
<input name="email" required id="email" value="<?php echo $email ?>" class="form-control" type="text" placeholder="" />
</div>

<div class="form-group">
<label><h4>Contact No.</h4></label>  
<input name="contact" class="form-control" id="contact" value="<?php echo $contact ?>" type="text" placeholder=""/>
</div>

<div class="form-group">
<label><h4>Address</h4></label>  
<textarea name="address" class="form-control" id="address" type="text" placeholder=""><?php echo $address ?></textarea>
</div>

<div class="form-group">
<input  class="btn btn-primary pull-right" type="submit" value="Update" />
</div>

</div>
</div>
</div>
</div>
              <div class="col-lg-2  my-sidebar affix">
                          <a href="home.php" class="list-group-item active">
                               Home
                          </a>
                          <div class="list-group">
                           <a href="user_profile.php" class="list-group-item ">
                               Edit Profile
                          </a>
  
                
                      <a href="unsheduled.php" class="list-group-item">UnScheduled Cabs
                      </a>
                      <a href="shift.php" class="list-group-item">Shift Change
                      </a>
   
                      <a href="notify.php" class="list-group-item">Notification
                      </a>
                      </div>
                    
                    <!--From Here-->          
            </div>
        </div>
    </div>                    
    <div class="row" style="margin-bottom:205px;"></div>                 
<?php
require_once("footer.php");
?>                    
</body>
</html>    
					
                    

