<?php
/*************************************************
 *************************************************
 *                  index.php                   **
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
define("MY_APP", ***********);
// Define path to application directory
defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));
require_once(APPLICATION_PATH . '/config/common.inc.php');
set_include_path(APPLICATION_PATH . "/vendor/smarty/libs" . PATH_SEPARATOR . get_include_path());
set_include_path(APPLICATION_PATH . "/models" . PATH_SEPARATOR . get_include_path());
set_include_path(APPLICATION_PATH . "/config" . PATH_SEPARATOR . get_include_path());
include_once('myFunctions.inc.php'); 
include_once('smartyhomes.inc.php');

$smarty = new Smarty_Homes();
$smarty->caching = false;
$smarty->assign('loggedIn', false);

$loggedIn = false;
$pageAction = 'home';
//Check Login
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1) {
    $smarty->assign('loggedIn', true);
    $loggedIn = true;
}

//Retrieve GET or POST data
if (isset($_GET['action'])){
        $pageAction = isset($_GET['action']) ? $_GET['action'] : 'home';
    }else{
        $pageAction = isset($_POST['action']) ? $_POST['action'] : 'home';
}

//alert user if incorrect login entered
$smarty->assign('badLoginAlert', "");

switch ($pageAction) {
    case 'sendTheSellers':
        echo (retrieveSellerInfoOptions());
        break;
    case 'delete':
        echo (deleteHouse($_GET['id']));
        break;
    case 'deleteSeller':
        echo(deleteSeller($_GET['id']));
        break;
    case 'toggleSold':
        echo toggleSold($_POST['id'],$_POST['yn']);
        break;
    case 'filter':
        //this is an ajax call handler made to filter
        $dbTable = new Zend_Db_Table('properties');
        $rows = appendSellerInfo($dbTable,$_POST);
        $smarty->assign('rows', $rows);
        $smarty->assign('filterPanel', 'noadminControls.tpl');
        if ($loggedIn == true){
            $smarty->assign('adminControls', 'adminControls.tpl');
        }else {
            $smarty->assign('adminControls', 'noadminControls.tpl');
        }
        echo $smarty->fetch('listPropContent.tpl');
        break;
    case 'badlogin':
        //Send the alert to hiddin div and allow execution continue
        $smarty->assign('badLoginAlert', "<p id=\"badLogin\"></p>");
    default:
        $dbTable = new Zend_Db_Table('properties');
        $rows = appendSellerInfo($dbTable);
        $smarty->assign('filterPanel', 'filterpanel.tpl');
        if ($loggedIn == true){
            $smarty->assign('adminControls', 'adminControls.tpl');
        }else {
            $smarty->assign('adminControls', 'noadminControls.tpl');
        }
        $smarty->assign('name', 'DAFTHOME');
        $smarty->assign('rows', $rows);
        $smarty->assign('path', UPLOAD_PATH);        
        $smarty->assign('daform', 'listProperties.tpl');
        $smarty->assign('pageTitle', 'Daft Home');
        $smarty->assign('fakeadvert', 'assets/img/sideHouse.png');
        $smarty->display('master.tpl');
}

?>
