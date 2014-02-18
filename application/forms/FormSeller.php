<?php
/*************************************************
 *************************************************
 *                  FormSeller.PHP              **
 *                                              **
 * Project:         Property Website            **
 * Date:            Nov/Dec 2013                **
 *                                              **    
 * Developer:       James Byrne                 **
 *                                              **
 * email:           thejamiebyrne@gmail.com     **
 *                                              **              
 *                                              **    
 *************************************************                      
 *************************************************/ 

//Set up the form fields with validation criteria
//Numbers must be numbers. On varchar fields we dont allow anything
//that is not a-z, A-Z, 0-9, ',' or '.'

class FormSeller extends Zend_Form {

    public function init() {

        $name = $this->createElement('text', 'tiSellerName'); 
        $name->addFilter('StringTrim');
        $name->addValidator('stringLength', false, array(0, 50, 'messages' => 'Server 
            Validation stringlength error: Cannot be more than 50 chars'));
        $name->setRequired(true)
                ->addValidator('NotEmpty', true);
        $name->addValidator('regex', false, array('/^[a-z_A-Z_0-9_._,]+/', 'messages' => array(
                'regexNotMatch' => 'Server Validation Regex Error: 
                                   You have used unauthorised characters in the name input.'
        )));

        $email = $this->createElement('text', 'tiSellerEmail');
        $email->addFilter('StringTrim');
        //below - "true" on the validator kills the other validations after it. 
        //If false it will validate the regex and length methods. Need to force the 
        //Server Validation keywords
        $email->setRequired(true)
                ->addValidator('NotEmpty', true);
        $email->addValidator('stringLength', false, array(0, 50, 'messages' => 'Server 
            Validation stringlength error: Cannot be more than 50 chars'));

        $phone = $this->createElement('text', 'tiSellerPhone');
        $phone->addFilter('StringTrim');
        $phone->addValidator('regex', false, array('/^[0-9]+/', 'messages' => array(
                'regexNotMatch' => 'Server Validation Regex Error:
                                   You have used unauthorised characters in the phone input.')));
        $phone->addValidator('stringLength', false, array(0, 50, 'messages' => 'Server 
            Validation stringlength error: Cannot be more than 50 chars'));


        $this->addElement($name);
        $this->addElement($email);
        $this->addElement($phone);
    }

}

?>
