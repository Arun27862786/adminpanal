<?php
 
if(isset($_POST['submit_profile']))
{
	$f_name=$_POST['f_name']; 
	$l_name=$_POST['l_name'];  
	$address=$_POST['address'];
	$profilepic=$_FILES['profile_img']["name"];
  
  if(empty($profilepic)){ 

     if(empty($f_name)){
      $display="<span uk-icon=\'icon: warning\'></span>Firstname field is empty.";
        $color="danger"; return;
      }elseif(empty($l_name)){
        $display="<span uk-icon=\'icon: warning\'></span>Lastname field is empty.";
        $color="danger"; return;
      }elseif(empty($address)){
        $display="<span uk-icon=\'icon: warning\'></span>Address field is empty.";
        $color="danger"; return;
      }else{ 
       $update=$db->update('users',array('firstname'=>$f_name,'lastname'=>$l_name,'address'=>$address),array('user_id'=>$user_details['user_id']));
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
  }else{
  	   if(empty($f_name)){
        $display="<span uk-icon=\'icon: warning\'></span>Name field is empty.";
        $color="danger"; return;
      }elseif(empty($address)){
        $display="<span uk-icon=\'icon: warning\'></span>Address field is empty.";
        $color="danger"; return;
      }else{
 
    // Check if file was uploaded without errors
    if(isset($_FILES["profile_img"]) && $_FILES["profile_img"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = time() . '_' . $_FILES["profile_img"]["name"];
        $filetype = $_FILES["profile_img"]["type"];
        $filesize = $_FILES["profile_img"]["size"];
       $maxsize = 5 * 1024 * 1024;
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)){
           $display="<span uk-icon=\'icon: warning\'></span>Please select a valid file format.";
            $color="danger"; return;
          
        }elseif($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){ 
            
            $filen =$user_details['user_photo_file'];
            $myFile = "uploads/logins/" . $filen;
               unlink($myFile);

                move_uploaded_file($_FILES["profile_img"]["tmp_name"], "uploads/logins/" . $filename);
               // echo "Your file was uploaded successfully.";
             $update=$db->update('users',array('firstname'=>$f_name,'lastname'=>$l_name,'address'=>$address,'user_photo_file'=>$filename),array('user_id'=>$user_details['user_id']));
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

    }
  }
}elseif(isset($_POST['submit_changepassword']))
{
	$oldpassword=$_POST['oldpassword'];
	$pass=$_POST['newpassword'];
	$confirmpassword=$_POST['confirmpassword'];
    $verify_pass=password_verify($oldpassword,$user_details['password']);

   if(!$verify_pass)
    {
        $display="<span uk-icon=\'icon: warning\'></span>Old password is wrong.";
        $color="danger"; return;
    }
   elseif($fv->emptyfields(array(password=>$oldpassword),NULL))
	{
	    $display="<span uk-icon=\'icon: warning\'></span>Old password field is empty.";
	    $color="danger"; return;	
	}
	elseif($fv->emptyfields(array(password=>$pass),NULL))
	{
	    $display="<span uk-icon=\'icon: warning\'></span>New password field is empty.";
	   $color="danger";	return;
	}
	elseif($pass!=$confirmpassword)
	{
	    $display="<span uk-icon=\'icon: warning\'></span>Password do not match.";
	    $color="danger"; return;
	}
	else
	{
		$encrypt_password = password_hash( $pass, PASSWORD_DEFAULT) ;
		$update=$db->update('users',array('password'=>$encrypt_password),array('user_id'=>$user_details['user_id']));
	   	}
	if($update)
	{
	    $display="<span uk-icon=\'icon: check\'></span> Success! Password changed successfully.";
	    $color="success";
		
	} else{
     	 $display="<span uk-icon=\'icon: warning\'></span>Something wrong.";
        $color="danger";
     }
}

elseif(isset($_POST['del_submit']))
{
	$loginid = $_POST['login_Id']; 
	 
   if(!$loginid)
    {
        $display="<span uk-icon=\'icon: warning\'></span>ID is wrong.";
        $color="danger";
     } 
	else
	{
		$delete_page = $db->delete('users',array('user_id'=>$loginid));
	}
	if($delete_page)
	{
		$display="<span uk-icon=\'icon: check\'></span> Your Profile Successfully Deleted.";
	    $color="success";
	  $session->destroy('admin/login', frontend);
		
	} 
	else{
     	 $display="<span uk-icon=\'icon: warning\'></span> Something wrong.";
        $color="danger";
     }
}

?>