<?php
if(isset($_POST['submit_profile']))
{
	$name=$_POST['name'];
	$address=$_POST['address']; 
 
	 if(empty($name) ){
        $display="<span uk-icon=\'icon: warning\'></span> Oh Snap ! Name field is empty.";
        $color="danger"; return;
   }elseif(empty($address) ){
        $display="<span uk-icon=\'icon: warning\'></span> Oh Snap ! Address field is empty.";
        $color="danger"; return;
      }else{

            $update=$db->update('logins',array('name'=>$name,'address'=>$address),array('login_id'=>$_SESSION['login_id']));

            // $update=$db->update('users',array('firstname'=>$firstname,'lastname'=>$lastname,'address'=>$address),array('user_id'=>$_SESSION['user_id']));
	}
 
	if($update)
	{
		$display="<span uk-icon=\'icon: check\'></span> Success! Data Updated.";
	    $color="success"; return;
     }
     else{
     	 $display="<span uk-icon=\'icon: warning\'></span>Something wrong.";
        $color="danger"; return;
     }
 }
elseif(isset($_POST['submit_changepassword']))
{
	$oldpassword=$_POST['oldpassword'];
	$pass=$_POST['newpassword'];
	$confirmpassword=$_POST['confirmpassword'];
    $verify_pass=password_verify($oldpassword,$arunlog['password']);
 

   if(!$verify_pass)
    {
        $display="<span uk-icon=\'icon: warning\'></span>Old password is wrong.";
        $color="danger";return;
        
	
    }
   elseif($fv->emptyfields(array(password=>$oldpassword),NULL))
	{
	 $display="<span uk-icon=\'icon: warning\'></span> Oh Snap ! Old password field is empty.";
	    $color="danger";return;
		
	}
	elseif($fv->emptyfields(array(password=>$pass),NULL))
	{
	 $display="<span uk-icon=\'icon: warning\'></span>New password field is empty.";
	    $color="danger";return;
		
	}
	elseif($pass!=$confirmpassword)
	{
	    $display="<span uk-icon=\'icon: warning\'></span>Password do not match.";
	    $color="danger";return;
		
	}
	else
	{
		$encrypt_password = password_hash( $pass, PASSWORD_DEFAULT) ;
		$update=$db->update('logins',array('password'=>$encrypt_password),array('login_id'=>$_SESSION['login_id']));
   }
	if($update)
	{
	  $display="<span uk-icon=\'icon: check\'></span> Success! Password changed successfully.";
	    $color="success";  return;
		
	} else{
     	 $display="<span uk-icon=\'icon: warning\'></span> Oh Snap ! Something wrong.";
        $color="danger";return;
     }
}

elseif(isset($_POST['del_submit']))
{
	$loginid = $_POST['login_Id'];
	 
   if(!$loginid)
    {
        $display="<span uk-icon=\'icon: warning\'></span> Oh Snap ! ID is wrong.";
        $color="danger";
     } 
	else
	{
		$delete_page = $db->delete('logins',array('login_id'=>$loginid));
	}
	if($delete_page)
	{
		$display="<span uk-icon=\'icon: check\'></span> Your Profile Successfully Deleted.";
	    $color="success";
	  $session->destroy('arunlogin', frontend);
		
	} 
	else{
     	 $display="<span uk-icon=\'icon: warning\'></span> Oh Snap ! Something wrong.";
        $color="danger";
     }
}
?>