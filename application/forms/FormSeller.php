<?php
/*************************************************
 *************************************************
 *                  FormSeller.PHP              **
 *                                              **
 * Project:         Property Website            **
 * Class:           Webelevate 2.1              **
 * Stream:          Application Development     **
 * Subject:         Internet Development        **
 * Date:            Nov/Dec 2013                **
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

//Set up the form fields with validation criteria
//Numbers must be numbers. On varchar fields we dont allow anything
//that is not a-z, A-Z, 0-9, ',' or '.'

class FormSeller extends Zend_Form {

    public function init() {

        $name = $this->createElement('text', 'tiSellerName'); //,array(
        $name->addFilter('StringTrim');
        //$address->addValidator('Alnum', true, array('allowWhiteSpace' => true));

        $name->addValidator('stringLength', false, array(0, 50, 'messages' => 'Server 
            Validation stringlength error: Cannot be more than 50 chars'));

        $name->setRequired(true)
                ->addValidator('NotEmpty', true);
        //->addErrorMessage('Server Validation You must enter a name.');

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
        //->addErrorMessage('Server Validation You must enter an asking price.');

        $email->addValidator('stringLength', false, array(0, 50, 'messages' => 'Server 
            Validation stringlength error: Cannot be more than 50 chars'));

        $phone = $this->createElement('text', 'tiSellerPhone');
        $phone->addFilter('StringTrim');
        //$description->setRequired(true);
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
