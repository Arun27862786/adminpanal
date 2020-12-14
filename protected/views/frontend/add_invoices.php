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
 <h3 class="message"></h3>
 <form class="uk-form"  id='idForm' action="<?php $_SERVER['PHP_SELF'];?>" method="post" >
  <input type="hidden" name="page_form"  value ="page_form">
  <input type="hidden" name="user_id"  value ="<?php echo $user_details['user_id']; ?>">
    <div uk-grid>
            <div class="uk-width-expand@m">
             <legend class="uk-legend">Invoices Form</legend>
         </div>
     <div class="uk-width-auto@m">
        <a  href="<?php echo $link->link('invoices',backend);?>" class="uk-button uk-button-danger uk-border-rounded"><span uk-icon="icon: arrow-left"></span> Go Back </a>
     </div>
 </div>       
      <hr> 

<div class="uk-child-width-expand@s uk-grid-divider" uk-grid>
    <div>

      <!-- <div class="uk-margin"> 
<label class="uk-form-label" for="form-horizontal-text">Choose Clients</label> 
    <div class="uk-form-controls">
   <select  name='client_id' class="uk-select">
   <?php if(is_array($get_all_clients)){ 
    foreach($get_all_clients as $all) { ?> 
    <option value="<?php echo $all['id']; ?>">  
     <? echo $all['name']; ?></option> 
      <? } }?>
    </select>
  </div> </div> -->

   <!-- <div class="uk-margin"> 
<label class="uk-form-label" for="form-horizontal-text">Choose Project</label> 
    <div class="uk-form-controls">
   <select  name='project_id' class="uk-select">
   <?php if(is_array($get_project)){ 
    foreach($get_project as $get_projects) { ?> 
    <option value="<?php echo $get_projects['id']; ?>">  
     <? echo $get_projects['project_name']; ?></option> 
      <? } }?>
    </select>
  </div> </div> -->

  <div class="uk-margin"> 
      <label class="uk-form-label" for="form-stacked-text">Invoice Number</label>
         <div class="uk-form-controls">
           <input class="uk-input" type="readonly" readonly name="invoice_number" value="INV-<?echo $rendom+1;?>" >
        </div>    
        </div>
       
       <div class="uk-margin"> 
      <label class="uk-form-label" for="form-stacked-text">Recurring</label>
            <select name='recurring' class="uk-select">
                <option value="NO">NO</option> 
                <option value="YES">YES</option>
            </select>
        </div>

     <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Date</label>
        <div class="uk-form-controls">
           <input class="uk-input" type="date" placeholder="Enter Date" name="date">
        </div>
    </div>
</div>
    <div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Due Date</label>
        <div class="uk-form-controls">
           <input class="uk-input" type="date" placeholder="Enter Due Date" name="due_date">
        </div>
    </div>


    <div class="uk-margin"> 
      <label class="uk-form-label" for="form-stacked-text">Status</label>
            <select name="status" class="uk-select">
                <option value="unpaid">UNPAID</option>
                <option value="paid">PAID</option>
                <option value="partialy paid">PARTIALY PAID</option>
                <option value="performa">PERFORMA</option>
            </select>
        </div>
      
      <div class="uk-margin"> 
      <label class="uk-form-label" for="form-stacked-text">Recurring Cycle</label>
            <select name="recurring_cycle" class="uk-select">
                <option value="monthly">Monthly</option>
                <option value="quaterty">Quaterly</option>
                <option value="semi annually">Semi Annually</option>
                <option value="annually">Annually</option>
            </select>
        </div>    
   </div>
</div>
<hr>
<div class="uk-overflow-auto">
    <table class=" uk-table-middle uk-table-divider">
        <thead>
            <tr>
                <th class="uk-table-shrink">Product</th>
                <th class="uk-table-shrink">Description </th>
                <th class="uk-table-shrink">Quantity</th>
                <th class="uk-table-shrink">Price</th>  
                <th class="uk-table-shrink">Tax</th> 
                <th class="uk-table-shrink">Total</th> 
                <th class="uk-table-shrink"></th> 
            </tr>
        </thead>
        <tbody class="input_fields_wrap">   
     <tr>
