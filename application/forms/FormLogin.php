<?php
/*************************************************
 *************************************************
 *                  myjsFunctions.js            **
 *                                              **
 * Project:         Property Website            **
 * Date:            Nov/Dec 2013                **
 *                                              **    
 * Developer:       James Byrne                 **
 *                                              **
 * email:           james.byrne@webelevate.ie   **
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