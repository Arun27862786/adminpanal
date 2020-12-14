<?php 
if (isset($_REQUEST['id']) && $_REQUEST['id']!=""){
   $get_data = $db->get_row('knowledge',array('id'=>$_REQUEST['id']));
    } 
if(isset($_POST['add_answer'])){   
 $answer=$_POST['answer']; 
 $htmlcode = htmlentities($answer);
   if(empty($answer)) 
    { 
      $display="<span uk-icon=\'icon: warning\'></span>Answer can not be empty.";
       $color="danger"; return;
    }else{
    $insert_answer = $db->insert('know_reply',array('knowledge_id'=>$get_data['id'],'client_id'=>$clients_details['id'],'answer'=>$htmlcode,'create_date'=>time(),'ip_address'=>$_SERVER['REMOTE_ADDR']));
 
      }
    if($insert_answer){
   $display="<span uk-icon=\'icon: check\'></span> Successfull Data Inserted.";
   $color="success"; return;
    }else{
    }
    else{
    	$display="<span uk-icon=\'icon: warning\'></span> Problem in Insertion.";
      $color="danger";return;
    }else{
    }
}$var=$get_data['id'];

  $sql = "SELECT * FROM `know_reply` WHERE `knowledge_id`=$var ORDER BY `know_reply`.`time_stamp` ASC";

    $get_reply = $db->run($sql)->fetchAll();

$all_reply=$db->get_count('know_reply',array('knowledge_id'=>$var));
 
?> 