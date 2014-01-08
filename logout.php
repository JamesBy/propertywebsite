<?php
/*************************************************
 *************************************************
 *                  logout.php                  **
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
 *************************************************                      
 *************************************************/ 

session_start();
session_destroy();
header("Location: index.php");

?>
