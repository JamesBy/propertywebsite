<?php

/* * ***********************************************
 * ************************************************
 *                  myfunctions.inc.php         **
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
 * ************************************************                      
 * *********************************************** */
/*
 * This file contains all of the php functions for the project
 */

//only allow access from authorised files 
defined('MY_APP') or die('Restricted access');

//retrieveSellerInfoOptions 
//This function is needed to populate the sellers select box from the seller database
//
function retrieveSellerInfoOptions() {
    $dbPropertyTable = new Zend_DB_Table('sellers');
    $rows = $dbPropertyTable->fetchAll();
    //populate select box string with seller info. 
    $sellerOptions = "";
    foreach ($rows as $row) {
        $sellerOptions .= "<option value = '" . $row['id'] . "'>" . $row['full_name'] . "</option>\n";
    }
    return($sellerOptions);
}

function appendSellerInfo() {

    //Return all data from properties and sellers linked by ids on the 
    //properties_x_sellers table
    //this function takes a varying number of arguments,
    //one if we want to select all of the properties 

    $dbTable = func_get_arg(0);

    //two if we want a particular item (id passed in)
    //OR
    //we are passed in an array of selected values for
    //filtering (ajax post)
    //ie. the second argument is either an array of filter values or the id of the house
    if (func_num_args() == 2) {
        if (is_array(func_get_arg(1))) {
            $filterArray = func_get_arg(1);
            //die(print_r(func_get_arg(1)));
        } else {
            $houseId = func_get_arg(1);
        }
    }


    //the select ststement
    //select everything from properties table and corresponding seller details from 
    //sellers table linked using the prop_x_seller table.
    $select = $dbTable->select()->setIntegrityCheck(false)
            ->from(array('t1' => 'properties')) //array('id','title'))
            ->join(array('t2' => 'prop_x_seller'), 't2.prop_id=t1.id', null)
            ->join(array('t3' => 'sellers'), 't2.seller_id=t3.id', array('full_name', 'email', 'phone'));

    //if we just want the details of one property eg. to edit
    if (isset($houseId)) {
        $select->where('t1.id = ?', (int) $houseId);
    }


    //If we want to filter our listing
    if (isset($filterArray)) {
        if (isset($filterArray['locArea'])) {
            $select->where('t1.county = ?', ($filterArray['locArea']));
        }
        if (isset($filterArray['priceMin'])) {
            $select->where('t1.asking >= ?', (int) ($filterArray['priceMin']));
        }
        if (isset($filterArray['priceMax'])) {
            $select->where('t1.asking <= ?', (int) ($filterArray['priceMax']));
        }
        if (isset($filterArray['sbType'])) {
            $select->where('t1.type = ?', ($filterArray['sbType']));
        }
    }

    $rows = $dbTable->fetchAll($select);
    return ($rows);
}

//constructErrorMsg
//Construct the message for the flash message that is displayed after zend validation
function constructErrorMsg($errorArray) {
    //need to set to true to avoid error if no argument passed in
    $stringProcessed = TRUE;

    //Construct a string containing the zend validadtion error messages    
    if (isset($errorArray)) {
        //errorArray is a key value pair array, seralize it into a string
        $errorMsg = serialize($errorArray);
        $stringProcessed = FALSE;
    }

    $finalErrorMessage = "";
    //This loop works through the message string and looks for the 
    //keywords: Server Validation - set in the zend form object, It takes the 
    //string from the key words to the end of the error message then
    //removes the message from the string, then searches again until
    //no keywords remain.
    while (!$stringProcessed) {

        if (strpos($errorMsg, 'Server Validation')) {
            $startPos = (strpos($errorMsg, 'Server Validation'));

            $pos = strpos($errorMsg, '"', $startPos); // $pos = 7, not 0
            //add the pre programmed error message

            $messageToRemove = substr($errorMsg, $startPos, ($pos - $startPos));
            $finalErrorMessage .= $messageToRemove . ' '; //substr($errorMsg, $startPos,($pos-$startPos));
            //remove the message from the string.
            $errorMsg = str_replace($messageToRemove, "", $errorMsg);
        } else {
            $stringProcessed = TRUE;
        }
    }
    return($finalErrorMessage);
}

/*Simple file upload function
 * leave here for future reference
 * 
  //File Upload Function
  function uploadFile() {
  if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], UPLOAD_PATH . "/" . $_FILES['uploadedfile']['name'])) {
  return ($_FILES['uploadedfile']['name']);
  } else {
  //if no file use the default image
  return 'default.jpg';
  }
  }
 */
/*File upload function checks size and extension 
 * returns appropriate error message or file name
 * for save to database. All errors returned 
 * begin with the word - 'Error'
 */
function uploadFile() {

    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES["uploadedfile"]["name"]);
    $extension = end($temp);
    if (empty($_FILES['uploadedfile']['tmp_name'])){
        
        return 'default.jpg';
    }
            
    if ((($_FILES["uploadedfile"]["type"] == "image/gif") || ($_FILES["uploadedfile"]["type"] == "image/jpeg") || ($_FILES["uploadedfile"]["type"] == "image/jpg") || ($_FILES["uploadedfile"]["type"] == "image/pjpeg") || ($_FILES["uploadedfile"]["type"] == "image/x-png") || ($_FILES["uploadedfile"]["type"] == "image/png")) && in_array($extension, $allowedExts)) {
        if ($_FILES["uploadedfile"]["error"] > 0) {
            return "Error - Return Code: " . $_FILES["uploadedfile"]["error"];
        } else if ($_FILES["uploadedfile"]["size"] > 1048576 ){
            return('Error - uploaded file too big (Max 1mb. Press Back)');
        } else {
            
            if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], UPLOAD_PATH . "/" . $_FILES['uploadedfile']['name'])) {
                return ($_FILES['uploadedfile']['name']);
            }else{
                return 'Error - Sorry there was a problem saving the image. Press Back';
            }
        }
    } else {
        return 'Error - Unauthorised file extension: Press Back';
    }
}



function deleteHouse($id) {
    //delete house from property table and corresponding
    //value from prop_x_sellers table
    $dTable = new Zend_DB_Table('prop_x_seller');
    $dTable->delete('prop_id = ' . (int) $id);
    $dTable = new Zend_DB_Table('properties');
    $result = $dTable->delete('id = ' . (int) $id);

    return ($result);
}


function deleteSeller($id) {
    //We dont delete a seller if they are linked to a property
    $dTable = new Zend_DB_Table('prop_x_seller');
    $where = array('seller_id = ' . (int) $id);

    $check = $dTable->fetchRow($where);
    if ($check == null) {
        $dTable = new Zend_DB_Table('sellers');
        $dTable->delete('id = ' . (int) $id);
        return(true);
    }
    return(false);
}

//toggleSold in this function we take in an id and 
//a boolean - sold or not
//the function returns the description for repopulating the
//description field if the property is un-sold.
function toggleSold($id, $value) {

    $dbTable = new Zend_DB_Table('properties');

    $select = $dbTable->select()
            ->from(array('p' => 'properties'), array('p.id', 'p.sold', 'p.description'))
            ->where('id = ' . $id);

    $result = $dbTable->fetchRow($select);
    $result->sold = $value;
    // UPDATE the row in the database with new values
    $result->save();
    $result = $dbTable->fetchRow($select);

    return ($result->description);
}

?>
