<?php
$clients=$db->get_all('clients');  

$sql = "SELECT projects.id,projects.client_id,projects.project_name,projects.time_stamp,projects.status,invoices.final_amount,invoices.due_amount FROM projects LEFT JOIN invoices ON invoices.project_id=projects.id where projects.status=0";  
 $project = $db->run($sql)->fetchAll(); 
   

//$project=$db->get_all('projects',array('status'=>0));
 
 if (isset($_REQUEST['status_v']) && $_REQUEST['status_v']!=""){ 
 	  $status_v = $_REQUEST['status_v'];
 	if($status_v=='archived'){ 

    $sql = "SELECT projects.id,projects.client_id,projects.project_name,projects.time_stamp,projects.status,invoices.final_amount,invoices.due_amount FROM projects LEFT JOIN invoices ON invoices.project_id=projects.id where projects.status=1";  
 $archived = $db->run($sql)->fetchAll(); 

    //$archived=$db->get_all('projects',array('status'=>1));
    if(!$archived){
        $archived=1;
    }
    }elseif($status_v=='active'){
        $sql = "SELECT projects.id,projects.client_id,projects.project_name,projects.time_stamp,projects.status,invoices.final_amount,invoices.due_amount FROM projects LEFT JOIN invoices ON invoices.project_id=projects.id where projects.status=0";  
 $active = $db->run($sql)->fetchAll();

    //$active=$db->get_all('projects',array('status'=>0));
     }
} 


if(isset($_POST['add_project'])){

    $client_id = $_POST['client_id'];
    $project_name = $_POST['project_name'];
    $currency = $_POST['currency'];
    //$per_hour = $_POST['per_hour'];    
      
    if(empty($project_name) ){
    $display="<span uk-icon=\'icon: warning\'></span>Project Name field is empty.";
    $color="danger"; return;
    }else{ 

    $insert_project = $db->insert('projects',array('user_id'=>$user_details['user_id'],'client_id'=>$client_id,'project_name'=>$project_name,'currency'=>$currency,'created_date'=>time(),'ip_address'=>$_SERVER['REMOTE_ADDR']));

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
 $session->redirect('project',backend);
}
if (isset($_REQUEST['delete_id']) && $_REQUEST['delete_id']!=""){ 
$report = $db->delete('projects',array('id'=>$_REQUEST['delete_id']));
 $session->redirect('project',backend);
}
if (isset($_REQUEST['restore_id']) && $_REQUEST['restore_id']!=""){ 
$report = $db->update('projects',array('status'=>0),array('id'=>$_REQUEST['restore_id']));
 $session->redirect('project',backend);  
 
   }

?>