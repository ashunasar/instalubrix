<?php  include 'db.php'?>   
<?php

if($_POST['request'] == 'make'){
    $year = $_POST['year'];
    $query = "SELECT DISTINCT(make) FROM `auto_databases_one` WHERE year=? ORDER BY make ASC";
    $result = $pdo->prepare($query);
    $result->execute([$year]);
    echo '<option value="" disabled selected>Select Make</option>';
    while($data = $result->fetch(PDO::FETCH_OBJ)){
    echo '<option value="'.$data->make.'">'.$data->make.'</option>';
    }
}

if($_POST['request'] == 'model'){
    $year = $_POST['year'];
    $make = $_POST['make'];
    $query = "SELECT DISTINCT(`model`) FROM `auto_databases_one` WHERE year=? and make=? ORDER BY model ASC";
    $result = $pdo->prepare($query);
    $result->execute([$year,$make]);
    echo '<option value="" disabled selected>Select Model</option>';
    while($data = $result->fetch(PDO::FETCH_OBJ)){
    echo '<option value="'.$data->model.'">'.$data->model.'</option>';
    }
}

if($_POST['request'] == 'trim'){
    $year = $_POST['year'];
    $make = $_POST['make'];
    $model = $_POST['model'];
    $query = "SELECT DISTINCT(`trim`) FROM `auto_databases_one` WHERE year=? AND make=? AND model =?";
    $result = $pdo->prepare($query);
    $result->execute([$year,$make,$model]);
    echo '<option value="" disabled selected>Select Trim</option>';
    while($data = $result->fetch(PDO::FETCH_OBJ)){
    echo '<option value="'.$data->trim.'">'.$data->trim.'</option>';
    }
}


if($_POST['request'] == 'return_data' && !isset($_POST['address'])){
    $year  =  $_POST['year'];
    $make  =  $_POST['make'];
    $model =  $_POST['model'];
    $trim  =  $_POST['trim'];
     echo '<div class="w3-container" >
						<div class="w3-section">
                        <input type="text" hidden name="year" value="'.$year.'">
						  <input type="text" hidden name="make" value="'.$make.'">
						  <input type="text" hidden name="model" value="'.$model.'">
						  <input type="text" hidden name="trim" value="'.$trim.'">
							<div class="w3-row">
							<div class="w3-col w3-container m6">Year</div>
							<div class="w3-col w3-container m6">'.$year.'</div>
							</div>
							<br>
							<div class="w3-row">
							<div class="w3-col w3-container m6">Make</div>
							<div class="w3-col w3-container m6">'.$make.'</div>
							</div>
							<br>
							<div class="w3-row">
							<div class="w3-col w3-container m6">Model</div>
							<div class="w3-col w3-container m6">'.$model.'</div>
							</div>
							<br>
							<div class="w3-row">
							<div class="w3-col w3-container m6">Trim</div>
							<div class="w3-col w3-container m6">'.$trim.'</div>
							</div><br>';
    
							echo '<button class="w3-input w3-border w3-margin-bottom w3-round w3-blue" type="button" id="close_car_data_display">Edit Vehicle Details</button>
						</div>
					</div>';
    
                            echo "<script>
                            $('#close_car_data_display').click(function(){
                            $('#id05').css('display','none');
                            });
                            </script>";
}


if($_POST['request'] == 'return_data' && isset($_POST['address'])){
    $year  =  $_POST['year'];
    $make  =  $_POST['make'];
    $model =  $_POST['model'];
    $trim  =  $_POST['trim'];
    $address  =  $_POST['address'];
    
    echo '<div class="w3-row">
							<div class="w3-col w3-container m6">Year</div>
							<div class="w3-col w3-container m6">'.$year.'</div>
							</div>
							<br>
							<div class="w3-row">
							<div class="w3-col w3-container m6">Make</div>
							<div class="w3-col w3-container m6">'.$make.'</div>
							</div>
							<br>
							<div class="w3-row">
							<div class="w3-col w3-container m6">Model</div>
							<div class="w3-col w3-container m6">'.$model.'</div>
							</div>
							<br>
							<div class="w3-row">
							<div class="w3-col w3-container m6">Trim</div>
							<div class="w3-col w3-container m6">'.$trim.'</div>
							</div><br><br><br>
							<div class="24-row">
							    <b>Address </b> :' . $address.'
							</div>';
}

?>