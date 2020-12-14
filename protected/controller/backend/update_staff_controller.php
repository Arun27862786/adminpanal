 <?php 
 
if(isset($_REQUEST['staffid']) && $_REQUEST['staffid']!=""){
$getstaff = $db->get_row('users',array('user_id'=>$_REQUEST['staffid']));
}
  
if(isset($_POST['staff_btn'])){
    $user_id = $_POST['user_id'];
    $fname = $_POST['fname']; 
    $lname = $_POST['lname'];  
    $phone = $_POST['phone'];
    $address = $_POST['address'];  
    $file = $_FILES["photo"]["name"]; 
 
if(!empty($file)){ 
    if(empty($fname) ){
    $display="<span uk-icon=\'icon: warning\'></span>First Name field is empty.";
        $color="danger"; return;
   }elseif(empty($lname)) 
    { 
        $display="<span uk-icon=\'icon: warning\'></span>Last Name field is empty."; 
            $color="danger"; return;
    }elseif(empty($phone)) 
    { 
        $display="<span uk-icon=\'icon: warning\'></span>Phone Field can not be empty."; 
            $color="danger"; return;
    }elseif(empty($address)) 
    {  
        $display="<span uk-icon=\'icon: warning\'></span>Address can not be empty."; 
            $color="danger"; return;
    }else{  
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
             $get_staff  = $db->get_row('users',array('user_id'=>$user_id));
            $file_name = $get_staff['user_photo_file'];
            
                move_uploaded_file($_FILES["photo"]["tmp_name"], "uploads/logins/" . $filename);
               // echo "Your file was uploaded successfully.";

   $Update_staff = $db->update('users',array('firstname'=>$fname,'lastname'=>$lname,'phone'=> $phone,'address'=> $address,'user_photo_file'=> $filename),array('user_id'=>$user_id));
         
         if($Update_staff)
         {            
            $myFile = "uploads/logins/". $file_name;
            unlink($myFile);
            $display="<span uk-icon=\'icon: warning\'></span>  Sccessfull data updated.";  
           $color="success";      
         }else{  
          $display="<span uk-icon=\'icon: warning\'></span> Problem.";  
          $color="danger";
           } 

        } else{
            //echo "Error: There was a problem uploading your file. Please try again."; 
            }
     } else{
         $display="<span uk-icon=\'icon: warning\'></span>photo can not be empty.";  
            $color="danger"; return;
         }    
     } }
     else{
           
     $Update_staff = $db->update('users',array('firstname'=>$fname,'lastname'=>$lname,'phone'=> $phone,'address'=> $address),array('user_id'=>$user_id));
         
         if($Update_staff)
         { 
             $display="<span uk-icon=\'icon: warning\'></span>  Sccessfull data updated.";  
             $color="success";
          }else{  
         $display="<span uk-icon=\'icon: warning\'></span> Problem.";  
          $color="danger";
              } 
    }         
 }
?>
