 <?php  

$sql = "SELECT ticket.id,ticket.subject,ticket.department_id,ticket.timestamp,ticket.update_time,ticket.priority,ticket.status,clients.name FROM ticket LEFT JOIN clients ON ticket.client_id=clients.id ";  
  $insert = $db->run($sql);   
  $tickets = $insert->fetchAll();   
  $get_all_clients  = $db->get_all('clients'); 

// $sql1 = "SELECT ticket.id,ticket.subject,ticket.timestamp,ticket.update_time,ticket.priority,ticket.status,users.firstname,users.lastname FROM ticket LEFT JOIN users ON ticket.user_id=users.user_id WHERE ticket.client_id =0";  
//   $insert1 = $db->run($sql1);   
//   $tickets1 = $insert1->fetchAll();   
//   $get_all_users  = $db->get_all('users');

if (isset($_REQUEST['ticketid']) && $_REQUEST['ticketid']!="")
{
    $delete_reports = $db->delete('ticket',array('id'=>$_REQUEST['ticketid']));
    $delete_ticket_reply = $db->delete('ticket_reply',array('ticket_id'=>$_REQUEST['ticketid']));
    if($delete_ticket_reply){
        $session->redirect('ticket',backend);
   } 
}
    
 ?>    
         