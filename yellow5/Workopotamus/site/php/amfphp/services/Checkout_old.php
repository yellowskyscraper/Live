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
		
		$mageFilename = '../../store/app/Mage.php';                          
		require_once $mageFilename;	
		
		Mage::app();
		Mage::getSingleton('core/session', array('name' => 'frontend'));
		$this->session_var = Mage::getSingleton('checkout/session');
		
		$this->checkout_var = Mage::getSingleton('checkout/type_onepage');
		$this->checkout_var->initCheckout();
	}

	public function dummyInventory() {
		$i = array("jacket" => array(36, 38, 40, 42, 44), "pant" => array(28, 30, 32, 34, 36), "color" => array("black", "grey"));
		return $i;
	} 
	
	function setcookielive($name, $value='', $expire=0, $path='', $domain='', $secure=false, $httponly=false) {
	    //set a cookie as usual, but ALSO add it to $_COOKIE so the current page load has access
	    $_COOKIE[$name] = $value;
	    return setcookie($name,$value,$expire,$path,$domain,$secure,$httponly);
	}

	public function dummyMethod() {
		return true;
	} 

	public function dummyShippingMethod() {
		$s = array("$00.00 - You Pick It Up.", "$10.00 - On Foot.", "$15.00 - USPS.", "$70.00 - I Drive It To You.", "$99.99 - Girl In A Bikini Takes It To You.");
		return $s;  
	} 
  
	public function addToCart($product_array_to_add) {
		umask(0);

		$products_to_add = $product_array_to_add[0];
		//$sku = $products_to_add->sku;
		//$qty = $products_to_add->qty;
		$sku = $products_to_add[sku];
		$qty = $products_to_add[qty];
		      
		$cart = Mage::getSingleton('checkout/cart');
		$productID = Mage::getModel('catalog/product')->getIdBySku($sku);
		$product = Mage::getModel('catalog/product')->setStoreId(Mage::app()->getStore()->getId())->load($productID);
		$quantity =  $product->stock_item->getData('qty');      
		
		//return $productID .' - '. $quantity .' : '. $sku .' '. $qty;   
		//return $products_to_add[sku];
		        
		if 	($quantity > 0) { 
			
			try {
				$added_id = $cart->addProduct($product,$qty);
				$quote_id = $cart->save();  
				
				return "try";
				//return $productID.' added, qty = '. $qty;
			} catch(Exception $e) {
			  	$errorObj['addToCart error'] =  $e->getMessage(); 
			
				return "catch";
				//return $errorObj['addToCart'];
				exit;
			}
            
			return $productID.' - '. $quantity;   
			
		} else {
			return 'out of stock'; 
		} 
	}
	
	public function removeFromCart($product_array_to_remove) {
		umask(0);
		Mage::app();
		$products_to_remove = $product_array_to_remove[0];
		$sku = $products_to_remove->sku;
		$productId = Mage::getModel('catalog/product')->getIdBySku($sku);
		$cartHelper = Mage::helper('checkout/cart');
		$items = $cartHelper->getCart()->getItems();
		foreach ($items as $item) {
		    if ($item->getProduct()->getId() == $productId) {
		        $itemId = $item->getItemId();
		        $cartHelper->getCart()->removeItem($itemId)->save();
		        break;
		    }
		}	
		return;
	}
	
	public function getCart() {
/*		
		Mage::app();

		// Secret Sauce - Initializes the Session for the FRONTEND
		// Magento uses different sessions for 'frontend' and 'adminhtml'
		Mage::getSingleton('core/session', array('name'=>'frontend'));

		$cart = Mage::getSingleton('checkout/cart')->getItemsCount();
		$cart = Mage::helper('checkout/cart')->getItemsCount();
		$cart = Mage::helper('checkout/cart')->getCart()->getItemsCount();
		$cart = Mage::getSingleton('checkout/session')->getQuote()->getGrandTotal();   
*/
	 	$session = Mage::getSingleton('checkout/session');
	 	$quoteid = Mage::getsingleton('checkout/session')->getquoteid();
	 	$results = array();

		foreach ($session->getQuote()->getAllItems() as $item) {
			$prod_array=array();  

			$name_diff_chunks = explode("-", $item->getSku());
			$num_attributes = count($name_diff_chunks);

			$sizes_array = array('xsmall','small','medium','large','xlarge','xxlarge','XS','S','M','L','XL','XXL','7 5/8','7 3/4','7 1/4', '7 1/2', '7 3/8', 'xs/s', 's/m', 'm/l', 'l/xl');

			switch ($num_attributes) {
				case '3':
				if (in_array($name_diff_chunks[1],$sizes_array)) {
					$this_color = $name_diff_chunks[2];
					$this_size = $name_diff_chunks[1];
				} else {
					$this_color = $name_diff_chunks[1];
					$this_size = $name_diff_chunks[2];
				}     
			 	$prod_array['name'] = str_replace('-'.$name_diff_chunks[1], '', $item->getName()) ;
		 		$prod_array['name'] = str_replace('-'.$name_diff_chunks[2], '', $prod_array['name']) ;   
				break;

				case '2':
				if (in_array($name_diff_chunks[1],$sizes_array)) {
					$this_size = $name_diff_chunks[1];
					$this_color = '';
				} else {
					$this_color = $name_diff_chunks[1];
					$this_size = '';
				}
				$prod_array['name'] = str_replace('-'.$name_diff_chunks[1], '', $item->getName()) ;
				break;
			
				case '1':
				$this_color = '';  
				$this_size = '';
				$prod_array['name'] = $item->getName() ; 
				break;  
			}
		   
			$prod_array['color'] = ucfirst($this_color);
		
			$prod_array['size'] = $this->getFriendlySize($this_size);
			$parent_sku = $name_diff_chunks[0];
			$prod_array['image'] = '/direct-us/media/catalog/product/'.$parent_sku.'/'.$parent_sku.'-'.strtolower($prod_array['color']).'-sm.png';
		
	 		$prod_array['id'] = $item->getItemId();
	 	    $prod_array['sku'] = $item->getSku();           
	
	 	    $prod_array['qty'] =  $item->getQty() ;
	 	   	$prod_array['price'] =  $item->getBaseCalculationPrice() ;

			array_push($results, $prod_array);
	 	}
		   
		return $results;
	}

	public function getRegions($country = 'US') {
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
	}
	                                       
	public function getCountries() {
	//public function getCountries($store)
		
		$results=array();  
		
		$this_country['code'] = 'US';
		$this_country['name'] = 'United States';
		array_push($results, $this_country);
		$this_country['code'] = 'CA';
		$this_country['name'] = 'Canada';
		array_push($results, $this_country);
	
		return $results; 
		            
	//| expecting eu or us (default)
	/*   
		$results=array();
		switch ($store[0]) {
			case 'eu':  
				// 1
				$this_country['code'] = 'AT';
				$this_country['name'] = 'Austria';
				array_push($results, $this_country);
				$this_country['code'] = 'BE';
				$this_country['name'] = 'Belgium';
				array_push($results, $this_country);
				$this_country['code'] = 'DK';
				$this_country['name'] = 'Denmark';
				array_push($results, $this_country);
				$this_country['code'] = 'DE';
				$this_country['name'] = 'Germany';
				array_push($results, $this_country);
				$this_country['code'] = 'LU';
				$this_country['name'] = 'Luxembourg';
				array_push($results, $this_country);
				$this_country['code'] = 'NL';
				$this_country['name'] = 'Netherlands';
				array_push($results, $this_country);
			
				// 2 
				$this_country['code'] = 'FI';
				$this_country['name'] = 'Finland';
				array_push($results, $this_country);
				$this_country['code'] = 'FR';
				$this_country['name'] = 'France';
				array_push($results, $this_country);
				$this_country['code'] = 'IE';
				$this_country['name'] = 'Ireland';
				array_push($results, $this_country);
				$this_country['code'] = 'IT';
				$this_country['name'] = 'Italy';
				array_push($results, $this_country);
				$this_country['code'] = 'PT';
				$this_country['name'] = 'Portugal';
				array_push($results, $this_country);
				$this_country['code'] = 'ES';
				$this_country['name'] = 'Spain';
				array_push($results, $this_country);
				$this_country['code'] = 'SE';
				$this_country['name'] = 'Sweden';
				array_push($results, $this_country);
				$this_country['code'] = 'UK';
				$this_country['name'] = 'United Kingdom';
				array_push($results, $this_country);
			
				//3 Czech Republic and Poland 
				$this_country['code'] = 'CZ';
				$this_country['name'] = 'Czech Republic';
				array_push($results, $this_country);
				$this_country['code'] = 'PL';
				$this_country['name'] = 'Poland';
				array_push($results, $this_country);		
            
				// 4 Bulgaria, Estonia, Greece, Hungary, Latvia, Lithuania, Romania, Slovakia and Slovenia
				$this_country['code'] = 'BG';
				$this_country['name'] = 'Bulgaria';
				array_push($results, $this_country);
				$this_country['code'] = 'EE';
				$this_country['name'] = 'Estonia';
				array_push($results, $this_country);
				$this_country['code'] = 'GR';
				$this_country['name'] = 'Greece';
				array_push($results, $this_country);
				$this_country['code'] = 'HU';
				$this_country['name'] = 'Hungary';
				array_push($results, $this_country);
				$this_country['code'] = 'LV';
				$this_country['name'] = 'Latvia';
				array_push($results, $this_country);
				$this_country['code'] = 'LT';
				$this_country['name'] = 'Lithuania';
				array_push($results, $this_country);
				$this_country['code'] = 'RO';
				$this_country['name'] = 'Romania';
				array_push($results, $this_country);
				$this_country['code'] = 'SK';
				$this_country['name'] = 'Slovakia';
				array_push($results, $this_country);
				$this_country['code'] = 'SI';
				$this_country['name'] = 'Slovenia';
				array_push($results, $this_country);
			
				//5 Cyprus and Malta
				$this_country['code'] = 'CY';
				$this_country['name'] = 'Cyprus';
				array_push($results, $this_country);
				$this_country['code'] = 'MT';
				$this_country['name'] = 'Malta';
				array_push($results, $this_country);
			//	$results = 
				sort($results);
				
				return $results;
			break; 
				
			default:
	   			$this_country['code'] = 'US';
				$this_country['name'] = 'United States';
				array_push($results, $this_country);
				$this_country['code'] = 'CA';
				$this_country['name'] = 'Canada';
				array_push($results, $this_country);
			
				return $results;      
			break; 
		}
	*/
	}
	
	public function step1($type) {
		// checkout method

		$checkout_type = $type[0];
		if ($checkout_type == '') {
			$checkout_type = 'guest';
		}
		$this->session_var->getQuoteId();	
		$this->checkout_var->initCheckout();
		$this->session_type_obj = $checkout_type;
		$msg  = $this->checkout_var->saveCheckoutMethod($checkout_type);
		return $msg;
	}
	
	public function step2($billing) {
	// save billing
		
		$billing_address = $billing[0];
		$this->session_var->getQuoteId();

 	//	$checkout = Mage::getSingleton('checkout/type_onepage');
	//	$checkout->initCheckout();
	
		$billing_array = array();
		$billing_array['address_id'] = '';
		$billing_array['firstname'] = $billing_address->firstname;
		$billing_array['lastname'] = $billing_address->lastname;
		$billing_array['company'] = $billing_address->company;
		$billing_array['email'] = $billing_address->email;
		$billing_array['street'][] = $billing_address->street[0];
		$billing_array['street'][] = $billing_address->street[1];
		$billing_array['city'] = $billing_address->city;
		$billing_array['region_id'] = $billing_address->region_id;
		$billing_array['region'] = '';
		$billing_array['postcode'] = $billing_address->postcode;
		$billing_array['country_id'] = $billing_address->country_id;
		$billing_array['telephone'] = $billing_address->telephone;
		$billing_array['fax'] = $billing_address->fax;
		$billing_array['customer_password'] = $billing_address->customer_password;
		$billing_array['confirm_password'] = $billing_address->confirm_password;
		$billing_array['save_in_address_book'] = '1';
		$billing_array['use_for_shipping'] = $billing_address->use_for_shipping;
		$this->session_billing_obj = $billing_array;
		try {
			$msg = $this->checkout_var->saveBilling($billing_array, false); 
		} catch(Exception $e) {
		  	$errorObj =  'Error Message: ' .$e->getMessage();
		}
				
		$billing_add = $this->getBilling();	

		$results = array();
		$results['step2'] = $msg;
		
		$results['billing address'] = $billing_add;

		return $results;
		
	}

	public function step3($shipping) {
	// save shipping
		$shipping_address = $shipping[0];

	//	Mage::app();
	//	$session = Mage::getSingleton('checkout/session');
		$this->session_var->getQuoteId();

 		$checkout = Mage::getSingleton('checkout/type_onepage');
		$checkout->initCheckout();
		
		$shipping_array = array();
		$shipping_array['address_id'] = '';
		$shipping_array['firstname'] = $shipping_address->firstname;
		$shipping_array['lastname'] = $shipping_address->lastname;
		$shipping_array['company'] = $shipping_address->company;
		$shipping_array['email'] = $shipping_address->email;
		$shipping_array['street'][] = $shipping_address->street[0];
		$shipping_array['street'][] = $shipping_address->street[1];
		$shipping_array['city'] = $shipping_address->city;
		$shipping_array['region_id'] = $shipping_address->region_id;
		$shipping_array['region'] = '';
		$shipping_array['postcode'] = $shipping_address->postcode;
		$shipping_array['country_id'] = $shipping_address->country_id;
		$shipping_array['telephone'] = $shipping_address->telephone;
		$shipping_array['fax'] = $shipping_address->fax;
		$shipping_array['save_in_address_book'] = '1';
			
			
		$this->session_shipping_obj = $shipping_array;
	//	$msg = $checkout->saveShipping($shipping_array, false);  // the 2nd parameter is $customerAddressId	
		try {
			$msg = $checkout->saveShipping($shipping_array, false);

		} catch(Exception $e) {
		  	$results['step3'] =  $e->getMessage();
			return $results;

		}		
			// Mage::getModel('sales/quote_address');
		$shipping_add = $this->getShipping();
			$methods = $this->getShippingQuotes();
 		
		$results['step3'] = $msg;
		
		
	//	$results['old_methods'] = $methods1;
	
	//	print_r($results['step3']);
		
		// print_r($methods[2]);
		// 			
		// 			print_r($methods[2]);
		
		if ($shipping_array['country_id'] == 'CA') {
			// CANADA
			$results['shipping_methods'] = array_slice($methods, 1); 
			
			
		} else if($shipping_array['region_id'] == '12') {
			// CALI
		//	$results['shipping_methods'][0] = $methods[0];
			$methods[0]['method'] = "FedEX Ground ( Commercial Address )";
		 	$methods[2]['method'] = "FedEX Ground ( Residential Address )";
			$results['shipping_methods'] = array($methods[0], $methods[2]); 
		} else {
			$methods[0]['method'] = "FedEX Ground ( Commercial Address )";
			$methods[1]['method'] = "FedEX Ground ( Residential Address )";
		 	$methods[2]['method'] = "FedEX Air ( 2nd Day )";
			$results['shipping_methods'] = $methods;
		}
		
		$results['shipping_address'] = $shipping_add;
		
		return $results;
	
		
	} 
		
	public function getAddressOK() {
		return Mage::getModel('sales/quote_address'); 
	}
		
	public function step4($shipping_method) {
	// 'ground' or '2day'
		$shipping = $shipping_method[0];
		$shipping_code = $shipping['code'];
		
		$this->session_var->getQuoteId();

 		//$this->checkout_var = Mage::getSingleton('checkout/type_onepage');
		//$checkout->initCheckout();
		$this->session_shipping_method_obj = $shipping_code;
		$msg = $this->checkout_var->saveShippingMethod($shipping_code);  // 'ground' or '2day'
		try {
			$results = $this->session_shipping_method_obj = $shipping_code;

		} catch(Exception $e) {
		  	$errorObj =  $e->getMessage();
			$result['error'] = $errorObj;
			return $result['step4'];
			exit;
			
		}
	
		return $results;
	
	} 
		
	public function step5($payment_obj) {
		// save payment info
	
		$payment = $payment_obj[0];
		$payment_array = array();
		$payment_array["method"] = $payment->method;
		//$payment_array["ccsave_cc_owner"] = $payment->ccsave_cc_owner;
		$payment_array["cc_type"] = $payment->cc_type;
		$payment_array["cc_number"] = $payment->cc_number;
		$payment_array["cc_exp_month"] = $payment->cc_exp_month;
		$payment_array["cc_exp_year"] = $payment->cc_exp_year;
		$payment_array["cc_cid"] = $payment->cc_cid;
		$this->session_payment_obj = $payment_array;
		
		//$results['step5'] = $this->checkout_var->savePayment($payment_array);
		// ERROR CHECKING
			try {
				$msg = $this->checkout_var->savePayment($payment_array);

			} catch(Exception $e) {
			  	$errorObj = $e->getMessage();
				$results['error'] = $errorObj;
				return $results;
				exit;
				
			}
			
			$totals = $this->getCartTotals();
		return $totals;
	}	
		
	public function step6($everything_array_array) {
	//  saveOrder info
	//	step6(type, billing, shipping, shipping_method, payment)

		$this->session_var->getQuoteId();
		$everything_array = $everything_array_array[0];
		$everything_array = $everything_array_array[0];
		$type = $everything_array[0];
	//	if ($type == null)
	//		$type = 'guest';
		$billing_address =  $everything_array[1];
			$billing_array = array();
			$billing_array['address_id'] = '';
			$billing_array['firstname'] = $billing_address->firstname;
			$billing_array['lastname'] = $billing_address->lastname;
			$billing_array['company'] = $billing_address->company;
			$billing_array['email'] = $billing_address->email;
			$billing_array['street'][] = $billing_address->street[0];
			$billing_array['street'][] = $billing_address->street[1];
			$billing_array['city'] = $billing_address->city;
			$billing_array['region_id'] = $billing_address->region_id;
			$billing_array['region'] = '';
			$billing_array['postcode'] = $billing_address->postcode;
			$billing_array['country_id'] = $billing_address->country_id;
			$billing_array['telephone'] = $billing_address->telephone;
			$billing_array['fax'] = $billing_address->fax;
			$billing_array['customer_password'] = $billing_address->customer_password;
			$billing_array['confirm_password'] = $billing_address->confirm_password;
			$billing_array['save_in_address_book'] = '1';
			$billing_array['use_for_shipping'] = $billing_address->use_for_shipping;
		
		$shipping_address =  $everything_array[2];
			$shipping_array = array();
			$shipping_array['address_id'] = '';
			$shipping_array['firstname'] = $shipping_address->firstname;
			$shipping_array['lastname'] = $shipping_address->lastname;
			$shipping_array['company'] = $shipping_address->company;
			$shipping_array['email'] = $shipping_address->email;
			$shipping_array['street'][] = $shipping_address->street[0];
			$shipping_array['street'][] = $shipping_address->street[1];
			$shipping_array['city'] = $shipping_address->city;
			$shipping_array['region_id'] = $shipping_address->region_id;
			$shipping_array['region'] = '';
			$shipping_array['postcode'] = $shipping_address->postcode;
			$shipping_array['country_id'] = $shipping_address->country_id;
			$shipping_array['telephone'] = $shipping_address->telephone;
			$shipping_array['fax'] = $shipping_address->fax;
			$shipping_array['save_in_address_book'] = '1';
			
			// STORE SHIPPING INFO IN SESSION  :(
			$_SESSION['shippingStreet'] =   "hello";
			$_SESSION['shippingCity'] =   $shipping_array['city'];
			$_SESSION['shippingRegionID'] =   $shipping_array['region_id'];
			$_SESSION['shippingPostCode'] =   $shipping_array['postcode'];
			$_SESSION['shippingCountry'] =   $shipping_array['country_id'];

			
			
			
			
		$shipping =  $everything_array[3];
			$shipping_code = $shipping['code'];

		$payment =  $everything_array[4];
			$payment_array = array();
			$payment_array["method"] = $payment->method;
			if ($payment->method != 'paypal_standard') {
				//	$payment_array["ccsave_cc_owner"] = $payment->ccsave_cc_owner;
				$payment_array["cc_type"] = $payment->cc_type;
				$payment_array["cc_number"] = $payment->cc_number;
				$payment_array["cc_exp_month"] = $payment->cc_exp_month;
				$payment_array["cc_exp_year"] = $payment->cc_exp_year;
				$payment_array["cc_cid"] = $payment->cc_cid;
			}


		$results = array();
		$results['step1'] = $this->checkout_var->saveCheckoutMethod($type);
		if (array_key_exists('error', $results['step1'])) {
			return $results;
		}
			
		$results['step2'] = $this->checkout_var->saveBilling($billing_array, false);
		if (array_key_exists('error', $results['step2'])) {
			return $results;
		}

		$results['step3'] = $this->checkout_var->saveShipping($shipping_array, false); 
		if (array_key_exists('error', $results['step3'])) {
			return $results;
		}

		$results['step4'] = $this->checkout_var->saveShippingMethod($shipping_code); 
		if (array_key_exists('error', $results['step4'])) {
			return $results;
		}

		// $results['step5'] = $this->checkout_var->savePayment($payment_array);	
		// 			if (array_key_exists('error', $results['step5'])) {
		// 				return $results;
		// 			}
			// ERROR CHECKING
		try {
			$results['step5'] = $this->checkout_var->savePayment($payment_array);

		} catch(Exception $e) {
		  	$errorObj['step5'] =  $e->getMessage();
			return $errorObj['step5'];
			exit;
		}

		$order = Mage::getModel('sales/order');
	
		try {
			 if($payment_array["method"] == "paypal_standard"){
 					$quoteID = $this->checkout_var->saveOrderPayPal($payment_array);
 					return $quoteID;
			 	} else {
					$invoiceID = $this->checkout_var->saveOrder($payment_array);
					$results = 1;
			}
		
		} catch(Exception $e) {
		  	$errorObj['step6'] =  $e->getMessage();
			return $errorObj['step6'];
			exit;
		}
	   
		//print_r($order);
		
	//	$order["invoiceID"] = $this->checkout_var->saveOrderPayPal($payment_array);
		
		$this->emptyCart();
		$objToReturn = array($invoiceID, $order);
		return 1;

	}

	public function getCartTotals() {

		$total = $this->checkout_var->getQuote()->getGrandTotal();
	
		
		
		try {
			$totalPrices = Mage::helper('checkout/cart')->getCart()->getQuote()->getTotals();
			
				$subtotalPrice = $totalPrices['subtotal'];
				$subtotalPrice = $subtotalPrice->getData('value');

				$grandTotal = $totalPrices['grand_total'];
				$grandTotal = $grandTotal->getData('value');

				if (array_key_exists('shipping', $totalPrices)) {
					$shippingTotal = $totalPrices['shipping'];
					$shippingTotal = $shippingTotal->getData('value');
				} else 
					$shippingTotal = '0.00';

				if (array_key_exists('tax', $totalPrices)) {
				    $taxTotal = $totalPrices['tax'];
					$taxTotal = $taxTotal->getData('value');
				} else 
					$taxTotal = '0.00';


				$results['subtotal']  = number_format($subtotalPrice,2);
				$results['shipping']  = number_format($shippingTotal,2);
				$results['tax']  = number_format($taxTotal,2);
				$results['grandtotal']  = number_format($grandTotal,2);
				return $results;

		} catch(Exception $e) {
		  	$results =  $e->getMessage();
			return $results;
			exit();
		}
		

	} 
	
	public function getShippingQuotes() {
		
		  # Enzinger start modifications

	      # Initialize methods array
	      $methods = array();
	      # Get Shipping Address
	      $_shippingAddress = Mage::getSingleton('checkout/session')->getQuote()->getShippingAddress();
	      # Collect Shipping Rates
	      $_shippingAddress->collectShippingRates()->save();
	      # Get available shipping methods
	      $_shippingRateGroups = $_shippingAddress->getGroupedAllShippingRates();
	      # If rates empty, no shipping methods are available
	      if (empty($_shippingRateGroups)) {
	        # Handle this..
	      } else {
	        # Put all available rates into the $methods array
	        foreach ($_shippingRateGroups as $code => $_rates) {
	          foreach ($_rates as $_rate) {
	            $methods[] = array('method' => 'FedEX '.$_rate->getMethodTitle(), 'price' => '$'.number_format($_rate->getPrice(),2), 'code' => $_rate->getCode());
	          }
	        }
	      }				

	      # Enzinger end modifications
		
		return $methods;
	}   
			
	public function getShippingEstimate($shipping) {
		$shipping_address = $shipping[0];
		

		// Mage::app();
		// $session = Mage::getSingleton('checkout/session');
		$this->session_var->getQuoteId();

 		$checkout = Mage::getSingleton('checkout/type_onepage');
		$checkout->initCheckout();

		$shipping_array = array();
		$shipping_array['address_id'] = '';
		$shipping_array['firstname'] = 'First';
		$shipping_array['lastname'] = 'Last';
		$shipping_array['company'] = '';
		$shipping_array['email'] = '';
		$shipping_array['street'][] = '123 Main';
		$shipping_array['street'][] = '';
		$shipping_array['city'] = 'Irvine';
		$shipping_array['region_id'] = $shipping_address->region_id;
		$shipping_array['region'] = '';
		$shipping_array['postcode'] = $shipping_address->postcode;
		$shipping_array['country_id'] = $shipping_address->country_id;
		$shipping_array['telephone'] = '123-123-1234';
		$shipping_array['fax'] = '';
		$shipping_array['save_in_address_book'] = '1';
		
		// if ($country_id == 'CA')
		// $tax_amount =  
               
		$this->session_shipping_obj = $shipping_array;
		// $msg = $checkout->saveShipping($shipping_array, false);  // the 2nd parameter is $customerAddressId	
		try {
			$msg = $checkout->saveShipping($shipping_array, false);

		} catch(Exception $e) {
		  	$results['step3'] =  $e->getMessage();
			return $results;
			exit();
		}		
		// Mage::getModel('sales/quote_address');
		$shipping_add = $this->getShipping();
		$methods = $this->getShippingQuotes();

		$results['errors'] = $msg;
		$results['shipping_methods'] = $methods;		
		$results['shipping_address'] = $shipping_add;
		
		$total = $this->checkout_var->getQuote()->getGrandTotal();
	
		$totalPrices = Mage::helper('checkout/cart')->getCart()->getQuote()->getTotals();
		
		if (array_key_exists('tax', $totalPrices)) {
		    $taxTotal = $totalPrices['tax'];
			$taxTotal = $taxTotal->getData('value');
		} else 
			$taxTotal = '0.00';
			
		$subtotalPrice = $totalPrices['subtotal'];
		$subtotalPrice = $subtotalPrice->getData('value');
	
		
		// $results['test'] = $this->session_shipping_obj->setShippingMethod($rateCodes[$methodName]);
		// $results['test2'] = $this->session_shipping_obj->setCollectShippingRates(true)->collectTotals();
		// $billingAddress->setCollectShippingRates(true)->collectTotals();
		// $taxAmount = $address->getTaxAmount();
		// $taxAmount += $billingAddress->getTaxAmount();
		// 
		// $result->setTaxDetails($taxAmount);
		// 
		// $results['tax-stuff'] = $msg->getCartTotals();
		// $results['totals']  = $this->getCartTotals($methods);
		// $results['subtotal'] =	$checkout->getSubtotal(); 
		 
		$results['subtotal'] = $subtotalPrice;
		$results['tax'] = $taxTotal;	
		$results['grandtotal'] = $total + $taxTotal;
		return $results;
	}
			   		
	public function getShipping() {
			
		$_shippingAddress = Mage::getSingleton('checkout/session')->getQuote()->getShippingAddress();

		$results['firstname'] = $_shippingAddress->getFirstname(); 
		$results['lastname'] = $_shippingAddress->getLastname(); 
		$results['street'] = $_shippingAddress->getStreet(); 
		$results['city'] = $_shippingAddress->getCity();
		$results['state'] = $_shippingAddress->getRegion(); 
		$results['zip'] = $_shippingAddress->getPostcode();

		$results['country'] = $_shippingAddress->getCountry_id(); 
		$results['phone'] = $_shippingAddress->getTelephone();

		return $results; 

	} 
			
	public function getBilling() {

		$_billingAddress = Mage::getSingleton('checkout/session')->getQuote()->getBillingAddress();

		$results['firstname'] = $_billingAddress->getFirstname(); 
		$results['lastname'] = $_billingAddress->getLastname(); 
		$results['street'] = $_billingAddress->getStreet(); 
		$results['city'] = $_billingAddress->getCity();
		$results['state'] = $_billingAddress->getRegion(); 
		$results['zip'] = $_billingAddress->getPostcode();

		$results['country'] = $_billingAddress->getCountry_id(); 
		$results['phone'] = $_billingAddress->getTelephone();

		return $results;

	}

	public function verifyOrder() {
		
	//	$results['orderId'] = $this->checkout_var->getOrderId();
		
		$_customerId = Mage::getSingleton('customer/session')->getCustomerId();
		$customer = Mage::getSingleton('customer/session')->getCustomer();
		$lastOrderId = Mage::getSingleton('checkout/session')->getLastOrderId();
		$order = Mage::getSingleton('sales/order');
		$order->load($lastOrderId);
		$_totalData = $order->getData();
		$_grand = $_totalData['grand_total'];
		$_name = $customer->getName();
		$_taxvat = $customer->getTaxvat();
		$_email = $customer->getEmail();
		$incrementId = Mage::getSingleton('checkout/session')->getLastRealOrderId();



		$results=array();
		$results['last real order id'] = $incrementId;
		$results['last order id'] = $lastOrderId;
		$results['grand total'] = $_grand;
		$results['name'] = $_name;
		$results['email'] = $_email;
		return $results; 
	}
		
	public function attemptLogin($login_array) {

		$session = Mage::getSingleton('customer/session');
		$login = $login_array[0];

		try {
			$msg = $session->login($login->username, $login->password ); 

		} catch(Exception $e) {
		  	$msg =  $e->getMessage();
			return $msg;
			exit();
		}

		// get users address info
		$billing_address = array();
       // $billing_address['customer_address_id'] = $session->getCustomer()->getDefaultBillingAddress()->getEntityId();
        $billing_address['firstname'] = $session->getCustomer()->getDefaultBillingAddress()->getFirstname();
        $billing_address['lastname'] = $session->getCustomer()->getDefaultBillingAddress()->getLastname();
        $billing_address['company'] = $session->getCustomer()->getDefaultBillingAddress()->getCompany();
        $billing_address['street'] =  $session->getCustomer()->getDefaultBillingAddress()->getStreet();
        $billing_address['city'] =  $session->getCustomer()->getDefaultBillingAddress()->getCity();
        $billing_address['country_id'] =  $session->getCustomer()->getDefaultBillingAddress()->getCountryId();
        $billing_address['region'] =  $session->getCustomer()->getDefaultBillingAddress()->getRegion();
        $billing_address['region_id'] = $session->getCustomer()->getDefaultBillingAddress()->getRegionId();
        $billing_address['postcode'] =  $session->getCustomer()->getDefaultBillingAddress()->getPostcode();
        $billing_address['telephone'] =  $session->getCustomer()->getDefaultBillingAddress()->getTelephone();
        $billing_address['fax'] =  $session->getCustomer()->getDefaultBillingAddress()->getFax();

		$shipping_address = array();
	//	$shipping_address['customer_address_id'] =  $session->getCustomer()->getDefaultShippingAddress()->getEntityId();
		$shipping_address['firstname'] =  $session->getCustomer()->getDefaultShippingAddress()->getFirstname();
		$shipping_address['lastname'] =  $session->getCustomer()->getDefaultShippingAddress()->getLastname();
		$shipping_address['company'] =  $session->getCustomer()->getDefaultShippingAddress()->getCompany();
		$shipping_address['street'] =  $session->getCustomer()->getDefaultShippingAddress()->getStreet();
		$shipping_address['city'] =  $session->getCustomer()->getDefaultShippingAddress()->getCity();
		$shipping_address['country_id'] =  $session->getCustomer()->getDefaultShippingAddress()->getCountryId();
		$shipping_address['region'] =  $session->getCustomer()->getDefaultShippingAddress()->getRegion();
		$shipping_address['region_id'] =  $session->getCustomer()->getDefaultShippingAddress()->getRegionId();
		$shipping_address['postcode'] =  $session->getCustomer()->getDefaultShippingAddress()->getPostcode();
		$shipping_address['telephone'] =  $session->getCustomer()->getDefaultShippingAddress()->getTelephone();
		$shipping_address['fax'] =  $session->getCustomer()->getDefaultShippingAddress()->getFax();

		$results = array();
		$results['billing_address'] = $billing_address;
		$results['shipping_address'] = $shipping_address;			

		return $results;
	}
		
	public function requestAccountInfo($email_array) {
	//	echo $email;
		$email = $email_array[0];

		$session = Mage::getSingleton('customer/session');
		//$msg = $session->forgotPasswordPostAction($email);
	
		try {
			
		if ($email->email) {
			            if (!Zend_Validate::is($email->email, 'EmailAddress')) {
			                $session->setForgottenEmail($email->email);
			               // $session->addError($this->__('Invalid email address'));
							 	$msg =  'Invalid email address';
								return $msg;
								exit();
			               // $this->getResponse()->setRedirect(Mage::getUrl('*/*/forgotpassword'));
			               // return;
			            }
			            $customer = Mage::getModel('customer/customer')  ->setWebsiteId(Mage::app()->getStore()->getWebsiteId())
			                ->loadByEmail($email->email);
	
			            if ($customer->getId()) {
			                try {
			                    $newPassword = $customer->generatePassword();
			                    $customer->changePassword($newPassword, false);
			                    $customer->sendPasswordReminderEmail();
	
			                      	$msg =  'A new password was sent';
									return $msg;
									exit();
			                }
			                catch (Exception $e){
			                    $this->_getSession()->addError($e->getMessage());
			                }
			            }
			            else {
			               // $this->_getSession()->addError($this->__('This email address was not found in our records'));
			                $session->setForgottenEmail($email->email);
								$msg =  'This email address was not found in our records';
								return $msg;
								exit();
			            }
			        } else {
			            $this->_getSession()->addError($this->__('Please enter your email.'));
			            $this->getResponse()->setRedirect(Mage::getUrl('*/*/forgotpassword'));
			            return;
			        }
	
			        $msg = $this->getResponse()->setRedirect(Mage::getUrl('*/*/forgotpassword'));
		
			} catch(Exception $e) {
			  	$msg =  $e->getMessage();
				return $msg;
				exit();
			}
		
		return $email->email;
	
	}
				
	public function emptyCart() {
		
		$cartHelper = Mage::helper('checkout/cart');
		$items = $cartHelper->getCart()->getItems();
		foreach ($items as $item) {
	    //if ($item->getProduct()->getId() == $productId) {
	        $itemId = $item->getItemId();
	        $cartHelper->getCart()->removeItem($itemId)->save();
	        break;
	    //}
		}
		session_destroy();
		
	}

} 

?>