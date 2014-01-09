<?php
/*************************************************
 *************************************************
 *                  addHouse.php                **
 *                                              **
 * Project:         Property Website            **
 * Date:            Nov/Dec 2013                **
 *                                              **
 *                                              **    
 * Developer:       James Byrne                 **
 *                                              **
 * email:           james.byrne@webelevate.ie   **
 *                                              **              
 *                                              **    
 *************************************************                      
 *************************************************/ 

/*
 * There are two main control files. index.php
 * and addhouse.php. index controls the list properties screen and addhouse 
 * handles the add new property form. There are a number of calls which are handeled
 * in this file - as can be seen in the values searched in the switch and case below
 * Some are ajax get, ajax post and normal form submits.
 */


session_start();

define("MY_APP", 1);

// Define path to application directory
defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));
require_once(APPLICATION_PATH . '/config/common.inc.php');
set_include_path(APPLICATION_PATH . "/config" . PATH_SEPARATOR . get_include_path());
set_include_path(APPLICATION_PATH . "/vendor/smarty/libs" . PATH_SEPARATOR . get_include_path());
//For the php date function
date_default_timezone_set('Europe/Dublin');

include_once('smartyhomes.inc.php');
include_once('myFunctions.inc.php');


if (isset($_GET['action'])) {
    $pageAction = $_GET['action'];    
}else
    $pageAction = isset($_POST['action']) ? $_POST['action'] : 'no action';

$smarty = new Smarty_Homes();
$smarty->caching = false;

