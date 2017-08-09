<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function index()
	{
		$this->load->view('Admin/login_view');
	}

	//This Section For Check Credential
	public function login(){
		$this->form_validation->set_rules('txtUsername', 'User Name', 'trim|required|regex_match[/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix]');
		$this->form_validation->set_rules('txtPassword', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error_log', validation_errors());
			redirect('admin','refresh');
		} else {
			//Remove Cross Site Scripting
			$username=$this->security->xss_clean($this->input->post('txtUsername'));
			$password=$this->security->xss_clean($this->input->post('txtPassword'));
			$oldpassword=$password;
			$password="bivaadmin".$password."adminbiva";

			//echo $password;
			//Check Credential Here
			$result=$this->admin_model->checkcredential($username,$password);
			//echo $result;
			if($result){
				$data=array(
					'adminid' => $result,
					'adminemail' => $username,
					'adminlogin' => true
					);
				$this->session->set_userdata($data);
				redirect('admin/welcome');
			}
			else{
				$flashData=array(
					'error_log' => 'Enter Valid UserName And Password',
					'error_email' => $username,
					'error_password' => $oldpassword
				);
				$this->session->set_flashdata($flashData);
				redirect('admin');
			}

			//$this->admin_model->checkcredential($username,$password);

		}
	}

	//This Function For Logout
	public function logout(){
		$user_data = $this->session->all_userdata();
		foreach ($user_data as $key => $value) {
			if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
				$this->session->unset_userdata($key);
			}
		}
		$this->session->sess_destroy();
		redirect('admin','refresh');
	}

	//This function Load Dashboard View
	public function welcome(){
		if($this->session->userdata('adminlogin')){
			$data=array(
				'main_view' => 'admin/dashboard_view'
				);
			$this->load->view('layout/admin_layout',$data);
		}
		else{
			redirect('admin','refresh');
		}
	}

	//This Function Load Products View
	public function products(){
		if($this->session->userdata('adminlogin')){
			$data=array(
				'main_view' => 'admin/products_view',
				'category' => $this->admin_model->viewcategorylist(),
				'publisher' =>   $this->admin_model->viewpublisherlist(null),
				'allproducts' => $this->admin_model->viewallproduct(null)
				);
			$this->load->view('layout/admin_layout',$data);
		}
		else{
			redirect('admin','refresh');
		}
	}

	//This Function To Load Category View
	public function category(){
		if($this->session->userdata('adminlogin')){
			$data=array(
				'main_view' => 'admin/category_view',
				'result' => $this->admin_model->viewcategorylist()
				);
			$this->load->view('layout/admin_layout',$data);
		}
		else{
			redirect('admin','refresh');
		}
	}

	//This function To Create New Category
	public function newcategory(){
		if($this->session->userdata('adminlogin')){

			//this section to validation
			$this->form_validation->set_rules('txtCategoryName', 'Category Name', 'trim|required');
			$this->form_validation->set_rules('txtDescription', 'Description ', 'trim|min_length[5]|max_length[255]');
			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('error_log', validation_errors());
				redirect('admin/category');
			}
			else {

				//Store Data To A variable
				$categoryName=$this->input->post('txtCategoryName');
				$description=$this->input->post('txtDescription');
				$live=$this->input->post('chkCategoryActive');

				//Prevent XSS
				$categoryName=$this->security->xss_clean($categoryName);
				$description=$this->security->xss_clean($description);
				$live=$this->security->xss_clean($live);

				//Save data to database
				$this->admin_model->insertcategory($categoryName,$description,$live);

				//Show Success Message To User
				$this->session->set_flashdata('success_log', 'Category Created Successfully');
				redirect('admin/category');

			}


		}
		else{ //This else for logout
			redirect('admin','refresh');
		}
	}

	//This function To Change Status Of Category
	public function bandcategory($id,$status){
		if($this->session->userdata('adminlogin')){
			if($id != null && $status != null){
				$this->admin_model->changecategorystatus($id,$status);
				$this->session->set_flashdata('success_log', 'Status Change Succesfully');
				redirect('admin/category');
			}
			else{
				redirect('admin/category');
			}
		}
		else{
			redirect('admin');
		}
	}

	//This Function To Delete category
	public function deletecategory($id){

		if($this->session->userdata('adminlogin')){
			if($id){
				//Prevent XSS
				$id=$this->security->xss_clean($id);

				//Delete Category Here
				$this->admin_model->deletecategory($id);
				$this->session->set_flashdata('success_log', 'Category Deleted Succesfully');
				redirect('admin/category');
			}
			else{
				redirect('admin/category','refresh');
			}
		}
		else{
			redirect('admin');
		}
	}


	//This function for publisher
	public function publisher(){
		if($this->session->userdata('adminlogin')){
			if(isset($_GET['editid']))
			{
				$id=$this->security->xss_clean($_GET['editid']);
				$data=array(
					'main_view' => 'admin/publiher_view',
					'result' => $this->admin_model->viewpublisherlist($id)
					);
			}
			else{
				$data=array(
					'main_view' => 'admin/publiher_view',
					'result' => $this->admin_model->viewpublisherlist(null)
					);
			}

			$this->load->view('layout/admin_layout',$data);
		}
		else{
			redirect('admin','refresh');
		}
	}


	//This function To Create New Publisher
	public function newpublisher(){
		if($this->session->userdata('adminlogin')){
		//form validation
			$this->form_validation->set_rules('txtPublisherName', 'Publisher Name', 'trim|required');
			$this->form_validation->set_rules('txtPublisherAddress', 'Publisher Address', 'trim');
			$this->form_validation->set_rules('txtPublisherPhone', 'Publisher Phone Number', 'trim|required|regex_match[/^[0-9]{10}$/]');
			$this->form_validation->set_rules('txtPublisherEmail', 'Publisher Email', 'trim|required|regex_match[/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix]');
			$this->form_validation->set_rules('chkPublisherActive', 'Publisher Active', 'trim');

			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('error_log', validation_errors());
				redirect('admin/publisher');
			} else {

			//Store Data in a Variable
				$txtPublisherName=$this->input->post('txtPublisherName');
				$txtPublisherAddress=$this->input->post('txtPublisherAddress');
				$txtPublisherPhone=$this->input->post('txtPublisherPhone');
				$txtPublisherEmail=$this->input->post('txtPublisherEmail');
				$chkPublisherActive=$this->input->post('chkPublisherActive');

			//Prevent XSS
				$txtPublisherName=$this->security->xss_clean($txtPublisherName);
				$txtPublisherAddress=$this->security->xss_clean($txtPublisherAddress);
				$txtPublisherPhone=$this->security->xss_clean($txtPublisherPhone);
				$txtPublisherEmail=$this->security->xss_clean($txtPublisherEmail);
				$chkPublisherActive=$this->security->xss_clean($chkPublisherActive);

			//Store Data To Database
				$this->admin_model->insertpublisher($txtPublisherName,$txtPublisherAddress,$txtPublisherPhone,$txtPublisherEmail,$chkPublisherActive);

				$this->session->set_flashdata('success_log', 'Publiser Created Successfully');
				redirect('admin/publisher');

			}
		}
		else{
			redirect('admin','refresh');
		}
	}


	//This Function to delete publiser
	public function deletepublisher($id){
		if($this->session->userdata('adminlogin')){
			if($id!=null){
				//Prevent XSS
				$id=$this->security->xss_clean($id);

				//Delete Publisher
				$this->admin_model->deletepublisher($id);

				$this->session->set_flashdata('success_log', 'Publisher Deleted Successfully');
				redirect('admin/publisher');
			}
			else{
				redirect('admin/publisher');
			}
		}
		else{
			redirect('admin');
		}
	}


	//This function To Cheange Publisher Status
	public function bandpublisher($id,$status){
		if($this->session->userdata('adminlogin')){
			if($id != null && $status != null){

				//Prevent XSS
				$id=$this->security->xss_clean($id);
				$status=$this->security->xss_clean($status);

				//Update Status
				$this->admin_model->changepublisherstatus($id,$status);

				$this->session->set_flashdata('success_log', 'Publisher Status Changed Succesfully');
				redirect('admin/publisher');
			}
			else{
				redirect('admin/publisher');
			}
		}
		else{
			redirect('admin');
		}
	}


	//This function to create new products
	public function newproduct(){
		if($this->session->userdata('adminlogin')){
		//Set Validetion Rules
			$this->form_validation->set_rules('txtProductName', 'Product Name', 'trim|required');
			$this->form_validation->set_rules('txtProductSKU', 'Product SKU', 'trim|required');
			$this->form_validation->set_rules('txtAuther', 'Auther Name', 'trim|required');
			$this->form_validation->set_rules('txtstock', 'Quantity', 'trim|required');
			$this->form_validation->set_rules('txtRetailPrice', 'Retail Price', 'trim|required');
			$this->form_validation->set_rules('txtSellingPrice', 'Selling Price', 'trim|required');
			$this->form_validation->set_rules('txtDiscount', 'Discount', 'trim|required');
			$this->form_validation->set_rules('txtLanguage', 'Language', 'trim|required');
			$this->form_validation->set_rules('txtEdition', 'Edition', 'trim|required');
			$this->form_validation->set_rules('txtPublishDate', 'Publish Date', 'trim|required');
			$this->form_validation->set_rules('txtBinding', 'Binding Date', 'trim|required');
			$this->form_validation->set_rules('txtNoPage', 'Pages', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('error_log', validation_errors());
				redirect('admin/products');
			}
			else {
				$config['upload_path'] = './assets/productthumb/';
				$config['allowed_types'] = 'gif|jpg|png';

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('fileThambImage')){
					$error = array('error' => $this->upload->display_errors());
				}
				else{
				// $data = array('upload_data' => $this->upload->data());
				// echo "success";
					$fileData=$this->upload->data();

				//Prevent Cross Site Scripting
					$txtProductName=$this->security->xss_clean($this->input->post('txtProductName'));
					$txtProductSeries=$this->security->xss_clean($this->input->post('txtProductSeries'));
					$txtAuther=$this->security->xss_clean($this->input->post('txtAuther'));
					$txtstock=$this->security->xss_clean($this->input->post('txtstock'));
					$txtRetailPrice=$this->security->xss_clean($this->input->post('txtRetailPrice'));
					$txtSellingPrice=$this->security->xss_clean($this->input->post('txtSellingPrice'));
					$txtDiscount=$this->security->xss_clean($this->input->post('txtDiscount'));
					$txtLanguage=$this->security->xss_clean($this->input->post('txtLanguage'));
					$txtISBN=$this->security->xss_clean($this->input->post('txtISBN'));
					$txtEdition=$this->security->xss_clean($this->input->post('txtEdition'));
					$txtPublishDate=$this->security->xss_clean($this->input->post('txtPublishDate'));
					$txtBinding=$this->security->xss_clean($this->input->post('txtBinding'));
					$txtNoPage=$this->security->xss_clean($this->input->post('txtNoPage'));
					$txtDescription=$this->security->xss_clean($this->input->post('txtDescription'));
					$txtProductSKU=$this->security->xss_clean($this->input->post('txtProductSKU'));
					$txtWeight=$this->security->xss_clean($this->input->post('txtWeight'));
					$ddlPublisher=$this->security->xss_clean($this->input->post('ddlPublisher'));
					$chkProductLive=$this->security->xss_clean($this->input->post('txtProductLive'));
					$chkPreorder=$this->security->xss_clean($this->input->post('chkPreorder'));
					$txtSearchKey=$this->security->xss_clean($this->input->post('txtSearchKey'));
				//$ddlCategory=$this->security->xss_clean($this->input->post('ddlCategory'));
					$imageName=$fileData['file_name'];

				//Save Data To Database
					$this->admin_model->insertproduct($txtProductName,$txtProductSeries,$txtAuther,$txtstock,$txtRetailPrice,$txtSellingPrice,$txtDiscount,$txtLanguage,$txtISBN,$txtEdition,$txtPublishDate,$txtBinding,$txtNoPage,$txtDescription,$txtProductSKU,$ddlPublisher,$imageName,$chkProductLive,$chkPreorder,$txtSearchKey,$txtWeight,$this->input->post('ddlCategory'),$this->input->post('ddlHomeCategory'));

				//Redirect To PRODUCT
					$this->session->set_flashdata('success_log', 'Product Add Successfully');
					redirect('admin/products');

				}
			}
		}
		else{
			redirect('admin','refresh');
		}
		//this
		//$this->admin_model->insertproduct($this->input->post('ddlCategory'));
		//var_dump($ddlMultiple);
		// foreach($this->input->post("ddlCategory") as $tar){
		//     echo $tar."<br/>";
		// }
	}

	//This Function To Delete Product
	public function deleteproduct($id,$productimg){
		if($this->session->userdata('adminlogin'))
		{
			if($id !=null && !empty($id)){
				$this->admin_model->deleteproduct($id,$productimg);
				$this->session->set_flashdata('success_log', 'Product Deleted Successfully');
				redirect('admin/products');
			}
			else{
				redirect('admin/products');
			}
		}
		else{
			redirect('admin');
		}
	}

	//This Function to Load Product Image View By ProductId
	public function productimage($id){
		if($this->session->userdata('adminlogin')){
			$data=array(
				'main_view' => 'admin/productimages_view',
				'product_id' => $id,
				'imagelist'=> $this->admin_model->getallproductimage($id)
				);
			$this->load->view('layout/admin_layout',$data);
		}
		else{
			redirect('admin','refresh');
		}
	}

	//This function Insert Product Image By Product Id
	public function insertproductimage(){
		if($this->input->post('btnSubmit') && !empty($_FILES['fileImage']['name'])){
			$filesCount = count($_FILES['fileImage']['name']);
			for($i = 0; $i < $filesCount; $i++){

				$_FILES['fileImages']['name'] = $_FILES['fileImage']['name'][$i];
				$_FILES['fileImages']['type'] = $_FILES['fileImage']['type'][$i];
				$_FILES['fileImages']['tmp_name'] = $_FILES['fileImage']['tmp_name'][$i];
				$_FILES['fileImages']['error'] = $_FILES['fileImage']['error'][$i];
				$_FILES['fileImages']['size'] = $_FILES['fileImage']['size'][$i];

				$uploadPath = './assets/singleproductimage/';
				$config['upload_path'] = $uploadPath;
				$config['allowed_types'] = 'gif|jpg|png';

				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('fileImages')){
					$fileData = $this->upload->data();
                    //$uploadData[$i]['ImageName'] = $fileData['file_name'];
                    //$uploadData[$i]['Product_Id'] = $this->input->post('txtProductid');
					$this->admin_model->insertimagebyproductid($this->input->post('txtProductid'),$fileData['file_name']);
				}
			}

			$this->session->set_flashdata('success_log', 'Image upload successfully');
			$url='admin/productimage/'.$this->input->post('txtProductid');
			redirect($url,'refresh');
		}
	}


	//This Function To Delete Product Image
	public function deleteproductimage($id,$imageName,$productId){
		$this->admin_model->deleteproductimagebyid($id,$imageName);
		$this->session->set_flashdata('error_log', 'Image Deleted');
		$url='admin/productimage/'.$productId;
		redirect($url,'refresh');
	}

	//This function load product edit view
	public function productedit($id){
		if($this->session->userdata('adminlogin')){
			$data=array(
				'main_view' => 'admin/productedit_view',
				'product_id' => $id,
				'products'=> $this->admin_model->viewallproduct($id),
				'selectedcategory' => $this->admin_model->viewallcategorybyproductid($id),
				'selectedhomecategory' => $this->admin_model->viewhomeproductbyproductid($id),
				'category' => $this->admin_model->viewcategorylist(),
				'publisher' =>   $this->admin_model->viewpublisherlist(null)
				);
			$this->load->view('layout/admin_layout',$data);
		}
		else{
			redirect('admin');
		}
	}

	//This function to edit product
	public function editproduct(){
		if($this->session->userdata('adminlogin')){
			//Set Validation Rules
			$this->form_validation->set_rules('txtProductName', 'Product Name', 'trim|required');
			$this->form_validation->set_rules('txtProductSKU', 'Product SKU', 'trim|required');
			$this->form_validation->set_rules('txtAuther', 'Auther Name', 'trim|required');
			$this->form_validation->set_rules('txtstock', 'Quantity', 'trim|required');
			$this->form_validation->set_rules('txtRetailPrice', 'Retail Price', 'trim|required');
			$this->form_validation->set_rules('txtSellingPrice', 'Selling Price', 'trim|required');
			$this->form_validation->set_rules('txtDiscount', 'Discount', 'trim|required');
			$this->form_validation->set_rules('txtLanguage', 'Language', 'trim|required');
			$this->form_validation->set_rules('txtEdition', 'Edition', 'trim|required');
			$this->form_validation->set_rules('txtPublishDate', 'Publish Date', 'trim|required');
			$this->form_validation->set_rules('txtBinding', 'Binding Date', 'trim|required');
			$this->form_validation->set_rules('txtNoPage', 'Pages', 'trim|required');
			$this->form_validation->set_rules('txtHidden' , 'Product Id','trim|required');
			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('error_log', validation_errors());
				$url="admin/productedit/".$this->input->post('txtHidden');
				redirect($url);
			}
			else{
					//Prevent Cross Site Scripting
				$txtProductName=$this->security->xss_clean($this->input->post('txtProductName'));
				$txtProductSeries=$this->security->xss_clean($this->input->post('txtProductSeries'));
				$txtAuther=$this->security->xss_clean($this->input->post('txtAuther'));
				$txtstock=$this->security->xss_clean($this->input->post('txtstock'));
				$txtRetailPrice=$this->security->xss_clean($this->input->post('txtRetailPrice'));
				$txtSellingPrice=$this->security->xss_clean($this->input->post('txtSellingPrice'));
				$txtDiscount=$this->security->xss_clean($this->input->post('txtDiscount'));
				$txtLanguage=$this->security->xss_clean($this->input->post('txtLanguage'));
				$txtISBN=$this->security->xss_clean($this->input->post('txtISBN'));
				$txtEdition=$this->security->xss_clean($this->input->post('txtEdition'));
				$txtPublishDate=$this->security->xss_clean($this->input->post('txtPublishDate'));
				$txtBinding=$this->security->xss_clean($this->input->post('txtBinding'));
				$txtNoPage=$this->security->xss_clean($this->input->post('txtNoPage'));
				$txtDescription=$this->security->xss_clean($this->input->post('txtDescription'));
				$txtProductSKU=$this->security->xss_clean($this->input->post('txtProductSKU'));
				$txtWeight=$this->security->xss_clean($this->input->post('txtWeight'));
				$ddlPublisher=$this->security->xss_clean($this->input->post('ddlPublisher'));
				$chkProductLive=$this->security->xss_clean($this->input->post('txtProductLive'));
				$chkPreorder=$this->security->xss_clean($this->input->post('chkPreorder'));
				$txtSearchKey=$this->security->xss_clean($this->input->post('txtSearchKey'));
				$productId=$this->security->xss_clean($this->input->post('txtHidden'));

					//Save Data To Database
				$this->admin_model->editproduct($txtProductName,$txtProductSeries,$txtAuther,$txtstock,$txtRetailPrice,$txtSellingPrice,$txtDiscount,$txtLanguage,$txtISBN,$txtEdition,$txtPublishDate,$txtBinding,$txtNoPage,$txtDescription,$txtProductSKU,$ddlPublisher,$chkProductLive,$chkPreorder,$txtSearchKey,$txtWeight,$this->input->post('ddlCategory'),$this->input->post('ddlHomeCategory'),$productId);

					//Redirect To PRODUCT
				$this->session->set_flashdata('success_log', 'Product Updated Successfully');
				$url="admin/productedit/".$this->input->post('txtHidden');
				redirect($url);
			}
		}
		else{
			redirect('admin');
		}
	}

	//this function load banner view
	public function banner(){

		if($this->session->userdata('adminlogin')){
			$data=array(
				'main_view' => 'admin/banner_view',
				'bannerlist' => $this->admin_model->viewallbanner()
				);
			$this->load->view('layout/admin_layout',$data);
		}
		else{
			redirect('admin');
		}
	}


	//Insert New Banner
	public function newbanner(){
		if($this->session->userdata('adminlogin')){
			if($this->input->post('btnSubmit') && !empty($_FILES['fileImage']['name'])){
				$bannerurl=$this->security->xss_clean($this->input->post('txtUrl'));

				$uploadPath = './assets/Banner/';
				$config['upload_path'] = $uploadPath;
				$config['allowed_types'] = 'gif|jpg|png';

				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('fileImage')){
					$fileData = $this->upload->data();

					$this->admin_model->insertbanner($fileData['file_name'],$bannerurl);
				}

				$this->session->set_flashdata('success_log', 'Banner upload successfully');
				$url='admin/banner';
				redirect($url,'refresh');
			}
		}
		else{
			redirect('admin');
		}
	}

	//This Function To Delete Banner Function
	public function deletebanner($id,$image){
		$id=$this->security->xss_clean($id);
		$image=$this->security->xss_clean($image);

		//delete image here
		$this->admin_model->deletebanner($id,$image);

		$this->session->set_flashdata('success_log', 'Banner Deleted Successfully');
		redirect('admin/banner','refresh');
	}

	//This function to load COD_view
	public function cod(){
		if($this->session->userdata('adminlogin')){
			$data=array(
				'main_view' => 'admin/cod_view',
				'codlist' => $this->admin_model->viewallcodlist()
				);
			$this->load->view('layout/admin_layout',$data);
		}
		else{
			redirect('admin');
		}
	}

	//this function to Add COD
	public function newcod(){
		if($this->session->userdata('adminlogin')){
			try{
				$this->form_validation->set_rules('txtPincode', 'Pincode', 'trim|required|min_length[6]|max_length[6]|numeric');
				$this->form_validation->set_rules('txtLocationName', 'Location Name', 'trim|required');

				if ($this->form_validation->run() == FALSE) {
					$this->session->set_flashdata('error_log', validation_errors());
				} else {

				//Prevent XSS
					$locationName=$this->security->xss_clean($this->input->post('txtLocationName'));
					$pincode=$this->security->xss_clean($this->input->post('txtPincode'));

					$this->admin_model->insertcod($locationName,$pincode);

					$this->session->set_flashdata('success_log', 'Location Saved');
					redirect('admin/cod');
				}
			}
			catch(Exception $e){
				$this->session->set_flashdata('error_log', $e);
				redirect('admin/cod');
			}

		}

		else{
			redirect('admin');
		}
	}

	//This function to delete cash on delivery
	public function deletecod($id){
		if($this->session->userdata('adminlogin')){
			if($id != null && strlen($id)>0){
				$id=$this->security->xss_clean($id);
				$this->admin_model->deletecod($id);
				$this->session->set_flashdata('success_log', 'Location Deleted');
				redirect('admin/cod');
			}
		}
		else{
			redirect('admin');
		}
	}

	//Load Best Selling Books
	public function bestselling(){
		if($this->session->userdata('adminlogin')){
			$data=array(
				'main_view' => 'admin/bestsellingbook_view',
				'productlists' => $this->admin_model->viewallproduct(null),
				'bestselleing' => $this->admin_model->getallbestseller()
				);
			$this->load->view('layout/admin_layout',$data);
		}
		else{
			redirect('admin','refresh');
		}
	}

	//This Function to Create Best Seller
	public function addbestseller(){
		if($this->input->post('ddlBestSeller')!=null)
		{
			$this->admin_model->insertbestsellingbooks($this->input->post('ddlBestSeller'));
			$this->session->set_flashdata('success_log', 'Books Addred To Best Selling List');
			redirect('admin/bestselling');
		}
		else{
			$this->session->set_flashdata('error_log', 'Better Check Yourself');
			redirect('admin/bestselling');
		}
	}


	public function deletebestsellingboooks($id){
		if($id!=null){
			$id=$this->security->xss_clean($id);
			$this->admin_model->deletebestsellingbooks($id);
			$this->session->set_flashdata('success_log', 'Books Delete successfully');
			redirect('admin/bestselling');
		}
		else{
			$this->session->set_flashdata('error_log', 'Better Check Yourself');
			redirect('admin/bestselling');
		}
	}

	public function freesample(){
		if($this->session->userdata('adminlogin')){
			$data=array(
				'main_view' => 'admin/freesample_view',
				'productlists' => $this->admin_model->viewallproduct(null)
				);
			$this->load->view('layout/admin_layout',$data);
		}
		else{
			redirect('admin','refresh');
		}
	}

	//This Function to load pendimg order view
	public function order($type){
		if($this->session->userdata('adminlogin')){
			$data=array(
				'main_view' => 'admin/pendingorder_view',
				'pendingorder' => $this->admin_model->GetOrderByStatus($type)
				);
			$this->load->view('layout/admin_layout',$data);
		}
		else{
			redirect('admin','refresh');
		}
	}

	//This function for confirm a order by oderid
	public function confirmOrder(){
		$this->form_validation->set_rules('txtDate','Tentive Date', 'trim|required');
		$this->form_validation->set_rules('txtOrderId','Order Id', 'trim|required');
		$this->form_validation->set_rules('txtEmail','Email', 'trim|required');

		if($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('validation_errors',validation_errors());
			redirect('admin/order/Pending');
		}
		else{
			//xss clean
			$tentetiveDate=$this->security->xss_clean($this->input->post('txtDate'));
			$orderId=$this->security->xss_clean($this->input->post('txtOrderId'));
			$txtEmail=$this->security->xss_clean($this->input->post('txtEmail'));

			$this->admin_model->confirmOrder($tentetiveDate,$orderId,$txtEmail);
			echo "<script>alert('Order Confirmed');</script>";

			$data=array(
				'Email' => $txtEmail,
				'OrderId' => $orderId,
				'TentetiveDate' => $tentetiveDate,
				'main_view' => 'admin/sendemail_view',
				'mssage' => 'Do Not Refresh This Page'
				);
			$this->load->view('layout/admin_layout',$data);
		}
	}

	//This Function Send User Email
	public function sendmail(){
		$this->form_validation->set_rules('txtEmailID', 'Email Id', 'trim|required');
		$this->form_validation->set_rules('txtMessage', 'Message', 'trim|required');

		if($this->form_validation->run() ==FALSE) {
			echo "<script>alert('Validation Error');</script>";
		}
		else{
			$email=$this->input->post('txtEmailID');
			$message=$this->input->post('txtMessage');

			$this->load->library('email');
			$this->email->set_mailtype('html');
			$this->email->from('biva.publication@gmail.com', 'Biva Publication');
			$this->email->to($email);


			$this->email->subject('Biva Publication Order Status');
			$this->email->message($message);

			$this->email->send() or die("Message Not Send");
			redirect('admin/order/Pending');
		}
	}

	//This Function Order Ready To Ship By Order ID
	public function readytoship($id){
		$orderId=$this->security->xss_clean($id);
		$this->admin_model->Readytoship($id);

		echo "<script>alert('Order Move To Ready To Ship');</script>";
		echo "<script>window.open('".base_url()."admin/order/Confirmed','_self');</script>";
	}

	//This Function To Save data
	public function orderreadytoship(){
		$this->form_validation->set_rules('txtShipmentDate', 'Shipment Date', 'trim|required');
		$this->form_validation->set_rules('txtTrackingId', 'Tracking Id', 'trim|required');
		$this->form_validation->set_rules('txtOrderId', 'Order Id', 'trim|required');
		$this->form_validation->set_rules('txtTrackingId', 'Tracking Id', 'trim|required');
		$this->form_validation->set_rules('txtEmail', 'Email', 'trim|required');
		if($this->form_validation->run() == FALSE){
			echo "<script>alert('Validation Error');</script>";
			echo "<script>window.open('".base_url()."admin/order/Readytoship','_self');</script>";
		}
		else{
			//Prevent xss
			$txtShipmentDate=$this->security->xss_clean($this->input->post('txtShipmentDate'));
			$txtTrackingId=$this->security->xss_clean($this->input->post('txtTrackingId'));
			$ddlCuriar=$this->security->xss_clean($this->input->post('ddlCuriar'));
			$txtOrderId=$this->security->xss_clean($this->input->post('txtOrderId'));
			$txtTrackingId=$this->security->xss_clean($this->input->post('txtTrackingId'));
			$txtEmail=$this->security->xss_clean($this->input->post('txtEmail'));

			$this->admin_model->ordership($txtShipmentDate,$txtTrackingId,$ddlCuriar,$txtOrderId,$txtTrackingId);

			//Load Mail View
			$data=array(
				'Email' => $txtEmail,
				'OrderId' => $txtOrderId,
				'ShipmentDate' => $txtShipmentDate,
				'TrackingId' => $txtTrackingId,
				'CourierName' => $ddlCuriar,
				'main_view' => 'admin/sendemail_view',
				'mssage' => 'Do Not Refresh This Page'
				);
			$this->load->view('layout/admin_layout',$data);
		}
	}

	//This Function For Delivery OrderId
	public function deliverdorder(){
		$this->form_validation->set_rules('txtDeliveryDate', 'Delivery Date', 'trim|required');
		$this->form_validation->set_rules('txtOrderId', 'Order Id', 'trim|required');
		if($this->form_validation->run() == FALSE){
			echo "<script>alert('Validation Error');</script>";
			echo "<script>window.open('".base_url()."admin/order/Shipped','_self');</script>";
		}
		else{
			$orderId=$this->security->xss_clean($this->input->post('txtOrderId'));
			$deliverydate=$this->security->xss_clean($this->input->post('txtDeliveryDate'));

			$this->admin_model->deliverorder($orderId,$deliverydate);

			echo "<script>alert('Order Delivered Successfully');</script>";
			echo "<script>window.open('".base_url()."admin/order/Shipped','_self');</script>";
		}
	}

	//This Function For Order cancel
	public function cancelOrderbyid(){

		$this->form_validation->set_rules('txtCancel', 'Delivery Date', 'trim|required');
		$this->form_validation->set_rules('txtOrderId', 'Order Id', 'trim|required');
		if($this->form_validation->run() == FALSE){
			echo "<script>alert('Validation Error');</script>";
			echo "<script>window.open('".base_url()."admin/order/Pending','_self');</script>";
		}
		else{
			$orderId=$this->security->xss_clean($this->input->post('txtOrderId'));
			$cause=$this->security->xss_clean($this->input->post('txtCancel'));

			$this->admin_model->cancelorder($orderId,$cause);

			echo "<script>alert('Order Canceled Successfully');</script>";
			echo "<script>window.open('".base_url()."admin/order/Pending','_self');</script>";
		}
	}

	//This Function Show All order
	public function allorders(){
		if($this->session->userdata('adminlogin')){
			$type="";
			$data=array(
				'main_view' => 'admin/pendingorder_view',
				'pendingorder' => $this->admin_model->GetOrderByStatus($type)
				);
			$this->load->view('layout/admin_layout',$data);
		}
		else{
			redirect('admin','refresh');
		}
	}

	//This Section For Manage Coupon code
	public function managecoupon(){
		if($this->session->userdata('adminlogin')){
			$data=array(
				'main_view' => 'admin/managecoupon_view',
				'couponlist' => $this->admin_model->getallcoupondata(),
				'couponimage' => $this->admin_model->GetAllCouponImage()
				);
			$this->load->view('layout/admin_layout',$data);
		}
		else{
			redirect('admin','refresh');
		}
	}

	//This Function To Save New Coupon
	public function createcoupon(){
		if($this->session->userdata('adminlogin')){
			//Set Validation Rules
			$this->form_validation->set_rules('txtCoupon', 'Coupon Code', 'trim|required|regex_match[/^[a-zA-z0-9]');
			$this->form_validation->set_rules('txtCouponName', 'Coupon Person Name', 'trim|regex_match[/^[a-zA-z ]');
			$this->form_validation->set_rules('txtCouponEmail', 'Coupon Person Email', 'trim|regex_match[/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix]');
			$this->form_validation->set_rules('txtCouponPhone', 'Coupon Person Phone', 'trim|regex_match[((\+*)((0[ -]+)*|(91 )*)(\d{12}+|\d{10}+))|\d{5}([- ]*)\d{6}]');
			$this->form_validation->set_rules('txtCouponDiscount', 'Discount Amount', 'trim|required|regex_match[regex_match[/^[0-9]');
			$this->form_validation->set_rules('ddlDiscountType', 'Coupon Discount', 'trim|required|regex_match[/^[a-z]');

			if($this->form_validation->run()==FALSE){
				$this->session->set_flashdata('error_log',validation_errors());
				redirect('admin/managecoupon');
			}
			else{
				//Clean XSS Here
				$txtCoupon=$this->security->xss_clean($this->input->post('txtCoupon'));
				$txtCouponName=$this->security->xss_clean($this->input->post('txtCouponName'));
				$txtCouponEmail=$this->security->xss_clean($this->input->post('txtCouponEmail'));
				$txtCouponPhone=$this->security->xss_clean($this->input->post('txtCouponPhone'));
				$txtCouponDiscount=$this->security->xss_clean($this->input->post('txtCouponDiscount'));
				$ddlDiscountType=$this->security->xss_clean($this->input->post('ddlDiscountType'));

				if($this->admin_model->insertcoupon($txtCoupon,$txtCouponName,$txtCouponEmail,$txtCouponPhone,$txtCouponDiscount,$ddlDiscountType)){
					$this->session->set_flashdata('success_log','Coupon Code Create Successflly');
					redirect('admin/managecoupon');
				}
				else{
					$this->session->set_flashdata('error_log','Coupon Code Already Exist');
					redirect('admin/managecoupon');
				}
			}

		}
		else{
			redirect('admin');
		}
	}

	//This Function For Delete coupon Code
	public function deletecoupon($couponid){
		//xss_clean
		$id=$this->security->xss_clean($couponid);
		$this->admin_model->deletecouponcode($id);
		$this->session->set_flashdata('success_log','Coupon Code deleted Successflly');
		redirect('admin/managecoupon');
	}

	//This Function To Change Coupon Status
	public function changestatus($couponid,$status){
		$id=$this->security->xss_clean($couponid);
		$code=$this->security->xss_clean($status);
		$this->admin_model->changecouponstatusbyid($id,$code);
		$this->session->set_flashdata('success_log','Coupon Status changed Successflly');
		redirect('admin/managecoupon');
	}

	//This Function For Load Stopper View
	public function stopeers(){
		if($this->session->userdata('adminlogin')){
			$data=array(
				'main_view' => 'admin/stopper_view',
				'stopperlist' => $this->admin_model->stopperlist()
				);
			$this->load->view('layout/admin_layout',$data);
		}
		else{
			redirect('admin');
		}
	}

	//This Function To Insert stopper
	public function newstopper(){
		$this->form_validation->set_rules('txtBookName', 'Book name', 'trim|required|max_length[100]|xss_clean|regex_match[/^[a-zA-z0-9 ]');
		$this->form_validation->set_rules('txtBookDescriptiom', 'Book Description', 'trim|required');
		$this->form_validation->set_rules('fileImage', 'Image', 'trim|required');

		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error_log',validation_errors());
		}
		else{
			$config['upload_path'] = './assets/stopper/';
			$config['allowed_types'] = 'gif|jpg|png';

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('fileImage')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error_log',validation_errors());
				redirect('admin/stopeers');
			}
			else{
				$fileData=$this->upload->data();
				//Clean xss
				$txtBookName=$this->security->xss_clean($this->input->post('txtBookName'));
				$txtBookDescriptiom=$this->security->xss_clean($this->input->post('txtBookDescriptiom'));
				$imageName=$fileData['file_name'];

				//Insert Stopper
				$this->admin_model->newstopper($txtBookName,$txtBookDescriptiom,$imageName);

				$this->session->set_flashdata('success_log','Stoper Added Successfully');
				redirect('admin/stopeers');

			}

		}
	}

	//This Function To delete stopper
	public function deletestopper($stopperid){
		//Clean xss
		$id=$this->security->xss_clean($stopperid);
		//Delete Stopper Here
		$this->admin_model->deletestopperbyid($id);
		$this->session->set_flashdata('error_log','Stoper Deleted');
		redirect('admin/stopeers');
	}

	//This Function For Auther's Corner
	public function authorcorner(){
		if($this->session->userdata('adminlogin')){
			$data=array(
				'main_view' => 'admin/authercorner_view',
				'postdata' => $this->admin_model->GetPosts()
				);
			$this->load->view('layout/admin_layout', $data);
		}
		else{
			redirect('admin');
		}
	}

	//This Function For New Post
	public function newpost(){
		if($this->session->userdata('adminlogin')){

			$this->form_validation->set_rules('txtPostTitle', 'Post Tile', 'trim|required');
			$this->form_validation->set_rules('txtPostDescription', 'Post Description', 'trim|required');
			$this->form_validation->set_rules('txtAuthorDetails', 'Author Details', 'trim|required');
			$this->form_validation->set_rules('txtAuthorName', 'Author Name', 'trim|required');
			$this->form_validation->set_rules('txtGener', 'Gener', 'trim|required');
			// $this->form_validation->set_rules('filePostImage', 'Post Image', 'trim|required');
			// $this->form_validation->set_rules('fileAuthorImage', 'Author Image', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('error_log', validation_errors());
				redirect('admin/authorcorner');
			} else {
				//XSS Clean
				$txtPostTitle=$this->security->xss_clean($this->input->post('txtPostTitle'));
				$txtPostDescription=$this->security->xss_clean($this->input->post('txtPostDescription'));
				$txtAuthorDetails=$this->security->xss_clean($this->input->post('txtAuthorDetails'));
				$txtAuthorName=$this->security->xss_clean($this->input->post('txtAuthorName'));
				$txtGener=$this->security->xss_clean($this->input->post('txtGener'));

				//Upload Images Here
				$config['upload_path'] = './assets/Post/';
				$config['allowed_types'] = 'gif|jpg|png';

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('filePostImage') ){
					$error = array('error_log' => $this->upload->display_errors());
					redirect('admin/authorcorner','refresh');
				}
				else{
					$PostImageData=$this->upload->data();
					if ( ! $this->upload->do_upload('fileAuthorImage')){
						redirect('admin/authorcorner','refresh');
					}
					else{
						$AuthorImageData=$this->upload->data();
						$this->admin_model->authorPost($txtPostTitle,$txtPostDescription,$txtAuthorDetails,$PostImageData['file_name'],$AuthorImageData['file_name'],$txtGener,$txtAuthorName);
						$this->session->set_flashdata('success_log', 'Post Created Successfully');
						redirect('admin/authorcorner');
					}
				}
			}
		}
		else{
			redirect('admin');
		}
	}

	//This Function For Delete Post
	public function deletepost($postid,$postimage,$authorimage){
		$postid=$this->security->xss_clean($postid);
		$postimage=$this->security->xss_clean($postimage);
		$authorimage=$this->security->xss_clean($authorimage);

		//delete image here
		$this->admin_model->deletepost($postid,$postimage,$authorimage);

		$this->session->set_flashdata('success_log', 'Post Deleted Successfully');
		redirect('admin/authorcorner','refresh');
	}

	
	//This function For Load Cover Image View
	public function coverbooks(){
		if($this->session->userdata('adminlogin')){
			$data=array(
				'main_view' => 'admin/coverbookimage_view',
				'postdata' => $this->admin_model->GetCoverBooks()
				);
			$this->load->view('layout/admin_layout', $data);
		}
		else{
			redirect('admin');
		}
	}
	
	//This function To Add New Cover Books Image  In Landing 
	public function addcoverbooks(){
		if($this->input->post('btnSubmit') && !empty($_FILES['fileImage']['name'])){
			$filesCount = count($_FILES['fileImage']['name']);
			for($i = 0; $i < $filesCount; $i++){

				$_FILES['fileImages']['name'] = $_FILES['fileImage']['name'][$i];
				$_FILES['fileImages']['type'] = $_FILES['fileImage']['type'][$i];
				$_FILES['fileImages']['tmp_name'] = $_FILES['fileImage']['tmp_name'][$i];
				$_FILES['fileImages']['error'] = $_FILES['fileImage']['error'][$i];
				$_FILES['fileImages']['size'] = $_FILES['fileImage']['size'][$i];

				$uploadPath = './assets/coverbooks/';
				$config['upload_path'] = $uploadPath;
				$config['allowed_types'] = 'gif|jpg|png';

				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('fileImages')){
					$fileData = $this->upload->data();
                    //$uploadData[$i]['ImageName'] = $fileData['file_name'];
                    //$uploadData[$i]['Product_Id'] = $this->input->post('txtProductid');
					$this->admin_model->insertcoverbookimage($fileData['file_name']);
				}
			}

			$this->session->set_flashdata('success_log', 'cover image upload successfully');
			// $url='admin/productimage/'.$this->input->post('txtProductid');
			redirect('admin/coverbooks');
		}
	}

	//This Function To Delete Cover Books Image In Landing View
	public function deletecoverpost($imageid,$imagename){
		//Clean Xss
		$id=$this->security->xss_clean($imageid);
		$imagename=$this->security->xss_clean($imagename);

		//Delete cover image
		$this->admin_model->deletecoverbookbyid($imageid,$imagename);
		$this->session->set_flashdata('error_log', 'cover image deleted successfully');
			// $url='admin/productimage/'.$this->input->post('txtProductid');
			redirect('admin/coverbooks');
	}

	
	//This Function to load testimonial view
	public function testimonial(){
		if($this->session->userdata('adminlogin')){
			$data=array(
				'main_view' => 'admin/testimonial_view',
				'postdata' => $this->admin_model->GetTestimonial()
				);
			$this->load->view('layout/admin_layout', $data);
		}
		else{
			redirect('admin');
		}
	}


	//This function for create new testimonial
	public function inserttestimonial(){
		//Form Validation Rules
		$this->form_validation->set_rules('txtDay', 'Day', 'trim|required');
		$this->form_validation->set_rules('txtComment', 'Comment', 'trim|required');
		if (empty($_FILES['fileImage']['name']))
		{
		    $this->form_validation->set_rules('fileImage', 'File Image', 'required');
		}
		//run validation
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error_log', validation_errors());
			redirect('admin/testimonial');
		} else {
			//Clean xss
			$txtDay=$this->security->xss_clean($this->input->post('txtDay'));
			$txtComment=$this->security->xss_clean($this->input->post('txtComment'));

			//Upload Image Here
			$config['upload_path'] = './assets/testimonial';
			$config['allowed_types'] = 'gif|jpg|png';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('fileImage')){
				$this->session->set_flashdata('error_log', $this->upload->display_errors());
				redirect('admin/testimonial');
			}
			else{
				$fileData = $this->upload->data();
				$this->admin_model->insertnewtestimonial($txtDay,$txtComment,$fileData['file_name']);
				$this->session->set_flashdata('success_log', 'Testimonial Updated Successfully');
				redirect('admin/testimonial');
			}
		}
	}

	//This Function For Delete Testimonial
	public function deletetestimonail($tid,$image){
		//Clean xss
		$tid=$this->security->xss_clean($tid);
		$image=$this->security->xss_clean($image);

		$this->admin_model->deletetestimonial($tid,$image);
		$this->session->set_flashdata('error_log', 'Testimonial Deleted');
		redirect('admin/testimonial');
	}

	//This function to upload coupon
	public function uploadcoupon(){
		//From Validation
		if (empty($_FILES['fileCouponImage']['name']))
		{
		    $this->form_validation->set_rules('fileCouponImage', 'Coupon Image', 'required');
		}

		if ($this->form_validation->run() == TRUE or FALSE) {
			$this->session->set_flashdata('error_log', validation_errors);
			redirect('admin/managecoupon','refresh');
		} else {
			$config['upload_path'] = './assets/coupons/';
			$config['allowed_types'] = 'gif|jpg|png';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('fileCouponImage')){
				//$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error_log', $this->upload->display_errors());
				redirect('admin/managecoupon','refresh');
			}
			else{
				$fileData = $this->upload->data();
				$this->admin_model->SaveCouponImage($fileData['file_name']);
				$this->session->set_flashdata('success_log', 'Coupon Upload Successfully');
				redirect('admin/managecoupon','refresh');
			}
		}
	}

	//This Function To Delete coupon Image
	public function deletecouponimage($id,$image){
		$this->admin_model->deletecouponimage($id,$image);
		$this->session->set_flashdata('error_log', 'Coupon Image Deleted');
		redirect('admin/managecoupon','refresh');
	}
	
	//this functionto load coupon upload view
	// public function couponupload(){
	// 	if($this->session->userdata('adminlogin')){
	// 		$data=array(
	// 			'main_view' => 'admin/testimonial_view',
	// 			'postdata' => $this->admin_model->GetTestimonial()
	// 			);
	// 		$this->load->view('layout/admin_layout', $data);
	// 	}
	// 	else{
	// 		redirect('admin');
	// 	}
	// }

	//This function To Create Report
	public function ru 



}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
?>
