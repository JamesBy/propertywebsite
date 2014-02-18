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
 * email:           thejamiebyrne@gmail.com     **
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