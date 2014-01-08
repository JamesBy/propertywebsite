/*************************************************
 *************************************************
 *                  myjsFunctions.js            **
 *                                              **
 * Project:         Property Website            **
 * Class:           Webelevate 2.1              **
 * Stream:          Application Development     **
 * Subject:         Internet Development        **
 * Date:            Nov/Dec 2013                **
 *                                              **    
 * Developer:       James Byrne                 **
 *                                              **
 * Student Number:  D12127553                   **
 * email:           james.byrne@webelevate.ie   **
 * phone:           086 8652565                 **
 *                                              **              
 *                                              **    
 *************************************************                      
 *************************************************/ 


//Disable the form after new house is entered
function disableForm(form){
    form.find('input:text, input:file,input, select, textarea, button ').attr('disabled','disabled');        
}

//Reset the form to allow a new input
function resetForm($form) {
    $form.find('input, textarea, button, select,button').removeAttr('disabled', 'disabled');
    $form.find('input:text, input:file, input, select, textarea').val('');
}
  

//Below checks for alertDiv Existence and calls above functions
window.onload = function () {
    var a = document.getElementById('alertDiv');
    if (a) {
         disableForm($('#searchform'));
         disableForm($('#addSellerForm'));
    }
};


$('#searchform').submit(function(event){
    //This function handles the edge case when a user clicks
    //to add a new seller then moves away without filling the form
    //causing an empty submit for the seller id. 
    if ($("#sbSeller").length === 0){
        alert('Pleaser enter a seller.');
        event.preventDefault();
    }
    
});

	

$(document).ready(function() {

    //populate the select box
    /*Changed this to raw html for better non js functionality*/
    /*Still needed for re population and filter*/
    popSelect = ['Antrim','Armagh','Carlow','Cavan','Clare','Cork','Derry','Donegal','Down','Dublin','Fermanagh','Galway','Kerry','Kildare','Kilkenny','Laois','Leitrim','Limerick','Longford','Louth','Mayo','Meath','Monaghan','Offaly','Roscommon','Sligo','Tipperary','Tyrone','Waterford','Westmeath','Wexford','Wicklow'];
    var options = $("#sbLocArea");

    $.each(popSelect, function(index, value) {
        options.append($("<option />").val(value).text(value));
    });
    
    //for fixing sidebar on scroll
    $('#adRight').affix({
      offset: {
        top: 360
      }
    });
    
    //hidded field populated if login values donot match database
    if ($('#badLogin').length) {
        alert('Login Unsuccessful. Try again');
    }
    
    // initialize the validation plugin
    $("#searchform").validate({
        rules: {
            tiAddress: {
                required: true
            },
            sbHouseType: {
                required: true
            },
            sbNoOfRooms: {
                required: true
            },
            tiAskingPrice: {
                required: true,
                digits: true
            },
            taDescription: {
                maxlength: 295
            }
        }
    });
    
    $("#searchform").submit(function() {
        $("#searchform").append($('#sbSeller'));
        $('#sbSeller').hide();
    });
    
    //The function below changes the width  of the file input when the 
    //screen is below a certain size to stop it upsetting responsiveness
    
    // Optimalisation: Store the references outside the event handler:
    var $window = $(window);
    var $pane = $('#file');

    function checkWidth() {
        var windowsize = $window.width();
        if (windowsize < 460) {
            //if the window is greater than 440px wide then turn on jScrollPane..
            $pane.width(180);
            //console.log('New Width'+$('#file').width());
        }else{
            $pane.width(350);
            //console.log('New Width'+$('#file').width());
        }
    }
       
    // Execute on load
    checkWidth();
    // Bind event listener
    $(window).resize(checkWidth);
    //The function above changes the width  of the file input when the... 
    
    
    $('#slider').carousel({
            interval: 5000
    });
    

});


