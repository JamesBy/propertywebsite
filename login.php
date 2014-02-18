<?php

/* * ***********************************************
 * ************************************************
 *                  login.php                   **
 *                                              **
 * Project:         Property Website            **
 * Date:            Nov/Dec 2013                **
 *                                              **
 *                                              **    
 * Developer:       James Byrne                 **
 *                                              **
 * email:           thejamiebyrne@gmail.com     **
 *                                              **              
 *                                              **    
 * ************************************************                      
 * *********************************************** */


session_start();

define("MY_APP", 1);

// Define path to application directory
defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));

require_once(APPLICATION_PATH . '/config/common.inc.php');
require_once('FormLogin.php');


if (!empty($_POST)) {

    $form = new FormLogin();

    if ($form->isValid($_POST)) {

        $validValues = $form->getValues();
        
        //Take the values and check against the database
        $dbLoginTable = new Zend_DB_Table('users');
        $username = $form->getValue('username');
        $password = $form->getValue('password');
        $rows = $dbLoginTable->fetchAll("username = '$username' and password = '$password'");

        if (sizeof($rows) == 1) {
            //User found
            $_SESSION['loggedIn'] = 1;
            $_SESSION['user'] = $rows[0];
            header("location: index.php");
        } else {
            header("location: index.php?action=badlogin");
        }
    } else {
        header("location: index.php?action=badlogin");
    }
} else {
    header("Location: index.php?action=badlogin");
}