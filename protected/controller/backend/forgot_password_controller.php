<?php 
$exists=0;
if($session->Check()){
    $session->redirect('home',backend);
}
$setting = $db->get_row('settings');
if(isset($_POST['change_pass']))
{
    $exists=1;
    $enc=$_POST['token'];
    $pass=$_POST['password'];
    $retypepassword=$_POST['retypepassword'];
    if($pass=='')
    {
        $display_msg = '<div class="uk-alert-danger" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>Please enter password.</p>
</div>';
    }
    elseif ($retypepassword=='')
    {
        $display_msg = '<div class="uk-alert-danger" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>Please enter retype password.</p>
</div>';
    }
    elseif ($pass!=$retypepassword)
    {
        $display_msg = '<div class="uk-alert-danger" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>Passwords do not match.</p>
</div>';
    }
    else{
    $encrypt_password = password_hash( $pass, PASSWORD_DEFAULT) ;
    $update=$db->update('users',array('password'=>$encrypt_password,'random'=>0),array('random'=>$enc));
     }
    if($update)
    {
        $display_msg = '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>Password changed successfully. Try login now.</p>
</div>';
    }
        
}
elseif(isset($_REQUEST['random']) && $_REQUEST['random']!='')
{
    
    $enc=$_REQUEST['random'];
    if(!$db->exists('users',array('random'=>$_REQUEST['random'])))
    {
        
    $exists = 0;    
    $display_msg = '<div class="uk-alert-danger" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>Token Invalid.</p>
</div>';
        
    }
    else
    {
        $exists=1;
    }
    
}

elseif(isset($_POST['forgot_pass']))
{
	$forgot_email = $fv->removespace($_POST['email']);
	if($fv->emptyfields(array('email'=>$forgot_email)))
	{
		$display_msg = '<div class="uk-alert-danger" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>Email can not be empty.</p>
</div>'; 
	}
	elseif (!$fv->check_email($forgot_email))
	{
		$display_msg = '<div class="uk-alert-danger" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>Please enter valid email.</p>
</div>'; 
	}
	elseif(!$db->exists('users', array ('email' => $forgot_email)))
	{ 
		
		
			$display_msg = '<div class="uk-alert-danger" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>Email does not exist.</p>
</div>'; 
	     }
		else
		{
		
		

		$enc=$feature->encrypt(time());
		$db->update ('users',array('random'=>$enc),array('email'=>$forgot_email));
	

$email_body = '<table cellspacing="0" cellpadding="0" style="padding:30px 10px;background-color:rgb(238,238,238);width:100%;font-family:arial;background-repeat:initial initial">
<tbody>
<tr>
	<td>
		<table align="center" cellspacing="0" style="max-width:650px;min-width:320px">
			<tbody>
				<tr>
					<td align="center" style="background:#fff;border:1px solid #e4e4e4;padding:50px 30px">
						<table align="center">
							<tbody>
								<tr>
									<td style="border-bottom:1px solid #dfdfd0;color:#666;text-align:center">
										<table align="left" width="100%" style="margin:auto">
										<tbody>
											<tr>
											<td style="text-align:left;padding-bottom:14px">
    <img align="left" alt="IWCN" src="'.SITE_URL.'/uploads/logo/'.$setting['logo'].'" width="150px" height="auto"></td>
											</tr>
											
										</table>
										<table align="left" style="margin:auto">
										<tbody>
											<tr>
												<td style="color:rgb(102,102,102);font-size:16px;padding-bottom:30px;text-align:left;font-family:arial">
    You have requested for a password reset. Please click on the link or copy and paste the link in browser to proceed.<br><br>
												
											Password Reset Link : <a href='. SITE_URL . '/index.php?user=forgot_password&random='.$enc.'>Click Here</a><br>
		
											<br /><br><br>Regards<br><br>
											'. $setting["name"] .'<br>
											</td>				</tr>
										</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>
</tbody>
</table>';


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$setting["name"] .'<'.$setting["email"] . ">\r\n" .
'Reply-To: '.$setting["email"] . "\r\n" .
'X-Mailer: PHP/' . phpversion();
		
		$confirm    =  mail($forgot_email, 'Forgot Password Request',$email_body,$headers);
		
		
		
		if($confirm=='1')
		 {
		 $display_msg = '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>Mail Sent To Your Email Id.</p>
</div>';
		 }
		 else
		 {
		 $display_msg = '<div class="uk-alert-danger" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>Something went wrong.</p>
</div>';
		 }
		
			}
		
	}
?>
