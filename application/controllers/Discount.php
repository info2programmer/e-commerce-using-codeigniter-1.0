<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class discount extends CI_Controller {

	public function index($email,$key)
	{
		// $email=$this->security->xss_clean($email);
		// $key=$this->security->xss_clean($key);

		// echo "string";
		$this->db->where('ReferedTo', $email);
		$this->db->where('UniqueKey', $key);
		$query=$this->db->get('tbl_bvpoint_data');
		if($query->num_rows()==1){
			$array = array(
				'referaldiscount' => 5,
				'referemail' => $email,
				'referkey' => $key
			);
			
			$this->session->set_userdata( $array );
			//echo $this->session->userdata('referaldiscount');
			redirect('home/buybooks/','refresh');
		}
		else{
			redirect('home','refresh');
		}
	}

	

}

/* End of file discount.php */
/* Location: ./application/controllers/discount.php */

?>