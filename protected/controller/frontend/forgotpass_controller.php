<?php
if(isset($_POST['for_submit']))
{ 
    $email = $_POST['email'];  
    $pass = $_POST['pass'];   
     
            if($email==''){
        $display="<span uk-icon=\'icon: warning\'></span>Email can not be empty.";
         $color="danger";return;
       }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
       {      
         $display="<span uk-icon=\'icon: warning\'></span>Email Not valid.";
         $color="danger";return;
       }elseif($fv->emptyfields(array('password'=>$pass),NULL))
    {
        $display="<span uk-icon=\'icon: warning\'></span>Password field is empty.";
        $color="danger";return;
    }
   else{

    $encrypt_password = password_hash( $pass, PASSWORD_DEFAULT) ;
    $get = $db->update('clients',array( 'password'=> $encrypt_password),array('email'=>$email));      
      }
    if($get)
     {
      $display="<span uk-icon=\'icon: warning\'></span>Password updated.";
      $color="danger";
      $success=true;
      
    }else{
       $display="<span uk-icon=\'icon: warning\'></span> Email not exist.";
      $color="danger";
      $suc=true;
    }        
 }
?>