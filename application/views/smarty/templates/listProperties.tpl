{include file="$filterPanel"}
<div class="container" name="listPropRows" id="listPropRows">
    {include file="listPropContent.tpl"}
    
</div>
 <!--bad login is set in login.php's call to index.php if the user has entered 
 incorrect login details it is used to call an alert-->
{$badLoginAlert}
