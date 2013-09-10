<?php

// OK CHECKOUT

class Checkout
{
	public $session_var;
	public $checkout_var;
	public $session_type_obj;
	public $session_billing_obj;
	public $session_shipping_obj;
	public $session_shipping_method_obj;
	public $session_payment_obj;
	
	public function __construct()
	{
		//$mageFilename = '/var/www/html/direct-us/app/Mage.php';  
		/*
		$mageFilename = '../../store/app/Mage.php';                          
		require_once $mageFilename;	
		
		Mage::app();
		Mage::getSingleton('core/session', array('name' => 'frontend'));
		$this->session_var = Mage::getSingleton('checkout/session');
		
		$this->checkout_var = Mage::getSingleton('checkout/type_onepage');
		$this->checkout_var->initCheckout();  
		*/
	}    

	public function inventory() 
	{
		$i = array("jacket" => array(36, 38, 40, 42, 44), "pant" => array(28, 30, 32, 34, 36), "color" => array("black", "grey"));
		return $i;
	}  

	public function addToCart($product_array_to_add) 
	{
		return true;
	}

	public function removeFromCart($product_array_to_remove) 
	{
		return true;
	}

	public function getCart() 
	{
    	return true;
	} 
	 
	public function getCountries() 
	{       
		$results=array();  

		$this_country['code'] = 'US';
		$this_country['name'] = 'United States';
		array_push($results, $this_country);
		$this_country['code'] = 'CA';
		$this_country['name'] = 'Canada';
		array_push($results, $this_country);

		return $results; 
	} 
	
	public function getRegions($country = 'US') 
	{  
		/*
		Mage::app();

		$collection = Mage::getModel('directory/region')->getResourceCollection()->addCountryFilter($country)->load();
		$results = array();
		foreach($collection as $region) {
			$this_region['code'] = $region->region_id;
			$this_region['name'] =  $region->name;
			//$this_region['id'] =  $region->region_id;
			array_push($results, $this_region);
		}
		
		return $results;  
		*/
	}  
	
	public function validateBilling() 
	{                                    
		return true;
	} 

	public function getShipping() 
	{
		$s = array("$00.00 - You Pick It Up.", "$10.00 - On Foot.", "$15.00 - USPS.", "$70.00 - I Drive It To You.", "$99.99 - Girl In A Bikini Takes It To You.");
		return $s;  
	} 

	public function validatePayment() 
	{                                    
		return true;
	}
	
	public function orderReview() 
	{                                    
		return true;
	}
	  
	public function confirmOrder() 
	{                                    
		return true;
	} 

} 

?>