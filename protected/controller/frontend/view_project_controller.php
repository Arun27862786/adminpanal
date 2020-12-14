<?php 
 if (isset($_REQUEST['view_id']) && $_REQUEST['view_id']!=""){ 
 	 
$project=$db->get_row('projects',array('id'=>$_REQUEST['view_id']));

$clients=$db->get_row('clients',array('id'=>$project['client_id']));

$cli=$clients['id'];
$sql = "SELECT invoices.status,invoices.due_date,invoices.final_amount,invoices.due_amount,projects.client_id,projects.project_name FROM invoices LEFT JOIN projects ON invoices.project_id=projects.id WHERE projects.client_id='$cli'";  
   
 $invoices = $db->run($sql)->fetchAll(); 


// $invoices = $db->get_all('invoices',array('client_id'=>$clients['id']));


}  

  $tickets = $db->get_all('ticket',array('client_id'=>$clients['id'],'status'=>'open'));

  

  if (isset($_REQUEST['archive_id']) && $_REQUEST['archive_id']!=""){ 

$report = $db->update('projects',array('status'=>1),array('id'=>$_REQUEST['archive_id']));
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