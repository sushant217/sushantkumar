<?php
//ncr color code:-#57B74B
ob_start();
session_start();
 require_once("config/connection.php");
        if(isset($_REQUEST["submit"]))
          {      
                
                 $qid=$_REQUEST["qid"];
                 $user1=$_REQUEST["user"];
                
              if($user1=='employee')
              {
                $query="select * from employee where Quick_ID='$qid'";
                $result = mysqli_query($connection,$query);
                $rows = mysqli_num_rows($result);

                  if ($rows == 1)
                   {
                	 $row = mysqli_fetch_assoc($result);
                     $_SESSION["qlid"]= $row["Quick_ID"];
                     $_SESSION["ename"]=$row["E_Name"];
                     header("location: user/user_profile.php"); // Redirecting To Other Page
                   } 

                   else
                    {
                    echo "User password is invalid";
                    }
                }
                
              elseif ($user1=='manager') 
              {
                  $query="select * from employee where M_ID='$qid'";
                $result = mysqli_query($connection,$query);
                $rows = mysqli_num_rows($result);

                if ($rows == 1) 
                {
                   $row = mysqli_fetch_assoc($result);
                     $_SESSION["qlid"]= $row["Quick_ID"];
                     $_SESSION["ename"]=$row["E_Name"];
                header("location: user/manager_profile.php");
                   
                 } 
                 else
                    {
                    echo "User password is invalid";
                    }

              } 

              else
              {
              	header("location: pass.php");
              }
        mysqli_close($connection);
    } 
    ?>


<html lang="en">
  <head>
    <title>NCR</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/style.css" rel="stylesheet" media="screen">
        <link href="css/carousel.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

   
    <script>
	$('.carousel').carousel({
  		interval: 4000
	})
    </script>
 </head>
 <body style="background-color: #">

 <div class="navbar navbar-inverse navbar-static-top" >
      <div class="container">
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="img/ncr.PNG"></a>
        </div><!--navbar-header-->
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About-Us</a></li>
                <li><a href="contact.php">Contact-Us</a></li>
                <li><a href="signup.php">Sign up</a></li>
                
                
        </ul>
        </div><!--/.nav-collapse -->
    </div><!--container-->
</div>

<div id="wrap">                
                	
<div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                    <div class="item active">
                    <img src="img/banner.bmp" alt="train">
                    <div class="container">
             
                    <div class="carousel-caption">
                   <!-- <h1>Welcome To NCR Corporation</h1>
                   <p>Serving from 130 Years</p>
               <p><a class="btn btn-lg btn-primary" href="services.php" role="button">Our Services</a></p>
                   --> </div>
                    </div>
                    </div>
                    <div class="item">
                  <img src="img/banner.bmp" alt="train">
                    <div class="container">
                    
                    <div class="carousel-caption">
                    <!--<h1>Register Today For Recieving Services.</h1>
                    <p>We are providing no of services. Sign up today for Booking Ticket.</p>
                    <!--<p><a class="btn btn-lg btn-primary" href="signup.php" role="button">Sign Up</a></p>
                    --></div>
                    </div>
                    </div>
                    <div class="item">
                  <img src="img/banner.bmp" alt="train">
                    <div class="container">
                    <div class="carousel-caption">
                   <!-- <h1>Discover India Through Us</h1>
                    <p>India has some of the most spectacular and unforgettable rail journeys in the world. There's no better way to enjoy India's outback, cities, coastal towns and regional areas in comfort.</p>
                   -->
                    </div>
                    </div>
                    </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- /.carousel -->
<div class="dock" style="background-color: #57B74B">
                    <div class="container">
                   
                     
                    <strong>
                    <marquee><h3 ><font color="white" >Welcome To NCR Corporation.Serving from 130 Years</font></h3>
                   </marquee>
                    </strong>
                    </div>
</div>
    
<div class="content" >
    <div class="col-lg-1" ></div>
            <div class="col-lg-12">
               <div class="col-md-3 my-sidebar affix">
                           
                    <div class="row">    
                      <div class="panel panel-default">
                        <div class="panel-heading">
                                        <h3 class="panel-title">Login</h3>
                        </div>
                        <div class="panel-body">
                    <form  method="post" action="#">
                        <fieldset>
                         
                         <div class="form-group col-lg-12">
                           <div class="radio">
                           <label>
                           <input type="radio" name="user" id="optionsRadios1" value="employee" checked><span class="glyphicon glyphicon-user"></span> Employee</label>
                           </div>

                           <div class="radio">
                           <label>
                           <input type="radio" name="user" id="optionsRadios2" value="manager"><span class="glyphicon glyphicon-user"></span> Manager</label>
                           </div>
                        <div class="radio">
                           <label>
                           <input type="radio" name="user" id="optionsRadios1" value="supervisor" ><span class="glyphicon glyphicon-user"></span> Supervisor</label>
                           </div>

                            <div class="form-group">
                            <input type="text" class="form-control"  name="qid" id="exampleInputEmail" placeholder="Enter Quick Look ID" required/>
                            </div>	
                          
                            
                            <div class="form-group">
                            <p class="help-block">Not Registered <a href="signup.php">Sign-Up Here!</a></p>
                            </div>
                            <div class="checkbox">
                             <label><input type="checkbox">Remember Me</label>
                            </div>
                            <input type="submit" name="submit"  class="btn btn-lg btn-primary btn-block" value="Sign-in"/>
                        </fieldset>
                        </form>
                    </div>
                  </div>
                </div>    
			</div><!--col-md-->
		
	</div>

     </div>
     
 </div><!--wrap-->
 
 
<footer class="footer" style="background-color:#57B74B">
   <div class="content">
      <div class="row">
   		<div class="container" >
  &copy; NCR Corporation, Gurugram Sec 58.<div class='pull-right'>i<font>NCR</font>edible</div>
  </div>
   		</div>
   	</div>
   </div>
  </footer>
  </body>
</html>