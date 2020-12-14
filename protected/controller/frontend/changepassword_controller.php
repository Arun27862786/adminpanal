<?php
if(isset($_POST[submit_changepassword]))
{
	$oldpassword=$_POST['oldpassword'];
	$pass=$_POST['newpassword'];
	$confirmpassword=$_POST['confirmpassword'];
    $verify_pass=password_verify($oldpassword,$user_details['password']);
   if(!$verify_pass)
    {
	$display_msg='<div class="alert alert-danger">
	<i class="lnr lnr-sad"></i> <button class="close" data-dismiss="alert" type="button">×</button>Alert! Wrong OldPassword.
	</div>';
    }
   elseif($fv->emptyfields(array(password=>$oldpassword),NULL))
	{
		$display_msg= '<div class="alert alert-danger">
		<i class="lnr lnr-sad"></i> <button class="close" data-dismiss="alert" type="button">×</button>Oops! OldPassword Field Is Empty.
		</div>';
	}
	elseif($fv->emptyfields(array(password=>$pass),NULL))
	{
		$display_msg= '<div class="alert alert-danger ">
		<i class="lnr lnr-sad"></i> <button class="close" data-dismiss="alert" type="button">×</button>Oops! NewPassword Field Is Empty.
		</div>';
	}
	elseif($pass!=$confirmpassword)
	{
		$display_msg= '<div class="alert alert-danger ">
		<i class="lnr lnr-sad"></i> <button class="close" data-dismiss="alert" type="button">×</button>Oops! Password Not Match.
		</div>';
	}
	else
	{
		$encrypt_password = password_hash($pass, PASSWORD_DEFAULT);
		$update=$db->update('users',array('password'=>$encrypt_password),array('user_id'=>$_SESSION['user_id']));
	}
	if($update)
	{
		$display_msg='<div class="alert alert-success ">
		<i class="lnr lnr-smile"></i> <button class="close" data-dismiss="alert" type="button">×</button>Success! Password Has Changed.
		</div>';
	}
}
?>