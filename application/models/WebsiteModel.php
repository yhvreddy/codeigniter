<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include 'ModelDefault.php';
class WebsiteModel extends ModelDefault{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getBanners(){
        $data = $this->select_data('sceg_banners',array('status'=>1),'id DESC',3);
        return $data;
    }

    public function getSitedetails(){
		$data = $this->select_data('sceg_site_details',array('status'=>1),'id DESC',1);
		return $data[0];
	}

    public function getAboutDetails(){
        $data = $this->select_data('sceg_about_us',array('status'=>1),'id DESC',1);
        return $data;
    }

    public function getProjects($limit){
        $data = $this->select_data('sceg_projects',array('status'=>1),'id DESC',$limit);
        return $data;
    }

	public function getGallery($limit){
		$data = $this->select_data('sceg_gallery',array('status'=>1),'id DESC',$limit);
		return $data;
	}

    public function getBlog($limit){
        $data = $this->select_data('sceg_blog',array('status'=>1),'id DESC',$limit);
        return $data;
    }

	public function getBlogDetails($id){
		$data = $this->select_data('sceg_blog',array('id'=>$id),'id DESC');
		return $data;
	}

    public function getWhychoose(){
        $data = $this->select_data('sceg_whychoose_us',array('status'=>1),'id DESC');
        return $data;
    }

    function saveContactdetails($request){
    	$insert = $this->insert_data('sceg_feedback_contact',$request);
    	return $insert;
	}

}
