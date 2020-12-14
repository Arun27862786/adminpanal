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
    <?php } $get_tax  = $db->get_all('tax');?>     

<div class="content-padder content-background">
<div class="uk-section-small uk-padding-medium-top">
<div class="uk-container uk-container-large">
<div class="uk-card uk-card-default uk-padding-small">
<div class="modeldata">
 </div>
 <form class="uk-form"  id='idForm' action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data" >
  <input type="hidden" name="page_form"  value ="page_form">
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

      <div class="uk-margin"> 
<label class="uk-form-label" for="form-horizontal-text">Choose Clients</label> 
    <div class="uk-form-controls">
   <select  name='id' class="uk-select">  

   <?php if(is_array($get_products)){ 
    foreach($get_all_clients as $all) { ?> 
    <option value="<?php echo $all['id']; ?>">  
     <? echo $all['name']; ?></option> 
      <? } }?>
    </select>
  </div> </div>
       
       <div class="uk-margin"> 
      <label class="uk-form-label" for="form-stacked-text">Recurring</label>
            <select class="uk-select">
                <option value="NO">NO</option> 
                <option value="YES">YES</option>
            </select>
        </div>

     <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Date</label>
        <div class="uk-form-controls">
           <input class="uk-input" type="datetime-local" placeholder="Enter Date" name="email">
        </div>
    </div>
</div>
    <div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Due Date</label>
        <div class="uk-form-controls">
           <input class="uk-input" type="datetime-local" placeholder="Enter Due Date" name="pass">
        </div>
    </div>


    <div class="uk-margin"> 
      <label class="uk-form-label" for="form-stacked-text">Status</label>
            <select class="uk-select">
                <option value="unpaid">UNPAID</option>
                <option value="paid">PAID</option>
                <option value="partialy paid">PARTIALY PAID</option>
                <option value="performa">PERFORMA</option>
            </select>
        </div>
      
      <div class="uk-margin"> 
      <label class="uk-form-label" for="form-stacked-text">Recurring Cycle</label>
            <select class="uk-select">
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
                <th class="uk-table-shrink">&nbsp;&nbsp;</th>
                <th class="uk-table-shrink">Product</th>
                <th class="uk-table-shrink">Description </th>
                <th class="uk-table-shrink">Quantity</th>
                <th class="uk-table-shrink">Price</th>  
                <th class="uk-table-shrink">Tax</th> 
                <th class="uk-table-shrink">Total</th>  
            </tr>
        </thead>
        <tbody class="input_fields_wrap">   
     <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td> <input class="uk-input uk-form-width-small" id="product1"   type="text" name="product[]" ></td> <td> <textarea   type="text" id="description1" name="description[]" rows="2" cols="40" ></textarea> </td>     
 <td><input class="uk-input uk-form-width-small" type="number" id="quantity1" name="quantity[]" value="1" ></td> 
 <td><input class="uk-input uk-form-width-small"  id="price1"  type="number"  name="price[]"placeholder="0"></td> <input class="uk-input uk-form-width-small" id="tax1" type="hidden" name="tax[]"> 
  <td> 
    
<select class="uk-select uk-form-width-small" id="taxCode1" name="taxCode[]" class="uk-select ">  
   <?php if(is_array($get_tax)){ 
    foreach($get_tax as $get_taxs) { ?> 
    <option value="<?php echo $get_taxs['value']; ?>">  
     <? echo $get_taxs['tax_name'];?></option> 
      <? } }?>
    </select>

</td>
 <td><input class="uk-input uk-form-width-small " id="total1" readonly type="text" name="total"
  placeholder="0"></td>
            </ul></td>                 
            </tr> 
         
        </tbody>
    </table>
      </div> 
<br>
  
   <div class="uk-text-left">

    <a class="uk-button uk-button-primary uk-border-rounded uk-button-small add_field_button" href=""><span uk-icon="icon: plus-circle"></span>Add New Line</a>
   <a class="uk-button uk-button-primary uk-button-small uk-border-rounded" href="#modal_product" id="add_model" uk-toggle><span uk-icon="icon: plus-circle"></span>Add Product from list</a>
 </div>
<div class="uk-child-width-1-2@s" uk-grid>
    <div>
        <div class="uk-panel uk-panel-box uk-text-truncate"></div>
    </div>
