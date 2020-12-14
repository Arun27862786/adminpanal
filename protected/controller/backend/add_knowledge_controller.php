<?php   
$get_all_departments  = $db->get_all('departments'); 
if(isset($_POST['add_knowledge'])){   
  
 $department=$_POST['department'];  
 $question=$_POST['question'];
 $answer=$_POST['answer'];
 
  if(empty($department) )
    {    $display="<span uk-icon=\'icon: warning\'></span>Department can not be empty.";
        $color="danger";   return;
   }
   elseif(empty($question)) 
     { 
       $display="<span uk-icon=\'icon: warning\'></span>Question can not be empty.";
              $color="danger"; return;
     }
    elseif(empty($answer)) 
    { 
      $display="<span uk-icon=\'icon: warning\'></span>Answer can not be empty.";
             $color="danger";  return;
    }else{
    $insert_knowledge = $db->insert('knowledge',array('user_id'=>$user_details['user_id'],'department_id'=>$department,'question'=>$question,'create_date'=>time(),'ip_address'=>$_SERVER['REMOTE_ADDR']));

 $id =  $db->insert_id;

 $insert_answer = $db->insert('know_reply',array('knowledge_id'=>$id,'user_id'=>$user_details['user_id'],'answer'=>$answer,'create_date'=>time(),'ip_address'=>$_SERVER['REMOTE_ADDR']));
      }
    if($insert_answer){
   $display="<span uk-icon=\'icon: check\'></span> Successfull Data Inserted.";
   $color="success"; 
    }
    else{
    	$display="<span uk-icon=\'icon: warning\'></span> Problem in Insertion.";
      $color="danger";
    }
}
?>