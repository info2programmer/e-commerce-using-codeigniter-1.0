<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {

	public function index()
	{
		// $data['stopperlist']=$this->home_model->stopper();
		$data=array(
			'stopperlist' => $this->home_model->stopper(),
			'coverimages' => $this->admin_model->GetCoverBooks() ,
			'testimonial' => $this->admin_model->GetTestimonial()
		);
		$this->load->view('home/landing_view',$data);
		//echo "Hii";
	}

}

/* End of file Welcome.php */
/* Location: ./application/controllers/Welcome.php */
