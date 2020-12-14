 <?php
 $get_all_user = $db->get_all('users');
if(isset($_REQUEST['ticketid']) && $_REQUEST['ticketid']!="")
{
$getticket = $db->get_row('ticket',array('id'=>$_REQUEST['ticketid']));
}  
$tik = $_REQUEST['ticketid'];
   $sql = "SELECT * FROM `ticket_reply` WHERE `ticket_id`=$tik ORDER BY `ticket_reply`.`time_stamp` ASC";

    $getticket_rep = $db->run($sql)->fetchAll(); 
 
if (isset($_POST['update_btn'])) { 
 
    $ticket_id = $_POST['ticket_id'];    
    $status = $_POST['status'];
	$description = $_POST['description'];
    $priority = $_POST['priority'];
   
  if(empty($description) ){
        $display="<span uk-icon=\'icon: warning\'></span>Description can not be empty.";
        $color="danger"; return;
   }elseif(empty($priority)) 
    { 
        $display="<span uk-icon=\'icon: warning\'></span>Priority can not be empty."; 
             $color="danger";        return;
    }else{
    	$update_Ticket = $db->update('ticket',array( 'status'=>$status,'priority'=>$priority),array('id'=> $ticket_id));

     $insert_Ticket_reply = $db->insert('ticket_reply',array('ticket_id'=>$ticket_id,'client_id'=>$clients_details['id'],'description'=>$description,'create_date'=>time(),'ip_address'=>$_SERVER['REMOTE_ADDR']));
    }
    if($insert_Ticket_reply){
    	$display="<span uk-icon=\'icon: check\'></span> Successfull Ticket Updated.";
             $color="success";
    }
    else{
    	$display="<span uk-icon=\'icon: warning\'></span> Problem Ticket Updation.";
             $color="danger";return;
    }

     $email = $_POST['email_name']; 
    $subject = $getticket['subject'];     
    $message = $_POST['description']; 
    $clientEmail =$clients_details['email'];

      //   $header = "From:Arun@somedomain.com \r\n";
         $headers= "From:<$clientEmail;>\r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";

         if($email==''){
        $display='<div class="uk-alert-danger" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>Email can not be empty.</p>
            </div>';
       }elseif(empty($subject)){ 
      $display="<span uk-icon=\'icon: warning\'></span>Subject can not be empty.";
      $color="danger";  return;
    }elseif(empty($message)){ 
      $display="<span uk-icon=\'icon: warning\'></span>Message can not be empty.";
      $color="danger";
         return;
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
       {      
         $display="<span uk-icon=\'icon: warning\'></span>Email Not valid.";
         $color="danger";
       }
         else{ 
            $retval = mail ($email,$subject,$message,$header);
         
             if( $retval == true ) {
         $display="<span uk-icon=\'icon: success\'></span>Successfull Ticket Inserted..";
         $color="success";
         $insert = $db->insert("notification",array('client_id'=>$clients_details['id'],'user_email'=>$email));
                           
             }
             else {
                         
         $display="<span uk-icon=\'icon: warning\'></span>Email Not send.";
         $color="danger";
                     } 
                   }	 
} 
?>