<?php
 
 $email=$user_details['email'];
$sql="select * from `notification` where `user_email`='$email' GROUP BY `client_id` ORDER BY 'DESC client_id'";

 $notification = $db->run($sql)->fetchAll(); 
 
?>