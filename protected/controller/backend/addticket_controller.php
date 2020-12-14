<?php  
  $get_all_clients  = $db->get_all('clients'); 
  $get_all_departments  = $db->get_all('departments'); 
if(isset($_POST['ticket_btn'])){  
 $clients_id=$_POST['id']; 
 $department=$_POST['department'];  
 $subject=$_POST['subject'];
 $description=$_POST['description']; 
 $priority=$_POST['priority']; 
 $getclient = $db->get_row('clients',array('id'=>$clients_id)); 

  if(empty($description) )
    {    $display="<span uk-icon=\'icon: warning\'></span>Description can not be empty.";
        $color="danger";   return;
   }
   elseif(empty($clients_id)) 
     { 
       $display="<span uk-icon=\'icon: warning\'></span>Choose clients .";
              $color="danger"; return;
     }
    elseif(empty($priority)) 
    { 
      $display="<span uk-icon=\'icon: warning\'></span>Priority can not be empty.";
             $color="danger"; return;
    }else{
    $insert_Ticket = $db->insert('ticket',array('client_id'=>$clients_id,'department_id'=>$department,'subject'=>$subject,'priority'=>$priority,'status'=>'open','ip_address'=>$_SERVER['REMOTE_ADDR']));

   // $db->debug();
  
   $ticket_id =  $db->insert_id;
  //print_r($ticket_id);

   
   $insert_Ticket_reply = $db->insert('ticket_reply',array('ticket_id'=>$ticket_id,'user_id'=>$user_details['user_id'],'description'=>$description,'create_date'=>time(),'ip_address'=>$_SERVER['REMOTE_ADDR']));

    }
    if($insert_Ticket_reply){
   $display="<span uk-icon=\'icon: check\'></span> Successfull Ticket Inserted.";
   $color="success"; 
    }
    else{
    	$display="<span uk-icon=\'icon: warning\'></span> Problem in  Tickets Insertion.";
      $color="danger";
    }
}
?>