function testfunct() {

    //populate select box depending on province
    console.log($('#narrowLoc :selected').text());

    var selectedOption = $('#narrowLoc :selected').text();
    var popSelect = [];

    switch (selectedOption) {
        case 'Leinster':
            popSelect = ['Carlow', 'Dublin', 'Kildare', 'Kilkenny', 'Laois', 'Longford', 'Louth', 'Meath', 'Offaly', 'Westmeath', 'Wexford', 'Wicklow'];
            break;
        case 'Munster':
            popSelect = ['Clare', 'Cork', 'Kerry', 'Limerick', 'Tipperary', 'North', 'Tipperary', 'South', 'Tipperary', 'Waterford'];
            break;
        case 'Connaght':
            popSelect = ['Galway', 'Leitrim', 'Mayo', 'Roscommon', 'Sligo'];
            break;
        case 'Ulster':
            popSelect = ['Antrim', 'Armagh', 'Cavan', 'Donegal', 'Down', 'Fermanagh', 'Londonderry', 'Monaghan', 'Tyrone'];
            break;
        case 'Dublin':
            popSelect = ['Dublin'];
            break;
        case 'Belfast':
            popSelect = ['Belfast'];
            break;
        case 'Derry':
            popSelect = ['Derry'];
            break;
        case 'Limerick':
            popSelect = ['Limerick'];
            break;
        case 'Galway':
            popSelect = ['Galway'];
            break;

    }
    var options = $("#sbLocArea");
    //empty the select box
    options.empty();
    $.each(popSelect, function(index, value) {

        options.append($("<option />").val(value).text(value));
    });

}


function addSeller() {

    //Create a form to add a seller.

    var theNewDiv = "<div class=\"container\"><div class=\"form-group\"><label class=\"control-label\" for=\"tiSellerName\">Name</label>";
    theNewDiv += "<div class=\"col-md-offset-7\">";
    theNewDiv += "<input type=\"text\" class=\"form-control\"  name=\"tiSellerName\" style=\"width:100%;\">";
    theNewDiv += "</div></div>";

    theNewDiv += "<div class=\"form-group\"><label class=\"control-label\" for=\"tiSellerEmail\">Email</label>";
    theNewDiv += "<div class=\"col-md-offset-7\">";
    theNewDiv += "<input type=\"email\" class=\"form-control\"  name=\"tiSellerEmail\" style=\"width:100%;\">";
    theNewDiv += "</div></div>";

    theNewDiv += "<div class=\"form-group\"><label class=\"control-label\" for=\"tiSellerPhone\">Phone</label>";
    theNewDiv += "<div class=\"col-md-offset-7\">";
    theNewDiv += "<input type=\"number\" class=\"form-control\"  name=\"tiSellerPhone\" style=\"width:100%;\">";

    theNewDiv += "<button class=\"btn-primary btn-xs pull-right\" type=\"submit\" style=\"margin-top:10px\">Add Seller</button>";
    theNewDiv += "<a href=\"javascript:;\" class=\"pull-right\" onclick=\"sellerAdded(0)\" style=\"margin-top:12px; margin-right: 15px;\">Cancel</a>";
    theNewDiv += "</div></div>";


    $('#sellerDiv').html(theNewDiv);

    $("#addSellerForm").validate({
        rules: {
            tiSellerName: {
                required: true

            },
            tiSellerEmail: {
                required: true,
                email: true

            },
            tiSellerPhone: {
                required: true,
                digits: true

            }
        },
        submitHandler: function() {

            $.post("addHouse.php", $('#addSellerForm').serialize() + "&action=addSeller")
                    .done(function(data) {
                if (data.indexOf("New Seller Added") !== -1){
                              
                      sellerAdded(data.substr(23));
                }
                

            });
        }
    });
}

//Ajax get call to repopulate the sellers select box from database
function sellerAdded(id) {
   
    var optionFiller = "";
    $.get("index.php", "&action=sendTheSellers")
            .done(function(data) {
        repopulateSelect(data,id);
       
    });

}

