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
 * email:           james.byrne@webelevate.ie   **
 *                                              **              
 *                                              **    
 *************************************************                      
 *************************************************/ 

session_start();
session_destroy();
header("Location: index.php");

?>
