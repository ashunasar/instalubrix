<?php date_default_timezone_set("Asia/Calcutta"); ?>
               <?php  include 'db.php'?>                
<?php 
if(isset($_POST['date'])){
    ?>
                    <tr>

                       <?php  
                    $today = $_POST['date'];
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
                    $today = $_POST['date'];
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
                    $today = $_POST['date'];
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
				    <script>
                    $('.customer_popup_td').click(function(){
                     var classList = $(this).attr('class');
                        var found = classList.search("booked");
                        var time  = $(this).html();
                        console.log(time);
                        if(found == -1){
                            var email = "ashu@gmail.com";
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
				    <?php
}


if(isset($_POST['choosed_date'])){
    $email = $_POST['email'];
    $choosed_date = $_POST['choosed_date'];
    $time = $_POST['time'];
    
    $query = "UPDATE `shedule` SET `$time` = ? WHERE date=?";
    $result = $pdo->prepare($query);
    $result->execute([$email,$choosed_date]);
    if($result->rowCount() > 0){
        echo '<tbody><tr><td><div style="font-size: 20px;font-family: monospace;color: green;">Congratulation your appointment has been booked</div></td></tr></tbody>';
    }else{
        echo '<tbody><tr><td><div style="font-size: 20px;font-family: monospace;color:red;">Something Went Wrong</div></td></tr></tbody>';
    }
}


?>