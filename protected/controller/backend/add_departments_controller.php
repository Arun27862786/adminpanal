<?php  
 if(isset($_POST['add_dp'])){
 $department=$_POST['department'];
 $description=$_POST['description'];  
 $file= $_FILES["thumbnail"]["name"];  
 $filename = time() . '_' . $_FILES["thumbnail"]["name"]; 

  if(empty($department))
    {   $display="<span uk-icon=\'icon: warning\'></span>Department can not be empty.";
        $color="danger"; 
        return;
    }elseif(empty($description)) 
    { 
      $display="<span uk-icon=\'icon: warning\'></span>Discription can not be empty.";
      $color="danger";
         return;
    }elseif(empty($file)) 
    { 
      $display="<span uk-icon=\'icon: warning\'></span>Filename can not be empty.";
      $color="danger";
         return;
    }else{
       move_uploaded_file($_FILES["thumbnail"]["tmp_name"], "uploads/report/" . $filename);

    	$insert_report = $db->insert('departments',array('user_id'=>$user_details['user_id'],'department'=>$department,'description'=>$description,'thumbnail'=>$filename,'create_date'=>time(),'ip_address'=>$_SERVER['REMOTE_ADDR']));
    }
    if($insert_report){
   $display="<span uk-icon=\'icon: check\'></span>Successfull Department Created.";
   $color="success"; 
    }
    else{
    	$display="<span uk-icon=\'icon: warning\'></span>Problem in Department Creation.";
      $color="danger";
    }
}
?>