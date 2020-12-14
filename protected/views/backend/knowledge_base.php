<?php if($display!=''){?><script>
	$( document ).ready(function() {
		UIkit.notification({
		    message: '<?php echo $display;?>',
		    status: '<?php echo $color;?>',
		    pos: 'top-right',
		    timeout: 5000
		});		      
	});   
	</script>    
	<?php }?>      
	<?php $sno=1; ?> 
<div class="content-padder content-background">          
            <div class="uk-section-small uk-padding-medium-top">
                <div class="uk-container uk-container-large">  
 <div class="uk-card uk-card-default uk-padding-small">
    <div uk-grid> 
            <div class="uk-width-expand@m"> 
             <legend class="uk-legend">Knowledge Base</legend>
      </div>
     <div class="uk-width-auto@m">
        <a  href="<?php echo $link->link('add_knowledge',backend);?>" class="uk-button uk-button-primary uk-border-rounded"><span uk-icon="icon: pencil"></span>Add New Record</a>
     </div>
 </div>
   <hr class="uk-divider-icon">
       <div class="uk-overflow-auto">
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
        <thead>
            <tr>
                <th class="uk_table_css">S.No.</th>
                <th >Department</th>
                <th >Question</th>  
                <th >Total Answer</th>  
                 <th >Action</th> 
            </tr>
        </thead>
        <tbody>
        
        <?php  
        if(is_array($knowledges)){  
            foreach ($knowledges as $knowledge){
        $all_reply=$db->get_count('know_reply',array('knowledge_id'=>$knowledge['id']));
             ?>    
           <tr>
                <td ><?php echo $sno++;?></td>  
                <td><?php echo $knowledge['department'];?></td>               
                <td><?php echo $knowledge['question'];?></td> 
                <td><?php echo $all_reply;?></td>  
                <td class="uk-text-nowrap"><ul class="uk-iconnav">
   <!-- 
    <li ><a href="<?php echo $link->link('update_knowledge',backend,'?id='.$knowledge['id']);?>" class=" uk-text-primary uk-button uk-button-default uk-button-small" uk-icon="icon: file-edit">Edit</a></li>

    <li ><a href="<?php echo $link->link('know_reply',backend,'?id='.$knowledge['id']);?>" class=" uk-text-success uk-button uk-button-default uk-button-small" uk-icon="icon: file-edit">Reply</a></li>
   
    <li><a href="<?php echo $link->link('knowledge_base',backend,'?knowledgeid='.$knowledge['id']);?>" class="uk-text-danger uk-button uk-button-default uk-button-small" uk-icon="icon: trash" onclick="return confirm('Are you sure to Delete')" >Delete</a></li> -->

<li ><div class="uk-button-group"> 
    <div class="uk-inline">
        <button class="uk-button uk-button-default" type="button"><span uk-icon="icon:  triangle-down"></span></button>
        <div uk-dropdown="mode: click; boundary: ! .uk-button-group; boundary-align: true; pos: left-center"> 
            <ul class="uk-nav uk-dropdown-nav">  
            <li class="uk-nav-header"><a  class="uk-text-primary" href="<?php echo $link->link('update_knowledge',backend,'?id='.$knowledge['id']);?>"  uk-icon="icon: file-edit">Edit</a></li>

            <li class="uk-nav-header"><a  class="uk-text-primary" href="<?php echo $link->link('know_reply',backend,'?id='.$knowledge['id']);?>"  uk-icon="icon: file-edit">Reply</a></li>

             <li class="uk-nav-header"><a class="uk-text-danger"  href="<?php echo $link->link('knowledge_base',backend,'?knowledgeid='.$knowledge['id']);?>" onclick="return confirm('Are you sure to Delete')"  uk-icon="icon: trash">Delete</a></li>
            </ul>
        </div>
    </div>
    
</div></li>

</ul></td>                 
            </tr>
            <?php  }}  ?>
        </tbody>
    </table>
                 </div>
                </div>
            </div>
        </div>
</div> 
 