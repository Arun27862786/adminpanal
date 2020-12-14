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
            <h2>Knowledge Base</h2>
         <hr>
        <form  method="post" action="<?php $_SERVER['PHP_SELF'];?>" >  
   <center>
 <div class="uk-margin"><h1>How can we help?</h1> 
 <input class="uk-input uk-width-1-2" name="name"  type="text" placeholder="Search">
    </div></center>
 <input type="submit" style="visibility: hidden;" />
   </form>
            </div>
        </div>
    </div> 
</div>
