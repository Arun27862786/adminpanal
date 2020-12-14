<?php
if(isset($_POST['name'])){
    $name = $_POST['name'];     
  
    if(empty($name) ){
        $display="<span uk-icon=\'icon: warning\'></span> Oh Snap ! Search field is empty.";
        $color="danger"; return;
   } 
   else{ 
    $find = $db->get_all('knowledge',array('question'=>$name));
      }         
         if($find)
         { 
             $display="<span uk-icon=\'icon: warning\'></span>  Sccessfull client added.";  
            $color="success";
             //$session->redirect('search/?question='.$name,frontend);

            ?>  
<script type="text/javascript">window.location="<?php echo $link->link('search',frontend,'?question='.$name);?>"</script>
            <?php
      
        }else{  
         $display="<span uk-icon=\'icon: warning\'></span>No Record.";  
         $color="danger";
         }         
 }
?>
