
{if (isset($flashMessage) && strlen(trim($flashMessage)) > 0)}
    <div id="alertDiv" class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" onclick ="resetForm($('#searchform'));resetForm($('#addSellerForm'));">X</button>
        <!--a href="#" onclick ="resetForm($('#myForm'))" class="alert-link">CLEAR</a-->
        <strong>Message: {$flashMessage}</strong>
    </div>
{/if}
<?//php endif; ?>


<div class="container">
    <form class="form-horizontal" name="addSellerForm" id="addSellerForm">
        <div class="row well">Seller Details</div>
        <div class="form-group" id="sellerDiv" name="sellerDiv">
            <label class="control-label" for="sbSeller">Seller</label>
            <a href="javascript:;" class="btn-primary btn-xs pull-right" onclick="addSeller();">Add Seller</a>
            <a href="javascript:;" class="btn-danger btn-xs pull-right" onclick="deleteSeller();" style="margin-right: 4px;">Delete Selected Seller</a>
            <div class="col-md-offset-7"> 
                <select class="form-control" id="sbSeller" name="sbSeller" form="searchform">
                    
                    {$sellerOptions}

                </select>
            </div>

        </div>

    </form>


    <form   class="form-horizontal" name="searchform" id="searchform" action="addHouse.php" method="POST" enctype="multipart/form-data">    
        <!--id is a hidden field if set.-->
        {$fieldValues['id']}
        {$fieldValues['updateImage']}
        <div class="row well">Location</div>
        
        <div class="form-group">
            <label class="control-label" for="tiAddress">Street</label>
            <div class="col-md-offset-7"> 
                <input type="text" class="form-control" value="{$fieldValues['address']}" name="tiAddress" style="width:100%;">
            </div>
        </div>
        
        <div class="form-group">    
            <label class="control-label" for="narrowLoc">Select Area</label>
            <div class="col-md-offset-7"> 
                <select class="form-control" id="narrowLoc" name="narrowLoc"  onchange="testfunct()">
                    <option value=""></option>
                    <option value="leinster">Leinster</option>
                    <option value="munster">Munster</option>
                    <option value="connaght">Connaght</option>
                    <option value="ulster">Ulster</option>
                    <option value="dublin">Dublin</option>
                    <option value="belfast">Belfast</option>
                    <option value="derry">Derry</option>
                    <option value="limerick">Limerick</option>
                    <option value="galway">Galway</option>
                </select>
            </div>
        </div>

       

        <div class="form-group">
            <label class="control-label" for="sbLocArea">County</label>
            <div class="col-md-offset-7"> 
                <select class="form-control" id="sbLocArea" name="sbLocArea" >
                    <option value="Antrim">Antrim</option><option value="Armagh">Armagh</option><option value="Carlow">Carlow</option><option value="Cavan">Cavan</option><option value="Clare">Clare</option><option value="Cork">Cork</option><option value="Derry">Derry</option><option value="Donegal">Donegal</option><option value="Down">Down</option><option value="Dublin">Dublin</option><option value="Fermanagh">Fermanagh</option><option value="Galway">Galway</option><option value="Kerry">Kerry</option><option value="Kildare">Kildare</option><option value="Kilkenny">Kilkenny</option><option value="Laois">Laois</option><option value="Leitrim">Leitrim</option><option value="Limerick">Limerick</option><option value="Longford">Longford</option><option value="Louth">Louth</option><option value="Mayo">Mayo</option><option value="Meath">Meath</option><option value="Monaghan">Monaghan</option><option value="Offaly">Offaly</option><option value="Roscommon">Roscommon</option><option value="Sligo">Sligo</option><option value="Tipperary">Tipperary</option><option value="Tyrone">Tyrone</option><option value="Waterford">Waterford</option><option value="Westmeath">Westmeath</option><option value="Wexford">Wexford</option><option value="Wicklow">Wicklow</option>
                </select>
            </div>
        </div>

       

        <div class="row well">Details</div>
 

        <div class="form-group">
            <label class="control-label" for="sbHouseType">Type of House</label>
            <div class="col-md-offset-7"> 
                <select class="form-control" id="sbHouseType" name="sbHouseType" >
                    <option></option>
                    <option value="Apartment">Apartement</option>
                    <option value="Terraced House">Terraced House</option>
                    <option value="Semi Detached">Semi Detached</option>
                    <option value="Detached">Detached</option>
                    <option value="Bungalow">Bungalow</option>
                    <option value="Country">Country House</option>
                    <option value="Studio">Studio</option>
                    <option value="House">House</option>
                </select>
            </div>

        </div>

       

        <div class="form-group">
            <label class="control-label" for="sbNoOfRooms">Number Of Rooms</label>
            <div class="col-md-offset-7"> 
                <select class="form-control" id="sbNoOfRooms" name="sbNoOfRooms" >
                    <option></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5+</option>

                </select>
            </div>

        </div>

       

        <div class="form-group">
            <label class="control-label" for="tiAskingPrice">Asking Price €€€</label>
            <div class="col-md-offset-7"> 
                <input type="number" class="form-control" name="tiAskingPrice" id="tiAskingPrice" value="{$fieldValues['price']}" >
            </div>
        </div>

        

        <div class="form-group">
            <label class="control-label" for="taDescription">Description</label>
            <div class="col-md-offset-7">
                <textarea class="form-control" rows="3" name="taDescription" id="taDescription">{$fieldValues['description']}</textarea>

            </div>
        </div>
        
       
                
        <div class="form-group">
            <label class="control-label" for="imagefile">Upload Image (gif, jpeg, png - max size 1mb)</label>
            <div class="col-md-offset-7">
                {$fieldValues['image']}
                <!--input type="hidden" name="MAX_FILE_SIZE" value="2000000" /-->
                <input type="file" size="10" name="uploadedfile" id="file" />
            </div>
        </div>        

       
        <button type="submit" class="btn btn-primary" id="bSubmit">Submit</button>
       
    </form><!--Search Form-->              
</div>
                
<!--I need to set default values of some select boxes dynamically using
smarty variables. To solve this I will declare some java script here-->

{literal}
    <script>
    $(window).load(function() {  
        
        $("#sbLocArea option[value='{/literal}{$fieldValues['county']}{literal}']").attr('selected','selected'); 
        $("#sbHouseType option[value='{/literal}{$fieldValues['housetype']}{literal}']").attr('selected','selected'); 
        $("#sbNoOfRooms option[value='{/literal}{$fieldValues['numrooms']}{literal}']").attr('selected','selected'); 
        $("#sbSeller option[value='{/literal}{$fieldValues['sellerid']}{literal}']").attr('selected','selected');
    });
    </script>
{/literal}


