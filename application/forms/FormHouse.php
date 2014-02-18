<?php
/*************************************************
 *************************************************
 *                  FormHouse.php               **
 *                                              **
 * Project:         Property Website            **
 * Developer:       James Byrne                 **
 *                                              **
 * email:           thejamiebyrne@gmail.com     **
 *                                              **              
 *                                              **    
 *************************************************                      
 *************************************************/ 

class FormHouse extends Zend_Form{

//Set up the form fields with validation criteria
//Numbers must be numbers. On varchar fields we dont allow anything
//that is not a-z, A-Z, 0-9, ',' or '.'

    
	public function init(){
	    
		$address = $this->createElement('text', 'tiAddress');
		$address->setRequired(true)
		        ->addErrorMessage('Server Validation Invalid description.');
		$address->addFilter('StringTrim');
		        
		//$address->addValidator('Alnum', true, array('allowWhiteSpace' => true));
		$address->addValidator('regex', false, array('/^[a-z_A-Z_0-9_._,]+/','messages'=>array(
		                               'regexNotMatch'=>'Server Validation Regex Error: 
		                                   You have used unauthorised characters in the address input.'
		                           )));
		$address->addValidator('stringLength', false, array(0, 100,'messages'=>'Server 
		            Validation stringlength error: Cannot be more than 100 chars'));



		$asking = $this->createElement('text', 'tiAskingPrice');
		$asking->addFilter('StringTrim');
		//below - "true" on the validator kills the other validations after it. 
		//If false it will validate the regex and length methods. Need to force the 
		//Server Validation keywords
		$asking->setRequired(true)
		    	  ->addValidator('NotEmpty', true)
		    	  ->addErrorMessage('Server Validation Invalid Asking Price.');
		$asking->addValidator('regex', false, array('/^[0-9]+/',));
		$asking->addValidator('stringLength', false, array(0, 100));

		$description = $this->createElement('text', 'taDescription');
		$description->addFilter('StringTrim');
		$description->addValidator('regex', false, array('/^[a-z_A-Z_,_._0-9]+/'));
		$description->addValidator('stringLength', false, array(0, 300));
		$description->addErrorMessage('Server Validation Invalid Description.');


		$this->addElement($address);
		$this->addElement($asking);
		$this->addElement($description);
	}
	 
}