<td> <input class="uk-input uk-form-width-small" id="product1"   type="text" name="product[]" ></td> <td> <textarea   type="text" id="description1" name="description[]" rows="2" cols="40" ></textarea> </td>     
 <td><input class="uk-input uk-form-width-small" type="number" id="quantity1" name="quantity[]" value="1" ></td> 
 <td><input class="uk-input uk-form-width-small"  id="price1"  type="number"  name="price[]"placeholder="0.00"></td> <input class="uk-input uk-form-width-small" id="tax1" type="hidden" name="tax[]"> 
  <td>     
<select class="uk-select uk-form-width-small" id="taxCode1" name="taxCode[]" class="uk-select ">  
   <?php if(is_array($get_tax)){ 
    foreach($get_tax as $get_taxs) { ?>  
    <option value="<?php echo $get_taxs['value']; ?>">  
     <? echo $get_taxs['tax_name'];?></option> 
      <? } }?>
    </select>
</td>
 <td><input class="uk-input uk-form-width-small " id="total1" readonly type="text" name="total[]"
  placeholder="0.00"></td>                
           <td></td>
            </tr> 
        </tbody>
    </table>
      </div> 
<br>
  <div class="uk-child-width-1-2@s" uk-grid>
   <div class="uk-text-left">

    <a class="uk-button uk-button-primary uk-border-rounded uk-button-small add_field_button" href=""><span uk-icon="icon: plus-circle"></span>Add New Line</a>
   <!-- <a class="uk-button uk-button-primary uk-button-small uk-border-rounded" href="#modal_product" id="add_model" uk-toggle><span uk-icon="icon: plus-circle"></span>Add Product from list</a> -->
 </div>

<div> 
<hr> 
    <table  style="width:100%">
    <tr>
      <td><b>Sub Total</b></td>
      <td><input class="form-control uk-text-right" type="text" id="subTotal" name="subTotal[]" readonly placeholder="0.00"></td></tr>
    <tr>
      <td><b>Tax </b></td>
      <td> <input class="form-control uk-text-right" type="text" id="totalTax" name="totalTax[]" readonly placeholder="0.00"></td></tr>
    <tr>
      <td><b>Total Amount</b></td>
      <td><input class="form-control uk-text-right" type="text" id="amount" name="amount[]" readonly placeholder="0.00"></td></tr>
    <tr>
      <td><b>Discount</b>
      <select id="discount1" ><option value="0">%</option><option value="1">Amount</option></td>
    <td><input class="form-control uk-text-right " type="text" id="discount" name="discount" placeholder="0.00"><input   type="hidden" id="discountf" name="discountf"></td></tr>
    <td><b>Final Amount</b></td>
    <td><input class="form-control uk-text-right" type="text" id="finalAmount" name="finalAmount" placeholder="0.00" readonly ></td></tr>
</table>    
</div>

  </div>

  <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text"><b>Notes</b></label>
        <div class="uk-form-controls">
           <textarea id="editor1" name="notes"></textarea>  
        </div>
    </div> 

     <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text"><b>Terms</b></label>
        <div class="uk-form-controls">
           <textarea id="editor2" name="terms">NAME: CLASSIC INVOICER CONSULTING TAX CODE HOLDER: AAGB860519G31</textarea>  
        </div>
    </div>
 
   <div class="uk-margin"><div class="uk-text-right">
        <button type="submit" class="uk-button uk-button-success uk-border-rounded" name="save_invoice" ><span uk-icon="icon:plus-circle;" ></span>Save invoice</button> 
    </div> </div>
   </form>
 
       </div>
   </div>
 </div>
</div>

<!--///////////////////////////////////////////////////////////////////////////////////////-->

<script>  

$("#reset_form").change(function(){
var discount_value=$(this).val();
var discountNumber=$('#discount').val();
var totalAmount=$('#amount').val();
var subTotal=$('#subTotal').val();
 
});

