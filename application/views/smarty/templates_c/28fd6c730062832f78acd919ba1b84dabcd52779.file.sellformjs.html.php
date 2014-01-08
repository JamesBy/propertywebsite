<?php /* Smarty version Smarty-3.1.15, created on 2013-11-28 22:27:45
         compiled from "assets\javascript\sellformjs.html" */ ?>
<?php /*%%SmartyHeaderCode:93185294b7c39dcdb7-19935374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28fd6c730062832f78acd919ba1b84dabcd52779' => 
    array (
      0 => 'assets\\javascript\\sellformjs.html',
      1 => 1385674061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93185294b7c39dcdb7-19935374',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5294b7c39e0c35_21139505',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5294b7c39e0c35_21139505')) {function content_5294b7c39e0c35_21139505($_smarty_tpl) {?>
<script type="text/javascript">

    $(document).ready(function() {

        //populate the select box
        popSelect = ['Carlow', 'Dublin', 'Kildare', 'Kilkenny', 'Laois', 'Longford', 'Louth', 'Meath', 'Offaly', 'Westmeath', 'Wexford', 'Wicklow'];
        var options = $("#sbLocArea");

        $.each(popSelect, function(index, value) {

            options.append($("<option />").val(value).text(value));
        });

        // initialize the validation plugin
        //$("#commentForm").validate();
        $("#searchform").validate({
            rules: {
                tiAddress: {
                    required: true,
                    email: true
                },
                narrowLoc: {
                    required: true,
                    minlength: 5
                },
                sbLocArea: {
                    required: true,
                    minlength: 5
                }

            }





        });



        $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
            console.log(numFiles);
            console.log(label);
        });

        $("#addPhoto").click(function() {
            console.log("Handler for .click() called.");
            var currentImageCount = $('input[type="file"]').length;
            var nextImageCount = currentImageCount + 1;
            var insertAnotherUpload = '<div class="fileupload fileupload-new col-md-3 col-xs-6" data-provides="fileupload">';
            insertAnotherUpload += '<div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>';
            insertAnotherUpload += '<div><span class="btn btn-primary btn-file">';
            insertAnotherUpload += 'Browse <input type="file" multiple name="photoUpload_';
            insertAnotherUpload += nextImageCount + '" id="photoUpload_">';
            insertAnotherUpload += '</span></div>';
            $('#divUploader').append(insertAnotherUpload);
            //$("#divUploader").controlgroup("container")["append"](insertAnotherUpload);
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







    $("#dpDateAvailable").datepicker();




    $(document)
            .on('change', '.btn-file :file', function() {
        var input = $(this),
                numFiles = input.get(0).files ? input.get(0).files.length : 1,
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
    });







</script><?php }} ?>
