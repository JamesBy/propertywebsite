   
{foreach $rows as $row}
    <hr>
    <div class="row">
        <div class="col-md-3"> 
            <img class="img-responsive listImage" src="uploads/{$row['image']}" alt=""></img>
        </div>
        <div class="col-md-9">
            <div class="row dispAddress">
                {$row['address']}, Co. {$row['county']}
            </div>
            <div class="row"  id="descriptionDiv{{$row['id']}}">
                {if $row['sold']}
                    <p style="color:red; word-wrap:break-word;"><strong>SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD</strong></p>   
                {else}
                    <strong>{$row['description']}</strong>
                {/if}
            </div><br>

            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <strong>Type: </strong>{$row['type']}<br>
                    <strong>Asking Price: </strong>{$row['asking']}<br>
                    <strong>Date: </strong>{$row['date']|date_format}<br><br>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <strong>Seller Name: </strong>{$row['full_name']}<br>
                    <strong>Email: </strong>{$row['email']}<br>
                    <strong>Phone: </strong>{$row['phone']}<br><br>
                </div>
            </div>{include file="$adminControls"}
        </div>
    </div>

{/foreach}<hr>


