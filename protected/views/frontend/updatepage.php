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
  <h3>Update a Value in pages table</h3>
 <h3> <p class="message"></p></h3>
  <form id="idForm" method="post" action="<?php echo $link->link('ajax',frontend); ?>" <?php if(!isset($_REQUEST['id']) && $_REQUEST['id']==""){?>class="uk-hidden" <?php }?>>   

  <input type="hidden" name="update_form"  vlaue="update_form"> 

 <label>FirstName</label>
  <div>
   <input class="uk-table-shrink uk-hidden" name="id" type="text"  value="<?php echo $getpage['id'];?>"> 
            <input class="uk-input uk-form-width-large"  name="fname" type="text" placeholder="FirstName" value="<?php echo $getpage['firstname'];?>">
    </br></br>
    </div>
     <label>Lastname</label>
    <div>
    
            <input class="uk-input uk-form-width-large" name="lname" type="text" placeholder="lastname" value="<?php echo $getpage['lastname'];?>">
    </div></br>

     <label>Email</label>
    <div>
    <div class="uk-margin">
            <input class="uk-input uk-form-width-large" name="email" type="email" readonly="readonly" placeholder="lastname" value="<?php echo $getpage['email'];?>">
    </div></div></br>

      <label>Address</label>
    <div> 
       <input class="uk-input uk-form-width-large" name="address" type="text" placeholder="Address" value="<?php echo $getpage['address'];?>">
     
   </div></br>
  <div>
  <button class="uk-button uk-button-primary" type="submit" name="btn">Update</button>
  </div>
</form>
 <hr> 

 <script>
$("#idForm").submit(function(e) {  

    e.preventDefault();  
    var form = $(this);
    var url = form.attr('action');
    var formdata=form.serialize();
 
 $.ajax({
           type: "POST",
           url: url,
           data:formdata,  
           dataType:'json',
           success: function(data)
           {
              // alert(data.msg);
                $(".message").html(data.msg);
                
           }
         });
});
 </script>
  
