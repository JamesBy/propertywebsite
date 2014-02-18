<?php

/* ************************************************
 * ************************************************
 *                  common.inc.php              **
 *                                              **
 * Project:         Property Website            **
 * Date:            Nov/Dec 2013                **
 *                                              **    
 * Developer:       James Byrne                 **
 *                                              **
 * email:           thejamiebyrne@gmail.com     **
 *                                              **    
 * ************************************************                      
 * ************************************************/

/*Set up database connection and zend*/

//CHANGE THESE VALUES
//CHANGE THESE VALUES
define("DB_HOST","***");
define("DB_USER","***");
define("DB_PASSWORD","***");
define("DB_DATABASE","***");

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

$db = Zend_Db::factory('Pdo_Mysql', array('host' => DB_HOST, 'username' => DB_USER, 'password' => DB_PASSWORD, 'dbname' => DB_DATABASE));

define("UPLOAD_PATH", realpath(dirname(__FILE__)) . "//..//..//uploads");
Zend_Db_Table::setDefaultAdapter($db);

?>