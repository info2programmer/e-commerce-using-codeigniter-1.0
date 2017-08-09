<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model {

	//validate username and password to database
	public function checkcredential($username,$password){
		//encrypt password
		$password=md5($password);
		//echo $password."<br/>".$username;
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$result=$this->db->get('tbl_adminlogin');
		if($result->num_rows()==1){
			return $result->row(0)->admin_id;
		}
		else{
			return false;
		}
	}

	//This function to insert new category
	public function insertcategory($categoryname,$description,$live){
		$object=array(
			'CategoryName' => $categoryname,
			'CategoryDescription' => $description,
			'CategoryActive' => $live
			);

		$this->db->insert('tbl_category', $object);
	}

	//This Function TO Get All Category
	public function viewcategorylist(){
		$query=$this->db->get('tbl_category');
		return $query->result();
	}

	//This function to get all category by product id
	public function viewallcategorybyproductid($product_id){
		$this->db->where('Product_Id',$product_id);
		$this->db->select('Product_Id,Category_Id,ProductName,categoryName');
		$this->db->from('tbl_product_category');
		$this->db->join('tbl_category', 'tbl_category.CategoryId=tbl_product_category.Category_Id');
		$this->db->join('tbl_products', 'tbl_products.ProductId=tbl_product_category.Product_Id');
		$query = $this->db->get();
		return $query->result();
	}

	//This section to change status of category
	public function changecategorystatus($id,$status){
		$this->db->where('CategoryId',$id);
		$object=array('CategoryActive' => $status);
		$this->db->update('tbl_category', $object);
	}

	//This Function To delete category
	public function deletecategory($id){
		$this->db->where('CategoryId',$id);
		$this->db->delete('tbl_category');
	}


	//This Function To Add New Publisher
	public function insertpublisher($txtPublisherName,$txtPublisherAddress,$txtPublisherPhone,$txtPublisherEmail,$chkPublisherActive){

		$object=array(
			'PublisherName' => $txtPublisherName,
			'PublisherAddress' => $txtPublisherAddress,
			'PublisherPhone' => $txtPublisherPhone,
			'PublisherEmail' => $txtPublisherEmail,
			'PublisherActive' => $chkPublisherActive
			);
		$this->db->insert('tbl_publishers', $object);
	}

	//This Function to get all publisher
	public function viewpublisherlist($id){
		if($id!=null)
			$this->db->where('PublisherId',$id);
		$query=$this->db->get('tbl_publishers');
		return $query->result();
	}


	//This Section to change status
	public function changepublisherstatus($id,$status){
		$this->db->where('PublisherId',$id)	;
		$object=array('PublisherActive' => $status);
		$this->db->update('tbl_publishers', $object);
	}

	//This Section to delete publisher
	public function deletepublisher($id){
		$this->db->where('PublisherId',$id);
		$this->db->delete('tbl_publishers');
	}


	//This section to insert product()
	//insertproduct($txtProductName,$txtProductSeries,$txtAuther,$txtstock,$txtRetailPrice,$txtSellingPrice,$txtDiscount,$txtLanguage,$txtISBN,$txtEdition,$txtPublishDate,$txtBinding,$txtNoPage,$txtDescription,$txtProductSKU,$ddlPublisher,$imageName,$chkProductLive,$chkPreorder,$txtSearchKey,$txtWeight,$category)

	public function insertproduct($txtProductName,$txtProductSeries,$txtAuther,$txtstock,$txtRetailPrice,$txtSellingPrice,$txtDiscount,$txtLanguage,$txtISBN,$txtEdition,$txtPublishDate,$txtBinding,$txtNoPage,$txtDescription,$txtProductSKU,$ddlPublisher,$imageName,$chkProductLive,$chkPreorder,$txtSearchKey,$txtWeight,$category,$homecategory){

		//echo var_export($category);
		// foreach ($category as $categories ) {
		// 	echo $categories."<br/>";
		// }

		$object=array(
			'ProductSKU' => $txtProductSKU,
			'ProductName'=> $txtProductName,
			'ProductAuther' => $txtAuther,
			'ProductStock' => $txtstock,
			'ProductRetailPrice' => $txtRetailPrice,
			'ProductSellingPrice' => $txtSellingPrice,
			'ProductDiscount' => $txtDiscount,
			'ProductLanguage' => $txtLanguage,
			'ProdutSeries' => $txtProductSeries,
			'ProductPublisher' => $ddlPublisher,
			'ProductISBN' =>  $txtISBN,
			'ProducEdition' => $txtEdition,
			'PublishDate' => $txtPublishDate,
			'ProductBinding' => $txtBinding,
			'ProductPages' => $txtNoPage,
			'ProductWeight'=> $txtWeight,
			'ProductThumbImage' => $imageName,
			'ProductDescription' => $txtDescription,
			'ProductLiveFlag' => $chkProductLive,
			'UploadedBy' => 'Admin',
			'UploadDateTime' => date("Y-m-d h:i:sa"),
			'ProductSearchKey' => $txtSearchKey
			);


		$this->db->insert('tbl_products', $object);
		$insert_id = $this->db->insert_id();//get product id here

		//Insert category here
		foreach ($category as $categories ) {
			//echo $categories."<br/>";
			$this->insertProductCategory($insert_id,$categories);
		}

		//Insert Home Category
		foreach ($homecategory as $home) {
			//homr
			$this->insertProductHome($insert_id,$home);
		}
	}


	//Insert Product Category
	private function insertProductCategory($productid,$categoryid){
		$object= array('Product_Id' => $productid, 'Category_Id' => $categoryid );
		$this->db->insert('tbl_Product_Category', $object);
	}



	//Insert Home showing Product Here
	private function insertProductHome($productid,$categoryid){
		$object= array('Product_Id' => $productid, 'Category_Id' => $categoryid );
		$this->db->insert('tbl_product_home', $object);
	}

	//This function to get all product home category
	public function viewhomeproductbyproductid($product_id){
		$this->db->where('Product_Id',$product_id);
		$this->db->select('Category_Id,categoryName');
		$this->db->from('tbl_product_home');
		$this->db->join('tbl_category', 'tbl_category.CategoryId=tbl_product_home.Category_Id');
		$query = $this->db->get();
		return $query->result();
	}

	//get all product
	public function viewallproduct($id){
		if($id!=null){
			$this->db->where('ProductId',$id);
		}
		$query=$this->db->get('tbl_products');
		return $query->result();
	}


	// this function to delete products
	public function deleteproduct($id,$image){

		try{
		//This For Home Product Delete
			$this->db->where('Product_Id',$id);
			$this->db->delete('tbl_product_home');

		//This for Category Delete
			$this->db->where('Product_Id',$id);
			$this->db->delete('tbl_product_category');

		//this for product delete
			$this->db->where('ProductId',$id);
			$this->db->delete('tbl_products');

		//Delete Image
			unlink("assets/productthumb/".$image);
		}
		catch(Exception $e)
		{
			$this->session->set_flashdata('error_log', $e);
			redirect('products');
		}
	}

	//this function insert images by peoduct id
	public function insertimagebyproductid($product_id,$imagename){
		$object=array(
			'ImageName'=>$imagename,
			'Product_Id' => $product_id
		);
		$this->db->insert('tbl_product_images', $object);
	}

	//get all product image
	public function getallproductimage($product_id){
		$this->db->where('Product_Id',$product_id);
		$this->db->select('ProductName,ProductSKU,ImageName,ImageID,Product_Id');
		$this->db->from('tbl_product_images');
		$this->db->join('tbl_products', 'tbl_product_images.Product_Id = tbl_products.ProductId');
		$query = $this->db->get();
		return $query->result();
	}

	//This function Delete Product Images
	public function deleteproductimagebyid($id,$imagename){
		$this->db->where('ImageID',$id);
		$this->db->delete('tbl_product_images');

		unlink("assets/singleproductimage/".$imagename);
	}


	//This function to edit product
	public function editproduct($txtProductName,$txtProductSeries,$txtAuther,$txtstock,$txtRetailPrice,$txtSellingPrice,$txtDiscount,$txtLanguage,$txtISBN,$txtEdition,$txtPublishDate,$txtBinding,$txtNoPage,$txtDescription,$txtProductSKU,$ddlPublisher,$chkProductLive,$chkPreorder,$txtSearchKey,$txtWeight,$category,$homecategory,$productID){

		//Update In Product Table
		$this->db->where('ProductId',$productID);
		$object=array(
			'ProductSKU' => $txtProductSKU,
			'ProductName'=> $txtProductName,
			'ProductAuther' => $txtAuther,
			'ProductStock' => $txtstock,
			'ProductRetailPrice' => $txtRetailPrice,
			'ProductSellingPrice' => $txtSellingPrice,
			'ProductDiscount' => $txtDiscount,
			'ProductLanguage' => $txtLanguage,
			'ProdutSeries' => $txtProductSeries,
			'ProductPublisher' => $ddlPublisher,
			'ProductISBN' =>  $txtISBN,
			'ProducEdition' => $txtEdition,
			'PublishDate' => $txtPublishDate,
			'ProductBinding' => $txtBinding,
			'ProductPages' => $txtNoPage,
			'ProductWeight'=> $txtWeight,
			'ProductDescription' => $txtDescription,
			'ProductLiveFlag' => $chkProductLive,
			'UploadedBy' => 'Admin',
			'UploadDateTime' => date("Y-m-d h:i:sa"),
			'ProductSearchKey' => $txtSearchKey
			);
		$this->db->update('tbl_products', $object);

		//Delete Category By Product_Id
		$this->deleteproductcategorybyproductId($productID);

		//Insert Product Category
		foreach ($category as $categories ) {
			//echo $categories."<br/>";
			$this->insertProductCategory($productID,$categories);
		}

		//Delete Home Category By Product_Id
		$this->deletehomecategorybyproductId($productID);

		//Insert Home Category
		foreach ($homecategory as $home) {
			//homr
			$this->insertProductHome($productID,$home);
		}
	}

	//This Function To Delete product category By Product Id
	private function deleteproductcategorybyproductId($product_id){
		$this->db->where('Product_Id',$product_id);
		$this->db->delete('tbl_product_category');
	}

	//This Function Delete Home Category By Product Id
	private function deletehomecategorybyproductId($product_id){
		$this->db->where('Product_Id',$product_id);
		$this->db->delete('tbl_product_home');
	}

	//This Function To Save Banner
	public function insertbanner($bannerName,$bannerurl){
		$object=array(
			'BannerImage' => $bannerName,
			'AddedBy' => 'Admin',
			'BannerURL' => $bannerurl,
			'Addtime' =>  date("Y-m-d h:i:sa")
		);
		$this->db->insert('tbl_banner', $object);
	}


	//This Function To Get All Banner
	public function viewallbanner(){

		$query=$this->db->get('tbl_banner');
		return $query->result();
	}

	//This Function To Delete Banner
	public function deletebanner($id,$image){
		$this->db->where('BannerId',$id);
		$this->db->delete('tbl_banner');
		unlink("assets/Banner/".$image);
	}


	//This Function To Insert COD Location
	public function insertcod($location,$pin){
		$object=array(
			'LocationName' => $location,
			'PinCode' => $pin
		);
		$this->db->insert('tbl_cod', $object);
	}

	//This function To GetAll COD List
	function viewallcodlist(){
		$query=$this->db->get('tbl_cod');
		return $query->result();
	}

	//this function delete
	public function deletecod($id){
		$this->db->where('LocationId', $id);
		$this->db->delete('tbl_cod');
	}

	//Insert Best Selling Books
	public function insertbestsellingbooks($books){
		foreach ($books as $book) {
			$book=$this->security->xss_clean($book);
			$array['Product_Id']=$book;
			$this->db->insert('tbl_bestseller', $array);
		}
	}

	//This function to get all Bestseller Books
	// SELECT SerialNo,ProductName
	// FROM tbl_bestseller
	// INNER JOIN tbl_products
	// ON tbl_products.ProductId=tbl_bestseller.ProductId

	public function getallbestseller(){
		$this->db->select('SerialNo,ProductName');
		$this->db->from('tbl_bestseller');
		$this->db->join('tbl_products', 'tbl_products.ProductId=tbl_bestseller.Product_Id', 'inner');
		$query=$this->db->get();
		return $query->result();
	}

	//Delete Best Selling Books
	public function deletebestsellingbooks($id){
		$this->db->where('SerialNo', $id);
		$this->db->delete('tbl_bestseller');
	}

	//This Function To get all  pending orders
	public function GetOrderByStatus($type){
		if($type!=""){
			$this->db->where('OrderStatus',	$type);
		}
		$this->db->order_by('OrderId', 'desc');
		$query=$this->db->get('tbl_order_summery');
		return $query->result();
	}

	//This function for confirm order
	public function confirmOrder($date,$orderID,$email){
		$this->db->where('OrderId', $orderID);
		$data=array(
			'OrderStatus' => 'Confirmed',
			'OrderTentativeDate' => $date
		);
		$this->db->update('tbl_order_summery', $data);
		$this->confirmhipment($orderID);
		$this->home_model->insertBivapoints($email,$orderID);
	}



	//This Function For Ready To ship Order
	public function Readytoship($id){
		$this->db->where('OrderId', $id);
		$data=array(
			'OrderStatus' => 'Readytoship'
		);
		$this->db->update('tbl_order_summery', $data);
		$this->readytoshipinshipment($id);
	}

	//This function To save data tn shipment Table
	private function readytoshipinshipment($orderid){
		$this->db->where('OrdId', $orderid);
		$data=array(
			'OrderPackDate' => date("Y-m-d")
		);
		$this->db->update('tbl_order_shipment', $data);
	}

	private function confirmhipment($orderid){
		$data=array(
			'OrdId' => $orderid
		);
		$this->db->insert('tbl_order_shipment', $data);
	}

	//This Function For Order Shipment By Order ID
	public function ordership($txtShipmentDate,$txtTrackingId,$ddlCuriar,$txtOrderId){
		//Update Order Summery Table
		$this->db->where('OrderId', $txtOrderId);
		$summeryData=array(
			'OrderStatus' => 'Shipped'
		);
		$this->db->update('tbl_order_summery', $summeryData);

		$url="";
		//Get Shipment COURUER
		switch ($ddlCuriar) {
			case "Aramex":
				$url="https://www.aramex.com/track/shipments/";
				break;

			case "DTDC":
				$url="http://www.dtdc.in/tracking/shipment-tracking.asp";
				break;

			case "Shree Maruti Courier":
				$url="http://www.shreemaruticourier.com/";
				break;

			case "Indian Post":
					$url="https://www.indiapost.gov.in/VAS/Pages/trackconsignment.aspx/";
					break;

			case "Trackon Courier":
					$url="http://trackoncourier.com/";
					break;

			case "Trackon Courier":
					$url="http://www.tpcindia.com/multiple-tracking.aspx";
					break;

			case "Biva Publication Self":
					$url="http://bivapublication.com/";
					break;

			default:
				$url="";
				break;
		}

		//Update Shipment Table
		$this->updateReadytoshipshipmen($txtOrderId,$txtShipmentDate,$ddlCuriar,$txtTrackingId,$url);
	}

	//This Function To Update Order Statement
	private function updateReadytoshipshipmen($txtOrderId,$txtShipmentDate,$ddlCuriar,$txtTrackingId,$url)
	{
		$this->db->where('OrdId', $txtOrderId);
		$shipmentData=array(
			'OrderShipmentDate' => $txtShipmentDate,
			'ShipmentCourier' => $ddlCuriar,
			'OrderTrackingId' => $txtTrackingId,
			'OrderTrackingURL' => $url
		);
		$this->db->update('tbl_order_shipment', $shipmentData);
	}

	//Get Shipment Data By Order Id
	public function getShipmentDataByOrderid($OrderId){
		$this->db->where('OrdId', $OrderId);
		$this->db->select('OrderTrackingId, ShipmentCourier');
		$query=$this->db->get('tbl_order_shipment');
		 echo "Tracking Id : ".$query->row(0)->OrderTrackingId." Tracking Courier Name : ".$query->row(0)->ShipmentCourier;
	}

	//This Finction For Deliver OrderId
	public function deliverorder($orderId,$deliverydate){
		$this->db->where('OrderId', $orderId);
		$data=array(
			'OrderStatus' => 'Delivered'
		);
		$this->db->update('tbl_order_summery', $data);

		$this->deliveredshipmentdate($orderId,$deliverydate);
	}

	//This funtion To Change Deliverd date to Shipment Table
	private function deliveredshipmentdate($orderId,$deliverydate){
		$this->db->where('OrdId', $orderId);
		$shipmentData=array(
			'OrderDeliveryDate' => $deliverydate
		);
		$this->db->update('tbl_order_shipment', $shipmentData);
	}

	//This Section For cancel order
	public function cancelorder($OrderId,$CancelReason){
		$this->db->where('OrderId', $OrderId);
		$data=array(
			'OrderCancelDate' => date("Y-m-d"),
			'OrderCancelReason' => $CancelReason,
			'OrderStatus' => 'Canceled'
		);
		$this->db->update('tbl_order_summery', $data);
	}

	//This Function For Insert coupon
	public function insertcoupon($txtCouponCode,$txtCouponName,$txtCouponEmail,$txtCouponPhone,$txtCouponDiscount,$ddlDiscountType){
		$this->db->where('CouponCode', $txtCouponCode);
		$query=$this->db->get('tbl_coupon');
		if($query->num_rows()>0){
			return false;
		}
		else{
			$data=array(
				'CouponCode' => $txtCouponCode,
				'CouponPersonName' => $txtCouponName,
				'CouponPersonEmail' => $txtCouponEmail,
				'CouponPersonPhone' => $txtCouponPhone,
				'CouponStatus' => '1',
				'CouponDiscount' => $txtCouponDiscount,
				'CouponType' => $ddlDiscountType
			);
			$this->db->insert('tbl_coupon', $data);
			return true;
		}
	}

	//This Function To Get All coupon
	public function getallcoupondata(){
		$query=$this->db->get('tbl_coupon');
		return $query->result();
	}

	//This Function For Delete coupon Code
	public function deletecouponcode($id){
		$this->db->where('CouponId', $id);
		$this->db->delete('tbl_coupon');
	}

	//This Function To Change coupon Status
	public function changecouponstatusbyid($couponcodeid,$status){
		$this->db->where('CouponId', $couponcodeid);
		$data['CouponStatus']=$status;
		$this->db->update('tbl_coupon', $data);
	}

	//this function to store stopper
	public function newstopper($txtBookName,$txtBookDescriptiom,$imageName){
		$data=array(
			'StoperBookName' => $txtBookName,
			'StoperBookDescription' => $txtBookDescriptiom,
			'StoperImage' => $imageName
		);
		$this->db->insert('tbl_stoppers', $data);
	}

	//This Function To Get Stopper List
	public function stopperlist(){
		$query=$this->db->get('tbl_stoppers');
		return $query->result();
	}

	//Delete Stopper
	public function deletestopperbyid($id){
		$this->db->where('StoperId', $id);
		$this->db->delete('tbl_stoppers');
	}

	//Create Author Post
	public function authorPost($txtPostTitle,$txtPostDescription,$txtAuthorDetails,$PostImage,$AuthorImage,$txtGener,$txtAuthorName){
		$object=array(
			'PostTitle' => $txtPostTitle,
			'Gener' => $txtGener,
			'AutherName' => $txtAuthorName,
			'PostDetails' => $txtPostDescription,
			'AuthorDescription' => $txtAuthorDetails,
			'PostImage' => $PostImage,
			'PostDateAndTime' => date('Y-m-d'),
			'AuthorImage' => $AuthorImage
		);
		$this->db->insert('tblauthorpost', $object);	
	}

	//This Function to Get Post By DATE DESC
	public function GetPosts(){
		$this->db->order_by('PostDateAndTime', 'desc');
		$query=$this->db->get('tblauthorpost');
		return $query->result();
	}

	//Get Pagination Post
	public function PaginationPost()
	{
		$this->db->order_by('PostDateAndTime', 'desc');
		$query=$this->db->get('tblauthorpost','3',$this->uri->segment(3));
		return $query->result();
	}

	//This Function To Delete Post
	public function deletepost($id,$postimage,$authorimage){
		$this->db->where('Id',$id);
		$this->db->delete('tblauthorpost');
		unlink("assets/Post/".$postimage);
		unlink("assets/Post/".$authorimage);
	} 

	//This Function To Save Cover Book Data To Database
	public function insertcoverbookimage($coverbookname){
		$object=array(
			'coverbook' => $coverbookname
		);
		$this->db->insert('tbl_coverbookimage', $object);
	}

	//This Function to Get all book data
	public function GetCoverBooks(){
		$query=$this->db->get('tbl_coverbookimage');
		return $query->result();
	}

	//This Function To Delete Cover Book Image
	public function deletecoverbookbyid($id,$image){
		$this->db->where('id', $id);
		$this->db->delete('tbl_coverbookimage');
		unlink("assets/coverbooks/".$image);
	}

	//This Function To Insert Testimonial 
	public function insertnewtestimonial($day,$comment,$image){
		$object=array(
			'day' => $day,
			'comment' => $comment,
			'image' => $image
		);
		$this->db->insert('tbl_testimonial', $object);
	}

	//This function to delete testimonial
	public function deletetestimonial($id,$image){
		$this->db->where('Id', $id);
		$this->db->delete('tbl_testimonial');
		unlink("assets/testimonial/".$image);
	}

	//this function to get all testimonial
	public function GetTestimonial(){
		$query=$this->db->get('tbl_testimonial');
		return $query->result();
	}

	//This Function To Save Coupon Image in Database
	public function SaveCouponImage($couponImage){
		$object['Image'] = $couponImage;
		$this->db->insert('tbl_couponimage', $object);
	}

	//This Function To Get All Coupon Image
	public function GetAllCouponImage(){
		$query = $this->db->get('tbl_couponimage');
		return $query->result();
	}

	//This Function To Delete coupon image
	public function deletecouponimage($id,$image){
		$this->db->where('Id', $id);
		$this->db->delete('tbl_couponimage');
		unlink("assets/coupons/".$image);
	}

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */

?>
