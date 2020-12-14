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
  <div class="content-padder content-background">
  <div class="uk-section-small uk-padding-medium-top">
   <div class="uk-container uk-container-large">
 <div class="uk-card uk-card-default uk-padding-small">
 
<div class="uk-grid">

 <div class="uk-width-expand@m">
 <h3>All Clients</h3> 
</div>
   <div class="uk-text-right"><a class="uk-button uk-button-primary uk-border-rounded" href="<?php echo $link->link('add_client',frontend);?>" ><span uk-icon="icon: user"></span>Add Client</a></div>
</div>  


<hr class="uk-divider-icon">

  <div class="uk-container uk-container-expand uk-margin-small-left uk-margin-small-right uk-margin-small-top uk-margin-small-bottom ">
  
  <form method="post" action="<?php $_SERVER['PHP_SELF'];?>" <?php if(!isset($_REQUEST['id']) && $_REQUEST['id']==""){?>class="uk-hidden" <?php }?>> 
  <div class=" uk-child-width-expand@s uk-grid-divider" uk-grid> 
 
  <div> 
   
 <div class="uk-margin">
            <input class="uk-input"  name="name" type="text" placeholder="Name" value="<?php echo $getclient['name'];?>">
    </div>
    </div>
    <div>
    <div class="uk-margin">
            <input class="uk-input" name="email" type="text" readonly="readonly"  placeholder="Email" value="<?php echo $getclient['email'];?>">
    </div></div>
    <div>
    <div class="uk-margin">
            <input class="uk-input"  name="phone" type="text" placeholder="Phone" value="<?php echo $getclient['phone'];?>">
    </div></div>
    <div>
    <div class="uk-margin">
            <textarea class="uk-textarea"  name="address" placeholder="Address"value="<?php echo $getclient['address'];?>"></textarea>
    </div>
   
  </div> 
  <div>
  <button class="uk-button uk-button-primary" type="submit" name="update_client">Update</button>
  </div>
  
  </div>
   <hr>
   </form>
   
  
   
  <div class="uk-overflow-auto">
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        
        <?php $sn=1;
        if(is_array($get_all_clients)){
            foreach ($get_all_clients as $client){
              $depart=$db->get_row('departments',array('id'=>$client['department_id']));
             ?>   
           <tr>
                <td><?php echo $sn++;?></td>
                <td><?php echo $client['name'];?></td>
                <td><?php echo $depart['department'];?></td>
                <td><?php echo $client['email'];?></td>
                <td><?php echo $client['phone'];?></td>
                <td class="uk-text-truncate"><?php echo $client['address'];?></td>
                
                <td class="uk-text-nowrap"><ul class="uk-iconnav">

                  <li ><div class="uk-button-group"> 
    <div class="uk-inline">
        <button class="uk-button uk-button-default" type="button"><span uk-icon="icon:  triangle-down"></span></button>
        <div uk-dropdown="mode: click; boundary: ! .uk-button-group; boundary-align: true; pos: left-center"> 
            <ul class="uk-nav uk-dropdown-nav">  
            <li class="uk-nav-header"><a  class="uk-text-primary" href="<?php echo $link->link('update_client',frontend,'?id='.$client['id']);?>"  uk-icon="icon: file-edit">Edit</a></li>

             <li class="uk-nav-header"><a class="uk-text-danger"  href="<?php echo $link->link('clients',frontend,'?delete_id='.$client['id']);?>" onclick="return confirm('Are you sure to Delete')"  uk-icon="icon: trash">Delete</a></li>
    
</ul></td>  
            </tr>
            <?php  }}?> 
        </tbody>
    </table>
</div>
  
  
</div>
</div>
</div>
</div>
  
