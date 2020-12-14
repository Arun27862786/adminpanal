 <?php
if($session->Check()){
    $session->redirect('home',frontend);
}
else {
$logins = $db->get_row('clients');

if(isset($_COOKIE['remember_me']) && ($_COOKIE['remember_me']!=''))
{
    $cookie=explode('___',$_COOKIE['remember_me']);
    $session->Open();
   if(isset($_SESSION) )
   {
   $_SESSION ['email'] = $cookie['0'];
   $_SESSION['user_id'] = $cookie['1'];
   $session->redirect('home',frontend); 
    } 
}
if(isset($_POST['login_form']))
{
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $cookie_set=$_POST['cookie_set'];
  if($email=='')
  {
    $display_msg='<div class="alert alert-danger">
    <i class="lnr lnr-sad"></i> <button class="close" data-dismiss="alert" type="button">&times;</button>Oopes! Email Cannot Be Empty.
    </div>';
  }
  elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
  {
    $display_msg='<div class="alert alert-danger">
    <i class="lnr lnr-sad"></i> <button class="close" data-dismiss="alert" type="button">&times;</button>Oopes! Enter a valid email.
    </div>';
  }
  elseif($pass=='' )
  {
    $display_msg='<div class="alert alert-danger">
    <i class="lnr lnr-sad"></i> <button class="close" data-dismiss="alert" type="button">&times;</button>Oopes! Password Cannot be empty.
    </div>';
  }
  else
    {
    $query=$db->get_row('clients',array('email'=>$email));

   if(is_array($query))
  {
    $verify_pass=password_verify($pass,$query['password']);
    if(!$verify_pass)
    {
      $display_msg='<div class="alert alert-danger">
    <i class="lnr lnr-sad"></i> <button class="close" data-dismiss="alert" type="button">&times;</button>Oh! Wrong Password.
    </div>';
    }
    else
    {
      $session->Open(); 
      if(isset($_SESSION))
      {
        $_SESSION ['email'] = $query['email'];
        $_SESSION['client_id'] = $query['id'];

        if($cookie_set=='true' && $setting['cookie_expire']!=0)
        {
        $expire=time()+ 60*60*24*1;
        setcookie('remember_me',$query['email']."___".$query['client_id'],$expire);
        }
      $session->redirect('home',frontend);
      }
    }
  }
  else
  {
      $display_msg='<div class="alert alert-danger">
    <i class="lnr lnr-sad"></i> <button class="close" data-dismiss="alert" type="button">&times;</button>
          No Record Found !
    </div>';
  }

}
}
}
?>