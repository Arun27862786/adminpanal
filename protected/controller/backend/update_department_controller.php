<?php
 if (isset($_REQUEST['id']) && $_REQUEST['id']!=""){ 
$get_depart = $db->get_row('departments',array('id'=>$_REQUEST['id']));
}
if(isset($_POST['dp_btn'])){ 
 $department=$_POST['department']; 
 $description=$_POST['description']; 
 $file = $_FILES["thumbnail"]["name"];
 $filename = time() . '_' . $_FILES["thumbnail"]["name"];

 if(empty($file)){
    if(empty($description) )
    {    $display="<span uk-icon=\'icon: warning\'></span>Description can not be empty.";
        $color="danger"; return;
    } else{

      $update_report = $db->update('departments',array('user_id'=>$user_details['user_id'],'department'=>$department,'description'=>$description),array('id'=>$_REQUEST['id']));
    }
    if($update_report){
  
   $display="<span uk-icon=\'icon: check\'></span>Successfull Department Updated.";
   $color="success"; 
    }
    else{
      $display="<span uk-icon=\'icon: warning\'></span>Problem in Department Updation!.";
      $color="danger";
    }
  }
else{
$get_report  = $db->get_row('departments',array('id'=>$_REQUEST['id']));
  $file_name = $get_report['thumbnail'];

  if(empty($description) )
    {    $display="<span uk-icon=\'icon: warning\'></span>Description can not be empty.";
        $color="danger"; return;
    } elseif(empty($file)) 
    { 
      $display="<span uk-icon=\'icon: warning\'></span>Filename can not be empty.";
             $color="danger";return;
    }else{
       move_uploaded_file($_FILES["thumbnail"]["tmp_name"], "uploads/report/" . $filename);

    	$update_report = $db->update('departments',array('user_id'=>$user_details['user_id'],'department'=>$department,'description'=>$description,'thumbnail'=>$filename),array('id'=>$_REQUEST['id']));
    }
    if($update_report){
    	
    	$myFile = "uploads/report/" . $file_name;
         unlink($myFile);

   $display="<span uk-icon=\'icon: check\'></span>Successfull Department Updated.";
   $color="success"; 
    }
    else{
    	$display="<span uk-icon=\'icon: warning\'></span>Problem in Department updation.";
      $color="danger";
    }
  }
}
  ?>