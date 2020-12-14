 <?php
if($session->Check()){
    $session->redirect('home',backend);
}
else {
$setting = $db->get_row('settings');

if(isset($_COOKIE['remember_me']) && ($_COOKIE['remember_me']!=''))
{
    $cookie=explode('___',$_COOKIE['remember_me']);
    $session->Open();
   if(isset($_SESSION) )
   {
   $_SESSION ['email'] = $cookie['0'];
   $_SESSION['user_id'] = $cookie['1']; 
   $session->redirect('home',backend);
    } 
}
if(isset($_POST['submit_login']))
{
	$email=$_POST['email'];
	$pass=$_POST['password'];
    $cookie_set=$_POST['cookie_set'];
	if($email=='')
	{
		$display_msg='<div class="uk-alert-danger" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>Email can not be empty.</p>
</div>';
	}
	elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		$display_msg='<div class="uk-alert-danger" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>Please enter valid email.</p>
</div>';
	}
	elseif($pass=='' )
	{
		$display_msg='<div class="uk-alert-danger" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>Password can not be empty.</p>
</div>';
	}
	else
    {
        
		$query=$db->get_row('users',array('email'=>$email));

	 if(is_array($query))
	{
		$verify_pass=password_verify($pass,$query['password']);
		if(!$verify_pass)
		{
			$display_msg='<div class="uk-alert-danger" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>Password is wrong.</p>
</div>';
		}
		else
		{
			$session->Open();
			if(isset($_SESSION))
			{
				$_SESSION ['email'] = $query['email'];
				$_SESSION['user_id'] = $query['user_id'];

				if($cookie_set=='true' && $setting['cookie_expire']!=0)
				{
				$expire=time()+ 60*60*24*$setting['cookie_expire'];
				setcookie('remember_me',$query['email']."___".$query['user_id'],$expire);
				}
			$session->redirect('home',backend);
			}
		}

	}
	else
	{
	    $display_msg='<div class="uk-alert-danger" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>No record found.</p>
</div>';
	}

}
}
}
?>