<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'models/ModelDefault.php';

class AboutUsModel extends ModelDefault{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function aboutusDetails(){
    	return $this->select_data('sceg_about_us',array('status'=>1),'updated DESC',1);
	}

	public function saveAboutDetails($request){
    	//$this->print_r($request);
    	extract($request);
		$insertdata = array('title'=>$About_title,'image'=>$uploadstatus['uploaddata'],'information'=>$Information);
		$insertbanners = $this->insert_data('sceg_about_us',$insertdata);
		if($insertbanners != 0){
			return array('response' => 1,'message'=>'Aboutus details as successfully saved.','data'=>$insertbanners);
		}else{
			return array('response' => 0,'message'=>'Aboutus details as failed to save.','data'=>$insertbanners);
		}
	}

	public function aboutusDetail($request){
		return $this->select_data('sceg_about_us',array('id'=>$request),'updated DESC',1);
	}

	public function updateAboutDetails($request){
		extract($request);
		$insertdata = array('title' => $About_title,'image' => $uploadstatus['uploaddata'],'information' => $Information);
		$insertbanners = $this->update_data('sceg_about_us',$insertdata,array('id'=>$edit_id));
		if($insertbanners != 0){
			return array('response' => 1,'message'=>'Aboutus details as successfully saved.','data'=>$insertbanners);
		}else{
			return array('response' => 0,'message'=>'Aboutus details as failed to save.','data'=>$insertbanners);
		}
	}
	
	/*
	 * Why we choose
	 * */
	public function chooseData(){
		return $this->select_data('sceg_whychoose_us',array('status'=>1),'updated DESC');
	}

	public function chooseDataDetails($request){
		return $this->select_data('sceg_whychoose_us',array('id'=>$request),'updated DESC');
	}

	public function saveWhyChooseUs($request){
		extract($request);
		$uploadata = array('title' => $title_name,'image' => $uploadstatus['uploaddata'],'icons' => $icon_name,'information' => $Information);
		$insertdata = $this->insert_data('sceg_whychoose_us',$uploadata);
		if($insertdata != 0){
			return array('response' => 1,'message'=>'Why Choose Us details as successfully saved.','data'=>$insertdata);
		}else{
			return array('response' => 0,'message'=>'Why Choose Us details as failed to save.','data'=>$insertdata);
		}
	}

	public function deleteWhyChooseUsDetails($request){
		$deletedata = $this->delete_data('sceg_whychoose_us',array('id'=>$request));
		if($deletedata != 0){
			return array('response' => 1,'message'=>'Why Choose Us details as successfully Deleted.','data'=>$deletedata);
		}else{
			return array('response' => 0,'message'=>'Why Choose Us details as failed to delete.','data'=>$deletedata);
		}
	}

	function updateWhyWeChooseDetails($request){

		extract($request);
		$uploadata = array('title' => $title_name,'image' => $uploadstatus['uploaddata'],'icons' => $icon_name,'information' => $Information);
		$insertdata = $this->update_data('sceg_whychoose_us',$uploadata,array('id'=>$edit_id));
		if($insertdata != 0){
			return array('response' => 1,'message'=>'Why Choose Us details as successfully Updated.','data'=>$insertdata);
		}else{
			return array('response' => 0,'message'=>'Why Choose Us details as failed to update.','data'=>$insertdata);
		}
		
	}
}