<!-- <div class=".uk-text-right@xl uk-card-body uk-width-expand@m">
  <table class=" uk-table-middle uk-table-divider"><tr><td><label><b>Sub Total</b></label></td><td><input class="form-control" type="text" id="subTotal" name="subTotal[]" readonly placeholder="0.00"></td></tr><tr><td><label><b>Tax</b></label></td><td>
      <input class="form-control" type="text" id="totalTax" name="totalTax[]" readonly placeholder="0.00"></td></tr>  <tr><td><label><b>Total Amount</b></label></td><td> 
    <input class="form-control" type="text" id="amount" name="amount[]" readonly placeholder="0.00"></td></tr>
    <tr><td><label><b>Discount</b></label></td>
      <td><select id="discount1"><option value="0">%</option><option value="1">Amount</option>
    <input class="form-control text-right " type="text" id="discount" name="discount" placeholder="0.00"></td></tr></select>
   <tr><td><label><b>Final Amount</b></label></td><td> 
    <input class="form-control" type="text" id="finalAmount" name="finalAmount" placeholder="0.00" readonly ></td></tr></table> 
    </div> -->

<div> 
<hr> 
     <table>
     <tr>
      <td><b>Sub Total</b></td>
      <td style="text-align:right;"><span class=" uk-text-right" id="subTotal" name="subTotal[]" >0.00</span> </td>
    </tr>
    <tr>
      <td ><b>Tax</b></td>
      <td style="text-align:right;"><span class="uk-text-right" id="totalTax" name="totalTax[]">0.00</span></td>
    </tr> 
    <tr>
    <td><b>Total Amount</b></td>
    <td  style="text-align:right;" ><span class="uk-text-right" id="amount" name="amount[]">0.00</span></td></tr> 
    <tr>
    <td><b>Discount</b></td><td><select id="discount1"><option value="1">Amount</option><option value="0">%</option></td>
    <td style="text-align:right;"><input class="form-control uk-text-right " type="text" id="discount" name="discount" placeholder="0.00"></td>
  </tr>
    <tr>
      <td><b>Final Amount</b></td>
      <td style="text-align:right;"><span class="uk-text-right" type="text" id="finalAmount" name="finalAmount[]">0.00</span>
      </td>
    </tr> 
</table>    
</div>

  </div>

  <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text"><b>Notes</b></label>
        <div class="uk-form-controls">
           <textarea id="editor1" name="notes" placeholder="Enter Notes"></textarea>  
        </div>
    </div> 

     <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text"><b>Terms</b></label>
        <div class="uk-form-controls">
           <textarea id="editor2" name="terms" placeholder="Enter terms"></textarea>  
        </div>
    </div>
 
   <div class="uk-margin"><div class="uk-text-right">
        <button type="submit" class="uk-button uk-button-success uk-border-rounded" name="save_invoice" ><span uk-icon="icon:plus-circle;" ></span> Save invoice</button> 
    </div> </div>
   </form>
 
       </div>
   </div>
 </div>
</div>

<!--///////////////////////////////////////////////////////////////////////////////////////-->

<div id="modal_product" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">

        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h2 class="uk-modal-title">All Product</h2>
        </div>
        <a class="uk-button uk-button-primary uk-button-small" href="#Add_Product" uk-toggle><span uk-icon="icon: plus-circle"></span>Add Product from list</a>
        <div class="uk-modal-body"> 
<div class="uk-overflow-auto"> 
  <form class="model_data"  id='Form_select_item' action="<?php echo $link->link('ajax',backend);?>" method="post">
    <input type="hidden" name="form_select_items"  value ="form_select_items">
     <div class="uk-margin"> 
      <label class="uk-form-label" for="form-stacked-text">Recurring Cycle</label>
       <input class="uk-input" type="text" name="number_of_row" id='row_count' value="1">
        </div>
