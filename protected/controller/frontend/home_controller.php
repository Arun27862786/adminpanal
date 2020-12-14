<?php
$all_knowledge=$db->get_count('knowledge');
$all_tickets=$db->get_count('ticket',array('client_id'=>$clients_details['id']));
$open_tickets=$db->get_count('ticket',array('status'=>'open','client_id'=>$clients_details['id']));
$close_tickets=$db->get_count('ticket',array('client_id'=>$clients_details['id'],'status'=>'closed')); 
?>

 