$("#discount1").change(function(){
var discount_value=$(this).val();
var discountNumber=$('#discount').val();
var totalAmount=$('#amount').val();
var subTotal=$('#subTotal').val();
 
  if(discount_value==1)
{
  var fnumber=totalAmount-discountNumber;
  $("#finalAmount").val(fnumber);
}
if(discount_value==0)
{  
  var tax_amount=(subTotal*discountNumber)/100;
  var fnumber=totalAmount-tax_amount;
  $("#discountf").val(tax_amount);
  $("#finalAmount").val(fnumber);
}

});
 

 $("#discount").keyup(function(){

var discount_value=$('#discount1').val();
var discountNumber=$('#discount').val();
var totalAmount=$('#amount').val();
var subTotal=$('#subTotal').val();
if(discount_value==1)
{
  var fnumber=totalAmount-discountNumber;
  $("#finalAmount").val(fnumber);
}
if(discount_value==0)
{  

  var tax_amount=(subTotal*discountNumber)/100;
  $("#discountf").val(tax_amount);
  var fnumber=totalAmount-tax_amount;
  $("#finalAmount").val(fnumber);
}
});
//--------- ---------
$("#quantity1").keyup(function(){
var itm_prc=$('#price1').val();
var itm_qty=$(this).val();
var itms_prc=itm_prc*itm_qty;
$("#total1").val(itms_prc);
var tax_percent=$("#taxCode1").val();
var itms_prc_new=$("#total1").val();
var tax_amount=(itms_prc_new*tax_percent)/100;

$("#tax1").val(tax_amount);
$("#amount1").val(parseFloat(itms_prc_new) + parseFloat(tax_amount));

var amt=parseFloat($("#total1").val());
var tx=parseFloat($("#tax1").val());
var total_amt=amt+tx;
$("#subTotal").val(amt.toFixed(2));
$("#totalTax").val(tx.toFixed(2));
$("#amount").val(total_amt.toFixed(2));

            var st=parseInt(0);
            var tx=parseFloat(0);

            for(var i=1; i<=20; i++){
            var stt=parseFloat($("#total"+i).val());
            var txx=parseFloat($("#tax"+i).val());
                if(isNaN(stt)){
                stt=0;
                txx=0;
                }
            var st= st + stt;
            var tx= tx + txx;
                }
               $("#subTotal").val(st.toFixed(2));
               $("#totalTax").val(tx.toFixed(2));
               var tot= st + tx;
               $("#amount").val(tot.toFixed(2));
               $("#finalAmount").val(tot.toFixed(2));
});

//--------------------------------------------
$("#price1").keyup(function(){
var itm_prc=$(this).val();
var itm_qty=$("#quantity1").val();
var itms_total=itm_prc*itm_qty;
$("#total1").val(itms_total);
var tax_percent=$("#taxCode1").val();
var itms_prc_new=$("#total1").val();
var tax_amount=(itms_prc_new*tax_percent)/100;

$("#tax1").val(tax_amount);
$("#amount1").val(parseFloat(itms_prc_new) + parseFloat(tax_amount));

var amt=parseFloat($("#total1").val());
var tx=parseFloat($("#tax1").val());
var total_amt=amt+tx;
$("#subTotal").val(amt.toFixed(2));
$("#totalTax").val(tx.toFixed(2));
$("#amount").val(total_amt.toFixed(2));

            var st=parseInt(0);
            var tx=parseFloat(0);

            for(var i=1; i<=20; i++){
            var stt=parseFloat($("#total"+i).val());
            var txx=parseFloat($("#tax"+i).val());
                if(isNaN(stt)){
                stt=0;
                txx=0;
                }
            var st= st + stt;
            var tx= tx + txx;
                }
               $("#subTotal").val(st.toFixed(2));
               $("#totalTax").val(tx.toFixed(2));
               var tot= st + tx;
               $("#amount").val(tot.toFixed(2));
               $("#finalAmount").val(tot.toFixed(2));
});

//--------- -----------------------------

