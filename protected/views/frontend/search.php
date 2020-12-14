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
	<?php } $sn=1; ?>     	 
<div class="content-padder content-background">          
            <div class="uk-section-small uk-padding-medium-top">
                <div class="uk-container uk-container-large">  
 <div class="uk-card uk-card-default uk-padding-small">
            <h2>Search Result</h2>
         <hr>  
         <h3>Search Result For:"<?php echo $question;?>"</h3>             
        <?php 
        if(is_array($get_data)){
            foreach ($get_data as $get_datas){
             ?>  
<div class="uk-child-width-1-2@s uk-text-center" uk-grid>
	<div>
        <div class="uk-box-shadow-medium uk-padding"><a href="<?php echo $link->link('know_reply',frontend,'?id='.$get_datas['id']);?>" ><?php echo $get_datas['question'];?></a>
    </div>
    </div>
        
</div>  
            <?php  }}?> 
</div>
            </div>
        </div>
    </div> 
</div>
