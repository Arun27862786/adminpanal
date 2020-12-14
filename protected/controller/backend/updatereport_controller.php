<?php
 if (isset($_REQUEST['reportid']) && $_REQUEST['reportid']!=""){ 
$report = $db->get_row('reports',array('id'=>$_REQUEST['reportid']));
} 
 if (isset($_REQUEST['clientid']) && $_REQUEST['clientid']!=""){
   $clientid = $_REQUEST['clientid'];
    } 
if(isset($_POST['update_btn'])){ 
 $report_id=$report['id'];
 $description=$_POST['description']; 
 $file = $_FILES["report_file"]["name"];
 $filename = time() . '_' . $_FILES["report_file"]["name"];

 if(empty($file)){
    if(empty($description) )
    {    $display="<span uk-icon=\'icon: warning\'></span>description can not be empty.";
        $color="danger"; return;
    } else{ 
  $update_report = $db->update('reports',array('client_id'=>$clientid,'description'=>$description),array('id'=>$report_id));
      
    }
    if($update_report){
  
   $display="<span uk-icon=\'icon: check\'></span>Successfull Report Updated.";
   $color="success"; 
    }
    else{
      $display="<span uk-icon=\'icon: warning\'></span>Problem in  Record Updation.";
      $color="danger";
    }
  }
else{
$get_report  = $db->get_row('reports',array('id'=>$report_id));
  $file_name = $get_report['report_file'];

  if(empty($description) )
    {    $display="<span uk-icon=\'icon: warning\'></span>Description can not be empty.";
        $color="danger"; return;
    } elseif(empty($file)) 
    { 
      $display="<span uk-icon=\'icon: warning\'></span>Filename can not be empty.";
             $color="danger";return;
    }else{
       move_uploaded_file($_FILES["report_file"]["tmp_name"], "uploads/report/" . $filename);

    	$update_report = $db->update('reports',array('client_id'=>$clientid,'description'=>$description,'report_file'=>$filename),array('id'=>$report_id));
     
    }
    if($update_report){
    	
    	$myFile = "uploads/report/" . $file_name;
         unlink($myFile);

   $display="<span uk-icon=\'icon: check\'></span>Successfull Report Updated.";
   $color="success"; 
    }
    else{
    	$display="<span uk-icon=\'icon: warning\'></span>Problem in  Record updation.";
      $color="danger";
    }
  }
}
  ?>