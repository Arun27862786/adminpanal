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
    <div class="uk-section-small">
    <div class="uk-container uk-container-large">                    
    <div class="uk-card uk-card-default uk-padding-small">
 <h2>Site Setting</h2>
<hr >
 
</div>
  <div class="uk-container uk-container-expand uk-margin-small-left uk-margin-small-right uk-margin-small-top uk-margin-small-bottom ">
   
<form method="post" class="uk-form-horizontal uk-margin-large" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">  
<div class=" uk-child-width-expand@s " uk-grid> 
   <div>
   <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Company Name</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="name" type="text" placeholder="Company Name" value="<?php echo $settings['name'];?>">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Company Email</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="email" type="text" placeholder="Company Email" value="<?php echo $settings['email'];?>">
        </div>
    </div>
    
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Company Website</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="website" type="text" placeholder="Company Website" value="<?php echo $settings['website'];?>">
        </div>
    </div>
    
     <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Address</label>
        <div class="uk-form-controls">
            <textarea class="uk-textarea" name="address" placeholder="Address"><?php echo html_entity_decode($settings['address']);?></textarea>
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Countries</label>
        <div class="uk-form-controls">
            <select class="uk-select" name="country">
                <option value="0" label="Select a country ... " selected="selected">Select a country ... </option>
    <?php if(is_array($countryList))foreach($countryList as $key=>$value){?>
    <option value="<?php echo $key;?>" <?php if($key==$settings['country']) echo "selected";?> ><?php echo $value;?></option>
<?php }?>
            </select>
        </div>
    </div>
<div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">State</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="state" type="text" placeholder="Sate" value="<?php echo $settings['state'];?>">
        </div>
    </div>
    
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">City</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="city" type="text" placeholder="City" value="<?php echo $settings['city'];?>">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Zip</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="zip" type="text" placeholder="Zip" value="<?php echo $settings['zip'];?>">
        </div>
    </div>
<div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Timezone</label>
        <div class="uk-form-controls">
            <select class="uk-select" name="timezone">
                <?php
$timezones=$feature->get_timezones();
if(is_array($timezones)) foreach ($timezones as $key=>$value){?>
                  <option value="<?php echo $value['zone'];?>" <?php if($settings['timezone']==$value['zone'])echo "selected";?>><?php echo $value['zone']." ( ".$value['diff_from_GMT']." )";?></option>
                  <?php }?>
            </select>
        </div>
    </div>

   </div>
  <div>
  <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Date Format</label>
        <div class="uk-form-controls">
            <select class="uk-select" name="dateformat">
                <option value="1" <?php if($settings['date_format']==1)echo "selected";?>>DD/MM/YY</option>
              <option value="2" <?php if($settings['date_format']==2)echo "selected";?>>MM/DD/YY</option>
              <option value="3" <?php if($settings['date_format']==3)echo "selected";?>>Day-Month-Year(29th-may-1985)</option>
            </select>
        </div>
    </div>
  <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Telephone 1</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="telephone1" type="text" placeholder="Telephone 1" value="<?php echo $settings['telephone1'];?>">
        </div>
    </div>
  <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Telephone 2</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="telephone2" type="text" placeholder="Telephone 1" value="<?php echo $settings['telephone2'];?>">
        </div>
    </div>
  <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Currency Symbol</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="currencysymbol" type="text" placeholder="Currency Symbol" value="<?php echo $settings['currency_symbol'];?>">
        </div>
    </div>
    
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">No of days(Remember me)</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="cookie_expire" type="text" placeholder="" value="<?php echo $settings['cookie_expire'];?>">
        </div>
    </div>
   
   <div class="js-upload1 uk-placeholder uk-text-center">
    <?php if($settings['logo']==''){?>
    <span uk-icon="icon: cloud-upload"></span>
<?php }else{?>
<img src="<?php echo SITE_URL.'/uploads/logo/'.$settings['logo'];?>">
<?php }?>
    <span class="uk-text-middle" id="updated">Site Logo. Attach</span>
    <div uk-form-custom>
        <input  type="file" name="logo" > 
        <span class="uk-link">or click to select one</span>
    </div>
</div>

<progress id="js-progressbar1" class="uk-progress" value="0" max="100" hidden></progress>


<div class="js-upload2 uk-placeholder uk-text-center">
<?php if($settings['pdflogo']==''){?>
    <span uk-icon="icon: cloud-upload"></span>
<?php }else{?>
<img src="<?php echo SITE_URL.'/uploads/pdflogo/'.$settings['pdflogo'];?>">
<?php }?>
    
    <span class="uk-text-middle" id="updatedpdf">PDF/Print Logo. Attach</span>
    <div uk-form-custom>
        <input type="file" name="pdflogo" >
        <span class="uk-link">or click to select one</span>
    </div>
</div>
<progress id="js-progressbar2" class="uk-progress" value="0" max="100" hidden></progress>

  </div>
  </div>
  <hr>
  <button class="uk-button uk-button-primary uk-width-1-1 uk-button-large uk-margin-small-bottom" name="submit_settings">Update</button>
   </form>
   
   </div>
</div>
</div>
</div>

     

            
            

