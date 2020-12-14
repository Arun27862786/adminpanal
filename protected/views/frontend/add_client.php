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
             <legend class="uk-legend">Add Client Form</legend>
      </div>
     <div class="uk-width-auto@m">
      report
        <a  href="<?php echo $link->link('clients',frontend);?>" class="uk-button uk-button-danger uk-border-rounded"><span uk-icon="icon: arrow-left"></span> Go Back </a>
     </div>
 </div>       
      <hr> 

<div class="uk-child-width-expand@s uk-grid-divider" uk-grid>
    <div>
        <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Name:</label>
        <div class="uk-form-controls">
           <input class="uk-input" type="text" placeholder="Enter Name" name="name">
        </div>
    </div>

     <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Email:</label>
        <div class="uk-form-controls">
           <input class="uk-input" type="Email" placeholder="Enter Email" name="email">
        </div>
    </div>

      <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Password:</label>
        <div class="uk-form-controls">
           <input class="uk-input" type="password" placeholder="Enter Password" name="pass">
        </div>
    </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Phone No:</label>
        <div class="uk-form-controls">
           <input class="uk-input" type="number" minlength="10" maxlength="12" placeholder="Enter Phone No" name="phone">
        </div>
    </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Address:</label>
        <div class="uk-form-controls">
           <input class="uk-input" type="text" placeholder="Enter Address" name="address">
        </div>
    </div>

    </div>
    <div>
       

    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">City:</label>
        <div class="uk-form-controls">
           <input  class="uk-input" type="text" placeholder="Enter City" name="city">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">State:</label>
        <div class="uk-form-controls">
           <input  class="uk-input" type="text" placeholder="Enter State" name="state">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Postcode:</label>
        <div class="uk-form-controls">
           <input  class="uk-input" type="number" min="6"    placeholder="Enter Postcode" name="postcode">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Countries:</label>
        <div class="uk-form-controls">
            <select class="uk-select" name="country">
                <option value="0" label="Select a country ... " selected="selected">Select a country ... </option>
    <?php if(is_array($countryList))foreach($countryList as $key=>$value){?>
    <option value="<?php echo $key;?>" ><?php echo $value;?></option>
<?php }?>
            </select>
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Upload image:</label>
        <div class="uk-form-controls">
           <input  class="uk-input" type="file" name="photo">
        </div>
    </div> 
    </div>
</div>
<hr>
    <div class="uk-margin">
        <button type="submit" class="uk-button uk-button-success uk-border-rounded uk-width-1-1@m" name="addclient_btn" ><span uk-icon="icon:plus-circle;"></span> Add Client </button> 
    </div>
  
         </form>
       </div>
   </div>
 </div>
</div>

















 