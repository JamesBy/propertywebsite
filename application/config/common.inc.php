<?php

/* ************************************************
 * ************************************************
 *                  common.inc.php              **
 *                                              **
 * Project:         Property Website            **
 * Subject:         Internet Development        **
 * Class:           Webelevate 2.1              **
 * Stream:          Application Development     **
 * Date:            Nov/Dec 2013                **
 *                                              **    
 * Developer:       James Byrne                 **
 *                                              **
 * Student Number:  D12127553                   **
 * email:           james.byrne@webelevate.ie   **
 * phone:           086 8652565                 **
 *                                              **              
 *                                              **    
 * ************************************************                      
 * ************************************************/

/*Set up database connection and zend*/

//CHANGE THESE VALUES
//CHANGE THESE VALUES
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_DATABASE","dafthome");

defined('MY_APP') or die('Restricted access');
set_include_path(APPLICATION_PATH . "/vendor/Smarty/libs" . PATH_SEPARATOR . get_include_path());
set_include_path(APPLICATION_PATH . "/vendor" . PATH_SEPARATOR . get_include_path());
set_include_path(APPLICATION_PATH . "/forms" . PATH_SEPARATOR . get_include_path());

require_once('Zend/Loader.php');
Zend_Loader::loadClass('Zend_Db_Table');
Zend_Loader::loadClass('Zend_Registry');
Zend_Loader::loadClass('Zend_Form');
Zend_Loader::loadClass('Zend_View');

set_include_path(APPLICATION_PATH . "/models" . PATH_SEPARATOR . get_include_path());

//$db = Zend_Db::factory('Pdo_Mysql', array('host' => 'localhost', 'username' => 'root', 'password' => '', 'dbname' => 'dafthome'));
$db = Zend_Db::factory('Pdo_Mysql', array('host' => DB_HOST, 'username' => DB_USER, 'password' => DB_PASSWORD, 'dbname' => DB_DATABASE));

//Zend_Registry::set('my_db', $db);
define("UPLOAD_PATH", realpath(dirname(__FILE__)) . "//..//..//uploads");
Zend_Db_Table::setDefaultAdapter($db);

//Zend_Registry::set('my_db', $db);

?>