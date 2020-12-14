<?php
$all_tickets=$db->get_count('ticket');
$all_knowledge=$db->get_count('knowledge');
$open_tickets=$db->get_count('ticket',array('status'=>'open'));
$close_tickets=$db->get_count('ticket',array('status'=>'closed')); 
?>
 
