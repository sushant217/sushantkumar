
<?php
session_start();
?>
<html>
<head>
<script type="text/javascript">
function cur_date(){
    var day=new Date().getDate();
    var month=new Date().getMonth()+1;
    var year= new Date().getFullYear();
    document.getElementById("date").value= day+"/"+month+"/"+year;
}
</script></head>
<body onLoad="cur_date()">


<?php
	require("core/head.php");
	
?> 

<?php
	require("core/logo.php");
?>       


    
<div class="page-header col-lg-10 col-lg-offset-1">
                    
                     <h1>Shift Change</h1>
   </div>
                    
             <div class="content">
    	<div class="row">
        	<div class="col-lg-offset-1 col-lg-8 well">         
    
               
                      <?php
					
						if(isset($succ))
						{
        				echo "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>&times;</button>$succ</div>";
                 
							$succ="";
						}
						
						if(isset($err))
						{
        				echo "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>&times;</button>$err</div>";
                 
							$err="";
						}
					?>
                     
</div>
<div class="col-lg-2  my-sidebar affix">
  <div class="list-group">
                    <a href="#" class="list-group-item active">
                     Home
                    </a>
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
        <div class="bot" style="margin-bottom:165px;"></div>    
<?php
require_once("footer.php");
?> 
          
              
              	

