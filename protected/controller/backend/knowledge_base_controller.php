 <?php  
 $sql = "SELECT knowledge.id,knowledge.question,departments.department FROM knowledge LEFT JOIN departments ON knowledge.department_id=departments.id";  
  $insert = $db->run($sql);   
  $knowledges = $insert->fetchAll();      

if (isset($_REQUEST['knowledgeid']) && $_REQUEST['knowledgeid']!="")
{
    $delete_reports = $db->delete('knowledge',array('id'=>$_REQUEST['knowledgeid']));
    if($delete_reports){
        $session->redirect('knowledge_base',backend);
   } 
}    

 ?>    
          