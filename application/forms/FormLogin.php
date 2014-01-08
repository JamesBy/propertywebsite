<?php
/*************************************************
 *************************************************
 *                  myjsFunctions.js            **
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
 *************************************************                      
 *************************************************/ 

class FormLogin extends Zend_Form{
 
public function init(){

        // Add an username element
        $this->addElement('text', 'username', array(          
            'required'   => true,
            'filters'    => array('StringTrim')
            
        ));
        
        $this->addElement('password', 'password', array(          
            'required'   => true
  
        ));
  
    }
 
}