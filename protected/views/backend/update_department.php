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
    <?php } ?>    

<div class="content-padder content-background">
<div class="uk-section-small uk-padding-medium-top">
 <div class="uk-container uk-container-large">
 <div class="uk-card uk-card-default uk-padding-small">
<form class="uk-form"  action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data" >
         <div uk-grid>
            <div class="uk-width-expand@m">
             <legend class="uk-legend">Update Department</legend>
      </div>
     <div class="uk-width-auto@m">
        <a  href="<?php echo $link->link('departments',backend);?>" class="uk-button uk-button-danger uk-border-rounded"><span uk-icon="icon: arrow-left"></span> Go Back </a>
     </div>
 </div>       
      <hr> 
 
        <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Department:</label>
        <div class="uk-form-controls">
           <input class="uk-input" type="text"   name="department"  value="<?php echo $get_depart['department'];?>">
        </div>
    </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Description:</label>
        <div class="uk-form-controls">
           <input class="uk-input" type="text" name="description"  value="<?php echo $get_depart['description'];?>">
        </div>
    </div>       
 <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Thumbnail:</label>
        <div class="uk-form-controls">
            <div class="js-upload-profile uk-placeholder uk-text-center">
    <?php if($get_depart['thumbnail']==''){?>
    <span uk-icon="icon: cloud-upload"></span>
<?php }else{?>
<img src="<?php echo SITE_URL.'/uploads/report/'.$get_depart['thumbnail'];?>" width='80' height='60'>
<?php }?></div>     
        <input class="uk-input" type="file" name="thumbnail">   
 </div>
    </div> 

    </div> 
 
    <div class="uk-margin">
        <button type="submit" class="uk-button uk-button-success uk-border-rounded uk-width-1-1@m" name="dp_btn" ><span uk-icon="icon:plus-circle;"></span>Update</button> 
    </div>  
         </form>
       </div>
   </div>
 </div>
</div>

 