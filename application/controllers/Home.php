<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function index()
	{
		redirect('welcome','refresh');
	}

	//This Section To Load Buy books view And Data
	public function buybooks(){
		$data=array(
			'main_view' => 'home/buybook_view',
			'banner_load' => $this->home_model->loadbanner(),
			'navcategory' => $this->home_model->navcaregory(),
			'homevalueformoneys' => $this->home_model->homeviewcategory(2),
			'homepreorders' => $this->home_model->homeviewcategory(3),
			'homenewreleasess' => $this->home_model->homeviewcategory(4),
			'homebivaclassics' => $this->home_model->homeviewcategory(5),
			'homethrillers' => $this->home_model->homeviewcategory(6),
			'homemagazinhubs' => $this->home_model->homeviewcategory(12),
			'homeothers' => $this->home_model->homeviewcategory(13),
			'bestselling' => $this->home_model->bestsellingbooks()
			);
		$this->load->view('layout/home_layout',$data);
	}

	public function product($id){

		//Prevent XSS
		$id=$this->security->xss_clean($id);
		$product_id=str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$product_id=$this->encrypt->decode($product_id);
		//echo $dec_username;
		if($this->home_model->viewproductbyproductid($product_id))
		{

			$data=array(
				'main_view' => 'home/booksingle_vew',
				'navcategory' => $this->home_model->navcaregory(),
				'ProductImages' => $this->home_model->loadproductimagebyid($product_id),
				'ProductDetails' => $this->home_model->viewproductbyproductid($product_id),
				'randombooks' => $this->home_model->gerandomebooklimit(4),
				'bestselling' => $this->home_model->bestsellingbooks()
				);
			$this->load->view('layout/home_layout',$data);
		}
		else{
			redirect('welcome','refresh');
		}
	}

	//This Section To Load Category Books And Data
	public function category($id,$categoryname){
		//Prevent Cross Site Scripting
		$id=$this->security->xss_clean($id);
		$id=str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$id=$this->encrypt->decode($id);
		if($categoryname==null)
			redirect($this->agent->referrer());

		$categoryname=$this->security->xss_clean($categoryname);
		$categoryname=str_replace(array('-', '_', '~'), array('+', '/', '='), $categoryname);
		$categoryname=$this->encrypt->decode($categoryname);

		if($this->home_model->checkcategoryid($id)){
			$data=array(
				'main_view' => 'home/booksbycategory_view',
				'navcategory' => $this->home_model->navcaregory(),
				'productlist' => $this->home_model->getbooksbycategory($id),
				'categoryname' =>$categoryname,
				'authorlist' => $this->home_model->authorlist()
				);
			$this->load->view('layout/home_layout', $data);
		}
		else{
			//echo "Error";
			redirect($this->agent->referrer());
		}
	}

	//This Function To Check Pin Code
	public function checkcod($pincode){
		//Clean XSS
		$pincode=$this->security->xss_clean($pincode);
		if($pincode != null){
			if($this->home_model->checkcasondelivery($pincode)){
				echo "<font style='color:green;'><span class='glyphicon glyphicon-ok'></span> Cash on delivery Available :".$this->home_model->checkcasondelivery($pincode)." Area</font>";
			}
			else{
				echo "<font style='color:red;'><span class='glyphicon glyphicon-remove'></span> Sorry Cash on delivery Not Available</font>";
			}
		}

	}

	//This Function For Add To Cart
	public function addtocart(){
		$this->load->library("cart");
		$data = array(
			'id'  => $_GET['product_id'],
			'name'  => $_GET['product_name'],
			'qty'  => $_GET['quantity'],
			'price'  => $_GET['product_price'],
			'options' => array('BookEdition' => $_GET['product_edition'], 'Author' => $_GET['product_auther'], 'RetailPrice' => $_GET['product_retailprice'], 'Discount' => $_GET['product_discount'])
			);
		//print_r($data);
		//echo $this->input->post('product_id');
		$this->cart->insert($data) or die("Error");
		echo $this->loadcartdetails();
	}

	//This Function To Load Cart Details
	private function loadcartdetails(){
		$this->load->library("cart");
		$count = 0;
		foreach($this->cart->contents() as $items){
			$count++;
		}
		$output="
		<img src='".base_url()."/assets/images/rupees.png'/>
		<span class='simpleCart_total'>".$this->cart->total()."</span> (<span class='simpleCart_quantity'>".$count."</span> items)</div>
		";

		return $output;
	}

	//This function To Load Cart Viedw
	public function Cart(){
		$data=array(
			'main_view' => 'home/cart_view',
			'navcategory' => $this->home_model->navcaregory()
			);
		$this->load->view('layout/home_layout', $data);
	}

	//This function To Update Cart Quantity
	public function updatecart(){
		$this->load->library("cart");
		$data = array(
			'rowid'  => $_GET['rowid'],
			'qty'  => $_GET['quantity']
			);
		$this->cart->update($data);
		echo $this->loadcartdetails();
	}

	//This function To Clear Cart
	public function clearcart(){
		$this->load->library("cart");
		$this->cart->destroy();
	}

	//This Function for userlogin
	public function do_login(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		//Prevent Cross Site Scripting
		$username=$this->security->xss_clean($username);
		$password=$this->security->xss_clean($password);

		if($username!="" && $password!="")
		{
			$result=$this->home_model->checklogin($username,$password);
			if($result){
				$data=array(
					'userid' =>  $result['id'],
					'useremail' => $username,
					'userlogin' => true,
					'firstname' => $result['firstname'],
					'lastname' => $result['lastname']
					);
				$this->session->set_userdata($data);
				echo "OK";
			}
			else{
				echo "Opps";
			}
		}
		else{
			echo "Opps";
		}
	}

	//This Function To Logout
	public function logout(){

		$user_data = $this->session->all_userdata();
		foreach ($user_data as $key => $value) {
			if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
				$this->session->unset_userdata($key);
			}
		}
		$this->session->sess_destroy();
		redirect('home','refresh');
	}

	//This Function For User Registation
	public function user_registation(){

		//New Member Rules
		$this->form_validation->set_rules('email', 'Email', 'trim|required|regex_match[/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix]');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('repassword', 'Re-Password', 'trim|required|matches[password]');
		$this->form_validation->set_rules('dateofbirth', 'DOB', 'trim|required');

		//Check Rules
		if ($this->form_validation->run() == FALSE) {
			echo "validationerror";
		}
		else {

			//Remove Cross Site Scripting
			$txtEmail=$this->security->xss_clean($this->input->post('email'));
			$txtPhone=$this->security->xss_clean($this->input->post('phone'));
			$txtPassword=$this->security->xss_clean($this->input->post('password'));
			$txtRePassword=$this->security->xss_clean($this->input->post('repassword'));
			$txtDOB=$this->security->xss_clean($this->input->post('dateofbirth'));

			//Save Data And Send Email Here
			if($this->home_model->registeruser($txtEmail,$txtDOB,$txtPhone,$txtPassword))
				echo "OK";
			else
				echo "emailexist";
		}
	}

	//Load Account Verification And
	public function validate_email($email,$verification){
		$email=$this->security->xss_clean($email);
		$verification=$this->security->xss_clean($verification);
		if($this->home_model->veryfyuser($email,$verification)){
			$data=array(
				'main_view' => 'home/account_view',
				'navcategory' => $this->home_model->navcaregory(),
				'email' => $email,
				'verificationcode' => $verification
				);
			$this->load->view('layout/home_layout', $data);
		}
		else{
			redirect('home','refresh');
		}
	}

	//Update User Data
	public function activeaccount(){
		$this->form_validation->set_rules('txtFirstName', 'First Name', 'trim|required|regex_match[/^[a-zA-z]+$/]');
		$this->form_validation->set_rules('txtLastName', 'Last Name', 'trim|required|regex_match[/^[a-zA-z]+$/]');
		$this->form_validation->set_rules('txtAddressLine1', 'Address Line 1', 'trim|required|regex_match[/^(\w*\s*[\#\-\,\/\.\(\)\&]*)+/]');
		$this->form_validation->set_rules('txtAddressLine2', 'Address Line 2', 'trim|regex_match[/^(\w*\s*[\#\-\,\/\.\(\)\&]*)+/]');
		$this->form_validation->set_rules('txtAddressLine3', 'Address Line 3', 'trim|regex_match[/^(\w*\s*[\#\-\,\/\.\(\)\&]*)+/]');
		$this->form_validation->set_rules('txtAddressLine4', 'Address Line 4', 'trim|regex_match[/^(\w*\s*[\#\-\,\/\.\(\)\&]*)+/]');
		$this->form_validation->set_rules('txtCity', 'City', 'trim|required|regex_match[/^[a-zA-z]+$/]');
		$this->form_validation->set_rules('txtPin', 'Pin Code', 'trim|required|min_length[6]|max_length[6]|regex_match[/^[0-9]+$/]');
		$this->form_validation->set_rules('ddlState', 'State', 'trim|required');
		if($this->form_validation->run() == FALSE) {
			$url="home/validate_email/".$this->input->post('txtEmail')."/".$this->input->post('txtVerificationcode');
			$this->session->set_flashdata('error_log', validation_errors());
			redirect($url);
		} else {

			// //Remove XSS
			$email=$this->security->xss_clean($this->input->post('txtEmail'));
			$code=$this->security->xss_clean($this->input->post('txtVerificationcode'));
			$txtFirstName=$this->security->xss_clean($this->input->post('txtFirstName'));
			$txtLastName=$this->security->xss_clean($this->input->post('txtLastName'));
			$txtAddress1=$this->security->xss_clean($this->input->post('txtAddressLine1'));
			$txtAddress2=$this->security->xss_clean($this->input->post('txtAddressLine2'));
			$txtAddress3=$this->security->xss_clean($this->input->post('txtAddressLine3'));
			$txtAddress4=$this->security->xss_clean($this->input->post('txtAddressLine4'));
			$txtCity=$this->security->xss_clean($this->input->post('txtCity'));
			$txtPin=$this->security->xss_clean($this->input->post('txtPin'));
			$txtState=$this->security->xss_clean($this->input->post('ddlState'));

			if($this->home_model->updatevaliduserdetails($email,$code,$txtFirstName,$txtLastName,$txtAddress1,$txtAddress2,$txtAddress3,$txtAddress4,$txtCity,$txtPin,$txtState)){

				$url="home/validate_email/".$this->input->post('txtEmail')."/".$this->input->post('txtVerificationcode');
				$this->session->set_flashdata('success_log', "Your Account Created Success Fully");
				redirect($url);
			}
			else{
				$url="home/validate_email/".$this->input->post('txtEmail')."/".$this->input->post('txtVerificationcode');
				$this->session->set_flashdata('error_log', "Opps its some error!");
				redirect($url);
			}
		}
	}


	//This function To Add Item In Wishlist
	public function addtowishlist(){
		if($this->session->userdata('userlogin')){
			$product_id=$this->input->post('productid');
			$product_id=$this->security->xss_clean($product_id);
			if($this->home_model->additemtowishlist($product_id)){
				echo "Product Added To Wish List";
			}
			else{
				echo "Product Already In Wishlist";
			}
		}
	}

	//This Function To Wishlist View
	public function wishlist(){
		if($this->session->userdata('userlogin')){
			//Load Item To Wishlist
			$data=array(
				'main_view' => 'home/wishlist_view',
				'navcategory' => $this->home_model->navcaregory(),
				'wishlist' => $this->home_model->getwishlistbyuser()
				);
			$this->load->view('layout/home_layout', $data);
		}
		else{
			redirect('welcome','refresh');
		}
	}

	//This Function To Delete Item Wishlist
	public function deletetowishlist($product_id){
		if($this->session->userdata('userlogin')){
			//$product_id=$this->input->post('productid');
			$product_id=$this->security->xss_clean($product_id);
			//echo $product_id;
			$this->home_model->deletewishlist($product_id);

			redirect('home/wishlist','refresh');
		}
		else{
			redirect('welcome','refresh');
		}
	}

	//This Function To Load manage account view
	public function manageaccount(){
		$data=array(
			'main_view' => 'home/manageaccount_view',
			'navcategory' => $this->home_model->navcaregory(),
			'userdetails' => $this->home_model->getuserdetailsbyid()
			);
		$this->load->view('layout/home_layout', $data);
	}

	//This Function Update User data
	public function updateuserdata(){
		$this->form_validation->set_rules('txtFirstName', 'First Name', 'trim|required|regex_match[/^[a-zA-z]+$/]');
		$this->form_validation->set_rules('txtPhoneNumber', 'Phone Number', 'trim|required|regex_match[/^[0-9]+$/]');
		$this->form_validation->set_rules('txtLastName', 'Last Name', 'trim|required|regex_match[/^[a-zA-z]+$/]');
		$this->form_validation->set_rules('txtAddressLine1', 'Address Line 1', 'trim|required|regex_match[/^(\w*\s*[\#\-\,\/\.\(\)\&]*)+/]');
		$this->form_validation->set_rules('txtAddressLine2', 'Address Line 2', 'trim|regex_match[/^(\w*\s*[\#\-\,\/\.\(\)\&]*)+/]');
		$this->form_validation->set_rules('txtAddressLine3', 'Address Line 3', 'trim|regex_match[/^(\w*\s*[\#\-\,\/\.\(\)\&]*)+/]');
		$this->form_validation->set_rules('txtAddressLine4', 'Address Line 4', 'trim|regex_match[/^(\w*\s*[\#\-\,\/\.\(\)\&]*)+/]');
		$this->form_validation->set_rules('txtCity', 'City', 'trim|required|regex_match[/^[a-zA-z ]+$/]');
		$this->form_validation->set_rules('txtPin', 'Pin Code', 'trim|required|min_length[6]|max_length[6]|regex_match[/^[0-9]+$/]');
		$this->form_validation->set_rules('ddlState', 'State', 'trim|required');

		if($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error_log', validation_errors());
			redirect('home/manageaccount');
		} else {

			// //Remove XSS
			$email=$this->security->xss_clean($this->input->post('txtEmail'));
			$txtFirstName=$this->security->xss_clean($this->input->post('txtFirstName'));
			$txtLastName=$this->security->xss_clean($this->input->post('txtLastName'));
			$txtAddress1=$this->security->xss_clean($this->input->post('txtAddressLine1'));
			$txtAddress2=$this->security->xss_clean($this->input->post('txtAddressLine2'));
			$txtAddress3=$this->security->xss_clean($this->input->post('txtAddressLine3'));
			$txtAddress4=$this->security->xss_clean($this->input->post('txtAddressLine4'));
			$txtCity=$this->security->xss_clean($this->input->post('txtCity'));
			$txtPin=$this->security->xss_clean($this->input->post('txtPin'));
			$txtState=$this->security->xss_clean($this->input->post('ddlState'));
			$txtPhone=$this->security->xss_clean($this->input->post('txtPhoneNumber'));

			if($this->home_model->updateuserdetails($email,$txtFirstName,$txtLastName,$txtAddress1,$txtAddress2,$txtAddress3,$txtAddress4,$txtCity,$txtPin,$txtState,$txtPhone)){

				$this->session->set_flashdata('success_log', "Your Account Created Success Fully");
				redirect('home/manageaccount');
			}
			else{

				$this->session->set_flashdata('error_log', "Opps its some error!");
				redirect('home/manageaccount');
			}
		}
	}

	//This Function For Give Review
	public function review() {
		$this->form_validation->set_rules('rating', 'Rating Star', 'trim|required');
		$this->form_validation->set_rules('txtTitle', 'Title', 'trim|required|max_length[250]|regex_match[/^[a-zA-z0-9 ]+$/]');
		$this->form_validation->set_rules('txtComment', 'Review', 'trim|required|regex_match[/^[a-zA-z0-9 ]+$/]');
		$this->form_validation->set_rules('txtProduct', 'Product', 'trim|required');

		if ($this->form_validation->run() == FALSE) {


			$txtProduct=$this->security->xss_clean($this->input->post('txtProduct'));

			$ProductId=$this->encrypt->encode($txtProduct);
			$ProductId=str_replace(array('+', '/', '='), array('-', '_', '~'), $ProductId);
			$url="home/product/".$ProductId;
			$this->session->set_flashdata('error_log', validation_errors());
			redirect($url);
			//echo "<script>alert('".validation_errors()."');</script>";
			//echo validation_errors();

		} else {

	 		//This section clean xss
			$txtRate=$this->security->xss_clean($this->input->post('rating'));
			$txtTitle=$this->security->xss_clean($this->input->post('txtTitle'));
			$txtComment=$this->security->xss_clean($this->input->post('txtComment'));
			$txtProduct=$this->security->xss_clean($this->input->post('txtProduct'));

			$ProductId=$this->encrypt->encode($txtProduct);
			$ProductId=str_replace(array('+', '/', '='), array('-', '_', '~'), $ProductId);
			$url="home/product/".$ProductId;

			if($this->home_model->insertreview($txtProduct,$txtTitle,$txtComment,$txtRate)){
				$this->session->set_flashdata('success_log', '');
				redirect($url);
			}
			else{
				echo "<script>alert('Opps');</script>";
				$url="home/product/".$product_id;
				redirect($url);
			}

		}
	}

	 //This function To Get all prduct review by product id
	public function productreview($productId){
		$productId=$this->security->xss_clean($productId);
		$productId=str_replace(array('-', '_', '~'), array('+', '/', '='), $productId);
		$productId=$this->encrypt->decode($productId);

		$data=array(
			'main_view' => 'home/review_view',
			'navcategory' => $this->home_model->navcaregory(),
			'review' => $this->home_model->viewreviewbyidwithlimit($productId,0),
			'ProductId' => $productId
			);
		$this->load->view('layout/home_layout', $data);
	}

	 //This Function For star Calculation
	public function listcalculate($ProdiuctID){
		echo $this->home_model->getavgstarratebyproductid($ProdiuctID);
	}

	 //This Function To Load checkout View
	public function checkout(){
		if($this->cart->total()==null)
		{
			redirect('home/Cart','refresh');
		}
		else{
			if($this->session->userdata('userlogin')){
				$data= array(
					'main_view' => 'home/checkout_view',
					'navcategory' => $this->home_model->navcaregory(),
					'userdata' => $this->home_model->getuserdetailsbyid()
					);

			}
			else{
				$data= array(
					'main_view' => 'home/checkout_view',
					'navcategory' => $this->home_model->navcaregory(),
					'userdata' => null
					);
			}
			$this->load->view('layout/home_layout',$data);
		}
	}

	 //This Function For Check Coupon
	public function checkcoupon(/*$phone,$email,$amount,$coupon*/){
		$phone=$this->input->post('phone');
		$email=$this->input->post('email');
		$amount=$this->input->post('amount');
		$coupon=$this->input->post('coupon');

	 	//Clean XSS
		$phone=$this->security->xss_clean($phone);
		$email=$this->security->xss_clean($email);
		$amount=$this->security->xss_clean($amount);
		$coupon=$this->security->xss_clean($coupon);
		// $email="";
		// $phone="";
		// $amount=151;

		echo $this->home_model->validatecoupon($coupon,$email,$phone,$amount);
	}

	 //This Function For Complete Order
	public function order(){
		$this->form_validation->set_rules('txtName', 'Name', 'trim|required|regex_match[/^[a-zA-z ]+$/]');
		$this->form_validation->set_rules('txtCouponCode', 'Coupon Code', 'trim|regex_match[/^[a-zA-z0-9]+$/]');
		$this->form_validation->set_rules('txtEmail', 'Email', 'trim|required|regex_match[/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix]');
		$this->form_validation->set_rules('txtPhone', 'Phone', 'trim|required|min_length[10]|max_length[11]|regex_match[/^[0-9]+$/]');
		$this->form_validation->set_rules('txtAddress1', 'Address', 'trim|required|min_length[8]|regex_match[/^(\w*\s*[\#\-\,\/\.\(\)\&]*)+/]');
		$this->form_validation->set_rules('txtAddress2', 'Address', 'trim|regex_match[/^(\w*\s*[\#\-\,\/\.\(\)\&]*)+/]');
		$this->form_validation->set_rules('txtAddress3', 'Address', 'trim|regex_match[/^(\w*\s*[\#\-\,\/\.\(\)\&]*)+/]');
		$this->form_validation->set_rules('txtAddress4', 'Address', 'trim|regex_match[/^(\w*\s*[\#\-\,\/\.\(\)\&]*)+/]');
		$this->form_validation->set_rules('txtCity', 'City', 'trim|required|regex_match[/^[a-zA-z ]+$/]');
		$this->form_validation->set_rules('txtLandmark', 'Landmark', 'trim|regex_match[/^[a-zA-z0-9 ]+$/]');
		$this->form_validation->set_rules('txtPin', 'Pin Code', 'trim|required|min_length[6]|max_length[6]|regex_match[/^[0-9]+$/]');
		$this->form_validation->set_rules('ddlState', 'State', 'trim|required');
		$this->form_validation->set_rules('ddlPaymentType', 'Payment Type', 'trim|required');
		$this->form_validation->set_rules('txtSpecialNote', 'Special Notes', 'trim|min_length[20]|regex_match[/^(\w*\s*[\#\-\,\/\.\(\)\&]*)+/]');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('validation_errors', validation_errors());
			redirect('home/checkout');
		} else {

			//Clean XSS
			$txtName=$this->security->xss_clean($this->input->post('txtName'));
			$txtCouponCode=$this->security->xss_clean($this->input->post('txtCouponCode'));
			$txtEmail=$this->security->xss_clean($this->input->post('txtEmail'));
			$txtPhone=$this->security->xss_clean($this->input->post('txtPhone'));
			$txtAddress1=$this->security->xss_clean($this->input->post('txtAddress1'));
			$txtAddress2=$this->security->xss_clean($this->input->post('txtAddress2'));
			$txtAddress3=$this->security->xss_clean($this->input->post('txtAddress3'));
			$txtAddress4=$this->security->xss_clean($this->input->post('txtAddress4'));
			$txtCity=$this->security->xss_clean($this->input->post('txtCity'));
			$txtLandmark=$this->security->xss_clean($this->input->post('txtLandmark'));
			$txtPin=$this->security->xss_clean($this->input->post('txtPin'));
			$ddlState=$this->security->xss_clean($this->input->post('ddlState'));
			$ddlPaymentType=$this->security->xss_clean($this->input->post('ddlPaymentType'));
			$txtSpecialNote=$this->security->xss_clean($this->input->post('txtSpecialNote'));
			$chkRedeen=$this->security->xss_clean($this->input->post('chkRedeem'));


			//This section for calculate delivery charge
			$deliveryCharge=0;
			if($this->cart->total()<=200)
				{	$Fidgt=substr($txtPin,0, 3);
					if($Fidgt==700){
						$deliveryCharge=25;
					}
					else{
						$deliveryCharge=50;
					}
				}

			//This Section For Get Coupon Discount
				$discount=0;
				switch($this->home_model->validatecoupon($txtCouponCode,$txtEmail,$txtPhone,$this->cart->total())){
					case 704:
					break;
					case 904:
					break;
					case 804:
					break;
					default:
					$discount=$this->home_model->validatecoupon($txtCouponCode,$txtEmail,$txtPhone,$this->cart->total());
					break;
				}
				//If This is a refaral discount then this code will execute
				if($this->session->userdata('referaldiscount')){
					$CartAmount=$this->cart->total()-($this->cart->total()*5/100);
				}
				else{
					$CartAmount=$this->cart->total();
				}
				$totalAmount=($CartAmount+$deliveryCharge)-$discount;
				//$chkAlert=$this->input->post('chkRedeem');
				if(isset($chkRedeen))
				{
					$totalAmount=$totalAmount-$this->home_model->redeembp();
				}

			//Save Data In Database
				$orderID=$this->home_model->completeorder($txtName,$txtCouponCode,$txtEmail,$txtPhone,$txtAddress1,$txtAddress2,$txtAddress3,$txtAddress4,$txtCity,$txtLandmark,$txtPin,$ddlState,$ddlPaymentType,$txtSpecialNote,$discount,$deliveryCharge,$totalAmount);
				if(isset($chkRedeen))
				{
					$this->home_model->redeembivapoints($orderID);
				}

	 		//if order status is online then load ccavenue page
				if($ddlPaymentType=="online"){
					$ccavenue= array(
					'orderid' => $orderID,
					'totalprice' => $totalAmount,
					'orderby' => $txtName,
					'address' => $txtAddress1,
					'city' => $txtCity,
					'state' => $ddlState,
					'pin' => $txtPin,
					'phone' => $txtPhone,
					'email' => $txtEmail
					);
					$this->load->view('home/ccavenueredirect_view', $ccavenue);
				}
				else{
					$this->cart->destroy();
					$this->session->unset_userdata('referaldiscount');
					$this->session->set_flashdata('orderid', $orderID);
					$this->home_model->SendOrderConfirmationMail($orderID,$txtEmail);
					redirect('home/ordersuccess');
				}
			}
		}

		//This function to check cash on delivery
		public function checkcashondelivery(){

			$pincode=$this->input->post('pincode');
			$pincode=$this->security->xss_clean($pincode);
			if($this->home_model->checkcashondelivery($pincode)){
				echo "success";
			}
			else{
				echo "notfound";
			}
		}

		//This Function to load oder success view
		public function ordersuccess(){

			$data=array(
				'main_view' => 'home/orderconfirm_view',
				'navcategory' => $this->home_model->navcaregory()
			);
			$this->load->view('layout/home_layout',$data);
		}

		//This function for load order history view
		public function orderhistory(){
			$data= array(
				'main_view' => 'home/orderhistory_view',
				'navcategory' => $this->home_model->navcaregory(),
				'history' => $this->home_model->orderhistorybyemail()
			);
			$this->load->view('layout/home_layout',$data);
		}

		//This function to view order dreatis
		public function orderdetails($orderid){

			$orderid=$this->security->xss_clean($orderid);
			$orderid=str_replace(array('-', '_', '~'), array('+', '/', '='), $orderid);
			$orderid=$this->encrypt->decode($orderid);
			// echo $orderid;
			// var_dump($this->home_model->getorderitembyid($orderid));

			$data=array(
				'main_view' => 'home/orderdetailsbyid_view',
				'ordersummerydata' => $this->home_model->getordersummerydetailsbyorderid($orderid),
				'ordershipmentdata' => $this->home_model->getordershipmentdatabyorderid($orderid),
				'navcategory' => $this->home_model->navcaregory(),
				'orderlineitem' =>$this->home_model->getorderitembyid($orderid)
			);

			$this->load->view('layout/home_layout',$data);
		}

		public function invoice($orderid){

			$orderid=$this->security->xss_clean($orderid);
			$orderid=str_replace(array('-', '_', '~'), array('+', '/', '='), $orderid);
			$orderid=$this->encrypt->decode($orderid);

			$data=array(
				'ordersummerydata' => $this->home_model->getordersummerydetailsbyorderid($orderid),
				'orderlineitem' =>$this->home_model->getorderitembyid($orderid),
				'OrderId' => $orderid
			);
			$this->load->view('home/invoice_view',$data);
		}

		//About Us view load
		public function aboutus(){
			$data= array(
				'main_view' => 'home/aboutus_view',
				'navcategory' => $this->home_model->navcaregory()
			);
			$this->load->view('layout/home_layout',$data);
		}

		//This Function For Contact Us
		public function contactus(){
			$data= array(
				'main_view' => 'home/contactus_view',
				'navcategory' => $this->home_model->navcaregory()
			);
			$this->load->view('layout/home_layout',$data);
		}


		//This function for send contact mail
		public function contact(){
			$this->form_validation->set_rules('txtname', 'Name', 'trim|required|min_length[2]|max_length[20]|regex_match[/^[a-zA-z ]+$/]');
			$this->form_validation->set_rules('txtemail', 'Email', 'trim|required|regex_match[/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix]');
			$this->form_validation->set_rules('txtphone', 'Phone Number', 'trim|required|min_length[10]|max_length[12]|regex_match[/^[0-9]+$/]');
			$this->form_validation->set_rules('txtmsg', 'Message', 'trim|required');

			if($this->form_validation->run()==FALSE){
				$this->session->set_flashdata('val_err',validation_errors());
				redirect('home/contactus');
			}
			else{
				//Clean xss
				$name=$this->security->xss_clean($this->input->post('txtname'));
				$email=$this->security->xss_clean($this->input->post('txtemail'));
				$phone=$this->security->xss_clean($this->input->post('txtphone'));
				$message=$this->security->xss_clean($this->input->post('txtmsg'));

				$this->load->library('email');
			 	$this->email->set_mailtype('html');
				$this->email->from($email, $name);
				$this->email->to('biva.publication@gmail.com');


				$message='<!DOCTYPE html><html><head></head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head><body>';
				$message.='<p>Hye ,</p>';
				$message.='<p>You have a contact enquery</p>';
				$message.='<p>Contact By - '.$name.'</p>';
				$message.='<p>Email - '.$email.'</p>';
				$message.='<p>Phone Numer - '.$phone.'</p>';
				$message.='<p>Message - '.$email.'</p>';
				$message.='</body></html>';


				$this->email->subject('Hye, You have a contact enquiry from website');
				$this->email->message($message);

				$this->email->send() or die("Message Not Send");

				$this->session->flashdata('success_log','Message Send Success Fully');
				redirect('home/contactus');
			}
		}

		//This Function For Refer Firend
		public function referfriend(){
			$this->form_validation->set_rules('email', 'Email', 'trim|required|regex_match[/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix]');
			$this->form_validation->set_rules('message', 'Message', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				echo validation_errors();
			} else {
				//Clean XSS
				$email=$this->security->xss_clean($this->input->post('email'));
				$message=$this->security->xss_clean($this->input->post('message'));

				if($email==$this->session->userdata('useremail'))
				{
					echo "Wrong Email";
				}
				else{
				//Genarate Unique Key
				$this->load->helper('string');
				$key=random_string('alnum',25);

				//Save Data To Database
				$this->home_model->reference($email,$key);

				//Send Mail to User
				$this->load->library('email');
			 	$this->email->set_mailtype('html');
				$this->email->from('biva.publication@gmail.com', 'Biva Publication');
				$this->email->to($email);


				$message='<!DOCTYPE html><html><head></head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head><body>';
				$message.='<p>Hello,</p>';
				$message.='<p>You have been referred by '.$this->session->userdata('username').'.</p>';
				$message.='<p>Click this link below to get 5% discount extar, earn Biva Points and meny more.</p>';
				$message.='<p><strong><a href="'.base_url().'home/referrer_discount/'.$email.'/'.$key.'/">Click Here</a></strong>to get discount and Biva Points.</p>';
				$message.='<p>Thank You!</p>';
				$message.='<p>Biva Publication</p>';
				$message.='</body></html>';


				$this->email->subject('You Have Been Referred By Your Firend');
				$this->email->message($message);

				//$this->email->send() or die("Message Not Send");

				echo "Referred Successfully";
				}

			}
		}

		//This function For redeem biva points
		public function redeem(){
			if($this->session->userdata('useremail')){
				echo $this->home_model->redeembp();
			}
			else{
				redirect('home','refresh');
			}
		}

		//This Function To Load Bivapoints View
		public function bivapoints(){
			if($this->session->userdata('useremail')){
				$data = array(
				'main_view' => 'home/bivapointshistory_view',
				'navcategory' => $this->home_model->navcaregory(),
				'bphistory' => $this->home_model->bivapointhistory(),
				'couponimage' => $this->admin_model->GetAllCouponImage()
				);
				$this->load->view('layout/home_layout', $data);
			}
			else{
				redirect('home');
			}
		}

		//This function To Load Post data
		public function authorscorner(){



			$data=array(
				'main_view' => 'home/authorscorner_view',
				'navcategory' => $this->home_model->navcaregory(),
				'postdata' => $this->admin_model->PaginationPost(),
				//'pagination' => $this->admin_model->PaginationPost()
			);

				//Get Total Rows
				$query2=$this->db->get('tblauthorpost');

				$this->load->library('pagination');
					
				$url=base_url().'home/authorscorner/';	

				$config['base_url'] = $url;

				$config['total_rows'] = $query2->num_rows();
				$config['per_page'] = 3;
				// $config['uri_segment'] = 3;
				// $config['num_links'] = 3;
				$config['full_tag_open'] = '<ul class="pagination" >';
				$config['full_tag_close'] = '</ul>';

			   // $config['first_link'] = 'First';

				$config['first_tag_open'] = '<li>';
				$config['last_tag_open'] = '<li>';

				$config['next_tag_open'] = '<li>';
				$config['prev_tag_open'] = '<li>';

				$config['num_tag_open']="<li>";
				$config['num_tag_close']="</li>";

				$config['first_tag_close'] = '</li>';
				$config['last_tag_close'] = '</li>';

				// $config['last_link'] = 'Last';
				// $config['next_link'] = '&gt;';

				

				$config['next_tag_close'] = '</li>';
				$config['prev_tag_close'] = '</li>';

				//$config['prev_link'] = '&lt;';
				
				
				$config['cur_tag_open'] = "<li class=\"active\"><span><b>";
				$config['cur_tag_close'] = '</b></span></li>';
				
				$this->pagination->initialize($config);
				
				//echo $this->pagination->create_links();

			$this->load->view('layout/home_layout', $data);
		}

		//This Function For single Auther By Id
		public function authorpost($id){
			//decrypt id
			$id=$this->security->xss_clean($id);
			$id=str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
			//xss_clean
			$id=$this->encrypt->decode($id);
			// $data = array(
			// 	'main_view' => 'home/postdetails_view',
			// 	'navcategory' => $this->home_model->navcaregory(),
			// 	'postdetails' => $this->home_model->GetAuthorPostByid($id),
			// 	'postcomment' => $this->home_model->GetPostCommentByid($id)
			// 	);
			$data = $this->home_model->GetPostCommentByid($id);
			$this->load->view('layout/home_layout', $data);
		}

		//This function To Comment post review
		public function CommentinPost(){
			//form validation set rules
			$this->form_validation->set_rules('txtComment', 'Comment', 'trim|required');
			$this->form_validation->set_rules('txtPostId', 'Post Id', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('log', validation_errors());
				//xss_clean
				$id=$this->input->post('txtPostId');
				$id=$this->encrypt->encode($id);
				$id=str_replace(array('+', '/', '='), array('-', '_', '~'), $id);
				$url="home/authorpost/".$id;
				redirect($url);
			} else {
				//xss_clean
				$txtPostId=$this->security->xss_clean($this->input->post('txtPostId'));
				$txtComment=$this->security->xss_clean($this->input->post('txtComment'));

				$this->home_model->CommentOnAuthorPost($txtPostId,$txtComment);

				$this->session->set_flashdata('log', 'Comment Added Successfully');
				$id=$this->input->post('txtPostId');
				$id=$this->encrypt->encode($id);
				$id=str_replace(array('+', '/', '='), array('-', '_', '~'), $id);
				$url="home/authorpost/".$id;
				redirect($url);
			}		
		}

		//This Function For Search utility
		public function search(){
			$this->form_validation->set_rules('txtSearch', 'Search Keyword', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				echo "<script>alert('".validation_errors()."');</script>";
				echo "<script>window.open('".base_url()."','_self');</script>";
			} else {
				//xss_clean
				$keyword=$this->security->xss_clean($this->input->post('txtSearch'));

				$data=array(
				'main_view' => 'home/booksbycategory_view',
				'navcategory' => $this->home_model->navcaregory(),
				'productlist' => $this->home_model->searchitem($keyword),
				'categoryname' => 'Search Result',
				'authorlist' => $this->home_model->authorlist()
				);
				$this->load->view('layout/home_layout', $data);
			}
			// if(isset($keyword))
			// {
			// 	$data=array(
			// 	'main_view' => 'home/booksbycategory_view',
			// 	'navcategory' => $this->home_model->navcaregory(),
			// 	'productlist' => $this->home_model->searchitem($keyword),
			// 	'categoryname' => 'Search Result',
			// 	'authorlist' => $this->home_model->authorlist()
			// 	);
			// $this->load->view('layout/home_layout', $data);
			// }
			// else{
			// 	//redirect('home');
			// }
		}

	}



	/* End of file home.php */
	/* Location: ./application/controllers/home/home.php */
	?>
