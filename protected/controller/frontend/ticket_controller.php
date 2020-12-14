 <?php

$client_id = $clients_details['id']; 
 
$sql = "SELECT ticket.id,ticket.subject,ticket.department_id,ticket.status,ticket.priority,ticket.timestamp,ticket.update_time,clients.name FROM ticket INNER JOIN clients ON clients.id=ticket.client_id WHERE ticket.client_id='$client_id'";    
 $insert = $db->run($sql);  
       $result1 = $insert->fetchAll();
         
       $tickets = $result1;
       

  if (isset($_REQUEST['ticket_id']) && $_REQUEST['ticket_id']!=""){
    $delete_ticket = $db->delete('ticket',array('id'=>$_REQUEST['ticket_id']));

    $delete_ticket_reply = $db->delete('ticket_reply',array('ticket_id'=>$_REQUEST['ticket_id']));

    if($delete_ticket_reply){
        $session->redirect('ticket',frontend);
   
   } 
}

?>     