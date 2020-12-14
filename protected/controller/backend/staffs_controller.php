<?php

$get_all_ticket = $db->get_all('ticket'); 
$get_all_staffs = $db->get_all('users');

if(isset($_REQUEST['id']) && $_REQUEST['id']!=""){
    $getstaff = $db->get_row('users',array('user_id'=>$_REQUEST['id']));
}  
if(isset($_POST['staff_submit'])){ 
    echo($_POST); 
    $name = $_POST['name'];  
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $address = $_POST['address'];
    $encrypt_password = password_hash( $pass,PASSWORD_DEFAULT) ;
    
      
    if(empty($email)){
        $display="<span uk-icon=\'icon: warning\'></span>Email field is empty.";
        $color="danger"; return;
    }elseif (!$fv->check_email($email)){
        $display="<span uk-icon=\'icon: warning\'></span>Please enter valid email.";
        $color="danger"; return;
    }
    elseif(empty($pass) && $_REQUEST['addstaff']=='add'){
        $display="<span uk-icon=\'icon: warning\'></span>Password field is empty.";
        $color="danger"; return;
    }else{
       
        if(isset($_REQUEST['id']) && $_REQUEST['id']!=""){
            if($pass==""){
            $staff = $db->update('users',array('firstname'=>$name,'lastname'=>'','email'=>$email,'address'=>$address),array('user_id'=>$_REQUEST['id']));
            }else{
                $staff = $db->update('users',array('firstname'=>$name,'lastname'=>'','email'=>$email,'password'=>$encrypt_password),array('user_id'=>$_REQUEST['id']));
            }
        
        }
       if($staff){
           $session->redirect('staffs',backend);
       } 
    }
}
elseif (isset($_REQUEST['delete_id']) && $_REQUEST['delete_id']!=""){
    $delete_staff = $db->delete('users',array('user_id'=>$_REQUEST['delete_id']));
    if($delete_staff){
        $session->redirect('staffs',backend);
    }
}elseif(isset($_POST['btn_submit'])){
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $pass = $_POST['password']; 
    $address = $_POST['Address'];   

    if(empty($name) ){
        $display="<span uk-icon=\'icon: warning\'></span>Name field is empty.";
        $color="danger";  return;
   }elseif($email=='') 
    { 
        $display="<span uk-icon=\'icon: warning\'></span>Email field is empty.";
         $color="danger"; return;
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {      
         $display="<span uk-icon=\'icon: warning\'></span>Email Not valid.";
         $color="danger"; return;
    }elseif($fv->emptyfields(array(password=>$pass),NULL))
    {
        $display="<span uk-icon=\'icon: warning\'></span>Password field is empty.";
        $color="danger"; return;
    }elseif($address=='')
    {
       $display="<span uk-icon=\'icon: warning\'></span>Address field is empty.";
        $color="danger"; return;
    }
   else{ 
    $encrypt_password = password_hash( $pass, PASSWORD_DEFAULT) ; 
     $staff = $db->insert('users',array('firstname'=>$name,'email'=>$email,'password'=>$encrypt_password,'address'=>$address,'create_date'=>time(),'ip_address'=>$_SERVER['REMOTE_ADDR']));
        } 
    if($staff)
     {
    $display="<span uk-icon=\'icon: check\'></span> You have Sccessfull Sigh up.</br>Go to Login Page";
      $color="success";
      $success=true;
      
    }else{
        $display="<span uk-icon=\'icon: warning\'></span> Email already exist.";
      $color="danger";
         }
    }
  
 ?>