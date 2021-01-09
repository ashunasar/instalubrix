<?php date_default_timezone_set("Asia/Calcutta"); ?>
<?php include 'db.php' ?>
<?php include 'pay_pal_integration/config.php' ?>
<?php //session_start()?>
<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/dotenv-loader.php';


require 'vendor/autoload.php';
use Auth0\SDK\Auth0;

$auth0 = new Auth0([
  'domain' => 'dev-qwghfqts.us.auth0.com',
  'client_id' => 'A8gh3o3ADZHBbzcIDkPqH0iRKS4wTcDe',
  'client_secret' => 'l2zEsWcxouAtfGfKcmdk-KNahXatqYekLEaTE63x7VR56DLso_ZbfqWNtBRsZJNr',
  'redirect_uri' => 'https://codeyourbusiness.site/carservice/carmodified/carservise/',
  'scope' => 'openid profile email',
]);
$userInfo = $auth0->getUser();
?>
<!DOCTYPE html>
<html>

<head>
	<title>CarService - Mechanic Auto Shop Template</title>
	<!--meta-->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="keywords" content="Mechanic, Car, Auto" />
	<meta name="description" content="Responsive Mechanic Auto Shop Template" />
	<!--slider revolution-->
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
	<!--style-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style/reset.css">
	<link rel="stylesheet" type="text/css" href="style/superfish.css">
	<link rel="stylesheet" type="text/css" href="style/prettyPhoto.css">
	<link rel="stylesheet" type="text/css" href="style/jquery.qtip.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/animations.css">
	<link rel="stylesheet" type="text/css" href="style/responsive.css">
	<link rel="stylesheet" type="text/css" href="style/odometer-theme-default.css">
	<!--fonts-->
	<link rel="stylesheet" type="text/css" href="fonts/streamline-small/style.css">
	<link rel="stylesheet" type="text/css" href="fonts/template/styles.css">
	<link rel="stylesheet" type="text/css" href="fonts/social/styles.css">
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<!--	css and js for calender-->

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Romanesco' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,500,100,100italic,300,300italic,500italic,700,700italic,900,900italic,400italic' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
<!--Calender-->
<link rel="stylesheet" href="css/clndr.css" type="text/css" />
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