<table id="table1" class="uk-table uk-table-hover uk-table-middle uk-table-divider">
        <thead>
            <tr>
                <th class="uk-table-shrink"> </th>
                <th class="uk-table-shrink">Image</th>
                <th class="uk-table-shrink">Name</th>
                <th class="uk-table-shrink">Category</th>  
                <th class="uk-table-shrink">Price</th>   
            </tr>
        </thead>
        <tbody>
        
        <?php  
        if(is_array($get_products)){  
            foreach ($get_products as $products){ 
   $categories  = $db->get_row('categories',array('id'=>$products['category_id']));
             ?>    
        <tr>
         <!--  <input class="uk-input uk-form-width-small" type="text" id="current_x" name="current_x[]"> -->
          <td><div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
             <label><input class="uk-checkbox"  name="product_checkbox[]" value="<?php echo $products['id'];?>" type="checkbox"></label>
              </div></td>
                <td><img src="<?php echo SITE_URL.'/uploads/logins/'.$products['thumbnail'];?>" width='50' height='40'> </td> 
                <td><?php echo $products['product_name'];?></td> 
              <td><?php echo $categories['category'];?></td>             
                <td><?php echo $products['price'];?></td>                              
            </tr>
            <?php  }}  ?>
        </tbody>
    </table> 
   
    <div class="uk-modal-footer" uk-grid> 
    <div class="uk-width-expand@m">
        <button  type="submit" id="select_products" class="uk-button uk-button-primary uk-border-rounded" name="add_product" ><span uk-icon="icon:plus;" ></span>Add Product</button> 
    </div> 
      <div class="uk-width-auto@m" > 
        <button  class=" uk-button uk-button-danger uk-border-rounded uk-model-hide" name="client_btn" type="reset" ><span uk-icon="icon:close;" id="reset_form" ></span>Clear</button> 
    </div>  
    </div>  
  </form>
  <button class="uk-modal-close" type="button" uk-close></button>
                 </div>

           </div>
    </div>
</div>  



<div id="Add_Product" uk-modal>
    <div class="uk-modal-dialog uk-container">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h2 class="uk-modal-title">Add Product form</h2>
        </div>
         <form class="uk-form"  action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data" >
        <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Product Name:</label>
        <div class="uk-form-controls">
           <input class="uk-input" type="text" placeholder="Enter Product Name" name="pname">
        </div>
    </div>
  
      <div class="uk-margin"> 
    <label class="uk-form-label" for="form-horizontal-text">Choose Category:</label></td><td>

    <div class="uk-form-controls" uk-grid>
       <div class="uk-width-expand@m">
   <select  name='category' class="uk-select">    
   <?php foreach($get_all_categories as $all) { ?> 
    <option value="<?php echo $all['id']; ?>">  
     <? echo $all['category']; ?></option> 
      <? } ?>
    </select></div>
    <div class="uk-width-auto@m">
    <a class="uk-button uk-button-primary uk-button-small" href="#Add_catagory" uk-toggle><span uk-icon="icon: plus-circle"></span></a>
  </div>
  </div>  
     <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Price:</label>
        <div class="uk-form-controls">
           <input  class="uk-input" type="number" placeholder="Enter Price" name="price">
        </div>
    </div>  
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Upload image:</label>
        <div class="uk-form-controls">
           <input  class="uk-input" type="file" name="thumbnail">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">description:</label>
        <div class="uk-form-controls">
          <textarea  class="uk-input" type="text" name="description" ></textarea>
        </div>
    </div>
 
    <div class="uk-margin">
        <button type="submit" class="uk-button uk-button-success uk-border-rounded uk-width-1-1@m" name="product_btn" ><span uk-icon="icon:plus-circle;"></span> Submit</button> 
    </div>
  
         </form>
        <div class="uk-modal-body"> 
           </div>
    </div>
</div> 

<div id="Add_catagory" uk-modal>
    <div class="uk-modal-dialog uk-container">
        
        <div class="uk-modal-header">
            <h2 class="uk-modal-title">Add Category form</h2>
        </div>
         <form class="uk-form"  action="<?php $_SERVER['PHP_SELF'];?>" method="post" >
        <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Category Name:</label>
        <div class="uk-form-controls">
           <input class="uk-input" type="text" placeholder="Enter Product Name" name="cat_name">
        </div>
    </div>

 
    <div class="uk-margin">
        <button type="submit" class="uk-button uk-button-success uk-border-rounded uk-width-1-1@m" name="Category_btn" ><span uk-icon="icon:plus-circle;"></span> Submit</button> 
    </div>
  
         </form>
        <div class="uk-modal-body"> 
           </div>
    </div>
</div>  

<?php

