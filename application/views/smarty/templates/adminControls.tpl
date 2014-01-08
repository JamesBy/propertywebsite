

<button type="button" class="btn btn-danger btn-xs pull-right" onclick="deleteHouse({$row['id']});">Delete</button>
<button type="submit" class="btn btn-primary btn-xs pull-right" style="margin-right: 4px;" onclick="location.href='addHouse.php?action=edit{$row['id']}';">Edit</button>
{if ($row['sold'])} 
<input type="checkbox" id="soldyn{$row['id']}" onclick="toggleSold({$row['id']})" checked><strong>Sold</strong>    
{else}
    <input type="checkbox" id="soldyn{$row['id']}" onclick="toggleSold({$row['id']})"><strong>Sold</strong>    
{/if}