<style>
div.scrollmenu {
  background-color: #333;
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu div {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

div.scrollmenu div:hover {
  background-color: #777;
}
    
    
/*  this style for book appointment element  */
    .booked{
        background: gray;
        color: #c1c1c1;
    }
</style>

<style>
    
div.scrollItems {
/*  background-color: #333;*/
  overflow: scroll;
}

div.scrollItems div {
/*  display: inline-block;*/
/*  color: white;*/
/*  text-align: center;*/
/*  padding: 14px;*/
  text-decoration: none;
}    
    
</style>

<style>
    
    .custom_radio{
    height: 20px;
/*    border-radius: 15px;*/
    width: 20px;
    border: solid;
    }    
</style>
</head>
<body>
	<div id="id01" class="w3-modal" style="z-index: 1000;">
		<div class="w3-modal-content  w3-animate-zoom" style="max-width: 875px;">
			<div class="w3-center">
				<br> <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
				<img src="images/logo-removebg-preview.png" alt="Avatar" style="width:80px;height: 100px" class="w3-margin-top">
			</div>
			<br>
			<br>
			<div class="w3-row">
				<div class="w3-col w3-container m6 w3-center">
					<div class="w3-container w3-black" style="height: 60px;">
						<div style="padding: 15px;font-size: 20px;"><i class="fab fa-apple" aria-hidden="true"></i> Login with Apple Id</div>
					</div>
					<br>
					<div class="w3-container w3-pink" style="height: 60px;">
						<div style="padding: 15px;font-size: 20px;"><i class="fab fa-instagram" aria-hidden="true"></i> Login with Instagram</div>
					</div>
					<br>
					<div class="w3-container w3-blue" style="height: 60px;">
						<div style="padding: 15px;font-size: 20px;"><i class="fab fa-facebook" aria-hidden="true"></i> Login with Facebook</div>
					</div>
					<br>
					<div class="w3-container w3-blue" style="height: 60px;">
						<div style="padding: 15px;font-size: 20px;"><i class="fab fa-google" aria-hidden="true"></i> Login with Google</div>
					</div>
					<br>
					<div class="w3-container w3-light-blue" style="height: 60px;">
						<div style="padding: 15px;font-size: 20px;color: white"><i class="fab fa-twitter" aria-hidden="true"></i> Login with Twitter</div>
					</div>
					<br>
					<div class="w3-container w3-purple" style="height: 60px;">
						<div style="padding: 15px;font-size: 20px;"><i class="fab fa-yahoo" aria-hidden="true"></i> Login with yahoo</div>
					</div>
					<br>
					<div class="w3-container w3-orange" style="height: 60px;">
						<div style="padding: 15px;font-size: 20px;color: white"><i class="fab fa-amazon" aria-hidden="true"></i> Login with Amazon</div>
					</div>
					<br>
					<div class="w3-container w3-blue" style="height: 60px;">
						<div style="padding: 15px;font-size: 20px;"><i class="fab fa-windows" aria-hidden="true"></i> Login with Windowslive</div>
					</div>
					<br>
					<div class="w3-container w3-blue" style="height: 60px;">
						<div style="padding: 15px;font-size: 20px;"><i class="fab fa-linkedin-in" aria-hidden="true"></i> Login with Linkedin</div>
					</div>
					<br>
					<br>
				</div>
				<div class="w3-col w3-container m6">
					<form class="w3-container" action="#" method="post">
						<div class="w3-section">
							<input class="w3-input w3-border w3-margin-bottom w3-round" type="text" placeholder="Name" name="usrname" required>
							<input class="w3-input w3-border w3-margin-bottom w3-round" type="text" placeholder="Email" name="usrname" required>
							<input class="w3-input w3-border w3-round w3-margin-bottom" type="password" placeholder="Password" name="psw" required>
							<input class="w3-input w3-border w3-margin-bottom w3-round" type="text" placeholder="Phone Number" name="usrname" required>
							<button class="w3-button w3-block w3-orange w3-section w3-padding" type="submit" style="color: white!important;">Login</button>
							<!--          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me-->
						</div>
					</form>
				</div>
			</div>
			<!--

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">

        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>

        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>

      </div>

--></div>
	</div>
	
	<div id="id02" class="w3-modal" style="z-index: 1000;">
		<div class="w3-modal-content  w3-animate-zoom" style="max-width: 875px;">
			<div class="w3-center">
				<br> <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
				<b style="font-size: 25px;text-transform:uppercase;">Your Garage Appointment</b>
			</div>
			<br>
			<br>
			<?php
            
//            $userInfo = $auth0->getUser();
//
//            if (!$userInfo) {
//            // We have no user info
//            // See below for how to add a login link
//                echo  "Hello";
//            } else {
//            // User is authenticated
//            // See below for how to display user information
////                 print_r($userInfo);
//                echo  "Hello1";
//            }
            
            
            ?>
			
			
			
			<div class="w3-row">
				<div class="w3-col w3-container m6">
					<form class="w3-container" action="#" method="post">
						<div class="w3-section">
							<select class="w3-select w3-border w3-margin-bottom w3-round" name="option">
                            <option value="" disabled selected>Select Model</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                            </select>
                            <select class="w3-select w3-border w3-margin-bottom w3-round" name="option">
                            <option value="" disabled selected>Select Make</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                            </select>
							<select class="w3-select w3-border w3-margin-bottom w3-round" name="option">
                            <option value="" disabled selected>Select Year</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                            </select>
                            <select class="w3-select w3-border w3-margin-bottom w3-round" name="option">
                            <option value="" disabled selected>Select Trim</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                            </select>
							
<!--							<button class="w3-button w3-block w3-orange w3-section w3-padding" type="submit" style="color: white!important;">Login</button>-->
							<!--          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me-->
						</div>
					</form>
				</div>
				<div class="w3-col w3-container m6">
					<form class="w3-container" action="#" method="post">
						<div class="w3-section">
							<input class="w3-input w3-border w3-margin-bottom w3-round" type="text" placeholder="Street Address" name="usrname" required>
							<input class="w3-input w3-border w3-margin-bottom w3-round" type="text" placeholder="City" name="usrname" required>
							<input class="w3-input w3-border w3-round w3-margin-bottom" type="password" placeholder="State and Zip Code" name="psw" required>
							
							<button class="w3-button w3-block w3-orange w3-section w3-padding" type="submit" style="color: white!important;">Submit</button>
							<!--          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me-->
						</div>
					</form>
				</div>
			</div>
			<!--

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">

        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>

        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>

      </div>

--></div>
	</div>
	
	<?php
    
    if(isset($_GET['code'])){
        
        ?>
        <script>
    $(function(){
        $('#id03').css('display','block');
    });
       </script>
        	<div id="id03" class="w3-modal" style="z-index: 1000;padding-top: 0px;">
		<div class="w3-modal-content  w3-animate-zoom" style="width: 100%;">
		
			<div class="w3-row">
                <div class="w3-col w3-container m2">
                    <div style="height: 100px;background: #e2e6e7;width: 100px;border-radius: 66px;text-align: center;vertical-align: middle;padding: 20px;    margin-top: 10px;float: left;margin-left: 10px;">
                    <?php
                        if($userInfo['picture']){
                            echo '<img src="'.$userInfo['picture'].'" style="border-radius: 30px;">';
                        }else{
                            echo '<i class="fas fa-user-alt" style="font-size: 60px;color: white;"></i>';
                        }
                        ?>
                 
                 </div>
                </div>
			    <div class="w3-col w3-container m6">
			        <div class="w3-center">
				<br> <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">×</span>
				<b style="font-size: 30px;text-transform:uppercase;margin-left: -300px;">Your Garage Appointment</b>
			    </div>
			    </div>
			    <div class="w3-col w3-container m4">
                 <b style="font-weight: bold;text-transform: uppercase;font-size: 25px;">Select Services</b>
                 <br><br>
                <select class="w3-select w3-border w3-margin-bottom w3-round" name="option" id="services">
                <option value="" disabled selected>Select Services</option>
                <option value="19.10" id='Oil Change'>Oil Change</option>
                <option value="10.34" id='Trans Oil Change'>Trans Oil Change</option>
                <option value="11.38" id='Tire repair'>Tire repair</option>
                <option value="23.20" id='Windshield Replacement'>Windshield Replacement</option>
                <option value="23.28" id='Diagnostic Engine Check'>Diagnostic Engine Check</option>
                <option value="19.89" id='Battery Check Test'>Battery Check Test</option>
                <option value="12.10" id='Alternator Check'>Alternator Check</option>
                <option value="9.29" id='Battery Replacement'>Battery Replacement</option>
                <option value="11.22" id='Alternator Replacement'>Alternator Replacement</option>
                <option value="10.12" id='Sensor Replacement'>Sensor Replacement</option>
                <option value="18.23" id='Starter Check'>Starter Check</option>
                <option value="19.60" id='Starter Replacement'>Starter Replacement</option>
                <option value="20.34" id='Wiper Blade Replacement'>Wiper Blade Replacement</option>
                </select>
                <div class="w3-col w3-container m12" id="radio_append">
                    
                </div>

				</div>
			</div>
			<div class="w3-row">
			    <div class="w3-col w3-container m4">
			        <div class="w3-section">
							
						</div>
			    </div>
			    <div class="w3-col w3-container m2">
			    <button class="w3-button w3-red" id="delete_items">Delete</button>
			    
			    </div>
			    <div class="w3-col w3-container m4">
			    <h2 style="font-size: 25px;font-weight: bold;">Invoice</h2>
			    </div>
			</div>
			<br>
			<div class="w3-row">
			    <div class="w3-col w3-container m4">
			        <div class="w3-section" id="display_details_data">
							<div class="w3-row">
							<div class="w3-col w3-container m6">Year</div>
							<div class="w3-col w3-container m6"><?php echo $_SESSION['year'] ?></div>
							</div>
							<br>
							<div class="w3-row">
							<div class="w3-col w3-container m6">Make</div>
							<div class="w3-col w3-container m6"><?php echo $_SESSION['make'] ?></div>
							</div>
							<br>
							<div class="w3-row">
							<div class="w3-col w3-container m6">Model</div>
							<div class="w3-col w3-container m6"><?php echo $_SESSION['model'] ?></div>
							</div>
							<br>
							<div class="w3-row">
							<div class="w3-col w3-container m6">Trim</div>
							<div class="w3-col w3-container m6"><?php echo $_SESSION['trim'] ?></div>
							</div>
							<br>
							<div class="w3-row">
							<div class="w3-col w3-container m6"><b style="font-weight:bold;">
							    <?php 
                            $exp= explode('|',$userInfo['sub']);
                                echo "Login By " . $exp[0];
                                ?>
							</b></div>
							</div>
							<br>
							<div class="w3-row">
                            <div class="w3-col w3-container m6"><b>Address </b> : <?php echo $_SESSION['address'] ?></div>
							</div>
							<br><br>
							<div class="w3-row">
                            <div class="w3-col w3-container m6">
                            <a href="logout.php"><button  class="w3-input w3-border w3-margin-bottom w3-round w3-red" type="button">Logout</button></a>
                            </div>
							</div>
						</div>
			    </div>
			    <div class="w3-col w3-container m5 scrollItems"  id="services_price" style="border: solid 4px;border-radius: 15px;height:200px">
			        
			    </div>
			</div>
			<br>
			<br>

			<br>
			<div class="w3-row">
                <div class="w3-col w3-container m4"></div>
                <div class="w3-col w3-container m1"></div>
                <div class="w3-col w3-container m3"><button  class="w3-input w3-border w3-margin-bottom w3-round w3-blue" type="button" id="open_calender">continue to available calender</button></div>
                <div class="w3-col w3-container m2"><button  class="w3-input w3-border w3-margin-bottom w3-round w3-green" type="button" id="clear_services">edit your services</button></div>
                <div class="w3-col w3-container m2">
                
                
                <button  class="w3-input w3-border w3-margin-bottom w3-round w3-red" type="button" id="open_calender">edit your booking </button>
                </div>
                <div class="w3-col w3-container m2"></div>
			
			
			</div>
			<div class="w3-row">
                <div class="w3-col w3-container m1">
                <div style="background: transparent;white-space: normal;">
                <div><img src="images/mfg_logo.png"></div>
                </div>
				</div>
				<div class="w3-col w3-container m3">
                <div  style="background: transparent;white-space: normal;">
                <div><img src="images/car.png" alt="" style="height: 200px;"></div>
                </div>
				</div>
				<div class="w3-col w3-container m2">
                <b style="font-size: 25px;font-weight: bold;">Mfg. Oil Filter</b>

                <div class="scrollmenu" style="background: red;white-space: normal;">
                <div class="product" data-name="Toyota Oil Filter 1" data-price="19.99"><img src="images/oil_change.png" alt=""><b>Premium Mfg. Brand</b></div>
                </div>
				</div>
				<div class="w3-col w3-container m6">
                <br><br>
                 <b style="font-size: 25px;font-weight: bold;">Oil Filters</b>
                  <div class="scrollmenu" style="height: 120px;">
<div class="product" data-name="Toyota Oil Filter" data-price="19.99" style="height: 100%;"><img src="images/oil_change.png" alt="" style="height: 100%;"></div>
<div class="product" data-name="Toyota Oil Filter" data-price="19.99" style="height: 100%;"><img src="images/oil_change.png" alt="" style="height: 100%;"></div>
<div class="product" data-name="Toyota Oil Filter" data-price="19.99" style="height: 100%;"><img src="images/oil_change.png" alt="" style="height: 100%;"></div>
<div class="product" data-name="Toyota Oil Filter" data-price="19.99" style="height: 100%;"><img src="images/oil_change.png" alt="" style="height: 100%;"></div>
<div class="product" data-name="Toyota Oil Filter" data-price="19.99" style="height: 100%;"><img src="images/oil_change.png" alt="" style="height: 100%;"></div>
<div class="product" data-name="Toyota Oil Filter" data-price="19.99" style="height: 100%;"><img src="images/oil_change.png" alt="" style="height: 100%;"></div>
<div class="product" data-name="Toyota Oil Filter" data-price="19.99" style="height: 100%;"><img src="images/oil_change.png" alt="" style="height: 100%;"></div>
<div class="product" data-name="Toyota Oil Filter" data-price="19.99" style="height: 100%;"><img src="images/oil_change.png" alt="" style="height: 100%;"></div>
<div class="product" data-name="Toyota Oil Filter" data-price="19.99" style="height: 100%;"><img src="images/oil_change.png" alt="" style="height: 100%;"></div>
<div class="product" data-name="Toyota Oil Filter" data-price="19.99" style="height: 100%;"><img src="images/oil_change.png" alt="" style="height: 100%;"></div>
<div class="product" data-name="Toyota Oil Filter" data-price="19.99" style="height: 100%;"><img src="images/oil_change.png" alt="" style="height: 100%;"></div>
</div>
				</div>
			</div>
		</div>
	</div>
        
        
        
        
        <?php 
        
        
    }else{
        ?>
        	<div id="id03" class="w3-modal" style="z-index: 1000;padding-top: 0px;">
		<div class="w3-modal-content  w3-animate-zoom" style="width: 100%;">
		
			<div class="w3-row">
                <div class="w3-col w3-container m2">
                    <div style="height: 100px;background: #e2e6e7;width: 100px;border-radius: 66px;text-align: center;vertical-align: middle;padding: 20px;    margin-top: 10px;float: left;margin-left: 10px;">
                    <?php
                        if($userInfo['picture']){
                            echo '<img src="'.$userInfo['picture'].'">';
                        }else{
                            echo '<i class="fas fa-user-alt" style="font-size: 60px;color: white;"></i>';
                        }
                        ?>
                 
                 </div>
                </div>
			    <div class="w3-col w3-container m6">
			        <div class="w3-center">
				<br> <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">×</span>
				<b style="font-size: 30px;text-transform:uppercase;margin-left: -300px;">Your Garage Appointment</b>
			    </div>
			    </div>
			    <div class="w3-col w3-container m4">
                 <b style="font-weight: bold;text-transform: uppercase;font-size: 25px;">Select Services</b>
                 <br><br>
                <select class="w3-select w3-border w3-margin-bottom w3-round" name="option" id="services">
                <option value="" disabled selected>Select Services</option>
                <option value="19.10" id='Oil Change'>Oil Change</option>
                <option value="10.34" id='Trans Oil Change'>Trans Oil Change</option>
                <option value="11.38" id='Tire repair'>Tire repair</option>
                <option value="23.20" id='Windshield Replacement'>Windshield Replacement</option>
                <option value="23.28" id='Diagnostic Engine Check'>Diagnostic Engine Check</option>
                <option value="19.89" id='Battery Check Test'>Battery Check Test</option>
                <option value="12.10" id='Alternator Check'>Alternator Check</option>
                <option value="9.29" id='Battery Replacement'>Battery Replacement</option>
                <option value="11.22" id='Alternator Replacement'>Alternator Replacement</option>
                <option value="10.12" id='Sensor Replacement'>Sensor Replacement</option>
                <option value="18.23" id='Starter Check'>Starter Check</option>
                <option value="19.60" id='Starter Replacement'>Starter Replacement</option>
                <option value="20.34" id='Wiper Blade Replacement'>Wiper Blade Replacement</option>
                </select>
                <div class="w3-col w3-container m12" id="radio_append">
                    
                </div>

				</div>
			</div>
			<div class="w3-row">
			    <div class="w3-col w3-container m4">
			        <div class="w3-section">
							
						</div>
			    </div>
			    <div class="w3-col w3-container m2">
			    <button class="w3-button w3-red" id="delete_items">Delete</button>
			    
			    </div>
			    <div class="w3-col w3-container m4">
			    <h2 style="font-size: 25px;font-weight: bold;">Invoice</h2>
			    </div>
			</div>
			<br>
			<div class="w3-row">
			    <div class="w3-col w3-container m4">
			        <div class="w3-section" id="display_details_data">
							
						</div>
			    </div>
			    <div class="w3-col w3-container m5 scrollItems"  id="services_price" style="border: solid 4px;border-radius: 15px;height:200px">
			        
			    </div>
			</div>
			<br>
			<br>

			<br>
			<div class="w3-row">
                <div class="w3-col w3-container m4"></div>
                <div class="w3-col w3-container m1"></div>
                <div class="w3-col w3-container m3"><button  class="w3-input w3-border w3-margin-bottom w3-round w3-blue" type="button" id="open_calender">continue to available calender</button></div>
                <div class="w3-col w3-container m2"><button  class="w3-input w3-border w3-margin-bottom w3-round w3-green" type="button" id="clear_services">edit your services</button></div>
                <div class="w3-col w3-container m2">
                
                
                <button  class="w3-input w3-border w3-margin-bottom w3-round w3-red" type="button" id="open_calender">edit your booking </button>
                </div>
                <div class="w3-col w3-container m2"></div>
			
			
			</div>
			<div class="w3-row">
                <div class="w3-col w3-container m1">
                <div style="background: transparent;white-space: normal;">
                <div><img src="images/mfg_logo.png"></div>
                </div>
				</div>
				<div class="w3-col w3-container m3">
                <div  style="background: transparent;white-space: normal;">
                <div><img src="images/car.png" alt="" style="height: 200px;"></div>
                </div>
				</div>
				<div class="w3-col w3-container m2">
                <b style="font-size: 25px;font-weight: bold;">Mfg. Oil Filter</b>

                <div class="scrollmenu" style="background: red;white-space: normal;">
                <div class="product" data-name="Toyota Oil Filter 1" data-price="19.99"><img src="images/oil_change.png" alt=""><b>Premium Mfg. Brand</b></div>
                </div>
				</div>
				<div class="w3-col w3-container m6">
                <br><br>
                 <b style="font-size: 25px;font-weight: bold;">Oil Filters</b>
                  <div class="scrollmenu" style="height: 120px;">
<div class="product" data-name="Toyota Oil Filter" data-price="19.99" style="height: 100%;"><img src="images/oil_change.png" alt="" style="height: 100%;"></div>
<div class="product" data-name="Toyota Oil Filter" data-price="19.99" style="height: 100%;"><img src="images/oil_change.png" alt="" style="height: 100%;"></div>
<div class="product" data-name="Toyota Oil Filter" data-price="19.99" style="height: 100%;"><img src="images/oil_change.png" alt="" style="height: 100%;"></div>
<div class="product" data-name="Toyota Oil Filter" data-price="19.99" style="height: 100%;"><img src="images/oil_change.png" alt="" style="height: 100%;"></div>
<div class="product" data-name="Toyota Oil Filter" data-price="19.99" style="height: 100%;"><img src="images/oil_change.png" alt="" style="height: 100%;"></div>
<div class="product" data-name="Toyota Oil Filter" data-price="19.99" style="height: 100%;"><img src="images/oil_change.png" alt="" style="height: 100%;"></div>
<div class="product" data-name="Toyota Oil Filter" data-price="19.99" style="height: 100%;"><img src="images/oil_change.png" alt="" style="height: 100%;"></div>
<div class="product" data-name="Toyota Oil Filter" data-price="19.99" style="height: 100%;"><img src="images/oil_change.png" alt="" style="height: 100%;"></div>
<div class="product" data-name="Toyota Oil Filter" data-price="19.99" style="height: 100%;"><img src="images/oil_change.png" alt="" style="height: 100%;"></div>
<div class="product" data-name="Toyota Oil Filter" data-price="19.99" style="height: 100%;"><img src="images/oil_change.png" alt="" style="height: 100%;"></div>
<div class="product" data-name="Toyota Oil Filter" data-price="19.99" style="height: 100%;"><img src="images/oil_change.png" alt="" style="height: 100%;"></div>
</div>
				</div>
			</div>
		</div>
	</div>
        <?php
        
    }
    
    
    
    ?>
    
	

	<div id="id04" class="w3-modal" style="z-index: 1000;padding-top: 0px;">
		<div class="w3-modal-content  w3-animate-zoom" style="width: 100%;">
			<div class="w3-center">
				<br> <span onclick="document.getElementById('id04').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">×</span>
				<b style="font-size: 25px;text-transform:uppercase;" >Choose Your Garage Appointment</b>

			</div>
			<br>
			<br>
			<div class="w3-row">
				<div class="w3-col w3-container m8">
                 <h3 id="date11">Today</h3><br><br>
				<div class="w3-col w3-container m8 w3-green" style="text-align: end;"  id="display_sub_total">
				sub total : $0
				</div>
				<div class="w3-col w3-container m8 w3-green" style="text-align: end;">
				taxes : 8.25%
				</div>
				<div class="w3-col w3-container m8 w3-green" style="text-align: end;"  id="display_total">
				total : $0
				</div>
				<br>
				<br>
				<br>
				<span id="choosed_date" style="display:none"><?php echo date('Y-m-d')?></span>
				<br>
				<table border="1" id="data_table">
                <tr>
<!--                      <script>console.log("<?php echo date('Y-m-d')?>")</script>-->
                       <?php  
                    $today = date('Y-m-d');
//                    $today = "2020-09-09";
                    $query = "SELECT `06:30 AM`,`07:15 AM`,`08:00 AM`,`08:45 AM`,`09:30 AM`,`10:15 AM`,`11:00 AM`,`11:45 AM` FROM `shedule` WHERE date=?";
                    $result = $pdo->prepare($query);
                    $result->execute([$today]);

                     foreach($result->fetch() as $date=>$value){
                         if($value == ""){
                             echo '<td class="customer_popup_td" style="font-weight: bold">'.$date.'</td>';
                         }else{
                             echo '<td class="customer_popup_td booked" style="font-weight: bold;">'.$date.'</td>';
                         }
                     }
                    
                    ?>
				        
				        </tr>
				    <tr>
				        
				        
                       <?php  
                    $today = date('Y-m-d');
//                        $today = "2020-09-09";
                    $query = "SELECT `12:30 PM`,`01:15 PM`,`02:00 PM`,`02:45 PM`,`03:30 PM`,`04:15 PM`,`05:00 PM` FROM `shedule` WHERE date=?";
                    $result = $pdo->prepare($query);
                    $result->execute([$today]);

                     foreach($result->fetch() as $date=>$value){
                        if($value == ""){
                             echo '<td class="customer_popup_td" style="font-weight: bold">'.$date.'</td>';
                         }else{
                             echo '<td class="customer_popup_td booked" style="font-weight: bold;">'.$date.'</td>';
                         }
                     }
                    
                    ?>
                    </tr>
                    <tr>
				      <?php  
                    $today = date('Y-m-d');
//                        $today = "2020-09-09";
                    $query = "SELECT `05:45 PM`,`06:30 PM`,`07:15 PM`,`08:00 PM`,`08:45 PM`,`09:30 PM`,`10:15 PM`,`11:00 PM` FROM `shedule` WHERE date=?";
                    $result = $pdo->prepare($query);
                    $result->execute([$today]);

                     foreach($result->fetch() as $date=>$value){
                         if($value == ""){
                             echo '<td class="customer_popup_td" style="font-weight: bold">'.$date.'</td>';
                         }else{
                             echo '<td class="customer_popup_td booked" style="font-weight: bold;">'.$date.'</td>';
                         }
                     }
                    
                    ?>

				    </tr>
				</table>
                   
                   
                   
                    <div class="w3-col w3-container m6">
                        <img src="images/car.png" alt="">
                    </div>
                    <div class="w3-col w3-container m6">
                       <br><br><br>
                        <b style="color: red;text-transform: uppercase;font-weight: bold">Service to be provided at</b>
                        <br><br>
                        <b style="font-size: 40px"><?php if(isset($_SESSION['address'])){
    echo $_SESSION['address'];
} else{echo " ";} ?></b><br>
                        
                        <div class="w3-section">
                            <button class="w3-input w3-border w3-margin-bottom w3-round w3-blue" type="button" id="back_to_garage">Proceed to booking</button>
                        </div>
            <div class="w3-section">
            <form action="<?php echo PAYPAL_URL; ?>" method="post">
            <!-- Identify your business so that you can collect the payments. -->
            <input type="hidden" name="business" value="<?php echo PAYPAL_ID;?>">

            <!-- Specify a Buy Now button. -->
            <input type="hidden" name="cmd" value="_xclick">

            <!-- Specify details about the item that buyers will purchase. -->
            <input type="hidden" name="item_name" value="Instalubrix services">
            <input type="hidden" name="item_number" value="1">
            <input type="hidden" name="amount" value="200.00">
            <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">

            <!-- Specify URLs -->
            <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
            <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">

            <!-- Display the payment button. -->
            <input type="image" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif">
            </form>
            </div>
                    </div>
				</div>	
				<style>
                
                .past{
                background: #777777;
                color: #fbfdf8;
                    }
                </style>
				<div class="w3-col w3-container m4">
					<div class="cal1">
					<div class="clndr">
						<div class="clndr-controls">
							<div class="clndr-control-button">
								<p class="clndr-previous-button">previous</p>
							</div>
							<div class="month">SEPTEMBER 2015</div>
							<div class="clndr-control-button rightalign">
								<p class="clndr-next-button">next</p>
							</div>
						</div>
						<table class="clndr-table">
							<thead>
								<tr class="header-days">
									<td class="header-day">SUN</td>
									<td class="header-day">MON</td>
									<td class="header-day">TUE</td>
									<td class="header-day">WED</td>
									<td class="header-day">THU</td>
									<td class="header-day">FRI</td>
									<td class="header-day">SAT</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="day past adjacent-month last-month calendar-day-2015-04-26"><div class="day-contents">26</div></td>
									<td class="day past adjacent-month last-month calendar-day-2015-04-27"><div class="day-contents">27</div></td>
									<td class="day past adjacent-month last-month calendar-day-2015-04-28"><div class="day-contents">28</div></td>
									<td class="day past adjacent-month last-month calendar-day-2015-04-29"><div class="day-contents">29</div></td>
									<td class="day past adjacent-month last-month calendar-day-2015-04-30"><div class="day-contents">30</div></td>
									<td class="day past calendar-day-2015-05-01"><div class="day-contents">1</div></td>
									<td class="day past calendar-day-2015-05-02"><div class="day-contents">2</div></td>
								</tr>
								<tr>
									<td class="day past calendar-day-2015-05-03"><div class="day-contents">3</div></td>
									<td class="day past calendar-day-2015-05-04"><div class="day-contents">4</div></td>
									<td class="day past calendar-day-2015-05-05"><div class="day-contents">5</div></td>
									<td class="day past calendar-day-2015-05-06"><div class="day-contents">6</div></td>
									<td class="day past calendar-day-2015-05-07"><div class="day-contents">7</div></td>
									<td class="day past calendar-day-2015-05-08"><div class="day-contents">8</div></td>
									<td class="day past calendar-day-2015-05-09"><div class="day-contents">9</div></td>
								</tr>
								<tr>
									<td class="day past event calendar-day-2015-05-10"><div class="day-contents">10</div></td>
									<td class="day past event calendar-day-2015-05-11"><div class="day-contents">11</div></td>
									<td class="day past event calendar-day-2015-05-12"><div class="day-contents">12</div></td>
									<td class="day past event calendar-day-2015-05-13"><div class="day-contents">13</div></td>
									<td class="day today event calendar-day-2015-05-14"><div class="day-contents">14</div></td>
									<td class="day calendar-day-2015-05-15"><div class="day-contents">15</div></td>
									<td class="day calendar-day-2015-05-16"><div class="day-contents">16</div></td>
								</tr>
								<tr>
									<td class="day calendar-day-2015-05-17"><div class="day-contents">17</div></td>
									<td class="day calendar-day-2015-05-18"><div class="day-contents">18</div></td>
									<td class="day calendar-day-2015-05-19"><div class="day-contents">19</div></td>
									<td class="day calendar-day-2015-05-20"><div class="day-contents">20</div></td>
									<td class="day event calendar-day-2015-05-21"><div class="day-contents">21</div></td>
									<td class="day event calendar-day-2015-05-22"><div class="day-contents">22</div></td>
									<td class="day event calendar-day-2015-05-23"><div class="day-contents">23</div></td>
								</tr>
								<tr>
									<td class="day calendar-day-2015-05-24"><div class="day-contents">24</div></td>
									<td class="day calendar-day-2015-05-25"><div class="day-contents">25</div></td>
									<td class="day calendar-day-2015-05-26"><div class="day-contents">26</div></td>
									<td class="day calendar-day-2015-05-27"><div class="day-contents">27</div></td>
									<td class="day calendar-day-2015-05-28"><div class="day-contents">28</div></td>
									<td class="day calendar-day-2015-05-29"><div class="day-contents">29</div></td>
									<td class="day calendar-day-2015-05-30"><div class="day-contents">30</div></td>
								</tr>
								<tr>
									<td class="day calendar-day-2015-05-31"><div class="day-contents">31</div></td>
									<td class="day adjacent-month next-month calendar-day-2015-06-01"><div class="day-contents">1</div></td>
									<td class="day adjacent-month next-month calendar-day-2015-06-02"><div class="day-contents">2</div></td>
									<td class="day adjacent-month next-month calendar-day-2015-06-03"><div class="day-contents">3</div></td>
									<td class="day adjacent-month next-month calendar-day-2015-06-04"><div class="day-contents">4</div></td>
									<td class="day adjacent-month next-month calendar-day-2015-06-05"><div class="day-contents">5</div></td>
									<td class="day adjacent-month next-month calendar-day-2015-06-06"><div class="day-contents">6</div></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
<br><br>
				</div>
			</div>
		</div>
	</div>
	
    <script>
      
//        var sub_total = 0;
        var count_product= 0;
//        var services = [];
//        var price = [];
        $('#services').change(function(){
            count_product= 0
            var optionSelected = $('#services option:selected')[0];
            optionSelected.setAttribute("disabled", "");
            optionSelected.style.background = '#000';
            console.log(optionSelected);
            
            
           var option = $('#services option:selected').text();
           var value = $('#services option:selected').attr('value');
            $('#services').css('display','none');
            $('#radio_append').css('display','block');
            $('#radio_append').html('<input class="w3-radio" type="radio" checked name="Motor Oil" value="Motor Oil"> <label>'+option+'</label><br>');
            
            $('#services_price').append(`<div class="w3-row" style="margin-top:20px;">
            <div class="w3-col w3-container m1"><div class='custom_radio' data-name="${option}"></div></div>
            <div class="w3-col w3-container m6 servicesList">${option}</div>
            <div class="w3-col w3-container m5 priceList">$${value}</div>
            </div>`);
//            services.push(option);
//            price.push(value);
//             total = 0;
//              sub_total = 0;
//            for(var i = 0;i<price.length;i++){
//               
//            sub_total += parseFloat(price[i]);
//            } 
//            sub_total = Math.round((sub_total + Number.EPSILON) * 100) / 100;
//            total = Math.round(((sub_total + (sub_total * (8.25 /100)))  + Number.EPSILON) * 100) / 100;
//            $('#display_sub_total').html('Sub Total : $'+sub_total);
//            $('#display_total').html('Total : $'+ total);
        });

         $('.product').click(function(){
//             console.log(this.getAttribute('data-name'));
            if(count_product <1 ){
               $('#services_price').append(`<div class="w3-row" style="margin-top:20px;">
<div class="w3-col w3-container m1"><div class='custom_radio' data-name='${this.getAttribute('data-name')}'></div></div>
            <div class="w3-col w3-container m6 servicesList">${this.getAttribute('data-name')}</div>
            <div class="w3-col w3-container m5 priceList">$${this.getAttribute('data-price')}</div>
            </div>`);
               }else{
                   alert("You can't select more than 1 product per service");
               }
             count_product = 1;
//             children().length
//             var a = $('#services_price').children().length;
//             console.log(a)
            $('#radio_append').css('display','none');
            $('#services').css('display','block');
             
//             services.push(this.getAttribute('data-name'));
//            price.push(this.getAttribute('data-price'));
//             total = 0;
//             sub_total = 0;
//            for(var i = 0;i<price.length;i++){
//               
//            sub_total += parseFloat(price[i]);
//            } 
//            sub_total = Math.round((sub_total + Number.EPSILON) * 100) / 100;
//            total = Math.round(((sub_total + (sub_total * (8.25 /100)))  + Number.EPSILON) * 100) / 100;
//            $('#display_sub_total').html('Sub Total : $'+sub_total);
//            $('#display_total').html('Total : $'+ total);
         });
    
    </script>

	<script>
    
    $('#clear_services').click(function(){
//                sub_total = 0;
//                count_product= 0;
//                services = [];
//                price = [];
        $('#display_sub_total').html('Sub Total : $0');
            $('#display_total').html('Total : $0');
        $('#services_price').empty();
       $('#services').html(`<option value="" disabled selected>Select Services</option>
                <option value="19.10" id='Oil Change'>Oil Change</option>
                <option value="10.34" id='Trans Oil Change'>Trans Oil Change</option>
                <option value="11.38" id='Tire repair'>Tire repair</option>
                <option value="23.20" id='Windshield Replacement'>Windshield Replacement</option>
                <option value="23.28" id='Diagnostic Engine Check'>Diagnostic Engine Check</option>
                <option value="19.89" id='Battery Check Test'>Battery Check Test</option>
                <option value="12.10" id='Alternator Check'>Alternator Check</option>
                <option value="9.29" id='Battery Replacement'>Battery Replacement</option>
                <option value="11.22" id='Alternator Replacement'>Alternator Replacement</option>
                <option value="10.12" id='Sensor Replacement'>Sensor Replacement</option>
                <option value="18.23" id='Starter Check'>Starter Check</option>
                <option value="19.60" id='Starter Replacement'>Starter Replacement</option>
                <option value="20.34" id='Wiper Blade Replacement'>Wiper Blade Replacement</option>`);
    });
    </script>
    <script>
var deleteList = [];
var optionList = [];
$(document.body).on('click', '.custom_radio' ,function(){
    deleteList.push($(this).parent().parent());
    console.log($(this).parent().parent().children()[1].innerHTML)
    this.style.background='red';

});
        $('#delete_items').click(function(){
            for(var i = 0;i<deleteList.length;i++){
                
                if(document.getElementById(deleteList[i].children()[1].innerHTML)){
                    document.getElementById(deleteList[i].children()[1].innerHTML).removeAttribute("disabled");
                    document.getElementById(deleteList[i].children()[1].innerHTML).removeAttribute("style");
                }
                deleteList[i].remove()
            }
        });
    </script>
	<script>
    
//        $(document.body).on('click', '.custom_radio' ,function(){
//        deleteList.push($(this).parent().parent());
//        console.log($(this).parent().parent().children()[1].innerHTML)
//        this.style.background='red';
//
//        });
    
    </script>
    	    <script>
        $('#open_calender').click(function(){
        $('#id03').css('display','none');
        $('#id04').css('display','block');
            
          var servicesList = $('.servicesList');
          var priceList    = $('.priceList');
            
            
            total = 0;
             sub_total = 0;
            for(var i= 0;i<priceList.length;i++){
               
            sub_total += parseFloat(priceList[i].innerHTML.substr(1));
            } 
            sub_total = Math.round((sub_total + Number.EPSILON) * 100) / 100;
            total = Math.round(((sub_total + (sub_total * (8.25 /100)))  + Number.EPSILON) * 100) / 100;
            document.getElementsByName('amount')[0].setAttribute('value',total);
            $('#display_sub_total').html('Sub Total : $'+sub_total);
            $('#display_total').html('Total : $'+ total);
            
            
//           var cal = 0
//         for(var i= 0;i<priceList.length;i++){
//             cal += parseFloat(priceList[i].innerHTML.substr(1));
//         }
//            console.log(cal)
            
        });
        $('#back_to_garage').click(function(){
        $('#id04').css('display','none');
        $('#id03').css('display','block');
        });
    </script>
		<div id="id05" class="w3-modal" style="z-index: 1000;">
		<div class="w3-modal-content  w3-animate-zoom" style="width: 675px;">
			<div class="w3-center">
				<br> <span onclick="document.getElementById('id05').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
				<b style="font-size: 20px;text-transform:uppercase;">Location Of Services</b>
			</div>
			<br>
			<br>
			<form action="#" method="post">
			    
			    <div class="w3-row">

			<div class="w3-col w3-container m6" id="car_data_display">
						<div class="w3-section">
						<input type="text" hidden name="year" value="">
						  <input type="text" hidden name="make" value="">
						  <input type="text" hidden name="model" value="">
						  <input type="text" hidden name="trim" value="">
							<div class="w3-row">
							<div class="w3-col w3-container m6">Year</div>
							<div class="w3-col w3-container m6">2020</div>
							</div>
							<br>
							<div class="w3-row">
							<div class="w3-col w3-container m6">Make</div>
							<div class="w3-col w3-container m6">Toyota</div>
							</div>
							<br>
							<div class="w3-row">
							<div class="w3-col w3-container m6">Model</div>
							<div class="w3-col w3-container m6">Fortuner</div>
							</div>
							<br>
							<div class="w3-row">
							<div class="w3-col w3-container m6">Trim</div>
							<div class="w3-col w3-container m6">2.5L</div>
							</div>
							<br>
							<button class="w3-input w3-border w3-margin-bottom w3-round w3-blue" type="button" id="close_car_data_display">Edit Vehicle Details</button>
						</div>
					
				</div>
				<div class="w3-col w3-container m6">
					
						<div class="w3-section">
							
							<input class="w3-input w3-border w3-margin-bottom w3-round" type="text" placeholder="Your Address" name="address" required id="search_input">
                              <br>
                              <button name="setSession" class="w3-input w3-border w3-margin-bottom w3-round w3-blue" type="submit">Submit</button>
						</div>
					
				</div>
				
			</div>
			</form>
			</div>
	</div>
	
	<?php
    
    if(isset($_POST['setSession'])){
//        $year = $_POST['year'];
//        $make = $_POST['make'];
//        $model = $_POST['model'];
//        $trim = $_POST['trim'];
        
        $_SESSION['year'] = $_POST['year'];
        $_SESSION['make'] = $_POST['make'];
        $_SESSION['model'] = $_POST['model'];
        $_SESSION['trim'] = $_POST['trim'];
        $_SESSION['address'] = $_POST['address'];
        
        
        
        ?>
        
        <script>
    window.location = 'login.php'
        </script>
        <?php
    }
    
    ?>
	
	
	<div class="site-container">
		<!-- Slider Revolution -->
		<div class="revolution-slider-container">
			<div class="revolution-slider">
				<!--

					<div class="header-top-bar-container clearfix">

						<div class="header-top-bar">

							<ul class="contact-details clearfix">

								<li class="">

									<img src="images/logo-removebg-preview.png" style="height: 50px;float: left;" alt="">

								</li>

								<li class="template-phone">

									(520) 577 2710

								</li>

								<li class="template-mail">

								</li>

								<li class="template-clock">

									Mon - Fri: 7:30am - 5:30pm

								</li>

							</ul>

							<div class="search-container">

								<a class="template-search" href="#" title="Search"></a>

								<form class="search" action="#" method="post">

									<input type="text" name="s" placeholder="Search..." value="Search..." class="search-input hint">

									<fieldset class="search-submit-container">

										<span class="template-search"></span>

										<input type="submit" class="search-submit" value="">

									</fieldset>

								</form>

							</div>

					

							<ul class="social-icons">

								<li>

									<a target="_blank" href="#" class="social-facebook" title="facebook"></a>

								</li>

					

								<li>

									<a target="_blank" href="#" class="social-twitter" title="twitter"></a>

								</li>

					

								<li>

									<a href="#" class="social-pinterest" title="pinterest"></a>

								</li>

							</ul>

						</div>

						<a href="#" class="header-toggle template-arrow-up"></a>

					</div>

-->
				<div class="header-container">
					<!--<div class="header-container sticky">-->
					<div class="vertical-align-table column-1-1">
						<div class="header clearfix">
							<div class="logo vertical-align-cell">
								<img src="images/logo_with_text.png" style="height: 115px;float: left;" alt="">
							</div>
							<a href="#" class="mobile-menu-switch vertical-align-cell">	<span class="line"></span>
								<span class="line"></span>
								<span class="line"></span>
							</a>
							<div class="menu-container clearfix">
								<nav>
   <ul class="sf-menu">
      <li class=""><a href="#" title="Home">Home</a></li>
      <li>
         <a href="#" title="Services">Services</a>
         <ul>
            <li><a href="#" title="Engine Diagnostics">Engine Diagnostics</a></li>
            <li><a href="#" title="Lube, Oil and Filters">Lube, Oil and Filters</a></li>
            <li><a href="#" title="Belts and Hoses">Belts and Hoses</a></li>
            <li><a href="#" title="Air Conditioning">Air Conditioning</a></li>
            <li><a href="#" title="Brake Repair">Brake Repair</a></li>
            <li><a href="#" title="Tire and Wheel Services">Tire and Wheel Services</a></li>
         </ul>
      </li>
      <li>
         <a href="#" title="Pages">Pages</a>
         <ul>
            <li><a href="#" title="About">About</a></li>
            <li><a href="#" title="404 Not Found">404 Not Found</a></li>
            <li><a href="#" title="Services">Services</a></li>
            <li><a href="#" title="Single Service">Single Service</a></li>
            <li><a href="#" title="Galleries">Galleries</a></li>
            <li><a href="#" title="Single Project">Single Gallery</a></li>
         </ul>
      </li>
      <li>
         <a href="#" title="Blog" onclick="document.getElementById('id03').style.display='block'">Blog</a>
         <ul>
            <li><a href="#" title="Blog">Blog</a></li>
            <li><a href="#" title="Blog" onclick="document.getElementById('id04').style.display='block'">Blog Left Sidebar</a></li>
            <li><a href="#" title="Blog 2 Columns">Blog 2 Columns</a></li>
            <li><a href="#" title="Single Post">Single Post</a></li>
            <li><a href="#" title="Search Template">Search Template</a></li>
         </ul>
      </li>
      <li><a href="#" title="Appointment" onclick="document.getElementById('id02').style.display='block'">Appointment</a></li>
      <li class="left-flyout"><a href="#" onclick="document.getElementById('id01').style.display='block'" title="Login|Signup">Login|Signup</a></li>
   </ul>
</nav>

								<div class="mobile-menu-container">
									<div class="mobile-menu-divider"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<ul style="display: none;">
					<!-- SLIDE 1 -->
					<li data-transition="fade" data-masterspeed="500" data-slotamount="1" data-delay="6000">
						<!-- MAIN IMAGE -->
						<img src="images/slider/image_01.jpg" alt="slidebg1" data-bgfit="cover">
						<!-- LAYERS -->
						<!-- LAYER 01 -->
						<div class="tp-caption" data-frames='[{"delay":500,"speed":1200,"from":"y:-40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]' data-x="center" data-y="97">
							<!--data-start="500"



								data-transform_in="x:0;y:-40;o:0;s:1200;e:easeInOutExpo;"



								data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"-->
							<div class="align-center">
								<div>
									<img src="images/logo-removebg-preview.png" height="100px" width="100px" alt="">
								</div>
							</div>
							<!--                        <div style="background: url(images/logo.png);height: 100px;width: 100px;"></div>--></div>
						<!-- LAYER 02 -->
						<div class="tp-caption" data-frames='[{"delay":900,"speed":1200,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]' data-x="center" data-y="262">
							<!--data-start="900"



								data-transform_in="x:0;y:40;o:0;s:1200;e:easeInOutExpo;"



								data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"-->
							<h2><a target="_top" href="#" title="MAKE YOUR CAR LAST LONGER">MAKE YOUR CAR LAST LONGER</a></h2>
						</div>
						<!-- LAYER 03 -->
						<div class="tp-caption" data-frames='[{"delay":1100,"speed":1200,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]' data-x="center" data-y="343">
							<!--data-start="1100"



								data-transform_in="x:0;y:40;o:0;s:1200;e:easeInOutExpo;"



								data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"-->
							<p class="description">Free oil change, April 15. Only if you have a "5" on your license plate.</p>
						</div>
						<!-- LAYER 04 -->
						<div class="tp-caption" data-frames='[{"delay":1300,"speed":1200,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]' data-x="center" data-y="441">
							<!--data-start="1300"



								data-transform_in="x:0;y:40;o:0;s:1200;e:easeInOutExpo;"



								data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"-->
							<div class="align-center">
								<!--									<a target="_top" class="more simple" href="https://themeforest.net/cart/add_items?item_ids=12332985&amp;ref=QuanticaLabs" title="PURCHASE TEMPLATE"><span>PURCHASE TEMPLATE</span></a>-->
							</div>
						</div>
						<!-- / -->
					</li>
					<!-- SLIDE 2 -->
					<li data-transition="fade" data-masterspeed="500" data-slotamount="1" data-delay="6000">
						<!-- MAIN IMAGE -->
						<img src="images/slider/image_02.jpg" alt="slidebg2" data-bgfit="cover">
						<!-- LAYERS -->
						<!-- LAYER 01 -->
						<div class="tp-caption customin customout" data-frames='[{"delay":500,"speed":1200,"from":"y:-40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]' data-x="center" data-y="97">
							<!--data-start="500"



								data-transform_in="x:0;y:-40;o:0;s:1200;e:easeInOutExpo;"



								data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"-->
							<!--								<div class="hexagon"><div class="sl-small-car"></div></div>-->
							<div class="align-center">
								<div>
									<img src="images/logo-removebg-preview.png" height="100px" width="100px" alt="">
								</div>
							</div>
						</div>
						<!-- LAYER 02 -->
						<div class="tp-caption customin customout" data-frames='[{"delay":900,"speed":1200,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]' data-x="center" data-y="262">
							<!--data-start="900"



								data-transform_in="x:0;y:40;o:0;s:1200;e:easeInOutExpo;"



								data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"-->
							<h2><a target="_top" href="#" title="MAKE YOUR CAR LAST LONGER">FIND THE TIRES THAT MATCH YOUR NEEDS</a></h2>
						</div>
						<!-- LAYER 03 -->
						<div class="tp-caption customin customout" data-frames='[{"delay":1100,"speed":1200,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]' data-x="center" data-y="343">
							<!--data-start="1100"



								data-transform_in="x:0;y:40;o:0;s:1200;e:easeInOutExpo;"



								data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"-->
							<p class="description">Take advantage of our lowest prices which automatically include coupons.</p>
						</div>
						<!-- LAYER 04 -->
						<div class="tp-caption customin customout" data-frames='[{"delay":1300,"speed":1200,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]' data-x="center" data-y="441">
							<!--data-start="1300"



								data-transform_in="x:0;y:40;o:0;s:1200;e:easeInOutExpo;"



								data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"-->
							<div class="align-center">
								<!--									<a target="_top" class="more simple" href="https://themeforest.net/cart/add_items?item_ids=12332985&amp;ref=QuanticaLabs" title="PURCHASE TEMPLATE"><span>PURCHASE TEMPLATE</span></a>-->
							</div>
						</div>
						<!-- / -->
					</li>
					<!-- SLIDE 3 -->
					<li data-transition="fade" data-masterspeed="500" data-slotamount="1" data-delay="6000">
						<!-- MAIN IMAGE -->
						<img src="images/slider/image_03.jpg" alt="slidebg3" data-bgfit="cover">
						<!-- LAYERS -->
						<!-- LAYER 01 -->
						<div class="tp-caption customin customout" data-frames='[{"delay":500,"speed":1200,"from":"y:-40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]' data-x="center" data-y="97">
							<!--data-start="500"



								data-transform_in="x:0;y:-40;o:0;s:1200;e:easeInOutExpo;"



								data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"-->
							<!--								<div class="hexagon"><div class="sl-small-car-checklist"></div></div>-->
							<div class="align-center">
								<div>
									<img src="images/logo-removebg-preview.png" height="100px" width="100px" alt="">
								</div>
							</div>
						</div>
						<!-- LAYER 02 -->
						<div class="tp-caption customin customout" data-frames='[{"delay":900,"speed":1200,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]' data-x="center" data-y="262">
							<!--data-start="900"



								data-transform_in="x:0;y:40;o:0;s:1200;e:easeInOutExpo;"



								data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"-->
							<h2><a target="_top" href="#" title="MAKE YOUR CAR LAST LONGER">EXPERT TECHNICIANS, COMPETITIVE PRICES</a></h2>
						</div>
						<!-- LAYER 03 -->
						<div class="tp-caption customin customout" data-frames='[{"delay":1100,"speed":1200,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]' data-x="center" data-y="343">
							<!--data-start="1100"



								data-transform_in="x:0;y:40;o:0;s:1200;e:easeInOutExpo;"



								data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"-->
							<p class="description">We are committed to earning your trust by providing the expertise and value you expect.</p>
						</div>
						<!-- LAYER 04 -->
						<div class="tp-caption customin customout" data-frames='[{"delay":1300,"speed":1200,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]' data-x="center" data-y="441">
							<!--data-start="1300"



								data-transform_in="x:0;y:40;o:0;s:1200;e:easeInOutExpo;"



								data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"-->
							<div class="align-center">
								<!--									<a target="_top" class="more simple" href="https://themeforest.net/cart/add_items?item_ids=12332985&amp;ref=QuanticaLabs" title="PURCHASE TEMPLATE"><span>PURCHASE TEMPLATE</span></a>-->
							</div>
						</div>
						<!-- / -->
					</li>
				</ul>
			</div>
		</div>
		
		<div style="width: 100%;background: transparent;height: 102px;margin-top: -175px;margin-left: 126px;margin-bottom: 75px;z-index: 25;position: relative;right: 125px;">
		    
		        <div style="background: #f5f5f5;height: 100%;border-radius: 6px;margin-left: 150px;margin-right: 150px;">
		            <div class="w3-container" style="padding-top: 15px;">
		                <div class="w3-row">
		          <div class="w3-col w3-container m3" style="width: 19.9999%">
					<form class="w3-container" action="#" method="post">
						<div class="w3-section">
							<select class="w3-select w3-border w3-margin-bottom w3-round" name="select_year" id="select_year">
                            <option value="" disabled selected>Select Year</option>
                            <?php 
                                
                                $query  = "SELECT DISTINCT(year) FROM `auto_databases_one` ORDER BY `auto_databases_one`.`year` ASC";
                                $result = $pdo->prepare($query);
                                $result->execute();
                                
                                while($data = $result->fetch(PDO::FETCH_OBJ)){
                                    echo '<option value="'.$data->year.'">'.$data->year.'</option>';
                                }
                                
                                ?>
                            </select>
						</div>
					</form>
				</div>
                    <div class="w3-col w3-container m3" style="width: 19.9999%">
					<form class="w3-container" action="#" method="post">
						<div class="w3-section">
							<select class="w3-select w3-border w3-margin-bottom w3-round" name="select_make"  id="select_make">
                            <option value="" disabled selected>Select Make</option>
                            </select>
						</div>
					</form>
				</div>
                    <div class="w3-col w3-container m3" style="width: 19.9999%">
					<form class="w3-container" action="#" method="post">
						<div class="w3-section">
							<select class="w3-select w3-border w3-margin-bottom w3-round" name="select_model"   id="select_model">
                            <option value="" disabled selected>Select Model</option>
                            </select>
						</div>
					</form>
				</div>
                   <div class="w3-col w3-container m3" style="width: 19.9999%">
					<form class="w3-container" action="#" method="post">
						<div class="w3-section">
							<select class="w3-select w3-border w3-margin-bottom w3-round" name="select_trim" id="select_trim">
                            <option value="" disabled selected>Select Trim</option>
                            
                            </select>
						</div>
					</form>
				</div>
                    <div class="w3-col w3-container m2" style="width: 19.9999%">
                    <div class="w3-container">
						<div class="w3-section">
							<button type="button" id='car_data' class="w3-button w3-blue" onclick="document.getElementById('id05').style.display='block'">Search</button>
						</div>
					</div>
					
				</div>
		                </div>
		                
		            </div>
		        </div>

		    
		</div>
		
		<!--/-->
		<div class="theme-page">
			<div class="clearfix">
				<div class="row gray full-width">
					<div class="announcement clearfix">
						<ul class="columns no-width">
							<li class="column column-2-3">
								<div class="vertical-align">
									<div class="vertical-align-cell">
										<h3>MAKE AN APPOINTMENT	NOW WITH OUR ONLINE FORM</h3>
										<pre>
										<?php
        if(isset($_SESSION)){
        print_r($_SESSION);
        }
        echo "<br>";
        if(isset($_COOKIE)){
        print_r($_COOKIE);
        }
        $userInfo = $auth0->getUser();

        if (!$userInfo) {
        echo "error";
        } else {
        echo $userInfo['sub'][0];
        print_r($userInfo);
        }
                                        ?></pre>
									</div>
								</div>
							</li>
							<li class="column column-1-3">
								<div class="vertical-align">
									<div class="vertical-align-cell">	<a class="more" href="#" title="MAKE AN APPOINTMENT"><span>MAKE AN APPOINTMENT</span></a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!--



					<div class="row page-margin-top-section">



						<div class="row">



							<h2 class="box-header">WHY CHOOSE US?</h2>



							<p class="description align-center">We are one of the leading auto repair shops serving customers in Tucson.<br>All mechanic services are performed by highly qualified mechanics.</p>



							<div class="row page-margin-top">



								<div class="column column-1-3">



									<ul class="features-list big">



										<li>



											<div class="hexagon"><div class="sl-small-user-chat"></div></div>



											<h4 class="box-header page-margin-top">EVERY JOB IS PERSONAL</h4>



											<p>If you want the quality you would expect from the dealership, but with a more personal and friendly atmosphere, you have found it.</p>



										</li>



									</ul>



								</div>



								<div class="column column-1-3">



									<ul class="features-list big">



										<li>



											<div class="hexagon"><div class="sl-small-wrench-screwdriver"></div></div>



											<h4 class="box-header page-margin-top">BEST MATERIALS</h4>



											<p>We have invested in all the latest specialist tools and diagnostic software that is specifically tailored for the software in your vehicle.</p>



										</li>



									</ul>



								</div>



								<div class="column column-1-3">



									<ul class="features-list big">



										<li>



											<div class="hexagon"><div class="sl-small-truck-tow"></div></div>



											<h4 class="box-header page-margin-top">PROFESSIONAL STANDARDS</h4>



											<p>Our auto repair shop is capable of servicing a variety of models. We only do the work that is needed to fix your problem.</p>



										</li>



									</ul>



								</div>



							</div>



							<div class="align-center margin-top-67 padding-bottom-20">



								<a class="more" href="about.html" title="READ MORE"><span>READ MORE</span></a>



							</div>



						</div>	



					</div>



-->
				<!--



					<div class="row full-width gray flex-box page-margin-top-section">



						<div class="column column-1-2 background-1">



							<a class="flex-hide" href="service_engine_diagnostics.html" title="Tiling and Painting">



								<img src="images/samples/960x680/image_01.jpg" alt="">



							</a>



						</div>



						<div class="column column-1-2 padding-bottom-66">



							<div class="row padding-left-right-100">



								<h2 class="box-header page-margin-top-section">VEHICLES SERVICED</h2>



								<p class="description align-center">We provide top notch maintenance service for all types of vehicles.<br>We are certified to service and repair the following makes:</p>



								<div class="row margin-top-30">



									<div class="column column-1-3">



										<ul class="list">



											<li class="template-bullet">General Motors</li>



											<li class="template-bullet">Land Rover</li>



											<li class="template-bullet">Lexus</li>



											<li class="template-bullet">Lincoln</li>



											<li class="template-bullet">Mazda</li>



										</ul>



									</div>



									<div class="column column-1-3">



										<ul class="list">



											<li class="template-bullet">Mercedes - Benz</li>



											<li class="template-bullet">Mercury</li>



											<li class="template-bullet">Mitsubishi</li>



											<li class="template-bullet">Nissan</li>



											<li class="template-bullet">Renault</li>



										</ul>



									</div>



									<div class="column column-1-3">



										<ul class="list">



											<li class="template-bullet">Plymouth</li>



											<li class="template-bullet">Pontiac Porsche</li>



											<li class="template-bullet">Rover</li>



											<li class="template-bullet">Saab</li>



											<li class="template-bullet">Saleen</li>



										</ul>



									</div>



								</div>



								<div class="align-center margin-top-67 padding-bottom-20">



									<a class="more simple" href="services.html" title="VIEW FULL LIST"><span>VIEW FULL LIST</span></a>



								</div>



							</div>



						</div>



					</div>



-->
				<!--



					<div class="row full-width page-padding-top-section">



						<div class="row">



							<h2 class="box-header">AUTO REPAIR SERVICES</h2>



							<p class="description align-center">We offer a full range of garage services to vehicle owners located in Tucson area.<br>Our professinals know how to handle a wide range of car services.</p>



							<ul class="services-list clearfix page-margin-top">



								<li>



									<a href="service_engine_diagnostics.html" title="Engine Diagnostics">



										<img src="images/samples/390x260/image_01.jpg" alt="">



									</a>



									<h4 class="box-header"><a href="service_engine_diagnostics.html" title="Engine Diagnostics">ENGINE DIAGNOSTICS<span class="template-arrow-menu"></span></a></h4>



								</li>



								<li>



									<a href="service_lube_oil_filters.html" title="Lube, Oil and Filters">



										<img src="images/samples/390x260/image_02.jpg" alt="">



									</a>



									<h4 class="box-header"><a href="service_lube_oil_filters.html" title="Lube, Oil and Filters">LUBE, OIL AND FILTERS<span class="template-arrow-menu"></span></a></h4>



								</li>



								<li>



									<a href="service_belts_hoses.html" title="Belts and Hoses">



										<img src="images/samples/390x260/image_03.jpg" alt="">



									</a>



									<h4 class="box-header"><a href="service_belts_hoses.html" title="Belts and Hoses">BELTS AND HOSES<span class="template-arrow-menu"></span></a></h4>



								</li>



							</ul>



							<div class="align-center margin-top-40 padding-bottom-87">



								<a class="more" href="services.html" title="VIEW ALL SERVICES"><span>VIEW ALL SERVICES</span></a>



							</div>



						</div>



					</div>



-->
				<div class="row full-width padding-top-70 padding-bottom-66 parallax parallax-1">
					<div class="row testimonials-container">
						<a href="#" class="slider-control left template-arrow-left-1"></a>
						<ul class="testimonials-list">
							<li>
								<div class="hexagon small">
									<div class="sl-small-pen"></div>
								</div>
								<p>"I have taken several of the family cars here for the past several years and without exception the experiences have been outstanding. I would highly recommend this place to any one who wants great service, honest value, and really great people."</p>
								<h6>ROBERT SMITH</h6>
								<div class="author-details">CEO OF NEW PORT COMPANY</div>
							</li>
							<li>
								<div class="hexagon small">
									<div class="sl-small-pen"></div>
								</div>
								<p>"I have taken several of the family cars here for the past several years and without exception the experiences have been outstanding. I would highly recommend this place to any one who wants great service, honest value, and really great people."</p>
								<h6>ROBERT SMITH</h6>
								<div class="author-details">CEO OF NEW PORT COMPANY</div>
							</li>
							<li>
								<div class="hexagon small">
									<div class="sl-small-pen"></div>
								</div>
								<p>"I have taken several of the family cars here for the past several years and without exception the experiences have been outstanding. I would highly recommend this place to any one who wants great service, honest value, and really great people."</p>
								<h6>ROBERT SMITH</h6>
								<div class="author-details">CEO OF NEW PORT COMPANY</div>
							</li>
						</ul>
						<a href="#" class="slider-control right template-arrow-left-1"></a>
					</div>
				</div>
				<!--



					<div class="row page-margin-top-section">



						<div class="row">



							<h2 class="box-header">COMPANY OVERVIEW</h2>



							<p class="description align-center">We can help you with everything from an oil change to an engine change.<br>We can handle any problem on both foreign and domestic vehicles.</p>



						</div>



						<div class="row page-margin-top-section">



							<div class="column column-1-3">



								<ul class="features-list">



									<li>



										<h5>CAR AUDIO SERVICE</h5>



										<div class="icon sl-small-car-audio"></div>



										<p>Services consequat luctus at justo auctor metus est donec. Tempus terminal morbi nulla donec elite maecenas modern forte elementum vehicula.</p>



									</li>



									<li>



										<h5>CAR A/C RECHARGE</h5>



										<div class="icon sl-small-air-conditioning"></div>



										<p>Services consequat luctus at justo auctor metus est donec. Tempus terminal morbi nulla donec elite maecenas modern forte elementum vehicula.</p>



									</li>



								</ul>



							</div>



							<div class="column column-1-3">



								<ul class="features-list">



									<li>



										<h5>FREE OIL CHANGE</h5>



										<div class="icon sl-small-car-oil"></div>



										<p>Services consequat luctus at justo auctor metus est donec. Tempus terminal morbi nulla donec elite maecenas modern forte elementum vehicula.</p>



									</li>



									<li>



										<h5>PARKING SENSORS CALIBRATION</h5>



										<div class="icon sl-small-parking-sensor"></div>



										<p>Services consequat luctus at justo auctor metus est donec. Tempus terminal morbi nulla donec elite maecenas modern forte elementum vehicula.</p>



									</li>



								</ul>



							</div>



							<div class="column column-1-3">



								<ul class="features-list">



									<li>



										<h5>ENGINE DIAGNOSTICS</h5>



										<div class="icon sl-small-signal-warning"></div>



										<p>Services consequat luctus at justo auctor metus est donec. Tempus terminal morbi nulla donec elite maecenas modern forte elementum vehicula.</p>



									</li>



									<li>



										<h5>CAR BATTERY REPAIRS</h5>



										<div class="icon sl-small-car-battery"></div>



										<p>Services consequat luctus at justo auctor metus est donec. Tempus terminal morbi nulla donec elite maecenas modern forte elementum vehicula.</p>



									</li>



								</ul>



							</div>



						</div>



					</div>



-->
				<!--



					<div class="row full-width page-margin-top-section">



						<ul class="galleries-list clearfix page-margin-top">



							<li>



								<a href="gallery_tire_change.html" title="Tire Change">



									<img src="images/samples/480x320/image_07.jpg" alt="">



								</a>



								<div class="view align-center">



									<div class="vertical-align-table">



										<div class="vertical-align-cell">



											<p class="description">Tire Change</p>



											<a class="more simple" href="gallery_tire_change.html" title="READ MORE">READ MORE</a>



										</div>



									</div>



								</div>



							</li>



							<li>



								<a href="gallery_oil_change.html" title="Oil Change">



									<img src="images/samples/480x320/image_02.jpg" alt="">



								</a>



								<div class="view align-center">



									<div class="vertical-align-table">



										<div class="vertical-align-cell">



											<p class="description">Oil Change</p>



											<a class="more simple" href="gallery_oil_change.html" title="READ MORE">READ MORE</a>



										</div>



									</div>



								</div>



							</li>



							<li>



								<a href="gallery_belts_hoses.html" title="Our Facility">



									<img src="images/samples/480x320/image_08.jpg" alt="">



								</a>



								<div class="view align-center">



									<div class="vertical-align-table">



										<div class="vertical-align-cell">



											<p class="description">Our Facility</p>



											<a class="more simple" href="gallery_belts_hoses.html" title="READ MORE">READ MORE</a>



										</div>



									</div>



								</div>



							</li>



							<li>



								<a href="gallery_brake_repair.html" title="Brakes Repair">



									<img src="images/samples/480x320/image_05.jpg" alt="">



								</a>



								<div class="view align-center">



									<div class="vertical-align-table">



										<div class="vertical-align-cell">



											<p class="description">Brakes Repair</p>



											<a class="more simple" href="gallery_brake_repair.html" title="READ MORE">READ MORE</a>



										</div>



									</div>



								</div>



							</li>



						</ul>



					</div>



-->
				<!--



					<div class="row gray full-width padding-top-54 padding-bottom-61 align-center">



						<h3><span class="button-label">DO YOU LIKE WHAT YOU SEE</span> <a class="more" target="_top" href="https://themeforest.net/cart/add_items?item_ids=12332985&amp;ref=QuanticaLabs" title="PURCHASE TEMPLATE"><span>PURCHASE TEMPLATE</span></a></h3>



					</div>



					<div class="row gray full-width padding-top-bottom-50">



						<div class="row">



							<div class="column column-1-2 align-right padding-top-7">



								<h3>EXPLORE OUR PROJECTS</h3>



							</div>



							<div class="column column-1-2">



								<a class="more float" href="?page=projects" title="VIEW ALL PROJECTS">VIEW ALL PROJECTS</a>



							</div>



						</div>



					</div>



-->
				<!--



					<div class="row page-margin-top-section">



						<div class="column column-1-2">



							<h3 class="box-header">OUR MISSION</h3>



							<p class="description">We offer a full range of garage services to vehicle owners located in Tucson area. All mechanic services are performed by highly qualified mechanics. We can handle any car problem.</p>



							<p>We offer a full range of garage services to vehicle owners in Tucson. Our professionals know how to handle a wide range of car services. Whether you drive a passenger car or medium sized truck or SUV, our mechanics strive to <a href="#">ensure that your vehicle</a> will be performing at its best <a href="#">before leaving</a> our car shop.</p>



							<div class="page-margin-top">



								<a class="more" href="about.html" title="READ MORE"><span>READ MORE</span></a>



							</div>



						</div>



						<div class="column column-1-2">



							<h3 class="box-header">POPULAR QUESTIONS</h3>



							<ul class="accordion margin-top-40 clearfix">



								<li>



									<div id="accordion-using-synthetic">



										<h4>Should I consider using synthetic motor oil?</h4>



									</div>



									<p>Synthetic engine oils are produced through a synthesis process that takes very small molecules and assembles them into larger designer molecules with premium lubricating properties.</p>



								</li>



								<li>



									<div id="accordion-parts-replacements">



										<h4>What parts should be replaced at what intervals?</h4>



									</div>



									<p>Synthetic engine oils are produced through a synthesis process that takes very small molecules and assembles them into larger designer molecules with premium lubricating properties.</p>



								</li>



								<li>



									<div id="accordion-track-routine">



										<h4>How do I keep track of routine maintenance?</h4>



									</div>



									<p>Synthetic engine oils are produced through a synthesis process that takes very small molecules and assembles them into larger designer molecules with premium lubricating properties.</p>



								</li>



							</ul>



						</div>



					</div>



-->
				<!--



					<div class="row full-width top-border page-margin-top-section padding-bottom-50">



						<div class="row">



							<div class="our-clients-list-container page-margin-top">



								<ul class="our-clients-list">



									<li>



										<img src="images/logos/logo_01.png" alt="">



									</li>



									<li>



										<img src="images/logos/logo_02.png" alt="">



									</li>



									<li>



										<img src="images/logos/logo_03.png" alt="">



									</li>



									<li>



										<img src="images/logos/logo_04.png" alt="">



									</li>



									<li>



										<img src="images/logos/logo_05.png" alt="">



									</li>



									<li>



										<img src="images/logos/logo_06.png" alt="">



									</li>



									<li>



										<img src="images/logos/logo_06.png" alt="">



									</li>



									<li>



										<img src="images/logos/logo_05.png" alt="">



									</li>



									<li>



										<img src="images/logos/logo_04.png" alt="">



									</li>



									<li>



										<img src="images/logos/logo_03.png" alt="">



									</li>



									<li>



										<img src="images/logos/logo_02.png" alt="">



									</li>



									<li>



										<img src="images/logos/logo_01.png" alt="">



									</li>



									<li>



										<img src="images/logos/logo_04.png" alt="">



									</li>



									<li>



										<img src="images/logos/logo_03.png" alt="">



									</li>



									<li>



										<img src="images/logos/logo_01.png" alt="">



									</li>



									<li>



										<img src="images/logos/logo_05.png" alt="">



									</li>



								</ul>



								<div class="our-clients-pagination"></div>



							</div>



						</div>



					</div>



--></div>
		</div>
		<div class="row dark-gray footer-row full-width padding-top-30 padding-bottom-50">
			<div class="row padding-bottom-30">
				<div class="column column-1-3">
					<ul class="contact-details-list">
						<li class="sl-small-location-map">
							<p>Tucson, AZ 80210:
								<br>501 Archwood Lane</p>
						</li>
					</ul>
				</div>
				<div class="column column-1-3">
					<ul class="contact-details-list">
						<li class="sl-small-phone-circle">
							<p>Feel Free to Call Us Now
								<br>(520) 577 2710</p>
						</li>
					</ul>
				</div>
				<div class="column column-1-3">
					<ul class="contact-details-list">
						<li class="sl-small-truck-tow">
							<p>24/7 Roadside Assistance
								<br>(520) 577 2725</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="row row-4-4 top-border page-padding-top">
				<div class="column column-1-4">
					<h6 class="box-header">ABOUT US</h6>
					<ul class="list simple margin-top-20">
						<li>Tucson, Arizona 80210</li>
						<li>501 Archwood Lane</li>
						<li><span>Mobile:</span>(520) 577 2710</li>
						<li><span>Assistance:</span>(520) 577 2725</li>
						<li><span>E-mail:</span><a href="#">carservice@mail.com</a>
						</li>
					</ul>
					<ul class="social-icons gray margin-top-26">
						<li>
							<a target="_blank" href="#" class="social-facebook" title="facebook"></a>
						</li>
						<li>
							<a target="_blank" href="#" class="social-twitter" title="twitter"></a>
						</li>
						<li>
							<a target="_blank" href="#" class="social-linkedin" title="linkedin"></a>
						</li>
						<li>
							<a href="#" class="social-pinterest" title="pinterest"></a>
						</li>
					</ul>
				</div>
				<div class="column column-1-4">
					<h6 class="box-header">OUR SERVICES</h6>
					<ul class="list margin-top-20">
						<li class="template-bullet">Engine Diagnostics</li>
						<li class="template-bullet">Lube, Oil and Filters</li>
						<li class="template-bullet">Belts and Hoses</li>
						<li class="template-bullet">Air Conditioning</li>
						<li class="template-bullet">Brake Repair</li>
						<li class="template-bullet">Tire and Wheel Services</li>
						<li class="template-bullet">Other Car Services</li>
					</ul>
				</div>
				<div class="column column-1-4">
					<h6 class="box-header">POPULAR TAGS</h6>
					<ul class="taxonomies margin-top-30">
						<li><a href="#" title="BELTS">BELTS</a>
						</li>
						<li><a href="#" title="BRAKES">BRAKES</a>
						</li>
						<li><a href="#" title="DIAGNOSTICS">DIAGNOSTICS</a>
						</li>
						<li><a href="#" title="ENGINE">ENGINE</a>
						</li>
						<li><a href="#" title="FILTERS">FILTERS</a>
						</li>
						<li><a href="#" title="HEATING">HEATING</a>
						</li>
						<li><a href="#" title="OILS">OILS</a>
						</li>
						<li><a href="#" title="STEERING">STEERING</a>
						</li>
						<li><a href="#" title="SUSPENSION">SUSPENSION</a>
						</li>
						<li><a href="#" title="TIRES">TIRES</a>
						</li>
						<li><a href="#" title="TRANSMISSION">TRANSMISSION</a>
						</li>
					</ul>
				</div>
				<div class="column column-1-4">
					<h6 class="box-header">HOURS</h6>
					<ul class="list simple margin-top-20">
						<li><span>Monday:</span>7:30am - 5:30pm</li>
						<li><span>Tuesday:</span>7:30am - 5:30pm</li>
						<li><span>Wednesday:</span>7:30am - 5:30pm</li>
						<li><span>Thursday:</span>7:30am - 5:30pm</li>
						<li><span>Friday:</span>7:30am - 5:30pm</li>
						<li><span>Saturday:</span>7:30am - 3:00pm</li>
						<li><span>Sunday:</span>Closed</li>
					</ul>
				</div>
			</div>
		</div>
		<!--



			<div class="row align-center padding-top-bottom-30">



				<span class="copyright">© Copyright 2015 <a href="http://themeforest.net/item/carservice-mechanic-auto-shop-template/12332985?ref=QuanticaLabs" title="Carservice Template" target="_blank">Carservice Template</a> by <a href="http://quanticalabs.com" title="QuanticaLabs" target="_blank">QuanticaLabs</a></span>



			</div>



--></div>
	<a href="#top" class="scroll-top animated-element template-arrow-up" title="Scroll to top"></a>
	<div class="background-overlay"></div>
	<!--js-->
	<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="js/jquery-migrate-1.4.1.min.js"></script>
	<!--slider revolution-->
	<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="js/jquery.ba-bbq.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.11.4.custom.min.js"></script>
	<script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script>
	<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
	<script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" src="js/jquery.transit.min.js"></script>
	<script type="text/javascript" src="js/jquery.hint.min.js"></script>
	<script type="text/javascript" src="js/jquery.costCalculator.min.js"></script>
	<script type="text/javascript" src="js/jquery.parallax.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.qtip.min.js"></script>
	<script type="text/javascript" src="js/jquery.blockUI.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/odometer.min.js"></script>
	
<script src="js1/underscore-min.js"></script>
<script src= "js1/moment-2.2.1.js"></script>
<script src="js1/clndr.js"></script>
<script src="js1/site.js"></script>

<script>
document.getElementById('date11').innerHTML=`${moment().format('dddd')}, ${moment().format("MMM Do YY")}`;
</script>



<!--maps api-->


  	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;libraries=places&amp;key=AIzaSyDpW-i7ItGweNpFwt63tLZhjStM_cBoSLg"></script>
  	<script>
var searchInput = 'search_input';

$(document).ready(function () {
	var autocomplete;
	autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
		types: ['geocode'],
		/*componentRestrictions: {
			country: "USA"
		}*/
	});
	
	google.maps.event.addListener(autocomplete, 'place_changed', function () {
		var near_place = autocomplete.getPlace();
		document.getElementById('latitude_input').value = near_place.geometry.location.lat();
		document.getElementById('longitude_input').value = near_place.geometry.location.lng();
		
		document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
		document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();
	});
});

