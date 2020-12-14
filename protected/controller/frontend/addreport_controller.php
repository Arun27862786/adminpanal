<?php  
    
if(isset($_POST['report_btn'])){ 
 $description=$_POST['description'];  
 $file= $_FILES["report_file"]["name"];  
 $filename = time() . '_' . $_FILES["report_file"]["name"]; 
 
  if(empty($description))
    {   $display="<span uk-icon=\'icon: warning\'></span>Description can not be empty.";
        $color="danger"; return;
    }elseif(empty($file)) 
    {  
      $display="<span uk-icon=\'icon: warning\'></span>Filename can not be empty.";
      $color="danger"; return;
    }else{
       move_uploaded_file($_FILES["report_file"]["tmp_name"], "uploads/report/" . $filename);

    	$insert_report = $db->insert('reports',array('client_id'=>$clients_details['id'],'description'=>$description,'report_file'=>$filename));
    }
    if($insert_report){
   $display="<span uk-icon=\'icon: check\'></span>Successfull Report Inserted.";
   $color="success"; 
    }
    else{
    	$display="<span uk-icon=\'icon: warning\'></span>Problem in  Record Insertion.";
      $color="danger";
    }
}
?>