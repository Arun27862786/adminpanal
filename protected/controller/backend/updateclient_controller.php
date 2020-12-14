 <?php 
 if(isset($_REQUEST['id']) && $_REQUEST['id']!=""){
 	 
    $getClient_info = $db->get_row('clients',array('id'=>$_REQUEST['id']));
    $get_department = $db->get_all('departments');

}  
if(isset($_POST['client_btn'])){
    $id = $_POST['id']; 
    $name = $_POST['name'];  
    $phone = $_POST['phone'];
    $department_id = $_POST['department_id'];
    $address = $_POST['address'];    
    $city = $_POST['city'];
    $state = $_POST['state'];  
    $postcode = $_POST['postcode']; 
    $country = $_POST['country'];  
     $file = $_FILES["photo"]["name"]; 
 
if(!empty($file)){ 
    if(empty($name) ){
        $display="<span uk-icon=\'icon: warning\'></span> Name field is empty.";
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
     
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = time() . '_' . $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
        $maxsize = 5 * 1024 * 1024;
      
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)){
              $display="<span uk-icon=\'icon: warning\'></span>Please select a valid file format."; 
            $color="danger"; return;
          
        }elseif($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
       
        if(in_array($filetype, $allowed)){
           
             $get_clients  = $db->get_row('clients',array('id'=>$id));
            $file_name = $get_clients['photo'];
            
                move_uploaded_file($_FILES["photo"]["tmp_name"], "uploads/logins/" . $filename);
                

    $Update_client = $db->update('clients',array('department_id'=>$department_id,'name'=>$name,'phone'=> $phone,'address'=> $address,'city'=> $city,'state'=> $state,'postcode'=> $postcode,'country'=> $country,'photo'=> $filename),array('id'=>$id));
         
         if($Update_client)
         { 
            $myFile = "uploads/logins/". $file_name;
            unlink($myFile);
            $display="<span uk-icon=\'icon: warning\'></span> Sccessfull Data Updated.";  
           $color="success";
         
    }else{  
         $display="<span uk-icon=\'icon: warning\'></span> Problem For Record Updation.";  
      $color="danger";  return;
         } 

        } else{
            //echo "Error: There was a problem uploading your file. Please try again."; 
            }
     } else{
         $display="<span uk-icon=\'icon: warning\'></span>Photo can not be empty.";  
            $color="danger";  return;
         }    
     } }
else{
          
     
    $insert = $db->update('clients',array('department_id'=>$department_id,'name'=>$name,'phone'=> $phone,'address'=> $address,'city'=> $city,'state'=> $state,'postcode'=> $postcode,'country'=> $country ),array('id'=>$id));
         
         if($insert)
         { 
             $display="<span uk-icon=\'icon: warning\'></span>  Sccessfull Data Updated.";  
      $color="success";
      $success=true;
      
    }else{  
         $display="<span uk-icon=\'icon: warning\'></span> Problem For Record Updation.";  
      $color="danger";
         } 
    }         
 }
?>