//repopulate the select box and reset the form to its former glory
//with the new seller added and selected
function repopulateSelect(data,id){

    var sellerAddedString = "<label class=\"control-label\" for=\"sbSeller\">Seller</label>";
    sellerAddedString += "<a href=\"javascript:;\" class=\"btn-primary btn-xs pull-right\" onclick=\"addSeller();\">Add Seller</a>";
    sellerAddedString += "<a href=\"javascript:;\" class=\"btn-danger btn-xs pull-right\" onclick=\"deleteSeller();\" style=\"margin-right: 4px;\">Delete Selected Seller</a>";
    sellerAddedString += "<div class=\"col-md-offset-7\"> ";
    sellerAddedString += "<select class=\"form-control\" id=\"sbSeller\" name=\"sbSeller\" form=\"searchform\">";
    sellerAddedString += data;
    sellerAddedString += "</select></div>";
    
    $('#sellerDiv').html(sellerAddedString);
    
    if (($('#sbSeller option[value='+id+']').length > 0) && (id != 0))
        $('#sbSeller option[value='+id+']').attr('selected','selected');


}



//Delete selected using ajax
function deleteHouse(id){
    
var r=confirm("Delete this record?");
if (r===true)
  {
  $.get("index.php", "&action=delete&id="+id)
            .done(function(data) {
                            
                if (parseInt(data) === 1){
                    
                    window.location.href="index.php";
                }
            });
  }
     
}


//The Filter Function...
function filterListing(){
    //This is my own filter function
    //There are four parts to this puzzle - 
    //This, js part, index.php, myfunctions.php and smartys listproperties.tpl
    //index.php. - the action type must be post and the 
    //              action must be 'filter'
    //myfunctions.inc.php, if the second arg is an array 
    //it is unpacked to look for the field values sent form here.
    //The filters are added to the Zend SQL query in functions.inc.php 
    //The filtered query is executed and values are applied to smarty
    //smarty->display(listpropcontent) is sent back to here in the post reply
    //this is applied to the html property of #listProperties div below
    //refreshing the div with the filtered data.
    
    sendData = {};
    sendData['action'] = 'filter';
    
    if ($('#sbLocArea').val() !== ""){
        sendData['locArea'] = $('#sbLocArea').val();
    }
    if ($('#sbPriceMin').val() !== ""){
        sendData['priceMin'] = $('#sbPriceMin').val();
    }
    if ($('#sbpricemax').val() !== ""){
        if (($('#sbPriceMin').val() !== "") && (parseInt($('#sbpricemax').val()) 
                < (parseInt($('#sbPriceMin').val())))){
            alert('Max must be equal to or greater than min.');
            $("#sbpricemax option[value='']").attr('selected','selected'); 
            return;
        }else
            sendData['priceMax'] = $('#sbpricemax').val();
    }
    if ($('#sbtype').val() !== ""){
        sendData['sbType'] = $('#sbtype').val();
    } 
    
    $.post("index.php",
        sendData,
        function(data,status){
            $('#listPropRows').html(data);
    });
  
  
}

//Action to be taken if the sold check box is ticked/unticked
//Check if the check box is ticked or unticked, send appropriate 
//to index.php - ajax post, index.php calls the function in functions.inc.php
//to update the database and send back the description to repopulate the
//description box.
function toggleSold(id){
    
    var sendData  = {}; 
        sendData['action']='toggleSold';
        sendData['id'] = id;//$("#soldyn").val();
    
    if($("#soldyn"+id).is(':checked')){
        
        var soldsold = "<p style=\"color:red; word-wrap:break-word;\"><strong>SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD</strong></p>   ";

        sendData['yn'] = 1;
        
        $.post("index.php",
        sendData,
        function(data){            
            $('#descriptionDiv'+id).html(soldsold)            
        });   
    
        
    }else{
        sendData['yn'] = 0;
        
        $.post("index.php",
        sendData,
        function(data){
            $('#descriptionDiv'+id).html('<strong>'+data+'</strong>')
        });   
        
    }
    
}

//We check to see if the seller is linked to a propery 
//if not, delete.
function deleteSeller(){
       
var r=confirm("Delete this record?");
if (r===true)
    
  {
     $.get("index.php", "&action=deleteSeller&id="+$('#sbSeller').val())
        .done(function(data,status) {
            if (data) sellerAdded(0);
            else alert('This seller is linked to a property, could not delete.');
            
         });
  } 
}








