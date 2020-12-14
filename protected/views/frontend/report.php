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
             <legend class="uk-legend"> All Reports</legend>
      </div>
     <div class="uk-width-auto@m">
        <a  href="<?php echo $link->link('addreport',frontend);?>" class="uk-button uk-button-primary uk-border-rounded"><span uk-icon="icon: pencil"></span> Add Report </a>
     </div>
 </div>
  <hr class="uk-divider-icon">
  
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
        <thead>
            <tr>
                <th class="uk_table_css">S.No.</th> 
               <!--  <th >Client Name</th> -->
                <th >Report Description</th>
                <th >File name</th> 
                 <th >Download</th> 
                 <th >Action</th> 
            </tr>
        </thead>
        <tbody>
        
        <?php 
        if(is_array($report)){ 
            foreach ($report as $reports){
             ?>    
           <tr>
               <td ><?php echo $sno++;?></td>
               <!--  <td><?php echo $reports['name'];?></td> -->
                <td><?php echo $reports['description'];?></td>
                <td><?php echo $reports['report_file'];?></td> 
                <td> <a href="<?php echo SITE_URL.'/uploads/report/'.$reports['report_file'];?>" download>Download </a></td>
                <td class="uk-text-nowrap"><ul class="uk-iconnav">
   
    <!-- <li><a href="<?php echo $link->link('update_ticket',backend,'?id='.$ticket['id']);?>" uk-icon="icon: file-edit"></a></li>
    -->
    <!-- <li><a href="<?php echo $link->link('report',frontend,'?reportid='.$reports['id']);?>" uk-icon="icon: trash"onclick="return confirm('Are you sure to Delete')" ></a></li> -->

     <li ><div class="uk-button-group"> 
    <div class="uk-inline">
        <button class="uk-button uk-button-default" type="button"><span uk-icon="icon:  triangle-down"></span></button>
        <div uk-dropdown="mode: click; boundary: ! .uk-button-group; boundary-align: true; pos: left-center"> 
            <ul class="uk-nav uk-dropdown-nav">  
          <li class="uk-nav-header"><a class="uk-text-danger"  href="<?php echo $link->link('report',frontend,'?reportid='.$reports['id']);?>" onclick="return confirm('Are you sure to Delete')"  uk-icon="icon: trash">Delete</a></li>
            </ul>
        </div>
    </div>
    
</div></li>
</ul></td>                 
            </tr>
            <?php  }}?> 
        </tbody>
    </table>
</div>
</div>
</div>
</div>

<script> 