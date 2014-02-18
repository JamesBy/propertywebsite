<?php
/*************************************************
 *************************************************
 *                  logout.php                  **
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
 *************************************************                      
 *************************************************/ 

session_start();
session_destroy();
header("Location: index.php");

?>
