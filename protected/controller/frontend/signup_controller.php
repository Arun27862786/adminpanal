<?php
if(isset($_POST['logins_btn'])){
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $pass = $_POST['pass']; 
    $phone = $_POST['phone'];
    $address = $_POST['add']; 
    $city = $_POST['city'];
    $state = $_POST['state']; 
    $postcode = $_POST['postcode']; 
    $country = $_POST['country'];   

    if(empty($name) ){
        $display='<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a>
            <p>Name can not be empty.</p></div>';
        $color="danger"; return;
    }else{
   }elseif($email=='') 
    { 
        $display='<div class="uk-alert-danger" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>Email can not be empty.</p>
            </div>';
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {      
         $display="<span uk-icon=\'icon: warning\'></span> Oh Snap ! Email Not valid.";
         $color="danger";return;
      }elseif($fv->emptyfields(array('password'=>$pass),NULL))
    {
        $display="<span uk-icon=\'icon: warning\'></span> Oh Snap ! password field is empty.";
        $color="danger";return;
    }elseif(empty($pass)) 
    { 
        $display='<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a>
           <p>Password can not be empty.</p></div>';
            $color="danger";return;
    }elseif(empty($phone)) 
    { 
        $display='<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a>
           <p>Phone Field can not be empty.</p></div>';
            $color="danger";return;
    }elseif(empty($address)) 
    { 
        $display='<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a>
            <p>Address can not be empty.</p></div>';
            $color="danger";return;
    }elseif(empty($city)) 
    { 
        $display='<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a>
            <p>City can not be empty.</p></div>';
            $color="danger";return;
    }elseif(empty($state)) 
    { 
        $display='<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a>
            <p>State can not be empty.</p></div>';
            $color="danger";return;
    }elseif(empty($postcode)) 
    { 
        $display='<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a>
            <p>Postcode can not be empty.</p></div>';
            $color="danger";return;
    }elseif(empty($country))
    {
        $display='<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a>
            <p>country can not be empty.</p></div>';
            $color="danger";return;
    }
   else{ 
 
    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = time() . '_' . $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
       $maxsize = 5 * 1024 * 1024;
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)){
            $display='<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a>
            <p>Please select a valid file format.</p></div>';
            $color="danger";return;
          
        }elseif($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            
                move_uploaded_file($_FILES["photo"]["tmp_name"], "uploads/logins/" . $filename);
               // echo "Your file was uploaded successfully.";

    $encrypt_password = password_hash( $pass, PASSWORD_DEFAULT) ;
    $insert = $db->insert('clients',array('name'=>$name,'email'=>$email,'password'=> $encrypt_password,'phone'=> $phone,'address'=> $address,'city'=> $city,'state'=> $state,'postcode'=> $postcode,'country'=> $country,'photo'=> $filename,'created_date'=>time(),'ip_address'=>$_SERVER['REMOTE_ADDR']));
         
         if($insert)
         { 
        $display='<div class="uk-alert-success" uk-alert><a class="uk-alert-close" uk-close></a>
            <p>You have Sccessfull Sigh up.</p></div>'; 
      $color="success";
      $success=true;
      
    }else{  
        $display='<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a>
            <p>Email already exist.</p></div>'; 
      $color="danger";return;
         } 

        } else{
            //echo "Error: There was a problem uploading your file. Please try again."; 
            }
     } else{
         $display='<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a>
            <p>photo  can not be empty.</p></div>';
            $color="danger";
         }    
     }         
 }
?>
