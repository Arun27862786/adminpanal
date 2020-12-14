 <?php
$sql = "SELECT ticket.id,ticket.subject,ticket.department_id,ticket.timestamp,ticket.update_time,ticket.priority,ticket.status,clients.name FROM ticket LEFT JOIN clients ON ticket.client_id=clients.id where ticket.status='closed'";  
  
//$query = $db->run($sqq);
 $insert = $db->run($sql); 
 $tickets = $insert->fetchAll();
 
$get_all_clients  = $db->get_all('clients');

if (isset($_REQUEST['ticketid']) && $_REQUEST['ticketid']!=""){
    $delete_reports = $db->delete('ticket',array('id'=>$_REQUEST['ticketid']));
    if($delete_reports){
        $session->redirect('ticket',backend);
   
   } }
  
 ?>  
         