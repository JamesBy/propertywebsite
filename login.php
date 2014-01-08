<?php

/* * ***********************************************
 * ************************************************
 *                  login.php                   **
 *                                              **
 * Project:         Property Website            **
 * Class:           Webelevate 2.1              **
 * Stream:          Application Development     **
 * Subject:         Internet Development        **
 * Date:            Nov/Dec 2013                **
 *                                              **
 *                                              **    
 * Developer:       James Byrne                 **
 *                                              **
 * Student Number:  D12127553                   **
 * email:           james.byrne@webelevate.ie   **
 * phone:           086 8652565                 **    
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

//echo "I am the login form;";

if (!empty($_POST)) {

    //echo '<br><br>'.print_r($_POST);

    $form = new FormLogin();

    //echo ('<br><br>is it valid?? - '.$form->isValid($_POST));

    if ($form->isValid($_POST)) {
        //echo '<br><br>get values: '.$form->getValues().'<br>';

        $validValues = $form->getValues();
        //print_r($validValues);
        // echo "form is valid";
        //TAke the values and check against the database

        $dbLoginTable = new Zend_DB_Table('users');
        $username = $form->getValue('username');
        $password = $form->getValue('password');
        $rows = $dbLoginTable->fetchAll("username = '$username' and password = '$password'");



        if (sizeof($rows) == 1) {

            //  echo "user found";
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