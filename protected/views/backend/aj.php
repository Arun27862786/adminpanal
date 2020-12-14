<?php if (isset($_POST['form_select_items'])) {
 $get_tax  = $db->get_all('tax'); 

 print_r($_POST); 
 
$selected = $_POST['product_checkbox'];
$current_x=$_POST['current_x'];
  $x =$current_x[0];
  
foreach($selected as $items) {
 $x++;
$item_select=$db->get_row("products",array("id"=>$items));
 
  ?> <tr><td><button type="button" class="uk-button-danger remove_field" id="remove_item<?php echo$x; ?>"><span uk-icon="icon: close"></span> </button></td>
<td> <input class="uk-input uk-form-width-small" id="product1" value="<?php echo$item_select['product_name']; ?>"  type="text" name="product[]" ></td> 
<td> <textarea   type="text" id="description1" name="description[]" value="<?php print $item_select['description']; ?>"  rows="2" cols="40" ></textarea> </td>     
 <td><input class="uk-input uk-form-width-small" id="quantity<?php echo$x; ?>" type="number" name="quantity[]" value="<?php echo$item_select['quantity']; ?>" ></td> 
 <td><input class="uk-input uk-form-width-small" id="price<?php echo$x; ?>" type="number" value="<?php echo$item_select['price']; ?>" name="price[]" ></td> 
 <input class="uk-input uk-form-width-small" id="tax<?php echo$x; ?>" type="hidden" name="tax[]"> 
  <td><select class="uk-select uk-form-width-small" id="tax_code1" name="tax_code[]" class="uk-select ">  
   <?php if(is_array($get_tax)){ 
    foreach($get_tax as $get_taxs) { ?> 
    <option value="<?php echo $get_taxs['value']; ?>">  
     <? echo $get_taxs['tax_name'];?></option> 
      <? } }?>
    </select>
</td>
 <td><input class="uk-input uk-form-width-small " id="total1" readonly type="text" name="total"
  placeholder="0"></td>                 
            </tr> 
<script>            
 $("#quantity"+x).keyup(function(){
            var dd=$(this).attr('id');
            var res=dd.split("quantity");
            var res_id=res[1];
            var itm_prc=$('#price'+res_id).val();
            var itm_qty=$(this).val();
            var itms_prc=itm_prc*itm_qty;

            $("#total"+res_id).val(itms_prc);
            var tax_percent=$("#tax_code"+res_id).val();
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
               $("#sub_total").val(st.toFixed(2));
               $("#total_tax").val(tx.toFixed(2));
               var tot= st + tx;
               $("#amount").val(tot.toFixed(2));
               $("#finalAmount").val(tot.toFixed(2));
            });
        </script>

 
<?php }}
?>
