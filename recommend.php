<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php"); 
error_reporting(0);
session_start();

include_once 'product-action.php'; 

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> </head>

<body class="home">
    
        <header id="header" class="header-scroll top-header headrom">
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="./images/client-logo-4.png" alt="" style="width: 58px;"> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Locations <span class="sr-only"></span></a> </li>
                            
                           
							<?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
							}
						else
							{

                    
									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Packages</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}

						?>
							 
                        </ul>
						 
                    </div>
                </div>
            </nav>

        </header>


        <section class="popular">
            <div class="container">
                <div class="title text-xs-center m-b-30">
                    <h2 style='margin-top: 30px;'>Recommend me</h2>
                </div>
                <div class="row">
						                
                     <form action="./recommend.php" method="post">
                    <input name="user_input" type="text" class="form-control" placeholder="What are you looking for?"><br>
                    <input type="submit" name="recommend" value="submit" class="btn btn-lg btn-warning">
                </form>
                <?php
                $result = array();
                        include('connection/connect.php');
                        if(!empty($_POST['recommend']))
                        {
    
                            $name=$_POST['user_input'];
                            $query="SELECT * FROM prediction WHERE place = '$name' ";
                            $result=mysqli_query($db,$query);
                            while($r=mysqli_fetch_array($result)){
                                // echo'<div class="product-name">Destination : '.$r['destination'].'</div>';
                                echo '  <div class="col-xs-12 col-sm-6 col-md-4 food-item">
                                <div class="food-item-wrap">
                                    <div class="figure-wrap bg-image" data-image-src="'.$r['image_url'].'"></div>
                                    <div class="content">
                                        
                                        <div class="product-name">Destination : '.$r['destination'].'</div>
                                         
                                                                                                                                        
                                         </div>                                                                                                                                                                                                                                         
                                    </div>
                                    
                                </div>';      
                                }
                            
                        }
                        ?>

                      
                </div>
               </div>
        </section>


        <footer class="footer">
            <div class="container">
                
          
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 payment-options color-gray">
                            <h5>Payment Options</h5>
                                                                                             
                           </ul>
                                <ul>
                                <li>
                                    <a href="#"> <img src="images/esewa.png" class=" rounded" alt="Esewa" style="width: 37px;> </a>
                                </li>                                                                                      
                                    </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 address color-gray">
                                    <h5>Address</h5>
                                    <p>Balkumari Lalitpur</p>
                                    <h5>Phone: 5532532</a></h5> </div>
                                <div class="col-xs-12 col-sm-5 additional-info color-gray">
                                    <h5>Addition informations</h5>
                                   <p>Join us.</p>
                                </div>
                    </div>
                </div>
          
            </div>
        </footer>


    <script src="js/jquery.min.js"></script>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>                    



                        </body>