$(document).on('change', '#'+searchInput, function () {
	document.getElementById('latitude_input').value = '';
	document.getElementById('longitude_input').value = '';
	
	document.getElementById('latitude_view').innerHTML = '';
	document.getElementById('longitude_view').innerHTML = '';
});
</script>

                    <script>
                    $('.customer_popup_td').click(function(){
                    var classList = $(this).attr('class');
                    var found = classList.search("booked");
                    var time  = $(this).html();
                    console.log(time);
                    if(found == -1){
                    var email = "<?php echo $userInfo['email']?>";
                    var choosed_date = $('#choosed_date').html();

                    $.ajax({
                    url:'ajax.php',
                    data:{email:email,choosed_date:choosed_date,time:time},
                    type:'Post',
                    success:function(data){
                    $('#data_table').html(data);
                    }
                    });
                    }else{
                    alert("this is already Booked");
                    }
                    });

                    </script>
                    
                    
                    <script>
                    $('#select_year').on('change', function() {
                    var year = $('#select_year').val();

                    $.ajax({
                    url:'search_ajax.php',
                    data:{request:"make",year:year},
                    type:'Post',
                    success:function(data){
                    $('#select_make').html(data);
                    }
                    });
                    });
                    </script>
                    
                    <script>
                    $('#select_make').on('change', function() {
                    var year = $('#select_year').val();
                    var make = $('#select_make').val();

                    $.ajax({
                    url:'search_ajax.php',
                    data:{request:"model",year:year,make:make},
                    type:'Post',
                    success:function(data){
                    $('#select_model').html(data);
                    }
                    });
                    });
                    </script>
                    
                    <script>
                    $('#select_model').on('change', function() {
                    var year  = $('#select_year').val();
                    var make  = $('#select_make').val();
                    var model = $('#select_model').val();

                    $.ajax({
                    url:'search_ajax.php',
                    data:{request:"trim",year:year,make:make,model:model},
                    type:'Post',
                    success:function(data){
                    $('#select_trim').html(data);
                    }
                    });
                    });
                    </script>
                    
                    <script>
                    $('#car_data').click(function(){
                    var year  = $('#select_year').val();
                    var make  = $('#select_make').val();
                    var model = $('#select_model').val();
                    var trim = $('#select_trim').val();
                        
                    $.ajax({
                    url:'search_ajax.php',
                    data:{request:"return_data",year:year,make:make,model:model,trim:trim},
                    type:'Post',
                    success:function(data){
                    $('#car_data_display').html(data);
                    }
                    });
                    });
                    </script>
                    
                    <script>
                    $('#details_data').click(function(){
                    var year  = $('#select_year').val();
                    var make  = $('#select_make').val();
                    var model = $('#select_model').val();
                    var trim = $('#select_trim').val();
                    var address = $('#search_input').val();

                    $.ajax({
                    url:'search_ajax.php',
                    data:{request:"return_data",year:year,make:make,model:model,trim:trim,address:address},
                    type:'Post',
                    success:function(data){
                    $('#id05').css('display','none');
                    $('#id03').css('display','block');
                    $('#display_details_data').html(data);
                    }
                    });
                    });
                    </script>
	

</body>
<!--details_data-->
</html>