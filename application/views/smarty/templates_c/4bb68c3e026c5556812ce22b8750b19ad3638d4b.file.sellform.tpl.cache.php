<?php /* Smarty version Smarty-3.1.15, created on 2013-10-21 21:30:14
         compiled from "application\views\smarty\templates\sellform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12845526580c685ca08-10359493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bb68c3e026c5556812ce22b8750b19ad3638d4b' => 
    array (
      0 => 'application\\views\\smarty\\templates\\sellform.tpl',
      1 => 1382375551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12845526580c685ca08-10359493',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_526580c68c2300_47934234',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526580c68c2300_47934234')) {function content_526580c68c2300_47934234($_smarty_tpl) {?><div class="container" style="width:100%">
    <!--link href="assets/css/business-casual.css" rel="stylesheet"-->
    <form name="searchform" class="form-inline">
        <div class="row">    
            <label class="control-label" for="narrowLoc">Sell sell sell</label>
                <div class="col-md-offset-7 col-sm-offset-7" style='float: right;'> 
                    <select class="form-control" id="narrowLoc" name="narrowLoc" style='width:200px'>
                        <option>Carlow</option>
                        <option>Wicklow</option>
                        <option>Cork</option>
                        <option>Cavan</option>
                        <option>Dublin</option>
                        <option>Monaghan</option>
                        <option>Monesterboyce</option>
                        <option<div>>Louth</option>
                        <option>WestMeath</option>
                    </select>
                </div>
            
        </div>

        <hr>

        <div class="row">
            <label class="control-label" for="mulsel">Pick Location</label>
                <div class="col-md-offset-7 col-sm-offset-7" style='float: right;'> 
                    <select class="form-control" multiple id="mulsel" name="mulsel" style='width:200px'>
                        <option>Carlow</option>
                        <option>Wicklow</option>
                        <option>Cork</option>
                        <option>Cavan</option>
                        <option</div>>Dublin</option>
                        <option>Monaghan</option>
                        <option>Monesterboyce</option>
                        <option>Louth</option>
                        <option>WestMeath</option>
                    </select>
                </div>
            
        </div>

        <hr>

        <div class="row">
            <label class="control-label" for="dvbedrooms">Number of Bedrooms?</label>
                <div class="col-md-offset-7 col-sm-offset-7" name="dvbedrooms" id="dvbedrooms"> 
                <label for="sbmaxbed" style="float: right">Max
                    <select class="form-control" name="sbmaxbed" style='width:120px'>
                        <option>&nabla;</option>
                        <option>1 bed</option>
                        <option>2 beds</option>
                        <option>3 beds</option>
                        <option>4 bads</option>
                        <option>5+ beds</option>
                    </select></label>
                <label for="sbminbed" style="float: right">Min
                    <select class="form-control" name="sbminbed" style='width:120px'>
                        <option>&nabla;</option>
                        <option>1 bed</option>
                        <option>2 beds</option>
                        <option>3 beds</option>
                        <option>4 bads</option>
                        <option>5+ beds</option>
                    </select></label>     
            </div>
        </div>
        
        <hr>
        
        <div class="row">
            <label class="control-label" for="dvPriceRange">Price Range?</label>
                <div class="col-md-offset-7 col-sm-offset-7" name="dvPriceRange" id="dvPriceRange"> 
                <label for="sbMaxPrice" style="float: right">Max
                    <select class="form-control" name="sbMaxPrice" id="sbMaxPrice" style='width:120px'>
                        <option>&nabla;</option>
                        <option>€25 000</option>
                        <option>€50 000</option>
                        <option>€75 000</option>
                        <option>€100 000</option>
                        <option>€125 000</option>
                        <option>€150 000</option>
                        <option>€175 000</option>
                        <option>€200 000</option>
                        <option>€250 000</option>
                        <option>€300 000</option>
                        <option>€350 000</option>
                    </select></label>
                <label for="sbMinPrice" style="float: right">Min
                    <select class="form-control" name="sbMinPrice" id="sbMinPrice" style='width:120px'>
                        <option>&nabla;</option>
                        <option>€25 000</option>
                        <option>€50 000</option>
                        <option>€75 000</option>
                        <option>€100 000</option>
                        <option>€125 000</option>
                        <option>€150 000</option>
                        <option>€175 000</option>
                        <option>€200 000</option>
                        <option>€250 000</option>
                        <option>€300 000</option>
                        <option>€350 000</option>
                    </select></label>     
            </div>
        </div>
        
    </form>              
</div>

<?php }} ?>