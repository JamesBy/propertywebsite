<!--Featuring smarty loops to fill selectboxes-->

<div class="row well">Refine Search</div>
<div class="row">

    <div class="form-group col-md-3" id="divcounty" name="divcounty">
        <label class="control-label" for="sbLocArea">County</label>
        <select class="form-control" id="sbLocArea" name="sbLocArea" onchange="filterListing()">
            <option value = "">All</option>
            

        </select>
    </div>
    <div class="form-group col-md-3" id="divpricemin" name="divpricemin">
        <label class="control-label" for="sbPriceMin">Price-min</label>
        <select class="form-control" id="sbPriceMin" name="sbPriceMin" onchange="filterListing()">
            <option value = "">No Min</option>
            {for $var=25000 to 5000000 step 25000}
                <option value="{$var}">€{$var}</option>
            {/for}
            

        </select>
            
    </div>
    <div class="form-group col-md-3" id="divpricemax" name="price">
        <label class="control-label" for="sbpricemax">Price-max</label>
        <select class="form-control" id="sbpricemax" name="sbpricemax" onchange="filterListing()">
        <option value = "">No Max</option>
            {for $var=25000 to 5000000 step 25000}
                <option value="{$var}">€{$var}</option>
            {/for}
           

        </select>
            
    </div>        
    <div class="form-group col-md-3" id="divtype" name="refinediv">
        <label class="control-label" for="sbtype">House Type</label>
        <select class="form-control" id="sbtype" name="sbtype" onchange="filterListing()">
                    <option value = "">Any</option>
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
