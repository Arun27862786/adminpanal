<?php
// $clients=$db->get_all('clients'); 
 
$project=$db->get_all('projects',array('status'=>0,'client_id'=>$clients_details['id']));
 
 if (isset($_REQUEST['status_v']) && $_REQUEST['status_v']!=""){ 
 	  $status_v = $_REQUEST['status_v'];
 	if($status_v=='archived'){ 	 
$archived=$db->get_all('projects',array('status'=>1,'client_id'=>$clients_details['id']));
    if(!$archived){
        $archived=1;
    }
    }elseif($status_v=='active'){
    $active=$db->get_all('projects',array('status'=>0,'client_id'=>$clients_details['id']));
     }
}   
 

if(isset($_POST['add_project'])){

    $client_id = $clients_details['id'];
    $project_name = $_POST['project_name'];
    $currency = $_POST['currency'];
    //$per_hour = $_POST['per_hour'];    
      
    if(empty($project_name) ){
    $display="<span uk-icon=\'icon: warning\'></span>Project Name field is empty.";
    $color="danger"; return;
    }else{ 

    $insert_project = $db->insert('projects',array('client_id'=>$client_id,'project_name'=>$project_name,'currency'=>$currency,'created_date'=>time(),'ip_address'=>$_SERVER['REMOTE_ADDR']));

         if($insert_project)
         { 
           $display="<span uk-icon=\'icon: warning\'></span> Add Project Sccessfully.";  
           $color="success"; 
         }
         else{  
         $display="<span uk-icon=\'icon: warning\'></span>problem.";  
         $color="danger";
         }     
     } 
}
if (isset($_REQUEST['archived_id']) && $_REQUEST['archived_id']!=""){ 
$report = $db->update('projects',array('status'=>1),array('id'=>$_REQUEST['archived_id']));
 $session->redirect('project',frontend);
}
if (isset($_REQUEST['delete_id']) && $_REQUEST['delete_id']!=""){ 
$report = $db->delete('projects',array('id'=>$_REQUEST['delete_id']));
 $session->redirect('project',frontend);
}
if (isset($_REQUEST['restore_id']) && $_REQUEST['restore_id']!=""){ 
$report = $db->update('projects',array('status'=>0),array('id'=>$_REQUEST['restore_id']));
 $session->redirect('project',frontend);  
 
   }

?>