$("#taxCode1").change(function(){
var tax_name=$(this).val();
var item_qty=$('#quantity1').val();
var itm_prc=$('#price1').val();
var amount=itm_prc*item_qty; 
var tax_amount=(amount*tax_name)/100;

$("#tax1").val(tax_amount);
$("#totalTax").val(tax_amount);
$("#total1").val(amount);
$("#amount").val(parseFloat(amount) + parseFloat(tax_amount));

$("#subTotal").val(amount.toFixed(2));
var amt=parseFloat($("#amount").val());
var tx=parseFloat($("#tax1").val());
 
            var st=parseInt(0);
            var tx=parseFloat(0);

            for(var i=1; i<=20; i++){
            var stt=parseFloat($("#total"+i).val());
            var txx=parseFloat($("#tax"+i).val());
                if(isNaN(stt)){
                stt=0;
                txx=0;
                }
            var st= st + stt;
            var tx= tx + txx;
                }
               $("#subTotal").val(st.toFixed(2));
               $("#totalTax").val(tx.toFixed(2));
               var tot= st + tx;
               $("#amount").val(tot.toFixed(2));
               $("#finalAmount").val(tot.toFixed(2));

});

 $(function() {
    $('#add_model').bind('click', function() {
    var count = $('.input_fields_wrap tr').length;
      $('#current_x').val(count);   
    });
});

 
$(document).ready(function() {
  var max_fields      = 20; 
  var wrapper       = $(".input_fields_wrap");  
  var add_button      = $(".add_field_button");  
  
  var x = 1;  
  $(add_button).click(function(e){  
    e.preventDefault();
    if(x < max_fields){ 
      x++;   
      $(wrapper).append('<tr>'+'<td> <input id="product'+x+'" class="uk-input uk-form-width-small" type="text" name="product[]" ></td>'+  
     '<td> <textarea type="text" id="description'+x+'" name="description[]" rows="2" cols="40" ></textarea> </td>'+     
 '<td> <input class="uk-input uk-form-width-small " type="number" id="quantity'+x+'" name="quantity[]" value="1"></td>'+ 
 '<td><input class="uk-input uk-form-width-small " id="price'+x+'" type="number"  name="price[]" placeholder="0.00"></td>'+ 
  '<td><select class="uk-select uk-form-width-small" id="taxCode'+x+'" name="taxCode[]">'+
  <?php if(is_array($get_tax)){ 
    foreach($get_tax as $get_taxs) { ?> 
     '<option value="<?php echo $get_taxs['value']; ?>"><?php echo $get_taxs['tax_name']; ?></option>'+ 
      <? } }?>
  '</select></td>'+'<td> <input class="uk-input uk-form-width-small" id="total'+x+'" type="text" name="total[]" readonly placeholder="0.00"></td>'+'<td> <input class="uk-input uk-form-width-small" id="tax'+x+'" type="hidden" name="tax[]" ></td>'+'<td> <input class="uk-input uk-form-width-small" id="subTotal'+x+'" type="hidden" name="subTotal[]"></td>'+'<td> <input class="uk-input uk-form-width-small" id="amount'+x+'" type="hidden" name="amount[]"></td>'+'<td> <input class="uk-input uk-form-width-small" id="finalAmount'+x+'" type="hidden" name="finalAmount[]"></td>'+'<td><button type="button" class="uk-button-danger remove_field" id="remove_item'+x+'"><span uk-icon="icon: close"></span> </button></td>'+'<tr>'); 
    
//-------------------------------
           
          $("#quantity"+x).keyup(function(){
            var dd=$(this).attr('id');
            var res=dd.split("quantity");
            var res_id=res[1];
            var itm_prc=$('#price'+res_id).val();
            var itm_qty=$(this).val();
            var itms_prc=itm_prc*itm_qty;

            $("#total"+res_id).val(itms_prc);
            var tax_percent=$("#taxCode"+res_id).val();
            var itms_prc_new=$("#total"+res_id).val();
            var tax_amount=(itms_prc_new*tax_percent)/100;

            $("#tax"+res_id).val(tax_amount);
            $("#amount"+res_id).val(parseFloat(itms_prc_new) + parseFloat(tax_amount));

            var st=parseInt(0);
            var tx=parseFloat(0);

            for(var i=1; i<=x; i++){
            var stt=parseFloat($("#total"+i).val());
            var txx=parseFloat($("#tax"+i).val());
                if(isNaN(stt)){
                stt=0;
                txx=0;
                }
            var st= st + stt;
            var tx= tx + txx;
                }
               $("#subTotal").val(st.toFixed(2));
               $("#totalTax").val(tx.toFixed(2));
               var tot= st + tx;
               $("#amount").val(tot.toFixed(2));
               $("#finalAmount").val(tot.toFixed(2));
            });

            //--------- ------------------------------

            $("#price"+x).keyup(function(){
            var dd=$(this).attr('id');
            var res=dd.split("price");
            var res_id=res[1];
            var item_qty=$('#quantity'+res_id).val();
            var item_price=$(this).val();
            var amount=item_price*item_qty;
            var tax_percent=$("#taxCode"+res_id).val();
            var tax_amount=(amount*tax_percent)/100;

            $("#tax"+res_id).val(tax_amount);
            $("#total"+res_id).val(amount);
            $("#amount"+res_id).val(parseFloat(amount) + parseFloat(tax_amount));

                var st=parseInt(0);
                var tx=parseFloat(0);

                for(var i=1; i<=x; i++){
                    var stt=parseFloat($("#total"+i).val());
                    var txx=parseFloat($("#tax"+i).val());
                    if(isNaN(stt)){
                    stt=0;
                    txx=0;
                    }
                var st= st + stt;
                var tx= tx + txx;
                               }

               $("#subTotal").val(st.toFixed(2));
               $("#totalTax").val(tx.toFixed(2));
               var tot= st + tx;
               $("#amount").val(tot.toFixed(2));
               $("#finalAmount").val(tot.toFixed(2));

            });
//----------------------------------

            $("#taxCode"+x).change(function(){
            var dd=$(this).attr('id');
            var res=dd.split("taxCode");
            var res_id=res[1];
            var tax_name=$(this).val();
            var item_qty=$('#quantity'+x).val();
            var itm_prc=$('#price'+x).val();
            var amount=itm_prc*item_qty; 
            var tax_amount=(amount*tax_name)/100;

           $("#tax"+res_id).val(tax_amount);
            $("#total").val(amount);
            $("#amount").val(parseFloat(amount) + parseFloat(tax_amount));

            var st=parseInt(0);
            var tx=parseFloat(0);

            for(var i=1; i<=x; i++){
                var stt=parseFloat($("#total"+i).val());
                var txx=parseFloat($("#tax"+i).val());
                if(isNaN(stt)){
                stt=0;
                txx=0;
                }
            var st= st + stt;
            var tx= tx + txx;
                           }

          $("#subTotal").val(st.toFixed(2));
          $("#totalTax").val(tx.toFixed(2));
          var tot= st + tx;
          $("#amount").val(tot.toFixed(2));
          $("#finalAmount").val(tot.toFixed(2));
                        });

      
   $("#remove_item"+x).click(function(){
    var dd=$(this).attr('id');
    var res=dd.split("remove_item");
    var res_id=res[1];

var tax=parseFloat($('#tax'+res_id).val());
var amount=parseFloat($('#amount'+res_id).val());
var subTotal=parseFloat($('#subTotal').val());
var totalTax=parseFloat($('#totalTax').val());

if(!isNaN(amount)){
var new_subTotal=subTotal - amount;
var new_tax=totalTax - tax;
var new_total=new_subTotal + new_tax;

$("#subTotal").val(new_subTotal.toFixed(2));
$("#totalTax").val(new_tax.toFixed(2));
$("#amount").val(new_total.toFixed(2));
$("#finalAmount").val(new_total.toFixed(2));
}
});
    }
  });

 $(wrapper).on("click",".remove_field", function(e){  
    e.preventDefault(); 
    $(this).closest('tr').remove();
    })
});

// $("#idForm").submit(function(e) {  

//     e.preventDefault();  

//     var form = $(this);
//     var url = form.attr('action');
//     var formdata = form.serialize();
 
//  $.ajax({
//            type: "POST",
//            url: url,
//            data:formdata,  
//            // dataType:'json',
//            success: function(data)
//            {   

//            alert(data);           
//               //(".message").html(data.msg);
//            }
//          });
// });
 
</script>
 