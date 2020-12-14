</div></body>
 <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>

  <script>
    ClassicEditor.create( document.querySelector( '#editor1') );
    ClassicEditor.create( document.querySelector( '#editor2') );
  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.min.js"></script>
 <!-- Required Overall Script -->
 <script src="<?php echo SITE_URL.'/assets/frontend/js/script.js';?>"></script>
        
<!-- Table -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.uikit.min.js"></script> 


<script>

<script>
//file upload 
   var bar = document.getElementById('js-progressbar1');
    UIkit.upload('.js-upload1', { 
        url: '<?php echo $link->link('ajax',frontend,'&type=logo');?>',
        multiple: false,       
        beforeSend: function () { 
            console.log('beforeSend', arguments);
        },
        beforeAll: function () {
            console.log('beforeAll', arguments);
        },
        load: function () {
            console.log('load', arguments);
        },
        error: function () {
            console.log('error', arguments);
        },
        complete: function () {
            console.log('complete', arguments);           
        },

        loadStart: function (e) {
            console.log('loadStart', arguments);

            bar.removeAttribute('hidden');
            bar.max = e.total;
            bar.value = e.loaded;
        },

        progress: function (e) {
            console.log('progress', arguments);

            bar.max = e.total;
            bar.value = e.loaded;
        },

        loadEnd: function (e) {
            console.log('loadEnd', arguments);

            bar.max = e.total;
            bar.value = e.loaded;
        },

        completeAll: function () {
            console.log('completeAll', arguments);

            setTimeout(function () {
                bar.setAttribute('hidden', 'hidden');
            }, 1000);
           
            UIkit.notification({
    		    message: '<span uk-icon=\'icon: check\'></span> Site logo updated',
    		    status: 'success',
    		    pos: 'top-right',
    		    timeout: 5000
    		});
    		$("#updated").html('Site Logo Updated. Refresh this page to load the image');
        }
    });   
    var bar2 = document.getElementById('js-progressbar2');
    UIkit.upload('.js-upload2', {
        url: '<?php echo $link->link('ajax',frontend,'&type=pdflogo');?>',
        multiple: false,

        beforeSend: function () {
            console.log('beforeSend', arguments);
        },
        beforeAll: function () {
            console.log('beforeAll', arguments);
        },
        load: function () {
            console.log('load', arguments);
        },
        error: function () {
            console.log('error', arguments);
        },
        complete: function () {
            console.log('complete', arguments);
        },

        loadStart: function (e) {
            console.log('loadStart', arguments);

            bar2.removeAttribute('hidden');
            bar2.max = e.total;
            bar2.value = e.loaded;
        },

        progress: function (e) {
            console.log('progress', arguments);

            bar2.max = e.total;
            bar2.value = e.loaded;
        },

        loadEnd: function (e) {
            console.log('loadEnd', arguments);

            bar2.max = e.total;
            bar2.value = e.loaded;
        },

        completeAll: function () {
            console.log('completeAll', arguments);

            setTimeout(function () {
                bar2.setAttribute('hidden', 'hidden');
            }, 1000);

            UIkit.notification({
    		    message: '<span uk-icon=\'icon: check\'></span> Pdf logo updated',
    		    status: 'success',
    		    pos: 'top-right',
    		    timeout: 5000
    		});
            $("#updatedpdf").html('PDF Logo Updated. Refresh this page to load the image');
        }
    }); 
//profile image upload
  
    var bar3 = document.getElementById('js-progressbar-profile');
    UIkit.upload('.js-upload-profile', {

        url: '<?php echo $link->link('ajax',frontend,'&type=profile&id='.$_SESSION['user_id']);?>',
        multiple: false,

        beforeSend: function () {
            console.log('beforeSend', arguments);
        },
        beforeAll: function () {
            console.log('beforeAll', arguments);
        },
        load: function () {
            console.log('load', arguments);
        },
        error: function () {
            console.log('error', arguments);
        },
        complete: function () {
            console.log('complete', arguments);
        },

        loadStart: function (e) {
            console.log('loadStart', arguments);

            bar3.removeAttribute('hidden');
            bar3.max = e.total;
            bar3.value = e.loaded;
        },

        progress: function (e) {
            console.log('progress', arguments);

            bar3.max = e.total;
            bar3.value = e.loaded;
        },
        loadEnd: function (e) {
            console.log('loadEnd', arguments);

            bar3.max = e.total;
            bar3.value = e.loaded;
        },
        completeAll: function () {
            console.log('completeAll', arguments);

            setTimeout(function () {
                bar3.setAttribute('hidden', 'hidden');
            }, 1000);

            UIkit.notification({
    		    message: '<span uk-icon=\'icon: check\'></span> Profile images updated',
    		    status: 'success',
    		    pos: 'top-right',
    		    timeout: 5000
    		});
            $("#updatedprofile").html('Profile Image Updated. Refresh this page to load the image');
        }
    });    
// end file upload  
</script> 
    
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.uikit.min.js"></script>   
<script>
$(document).ready(function() {
     $('.uk-table').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
function ValidateEmail(email) {
    var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    return expr.test(email);
}
$(document).ready(function() {
    $("#submit_client").click(function(){
    	$(".spinner-client").removeClass('uk-hidden');    	
      var name = $("#name").val();
      var email = $("#email").val();
      var phone = $("#phone").val();
      var address = $("#address").val();
      if(name==""){
    	  setTimeout(function(){  $(".spinner-client").addClass('uk-hidden'); }, 3000);    	 
    	  UIkit.notification({
    		    message: '<span uk-icon=\'icon: warning\'></span> Oh Snap ! Name Field Can Not Be Empty',
    		    status: 'danger',
    		    pos: 'top-right',
    		    timeout: 5000
    		});
          }
      else{    	   	      
  	        $.ajax({
  	            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
  	            url         : '<?php echo $link->link('ajax',frontend);?>', // the url where we want to POST
  	            data        : 'addClient='+name+"&email="+email+"&phone="+phone+"&address="+address, // our data object  	            
    	        success: function(data, textStatus, jqXHR) {                   
                    	setTimeout(function(){  $(".spinner-client").addClass('uk-hidden'); }, 3000);
                    	UIkit.notification({
                		    message: '<span uk-icon=\'icon: check\'></span> Success ! Client added successfully.',
                		    status: 'success',
                		    pos: 'top-right',
                		    timeout: 5000
                		});
$('.uk-modal-close').trigger('click');                    	
var table = $('.uk-table').DataTable();
table.column( 0 ).visible( false );
table.row.add( {
        "0": data, 
        "1": name,
        "2": email,
        "3": phone,
        "4": address,
	    "5": '<ul class="uk-iconnav"><li><a href="<?php echo $link->link('clients',frontend,'&id=');?>'+data+'" uk-icon="icon: file-edit"></a></li><li><a href="#" uk-icon="icon: trash"></a></li></ul>'          
    }).draw(false);
table.order([0,'desc']).draw();
table.page('last').draw(false);                   
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      console.log(errorThrown);
                  }  	            
  	        });     
          }      
        });
} );
</script>    
</html>