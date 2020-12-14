<?php
if(isset($_POST['addclient_btn'])){
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $pass = $_POST['pass']; 
    $phone = $_POST['phone'];
    $address = $_POST['address'];  
    $city = $_POST['city'];
    $state = $_POST['state']; 
    $postcode = $_POST['postcode']; 
    $country = $_POST['country'];   

    if(empty($name) ){
        $display="<span uk-icon=\'icon: warning\'></span>Name field is empty.";
        $color="danger"; return;
   }elseif($email=='') 
    {    $display="<span uk-icon=\'icon: warning\'></span>Email can not be empty.";
         $color="danger";
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {      
         $display="<span uk-icon=\'icon: warning\'></span>Email Not valid.";
         $color="danger"; return;
    }elseif($fv->emptyfields(array(password=>$pass),NULL))
    {
        $display="<span uk-icon=\'icon: warning\'></span>Password field is empty.";
        $color="danger"; return;
    }elseif(empty($pass)) 
    {  
        $display="<span uk-icon=\'icon: warning\'></span>Password can not be empty."; 
            $color="danger"; return;
    }elseif(empty($phone)) 
    { 
        $display="<span uk-icon=\'icon: warning\'></span>Phone Field can not be empty."; 
            $color="danger"; return;
    }elseif(empty($address)) 
    {  
        $display="<span uk-icon=\'icon: warning\'></span>Address can not be empty."; 
            $color="danger"; return;
    }elseif(empty($city)) 
    { 
     $display="<span uk-icon=\'icon: warning\'></span>City can not be empty."; 
            $color="danger"; return;
    }elseif(empty($state)) 
    {  $display="<span uk-icon=\'icon: warning\'></span>State can not be empty."; 
            $color="danger"; return;
    }elseif(empty($postcode)) 
    {  $display="<span uk-icon=\'icon: warning\'></span>Postcode can not be empty."; 
            $color="danger"; return;
    }elseif(empty($country))
    { 
        $display="<span uk-icon=\'icon: warning\'></span>Country can not be empty.";
         $color="danger"; return;
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
              $display="<span uk-icon=\'icon: warning\'></span>Please select a valid file format."; 
            $color="danger"; return;
          
        }elseif($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            
                move_uploaded_file($_FILES["photo"]["tmp_name"], "uploads/logins/" . $filename);
               // echo "Your file was uploaded successfully.";

    $encrypt_password = password_hash( $pass, PASSWORD_DEFAULT) ;
    $insert_client = $db->insert('clients',array('name'=>$name,'email'=>$email,'password'=> $encrypt_password,'phone'=> $phone,'address'=> $address,'city'=> $city,'state'=> $state,'postcode'=> $postcode,'country'=> $country,'photo'=> $filename,'created_date'=>time(),'ip_address'=>$_SERVER['REMOTE_ADDR']));
         
         if($insert_client)
         { 
             $display="<span uk-icon=\'icon: warning\'></span> Sccessfull client added.";  
      $color="success";
      $success=true;
      
    }else{  
         $display="<span uk-icon=\'icon: warning\'></span>Email already exist.";  
      $color="danger";
         } 

        } else{
            //echo "Error: There was a problem uploading your file. Please try again."; 
            }
     } else{
         $display="<span uk-icon=\'icon: warning\'></span>photo  can not be empty.";  
            $color="danger";
         }    
     }         
 }
?>
