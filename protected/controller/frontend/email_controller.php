<?php
 $get_all_user = $db->get_all('users');
 if(isset($_POST['emailbtn'])){
    $email = $_POST['email_name']; 
    $subject = $_POST['subject'];     
    $message = $_POST['message']; 
    $clientEmail =$clients_details['email'];

      //   $header = "From:Arun@somedomain.com \r\n";
         $headers= "From:<$clientEmail;>\r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";

         if($email==''){
        $display="<span uk-icon=\'icon: warning\'></span>Email can not be empty.";
      $color="danger";return;
       }elseif(empty($subject)) 
    { 
      $display="<span uk-icon=\'icon: warning\'></span>Subject can not be empty.";
      $color="danger";return;
    }elseif(empty($message)) 
    { 
      $display="<span uk-icon=\'icon: warning\'></span>Message can not be empty.";
      $color="danger"; return;
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
       {      
         $display="<span uk-icon=\'icon: warning\'></span>Email Not valid.";
         $color="danger";   return;
       }
         else{ 
            $retval = mail ($email,$subject,$message,$header);
         
             if( $retval == true ) {
         $display="<span uk-icon=\'icon: success\'></span>Email Send successfully.";
         $color="success";
         $insert = $db->insert("notification",array('client_id'=>$clients_details['id'],'user_email'=>$email));
                           
             }
             else {
                         
         $display="<span uk-icon=\'icon: warning\'></span>Email Not send.";
         $color="danger";
                     } 
               }
      }
 ?>
     