for($i=0; $i==$product_checkbox; $i++){
  $item_select[$i]=$db->get_row("products",array("id"=>$var++));
}
print_r($item_select);
?>
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
  $("#finalAmount").html(fnumber);
}
if(discount_value==0)
{  

  var tax_amount=(subTotal*discountNumber)/100;
  var fnumber=totalAmount-tax_amount;
  $("#finalAmount").html(fnumber);
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
  $("#finalAmount").html(fnumber);
}
if(discount_value==0)
{  

  var tax_amount=(subTotal*discountNumber)/100;
  var fnumber=totalAmount-tax_amount;
  $("#finalAmount").html(fnumber);
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
$("#subTotal").html(amt.toFixed(2));
$("#totalTax").html(tx.toFixed(2));
$("#amount").html(total_amt.toFixed(2));

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
               $("#subTotal").html(st.toFixed(2));
               $("#totalTax").html(tx.toFixed(2));
               var tot= st + tx;
               $("#amount").html(tot.toFixed(2));
               $("#finalAmount").html(tot.toFixed(2));


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
$("#subTotal").html(amt.toFixed(2));
$("#totalTax").html(tx.toFixed(2));
$("#amount").html(total_amt.toFixed(2));

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
               $("#subTotal").html(st.toFixed(2));
               $("#totalTax").val(tx.toFixed(2));
               var tot= st + tx;
               $("#amount").html(tot.toFixed(2));
               $("#finalAmount").html(tot.toFixed(2));
});

//--------- -----------------------------

