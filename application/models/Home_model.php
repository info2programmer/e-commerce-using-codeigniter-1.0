<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends CI_Model {

	//This function To Load Banner
	public function loadbanner(){
		$query=$this->db->get('tbl_banner');
		return $query->result();
	}

	//This Function to Get All Navcategory
	public function navcaregory(){
		$query=$this->db->get('tbl_category');
		return $query->result();
	}

	//This Function To Get Home  Product
	public function homeviewcategory($categoryid){
		//$query=$this->db->get('Table', limit, offset);

		// SELECT Product_Id,ProductName,ProductAuther,ProductRetailPrice,ProductSellingPrice,ProductDiscount,ProductLanguage,ProductBinding
		// FROM tbl_product_home
		// INNER JOIN tbl_products
		// ON tbl_product_home.Product_Id=tbl_products.ProductId
		// WHERE tbl_product_home.Category_Id=@CategoryId


		$this->db->where('Category_Id', $categoryid);
		$this->db->select('Product_Id,ProductName,ProductAuther,ProductRetailPrice,ProductSellingPrice,ProductDiscount,ProductLanguage,ProductBinding,ProductThumbImage');
		$this->db->from('tbl_product_home');
		$this->db->join('tbl_products', 'tbl_product_home.Product_Id = tbl_products.ProductId', 'inner');
		$query = $this->db->get();
		return $query->result();
	}


	//This Function To Get BestSelling Books
	public function bestsellingbooks(){
		//$this->db->select('ProductId,ProductThumbImage');
		$this->db->select('SerialNo,ProductName,Product_Id,ProductThumbImage');
		$this->db->from('tbl_bestseller');
		$this->db->join('tbl_products', 'tbl_products.ProductId=tbl_bestseller.Product_Id', 'inner');
		$query=$this->db->get();
		return $query->result();
	}

	//This Function To Check Category Id Exist Or Not
	public function checkcategoryid($id){
		$this->db->where('CategoryId', $id);
		$result=$this->db->get('tbl_category');
		if($result->num_rows()==1)
			return true;
		else
			return false;
	}

	//Get Get All Books By Category
	public function getbooksbycategory($categoryid){
		if($categoryid!=1){
			$this->db->where('Category_Id', $categoryid);
		}
		else{
			$this->db->group_by('Product_Id');
		}
		$this->db->select('Product_Id,ProductName,ProductAuther,ProductRetailPrice,ProductSellingPrice,ProductDiscount,ProductLanguage,ProductBinding,ProductThumbImage,CategoryName');
		$this->db->from('tbl_product_category');
		$this->db->join('tbl_products', 'tbl_product_category.Product_Id = tbl_products.ProductId', 'inner');
		$this->db->join('tbl_category', 'tbl_product_category.Category_Id = tbl_category.CategoryId', 'inner');
		$query = $this->db->get();
		return $query->result();
	}

	//This Function To Gte AuthorList
	public function authorlist(){
		$this->db->group_by('ProductAuther');
		$this->db->select('ProductAuther');
		$this->db->from('tbl_products');
		$query=$this->db->get();

		return $query->result();
	}

	//This Function To Get Single Product
	public function viewproductbyproductid($id){
		$this->db->where('ProductId', $id);
		$query=$this->db->get('tbl_products');
		if($query->num_rows()==1){
			return $query->result();
		}
		else{
			return false;
		}
	}

	//This function To Load Product Image
	public function loadproductimagebyid($id){
		$this->db->where('Product_Id', $id);
		$query=$this->db->get('tbl_product_images');
		return $query->result();
	}

	//This Function Get Randome Books()
	public function gerandomebooklimit($limit){
		$this->db->order_by('ProductId', 'RANDOM');
		$this->db->limit($limit);
		$this->db->select('ProductId,ProductName,ProductThumbImage');
		$query = $this->db->get('tbl_products');
		return $query->result();
	}

	//This funtion to check cash on delivery
	public function checkcasondelivery($pincode){
		$this->db->where('PinCode', $pincode);
		$query=$this->db->get('tbl_cod');
		if($query->num_rows()==1){
			return $query->row(0)->LocationName;
		}
		else{
			return false;
		}
	}

	//This Function to check User Login
	public function checklogin($username,$password){
		$email=$username;
		$password=md5($password);

		$this->db->where('Email', $username);
		$this->db->where('Password', $password);
		$this->db->where('Status', '1');
		$query=$this->db->get('tbl_userdetails');

		if($query->num_rows()==1){
			return array(
				'id' => $query->row(0)->Id,
				'firstname' => $query->row(0)->FirstName,
				'lastname' => $query->row(0)->LastName
				);
		}
		else{
			return false;
		}

	}

	//This function for register new user
	public function registeruser($email,$dateofbirth,$phonenumber,$password){
		if($this->checkuseremail($email)){
			$this->email_code=md5($dateofbirth);
			$object=array(
				'Email' => $email,
				'DateofBirth' => $dateofbirth,
				'Password' => md5($password),
				'Phonenumber' => $phonenumber,
				'RegisterDate' => date("Y-m-d"),
				'UniqueKey' => $this->email_code
			);
			$this->SendVerificationEmail($email,$this->email_code);
			$this->db->insert('tbl_userdetails', $object);
			return true;
			echo "OK";
		}
		else{
			return false;
			echo "emailexist";
		}
	}

	//Check Email Already Use Or Not

	private function checkuseremail($email){
		$this->db->where('Email',$email);
		$this->db->select('Email,Status');

		$query=$this->db->get('tbl_userdetails');
		if($query->num_rows()==1){
			return false;
		}
		else{
			return true;
		}

	}

	//Send Verification Email To User
	private function SendVerificationEmail($email,$activationcode){
		$this->load->library('email');
	 	$this->email->set_mailtype('html');
		$this->email->from('biva.publication@gmail.com', 'Biva Publication');
		$this->email->to($email);


		$message='<!DOCTYPE html><html><head></head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head><body>';
		$message.='<p>Dear Reader,</p>';
		$message.='<p>Thanks for registaring on Biva Publication! Please <strong><a href="'.base_url().'home/validate_email/'.$email.'/'.$activationcode.'">Click Here To Validate Email</a></strong>to active your account, you will be able to log into Biva Publication and manage your ordees.</p>';
		$message.='<p>Thank You!</p>';
		$message.='<p>Biva Publication</p>';
		$message.='</body></html>';


		$this->email->subject('Biva Publication Account Verification');
		$this->email->message($message);

		$this->email->send() or die("Message Not Send");
	}


	//This function foe check email and verification code user registation
	public function veryfyuser($email,$code){
		$this->db->where('Status', '0');
		$this->db->where('Email', $email);
		$this->db->where('UniqueKey', $code);

		$query=$this->db->get('tbl_userdetails');
		if($query->num_rows()==1){
			return true;
		}
		else{
			return false;
		}
	}

	//This function To Update Valid User Details
	public function updatevaliduserdetails($email,$code,$txtFirstName,$txtLastName,$txtAddress1,$txtAddress2,$txtAddress3,$txtAddress4,$txtCity,$txtPin,$txtState){
		if($this->veryfyuser($email,$code)){
			$this->db->where('Email', $email);
			$this->db->where('UniqueKey', $code);
			$object=array(
				'FirstName' => $txtFirstName,
				'LastName' => $txtLastName,
				'Status' => '1'
			);
			$this->db->update('tbl_userdetails', $object);

			$obj=array(
				'email' => $email,
				'address1' => $txtAddress1,
				'address2' => $txtAddress2,
				'address3' => $txtAddress3,
				'address4' => $txtAddress4,
				'city' => $txtCity,
				'pin' => $txtPin,
				'state' => $txtState,
				'country' => 'India'
			);
			$this->db->insert('tbl_useraddress', $obj);

			return true;
		}
		else{
			return false;
		}
	}

	//This Function To Add Poduct To Wishlist
	public function additemtowishlist($productid){
		if($this->checkwishlist($productid)){
			$object=array(
				'UserID' => $this->session->userdata('userid'),
				'UserEmail' => $this->session->userdata('useremail'),
				'Product_Id' => $productid
			);
			$this->db->insert('tbl_wishlist', $object);
			return true;
		}
		else{
			return false;
		}
	}

	//This Function To Check Item Already In Wishlist Or Not
	private function checkwishlist($productId){
		$this->db->where('UserID', $this->session->userdata('userid'));
		$this->db->where('Product_Id', $productId);
		$query=$this->db->get('tbl_wishlist');
		if($query->num_rows()>0){
			return false;
		}
		else{
			return true;
		}
	}


	//This function to get wishlist item
	public function getwishlistbyuser(){
		$this->db->where('UserID', $this->session->userdata('userid'));
		$this->db->select('Product_Id,ProductName,ProductAuther,ProductSellingPrice,ProductThumbImage');
		$this->db->from('tbl_wishlist');
		$this->db->join('tbl_products', 'tbl_wishlist.Product_Id=tbl_products.ProductId', 'INNER');
		$query = $this->db->get();
		return $query->result();
	}

	//This Function To Delete Product From Wishlist
	public function deletewishlist($productId){
		$this->db->where('UserID',  $this->session->userdata('userid'));
		$this->db->where('Product_Id', $productId);
		$this->db->delete('tbl_wishlist');
	}

	//This Function To Get All user details for manage account
	public function getuserdetailsbyid(){
		$this->db->where('tbl_userdetails.Email',$this->session->userdata('useremail'));
		$this->db->select('tbl_userdetails.FirstName as FName,tbl_userdetails.LastName as LName,tbl_userdetails.Email as uEmail,tbl_userdetails.DateofBirth as uDateofBirth,tbl_userdetails.Phonenumber as userPhone,tbl_useraddress.address1 as add1,tbl_useraddress.address2 as add2,tbl_useraddress.address3 as add3,tbl_useraddress.address4 as add4,tbl_useraddress.city as cty,tbl_useraddress.pin as pi,tbl_useraddress.state as st ');
		$this->db->from('tbl_userdetails,tbl_useraddress');
		$query=$this->db->get();
		return $query->result();
	}

	//This Function To Edit User Details
	public function updateuserdetails($email,$txtFirstName,$txtLastName,$txtAddress1,$txtAddress2,$txtAddress3,$txtAddress4,$txtCity,$txtPin,$txtState,$txtPhone){
		$this->db->where('email', $email);
		$object= array(
			'address1' => $txtAddress1,
			'address2' => $txtAddress2,
			'address3' => $txtAddress3,
			'address4' => $txtAddress4,
			'city' => $txtCity,
			'pin' => $txtPin,
			'state' => $txtState
		);
		$this->db->update('tbl_useraddress', $object);


		$this->db->where('Email', $email);

		$obj=array(
			'FirstName' => $txtFirstName,
			'LastName' => $txtLastName,
			'Phonenumber' => $txtPhone
		);
		$this->db->update('tbl_userdetails', $obj);

		return true;
	}

	//This Function To insert Review
	public function insertreview($txtProductId,$txtTitle,$txtComment,$txtRate){
		$object=array(
			'UserId' => $this->session->userdata('userid'),
			'ProductId' => $txtProductId,
			'Title' => $txtTitle,
			'ReviewComment' => $txtComment,
			'Rate' => $txtRate,
			'ReviewDate' => date('Y/m/d'),
			'ReviewTime' => date('H:i:s')
		);
		$this->db->insert('tbl_review', $object);
		return true;
	}

	//This Function To Check Review Already Exist Or Mot
	public function checkreview($ProductID){
		$this->db->where('UserId', $this->session->userdata('userid'));
		$this->db->where('ProductId', $ProductID);
		$query=$this->db->get('tbl_review');
		if($query->num_rows()==1){
			return $query->result();
		}
		else{
			return false;
		}
	}

	//This Function To Get Review By ProductId
	public function viewreviewbyidwithlimit($productID,$Limit){
		$this->db->where('ProductId', $productID);
		$this->db->order_by('tbl_review.Id', 'desc');
		$this->db->select('Title,ReviewComment,Rate,ReviewDate,ReviewTime,FirstName,LastName');
		$this->db->from('tbl_review');
		$this->db->join('tbl_userdetails', 'tbl_review.UserId = tbl_userdetails.Id', 'INNER');
		$this->db->limit($Limit);
		$query=$this->db->get();
		return $query->result();

	}

	//This Function To Calulate Avarage Rating
	public function getavgstarratebyproductid($productID){
		$count5star=0;
		$count4star=0;
		$count3star=0;
		$count2star=0;
		$count1star=0;
		$this->db->where('ProductId', $productID);
		$this->db->select('Rate');
		$this->db->from('tbl_review');
		$query=$this->db->get();

		foreach ($query->result() as $key) {
			switch ($key->Rate) {
				case '5':
				$count5star++;
				break;
				case '4':
				$count4star++;
				break;
				case '3':
				$count3star++;
				break;
				case '2':
				$count2star++;
				break;
				case '1':
				$count1star++;
				break;
			}
		}
		$totalstar=$count5star+$count4star+$count3star+$count2star+$count1star;
		$totalpoint=($count5star*5)+($count4star*4)+($count3star*3)+($count2star*2)+($count1star*1);
		if($totalstar!=0)
			$percent=$totalpoint/$totalstar;
		else
			$percent=0;
		echo number_format($percent,1);
	}

	//This Function To Rreview And rateing
	public function totalreatingandreview($productid){
		$this->db->where('ProductId', $productid);
		$this->db->select('Id');
		$query=$this->db->get('tbl_review');
		echo $query->num_rows();
	}

	//This function to view star progressber
	public function viewreatingprogressber($productId){
		$count5star=0;
		$count4star=0;
		$count3star=0;
		$count2star=0;
		$count1star=0;
		$this->db->where('ProductId', $productId);
		$this->db->select('Rate');
		$this->db->from('tbl_review');
		$query=$this->db->get();
		$row=$query->result();
		foreach ($query->result() as $key) {
			switch ($key->Rate) {
				case '5':
				$count5star++;
				break;
				case '4':
				$count4star++;
				break;
				case '3':
				$count3star++;
				break;
				case '2':
				$count2star++;
				break;
				case '1':
				$count1star++;
				break;
			}
		}
		$totalstar=$count5star+$count4star+$count3star+$count2star+$count1star;
		if($totalstar!=0){
			echo "<h5>READER'S RATINGS</h5></br>";
			$stardatawidth5=(($count5star/$totalstar)*100);
			if($count5star==0)
			{
				echo "<div id='myBar' class='five-star'>".$count5star." &#9734;&#9734;&#9734;&#9734;&#9734;</div>";
			}
			if($count5star>0)
			{
				echo "<div id='myBar' class='four-star' style='width:".round($stardatawidth5)."%'>".$count5star." &#9734;&#9734;&#9734;&#9734;&#9734;</div>";
			}
			if($count4star==0)
			{
				echo "<div id='myBar' class='five-star'>".$count4star." &#9734;&#9734;&#9734;&#9734;</div>";
			}
			if ($count4star>0) {
				$stardatawidth4=(($count4star/$totalstar)*100);
				echo "<div id='myBar' class='four-star' style='width:".round($stardatawidth4)."%'>".$count4star." &#9734;&#9734;&#9734;&#9734;;</div>";
			}

			if($count3star==0)
			{
				echo "<div id='myBar' class='three-star'>".$count3star." &#9734;&#9734;&#9734;</div>";
			}
			if($count3star>0)
			{
				$stardatawidth3=(($count3star/$totalstar)*100);
				echo "<div id='myBar' class='three-star' style='width:".round($stardatawidth3)."%'>".$count3star." &#9734;&#9734;&#9734;;</div>";
			}
			if($count2star==0)
			{
				echo "<div id='myBar' class='two-star'>".$count2star." &#9734;&#9734;</div>";
			}
			if($count2star>0)
			{
				$stardatawidth2=(($count2star/$totalstar)*100);
				echo "<div id='myBar' class='two-star' style='width:".round($stardatawidth2)."%'>".$count2star." &#9734;&#9734;</div>";
			}
			if($count1star==0)
			{
				echo "<div id='myBar' class='one-star'>".$count1star." &#9734;</div>";
			}
			if($count1star>00)
			{
				$stardatawidth1=(($count1star/$totalstar)*100);
				echo "<div id='myBar' class='one-star' style='width:".round($stardatawidth1)."%'>".$count1star." &#9734;</div>";
			}
		}
	}

	//This function for validate coupon
	public function validatecoupon($coupon,$email,$phone,$amount){
		// if($coupon=="BIVAFIRST"){
		// 	//This Block For Check Coupon For Perticular Person
		// 	// fetch from Order table by $email
		// 	// if row found
		// 	//       Display message "Sorry! This coupon is for first time users only."
		// 	// else
		// 	//           $discountpercent= 10
		// 	//                 or
		// 	//       $discountpercent=($amount*(20/100));
		// 	//       return round($discountpercent)
		// }

		$this->db->where('CouponCode', $coupon);
		$query=$this->db->get('tbl_coupon');
		if($query->num_rows()==1)
		{
			if($query->row(0)->CouponStatus==1)
			{
				//This Block For Check Coupon For Perticular Person
				if($query->row(0)->CouponPersonEmail!=null && $query->row(0)->CouponPersonPhone!=null){
					if($query->row(0)->CouponPersonEmail==$email && $query->row(0)->CouponPersonPhone==$phone)
					{
						if($query->row(0)->CouponType=="cash"){
							return $query->row(0)->CouponDiscount;
						}
						else if($query->row(0)->CouponType=="trad"){
							$discountpercent=(($amount*$query->row(0)->CouponDiscount)/100);
							return round($discountpercent);
						}
					}
					else{
						return 804;//Email And Phone Dose Not Match
					}
				}
		    	//This Else Block For Coupon For All
				else{

					if($query->row(0)->CouponType=="cash"){
						return $query->row(0)->CouponDiscount;
					}
					else if($query->row(0)->CouponType=="trad"){
						//$CouponDiscountValue=$query->row(0)->CouponDiscount;
						$discountpercent=(($amount*$query->row(0)->CouponDiscount)/100);
						return round($discountpercent);
					}
				}
			}
			else{
				return 904;//Coupon Code Has Expired
			}
		}

		else{
			return 704;//This is a invallid coupon
		}
	}

	//This function for complete order
	public function completeorder($txtName,$txtCouponCode,$txtEmail,$txtPhone,$txtAddress1,$txtAddress2,$txtAddress3,$txtAddress4,$txtCity,$txtLandmark,$txtPin,$ddlState,$ddlPaymentType,$txtSpecialNote,$OrderDiscount,$shippingCharge,$totalAmount){

		$countCartItem = 0;//Count Cart Item Quantity
		foreach($this->cart->contents() as $items)
		{
		  $countCartItem++;
		}
		$object=array(
			'OrderBY' => $txtName,
			'OrderDateTime' => date('Y/m/d H:i:s'),
			'OrderQuantity' => $countCartItem,
			'OrderCuponCode' => $txtCouponCode,
			'OrderDiscount' => $OrderDiscount,
			'OrderShipmentCharge' => $shippingCharge,
			'OrderTotAmount' => $totalAmount,
			'OrderShipName' => $txtName,
			'OrderShipAddressL1' => $txtAddress1,
			'OrderShipAddressL2' => $txtAddress2,
			'OrderShipAddressL3' => $txtAddress3,
			'OrderShipAddressL4' => $txtAddress4,
			'OrderLandmark' => $txtLandmark,
			'OrderCity' => $txtCity,
			'OrderState' => $ddlState,
			'OrderZip' => $txtPin,
			'OrderCountry' => 'India',
			'OrderPhone' => $txtPhone,
			'OrderEmail' => $txtEmail,
			'OrderStatus' => 'Pending',
			'PaymentMode' => $ddlPaymentType
		);
		$this->db->insert('tbl_order_summery', $object);
		$orderId=$this->db->insert_id();
		$this->inserOrderproduct($orderId);
		if($this->session->userdata('referaldiscount'))
		{
			$this->updatebivapoints();	
		}
		//$this->insertBivapoints($txtEmail,$orderId);
		return $orderId;
	}

	//This Private Function To Insert Order Product
	private function inserOrderproduct($orderId){
		$this->load->library("cart");
		foreach($this->cart->contents() as $items){
			$object=array(
				'OrdId' => $orderId,
				'ItemId' => $items['id'],
				'ItemName' => $items['name'],
				'ItemEdition' => $items['options']['BookEdition'],
				'ItemAuther' => $items['options']['Author'],
				'ItemQuantity' => $items['qty'],
				'ItemRetailPrice' => $items['options']['RetailPrice'],
				'ItemSellingPrice' => $items['price'],
				'ItemDiscount' => $items['options']['Discount']
			);
			$this->db->insert('tbl_order_lineitems', $object);
		}
	}

	//This Function To Update Points In tbl_bvpoint_data in referance 
	private function updatebivapoints(){
		$Note='Referred '.$this->session->userdata('referemail').' And earned 100 Biva Points.';
		$this->db->where('ReferedTo', $this->session->userdata('referemail'));
		$this->db->where('UniqueKey', $this->session->userdata('referkey'));
		$object=array(
			'EarnedPotint' => 100,
			'UniqueKey' => null,
			'Note' => $Note
		);
		$this->db->update('tbl_bvpoint_data', $object);
	}

	//this function to insert bivapoint against new order
	public function insertBivapoints($email,$OrderId){
		$Notes='Purchase (#ORDBPH'.$OrderId.') and earned 25 Biva Points';
		$object=array(
			'CustomerMail' => $email,
			'TrDate' => date('Y/m/d H:i:s'),
			'OrderId' => $OrderId,
			'EarnedPotint' => 25,
			'Note' => $Notes
		);
		$this->db->insert('tbl_bvpoint_data', $object);
	}

	//This Function For Chcek Cashondelivary
	public function checkcashondelivery($pin){
		$this->db->where('PinCode', $pin);
		$query=$this->db->get('tbl_cod');
		if($query->num_rows()==1){
			return true;
		}
		else{
			return false;
		}
	}


	//this function getorder line item by order id
	public function getorderlineitem($orrderid){
		$this->db->where('OrdId', $orrderid);
		$query=$this->db->get('tbl_order_lineitems');
		return $query->result();
	}

	//This Function Send Order Success Mail
	public function SendOrderConfirmationMail($orderid,$email){
		$this->load->library('email');
	 	$this->email->set_mailtype('html');
		$this->email->from('biva.publication@gmail.com', 'Biva Publication');
		$this->email->to($email);


		$message='<!DOCTYPE html><html><head></head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head><body>';
		$message.='<p>Dear Reader(s),</p>';
		$message.='<p>Thank you for placing an order at www.bivapublication.com</p>';
		$message.='<p>Your order no is <strong>#ORDBPH'.$orderid.'</strong></p>';
		$message.='<p>Please log in to www.bivapublication.com to track your order status.</p>';
		$message.='<p>Looking forward to serve you again.</p>';
		$message.='<p>Looking forward to serve you again.</p>';
		$message.='<p></p>';
		$message.='<p>Thanks & Regards,</p>';
		$message.='<p>BP Team</p>';
		$message.='<p>Kolkata</p>';
		$message.='<p>+91 9434343446</p>';
		$message.='<p><strong>"Imagination! Xperience ours, Xplore yours"</strong></p>';
		$message.='</body></html>';


		$this->email->subject('Biva Publication Account Verification');
		$this->email->message($message);

		$this->email->send() or die("Message Not Send");
	}


	//This Function Get Order History By Email
	public function orderhistorybyemail(){
		$this->db->where('OrderEmail', $this->session->userdata('useremail'));
		$this->db->order_by('OrderId', 'desc');
		$query=$this->db->get('tbl_order_summery');
		return $query->result();
	}

	//This Function To Get Order Details By Order Id
	public function getordersummerydetailsbyorderid($orderid){
		$this->db->where('tbl_order_summery.OrderId', $orderid);
		$query=$this->db->get('tbl_order_summery');
		return $query->result();
	}

	//This Function To Get Shipment Data
	public function getordershipmentdatabyorderid($orderid){
		$this->db->where('OrdId', $orderid);
		$query=$this->db->get('tbl_order_shipment');
		return $query->result();
	}

	//This Function To get orderitem by order id
	public function getorderitembyid($orderid){
		$this->db->where('OrdId', $orderid);
		$this->db->select('LintItemId,OrdId,ItemId,ItemName,ItemEdition,ItemAuther,ItemQuantity,ItemRetailPrice,ItemSellingPrice,ItemDiscount,ProductThumbImage,ProductLanguage');
		$this->db->from('tbl_order_lineitems');
		$this->db->join('tbl_products', 'tbl_products.ProductId = tbl_order_lineitems.ItemId', 'inner');
		$query=$this->db->get();
		return $query->result();
		// $query=$this->db->get('tbl_order_lineitems');
		// return $query->result();
	}

	//This function for get dynamic strtoupper
	public function stopper(){
		$query=$this->db->get('tbl_stoppers');
		return $query->result();
	}

	//This Function For referance
	public function reference($email,$key){
		$object=array(
			'CustomerMail' => $this->session->userdata('useremail'),
			'TrDate' =>date('Y/m/d H:i:s'),
			'OrderId' => null,
			'ReferedTo' => $email,
			'UniqueKey'	=> $key,
			'EarnedPotint' => 0,
			'Note' => null	 
		);
		$this->db->insert('tbl_bvpoint_data', $object);
	}

	//This Function To Check referer email and key
	public function checkreferemailandkey($email,$key){
		$this->db->where('ReferedTo', $email);
		$this->db->where('UniqueKey', $key);
		$query=$this->db->get('tbl_bvpoint_data');
		if($query->num_rows()==1){
			return true;
		}
		else{
			return false;
		}
	}
	//This function calculate biva point
	public function redeembp(){
		$this->db->where('CustomerMail', $this->session->userdata('useremail'));
		$this->db->select_sum('EarnedPotint');
		$this->db->from('tbl_bvpoint_data');
		$query = $this->db->get();
		$sumvalue=$query->row()->EarnedPotint;
		//echo $sumvalue;
		if($sumvalue>100){
			$redeempoint=100;
		}
		else{
			$redeempoint=$sumvalue;
		}
		return round($redeempoint*0.25);
	}

	//This Function For Redeem Biva Points
	public function redeembivapoints($orderId){
		$this->db->where('CustomerMail', $this->session->userdata('useremail'));
		$this->db->select_sum('EarnedPotint');
		$this->db->from('tbl_bvpoint_data');
		$query = $this->db->get();
		$sumvalue=$query->row()->EarnedPotint;
		//echo $sumvalue;
		if($sumvalue>100){
			$redeempoint=100;
		}
		else{
			$redeempoint=$sumvalue;
		}

		$redeempoint=-1*abs($redeempoint);
		$note="Purchased (#ORDBPH".$orderId.") And Redeemed ".$redeempoint." Biva Points";
		$data=array(
			'CustomerMail' => $this->session->userdata('useremail'),
			'TrDate' => date('Y/m/d H:i:s'),
			'OrderId' => $orderId,
			'ReferedTo' => null,
			'EarnedPotint' => $redeempoint,
			'Note' => $note,

		);
		$this->db->insert('tbl_bvpoint_data', $data);
	}

	//This Function to calculate biva points
	public function calculateBP(){
		$this->db->where('CustomerMail', $this->session->userdata('useremail'));
		$this->db->select_sum('EarnedPotint');
		$this->db->from('tbl_bvpoint_data');
		$query = $this->db->get();
		$sumvalue=$query->row()->EarnedPotint;
		echo $sumvalue;
		//echo "<script>alert('".$sumvalue."');</script>";
	}

	//This function for get history of biva points
	public function bivapointhistory(){
		$this->db->where('CustomerMail', $this->session->userdata('useremail'));
		$this->db->order_by('ReferenceId', 'desc');
		$this->db->select('TrDate, EarnedPotint,Note');
		$query=$this->db->get('tbl_bvpoint_data');
		return $query->result();
	}

	//Get Author Post by Post id
	public function GetAuthorPostByid($id){
		$this->db->where('Id', $id);
		$query=$this->db->get('tblauthorpost');
		if($query->num_rows()==1)
		{
			return $query->result();
		}
		else{
			redirect('home');
		}
	}

	//Get Post Comment By Post Id
	public function GetPostCommentByid($id)
	{
		$this->db->where('PostId', $id);
		$this->db->select('CommentDate,CommentText,FirstName,LastName');
		$this->db->from('tbl_postcomment');
		$this->db->join('tbl_userdetails', 'tbl_userdetails.Id = tbl_postcomment.UserId', 'inner');
		$query=$this->db->get();
		return array(
				'main_view' => 'home/postdetails_view',
				'navcategory' => $this->home_model->navcaregory(),
				'postdetails' => $this->home_model->GetAuthorPostByid($id),
				'postcomment' => $query->result(),
				'numberComments' => $query->num_rows()
				);
	}

	//Do Comment On Author Post
	public function CommentOnAuthorPost($txtPostId,$txtComment){
		$object=array(
			'PostId' => $txtPostId,
			'CommentDate' => date('Y/m/d'),
			'commentTime' => date('H:i:s'),
			'UserId' => $this->session->userdata('userid'),
			'CommentText' => $txtComment
		);
		$this->db->insert('tbl_postcomment', $object);
	}

	//This Function To Get Search Item 
	public function searchitem($keyword){
		$this->db->like('ProductSearchKey', $keyword, 'BOTH');
		$this->db->or_like('ProductName', $keyword, 'BOTH');
		$this->db->select('Product_Id,ProductName,ProductAuther,ProductRetailPrice,ProductSellingPrice,ProductDiscount,ProductLanguage,ProductBinding,ProductThumbImage,CategoryName');
		$this->db->from('tbl_product_category');
		$this->db->join('tbl_products', 'tbl_product_category.Product_Id = tbl_products.ProductId', 'inner');
		$this->db->join('tbl_category', 'tbl_product_category.Category_Id = tbl_category.CategoryId', 'inner');
		$query = $this->db->get();
		return $query->result();
	}
}


/* End of file Home_model.php */
/* Location: ./application/models/Home_model.php */

?>