//A user will not be able to see the admin screen unless thay are logged in
$smarty->assign('loggedIn', false);
$loggedIn = false;
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1) {
    $smarty->assign('loggedIn', true);
    $loggedIn = true;
}
if ($loggedIn === true) {

    //This section is strucrured to behave correctly weather the user has entered 
    //a new property or is coming to the page for the first time.
    //The fields in the form are populated with default values or the 
    //values which the user has entered.
    //Javascript will disable the form if the return message is set.

    $finalErrorMessage = "";

    if ($pageAction == 'addSeller') {
        
        require_once('FormSeller.php');
        $form = new FormSeller();
        
        if ($form->isValid($_POST)) {

            $validValues = $form->getValues();
            $dbSellerTable = new Zend_DB_Table('sellers');

            $entry_id = $dbSellerTable->insert(array(
                'id' => null,
                'full_name' => $validValues['tiSellerName'],
                'email' => $validValues['tiSellerEmail'],
                'phone' => $validValues['tiSellerPhone']
            ));

            die('New Seller Added, Id = ' . $entry_id);
        } else {
            die(constructErrorMsg($form->getMessages()));
        }
    } else {

        if (substr($pageAction, 0, 4) === 'edit') { //edit a property
            
            $requestId = substr($pageAction, 4);
            $dbTable = new Zend_DB_Table('properties');
            $rows = appendSellerInfo($dbTable, $requestId);
            $hi = $rows[0];

            $propDetails = array();
            $propDetails['id'] = "<input type='hidden' name='id' id='id' value='" . $hi['id'] . "'>";
            $propDetails['updateImage'] = "<input type='hidden' name='updateImage' id='updateImage' value='" . $hi['image'] . "'>";
            $propDetails['sellerid'] = $hi['seller_id'];
            $propDetails['full_name'] = $hi['full_name'];
            $propDetails['address'] = $hi['address'];
            $propDetails['county'] = $hi['county'];
            $propDetails['housetype'] = $hi['type'];
            $propDetails['numrooms'] = $hi['bedrooms'];
            $propDetails['price'] = $hi['asking'];
            $propDetails['description'] = $hi['description'];
            $propDetails['image'] = '<strong>Replace Current Image? - </strong>' . str_replace("uploads/", "", $hi['image']) . '<br><br>';
            
        } else {
            
            $propDetails = array();
            $propDetails['id'] = "<input type='hidden' name='id' id='id' value=''>";
            $propDetails['updateImage'] = "<input type='hidden' name='updateImage' id='updateImage' value=''>";
            $propDetails['image'] = "";
            $propDetails['sellerid'] = 0;
            $propDetails['address'] = "";
            $propDetails['county'] = "";
            $propDetails['housetype'] = "";
            $propDetails['numrooms'] = 0;
            $propDetails['price'] = '€';
            $propDetails['description'] = "";
        }

        if (!empty($_POST)) {

            require_once('FormHouse.php');
            $form = new FormHouse();

            if (($form->isValid($_POST))) {
               
                //if a file has been uploaded use that otherwise check for 
                //previous path (if updating)
               
                $path = uploadFile(); 
                //If there is an invalid file upload a blank screen is displayed 
                //with the apropriate error message.
                //this allows the user to click back and not lose their input.
                if (substr($path, 0, 5)=='Error' ){
                    die($path);
                }
                
                if (($path=='default.jpg')&&(!empty($_POST['updateImage']))){ 
                    $path = $_POST['updateImage'];
                }
                //so now the upload file has been dealt with, the file is stored and
                //$path is the filename
                
                //Update and insert values populated from various sources
                //select boxes directly from the form, address, asking price and
                //description have been though zend validate. Image path 
                //set just above. Some default values (id, date), Php date.                              
                
                    $validValues = $form->getValues();
                    $dbPropertyTable = new Zend_DB_Table('properties');
                    if ($_POST['id'] != "") {//update
                        $entry_id = $dbPropertyTable->update(array(
                            
                            'seller_id' => $_POST['sbSeller'],
                            'date' => date("Y-m-d H:i:s"),
                            'address' => $validValues['tiAddress'],
                            'county' => $_POST['sbLocArea'],
                            'type' => $_POST['sbHouseType'],
                            'image' => $path, //$_POST[''],
                            'bedrooms' => $_POST['sbNoOfRooms'],
                            'asking' => $validValues['tiAskingPrice'],
                            'sold' => 'false',
                            'description' => $validValues['taDescription']
                        ),'id = '. $_POST['id']);

                        $dbPropxSeller = new Zend_DB_Table('prop_x_seller');
                        $p_x_sEntry_id = $dbPropxSeller->update(array(
                            
                            'seller_id' => $_POST['sbSeller'],
                            
                        ),'prop_id = '.$_POST['id']);
                        
                        
                        
                        
                    } else {

                        $entry_id = $dbPropertyTable->insert(array(
                            'id' => null,
                            'seller_id' => $_POST['sbSeller'],
                            'date' => date("Y-m-d H:i:s"),
                            'address' => $validValues['tiAddress'],
                            'county' => $_POST['sbLocArea'],
                            'type' => $_POST['sbHouseType'],
                            'image' => $path, //$_POST[''],
                            'bedrooms' => $_POST['sbNoOfRooms'],
                            'asking' => $validValues['tiAskingPrice'],
                            'sold' => 'false',
                            'description' => $validValues['taDescription']
                        ));

                        $dbPropxSeller = new Zend_DB_Table('prop_x_seller');
                        $p_x_sEntry_id = $dbPropxSeller->insert(array(
                            'id' => null,
                            'seller_id' => $_POST['sbSeller'],
                            'prop_id' => $entry_id
                        ));
                    }
                    //repopulate the form
                    $propDetails['id'] = "<input type='hidden' name='id' id='id' value=''>";
                    $propDetails['updateImage'] = "<input type='hidden' name='updateImage' id='updateImage' value=''>";
                    $propDetails['sellerid'] = $_POST['sbSeller'];
                    $propDetails['address'] = $validValues['tiAddress'];
                    $propDetails['county'] = $_POST['sbLocArea'];
                    $propDetails['housetype'] = $_POST['sbHouseType'];
                    $propDetails['numrooms'] = $_POST['sbNoOfRooms'];
                    $propDetails['price'] = $validValues['tiAskingPrice'];
                    $propDetails['description'] = $validValues['taDescription'];

                    if ($_POST['id'] != "" ){ 
                        //after editing send the user back to search screen so thay can 
                        //look at the updated entry. Maybe no need for die(); here.
                        header("Location: index.php");
                        die();
                    } else $finalErrorMessage = "New Property Entered. ID = " . $entry_id;
            } else {
                //If we are here Zend validate failed so construct error
                //message and send it back.
                $finalErrorMessage = constructErrorMsg($form->getMessages());
            }
        }
    }
    $smarty->assign('fieldValues', $propDetails);
    $smarty->assign('flashMessage', $finalErrorMessage);
    $smarty->assign('sellerOptions', retrieveSellerInfoOptions());
    $smarty->assign('fakeadvert', 'assets/img/sidehouse2.png');
    $smarty->assign('name', 'DaftHome');
    $smarty->assign('daform', 'sellform.tpl');
    $smarty->assign('pageTitle', 'Sell a House');
    $smarty->display('master.tpl');

} else {
    //redirect to home page if not logged in
    echo 'You are not logged in';
    header("location:index.php");
}
?>