$("#taxCode1").change(function(){
var tax_name=$(this).val();
var item_qty=$('#quantity1').val();
var itm_prc=$('#price1').val();
var amount=itm_prc*item_qty; 
var tax_amount=(amount*tax_name)/100;

$("#tax1").val(tax_amount);
$("#totalTax").html(tax_amount);
$("#total1").val(amount);
$("#amount").val(parseFloat(amount) + parseFloat(tax_amount));

$("#subTotal").html(amount.toFixed(2));
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
               $("#subTotal").html(st.toFixed(2));
               $("#totalTax").html(tx.toFixed(2));
               var tot= st + tx;
               $("#amount").html(tot.toFixed(2));
               $("#finalAmount").html(tot.toFixed(2));

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
      $("#row_count").val(x);
   // alert(x);
    //$("#current_x").val(x);
      $(wrapper).append('<tr>'+'<td><button type="button" class="uk-button-danger remove_field" id="remove_item'+x+'"><span uk-icon="icon: close"></span> </button></td>'+'<td> <input id="product'+x+'" class="uk-input uk-form-width-small" type="text" name="product[]" ></td>'+  
     '<td> <textarea type="text" id="description'+x+'" name="description[]" rows="2" cols="40" ></textarea> </td>'+     
 '<td> <input class="uk-input uk-form-width-small " type="number" id="quantity'+x+'" name="quantity[]" value="1"></td>'+ 
 '<td><input class="uk-input uk-form-width-small " id="price'+x+'" type="number"  name="price[]" placeholder="0"></td>'+ 
  '<td><select class="uk-select uk-form-width-small" id="taxCode'+x+'" name="taxCode[]">'+
  <?php if(is_array($get_tax)){ 
    foreach($get_tax as $get_taxs) { ?> 
     '<option value="<?php echo $get_taxs['value']; ?>"><?php echo $get_taxs['tax_name']; ?></option>'+ 
      <? } }?>
  '</select></td>'+'<td> <input class="uk-input uk-form-width-small" id="total'+x+'" type="text" name="total[]" readonly placeholder="0"></td>'+'<td> <input class="uk-input uk-form-width-small" id="tax'+x+'" type="hidden" name="tax[]" ></td>'+'<td> <input class="uk-input uk-form-width-small" id="subTotal'+x+'" type="hidden" name="subTotal[]"></td>'+'<td> <input class="uk-input uk-form-width-small" id="amount'+x+'" type="hidden" name="amount[]"></td>'+'<td> <input class="uk-input uk-form-width-small" id="finalAmount'+x+'" type="hidden" name="finalAmount[]"></td>'+'<tr>'); 
    
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
               $("#subTotal").html(st.toFixed(2));
               $("#totalTax").html(tx.toFixed(2));
               var tot= st + tx;
               $("#amount").html(tot.toFixed(2));
               $("#finalAmount").html(tot.toFixed(2));
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

               $("#subTotal").html(st.toFixed(2));
               $("#totalTax").html(tx.toFixed(2));
               var tot= st + tx;
               $("#amount").html(tot.toFixed(2));
               $("#finalAmount").html(tot.toFixed(2));

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

          $("#subTotal").html(st.toFixed(2));
          $("#totalTax").html(tx.toFixed(2));
          var tot= st + tx;
          $("#amount").html(tot.toFixed(2));
          $("#finalAmount").html(tot.toFixed(2));
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

$("#subTotal").html(new_subTotal.toFixed(2));
$("#totalTax").html(new_tax.toFixed(2));
$("#amount").html(new_total.toFixed(2));
$("#finalAmount").html(new_total.toFixed(2));
}
});




    }
  });

 $(wrapper).on("click",".remove_field", function(e){  
    e.preventDefault(); 
    $(this).closest('tr').remove();
    })
});

 
 $("#Form_select_item").submit(function(e) {  

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

            UIkit.modal("#modal_product").hide();            
        
            // alert(JSON.stringify(data.products));

             var rcount=data.number_of_row;
             var pdatarow=JSON.stringify(data.products);
             alert(pdatarow);
             
alert(rcount);
var x1=rcount;

var total_row =rcount+data.products.length;
  for (i =0; len = data.products.length;i++) { 

    x1++;
  
  

  var item_id=data.products[i].id;
  var item_price=data.products[i].price;
  var item_description=data.products[i].description;
  var item_quantity=1;
  var item_name=data.products[i].product_name;
  var item_total=item_quantity*item_price;

  alert('===='+item_id);

  $(".input_fields_wrap").append('<tr>'+'<td><button type="button" class="uk-button-danger remove_field" id="remove_item'+x1+'"><span uk-icon="icon: close"></span> </button></td>'+'<td> <input id="product'+x1+'" class="uk-input uk-form-width-small" type="text" name="product[]" value="'+item_name+'"></td>'+  
     '<td> <textarea type="text" id="description'+x1+'" name="description[]" rows="2" cols="40" >'+item_description+'</textarea> </td>'+     
 '<td> <input class="uk-input uk-form-width-small " type="number" id="quantity_'+x1+'" name="quantity[]" value="'+item_quantity+'"></td>'+ 
 '<td><input class="uk-input uk-form-width-small " id="price'+x1+'" type="number"  name="price[]" value="'+item_price+'"></td>'+ 
  '<td><select class="uk-select uk-form-width-small" id="taxCode'+x1+'" name="taxCode[]">'+
  <?php if(is_array($get_tax)){ 
    foreach($get_tax as $get_taxs) { ?> 
     '<option value="<?php echo $get_taxs['value']; ?>"><?php echo $get_taxs['tax_name']; ?></option>'+ 
      <? } }?>
  '</select></td>'+'<td> <input class="uk-input uk-form-width-small" id="total'+x1+'" type="text" name="total[]" value="'+item_total+'" readonly placeholder="0"></td>'+'<td> <input class="uk-input uk-form-width-small" id="tax'+x1+'" type="hidden" name="tax[]" ></td>'+'<td> <input class="uk-input uk-form-width-small" id="subTotal'+x1+'" type="hidden" name="subTotal[]"></td>'+'<td> <input class="uk-input uk-form-width-small" id="amount'+x1+'" type="hidden" name="amount[]"></td>'+'<td> <input class="uk-input uk-form-width-small" id="finalAmount'+x1+'" type="hidden" name="finalAmount[]"></td>'+'<tr>');


      $("#quantity_"+x1).keyup(function(){
       
            var dd=$(this).attr('id');
            var res=dd.split("quantity");
 //alert(res);
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

            for(var i=1; i<=x1; i++){
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

            $("#price"+x1).keyup(function(){
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

            $("#taxCode"+x1).change(function(){
            var dd=$(this).attr('id');
            var res=dd.split("taxCode");
            var res_id=res[1];
            var tax_name=$(this).val();
            var item_qty=$('#quantity'+x1).val();
            var itm_prc=$('#price'+x1).val();
            var amount=itm_prc*item_qty; 
            var tax_amount=(amount*tax_name)/100;

           $("#tax"+res_id).val(tax_amount);
            $("#total").val(amount);
            $("#amount").val(parseFloat(amount) + parseFloat(tax_amount));

            var st=parseInt(0);
            var tx=parseFloat(0);

            for(var i=1; i<=x1; i++){
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

      
   $("#remove_item"+x1).click(function(){
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

alert("AAAAAAAAA");
}
 
                   

// $(".input_fields_wrap").append(data); 
 
           }
         });
});


 
</script>
 