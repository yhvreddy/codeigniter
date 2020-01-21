<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'models/ModelDefault.php';
class GalleryModel extends ModelDefault{
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }

    public function gallerydata()
    {
        $gallerydata = $this->select_data('sceg_gallery',array('status'=>1),'updated DESC');
        return $gallerydata;
    }

    public function uplaodGalleryDetails($request)
    {
        extract($request);
        //$this->print_r($request);
        $insertdata = array('title'=>$Image_title,'image'=>$gallery['uploaddata'],'information'=>$Information);
        $insertbanners = $this->insert_data('sceg_gallery',$insertdata);
        if($insertbanners != 0){
            return array('response' => 1,'message'=>'Gallery details as successfully saved.','data'=>$insertbanners);
        }else{
            return array('response' => 0,'message'=>'Gallery details as failed to save.','data'=>$insertbanners);
        }
    }

    public function deleteGalleryData($request)
    {
        $gallerydetails = $this->galleryEditData($request);
        @unlink($gallerydetails[0]->image);
        $delete = $this->delete_data('sceg_gallery', array('id' => $request));
        if($delete != 0){
            return array('response' => 1, 'message' => 'Gallery details as successfully deleted.', 'data'=>$delete);
        }else{
            return array('response' => 0, 'message' => 'Gallery details as failed to delete.', 'data'=>$delete);
        }
    }

    public function galleryEditData($request)
    {
        $gallerydata = $this->select_data('sceg_gallery',array('id'=>$request),'updated DESC');
        return $gallerydata;
    }

    public function saveditdetails($request)
    {
        extract($request);
        $conduction = array('id'=>$edit_id);
		$insertdata = array('title'=>$Image_title,'image'=>$banners['uploaddata'],'information'=>$Information);
        $insertbanners = $this->update_data('sceg_gallery',$insertdata,$conduction);
        if($insertbanners != 0){
            return array('response' => 1,'message'=>'Gallery details as successfully updated.','data'=>$insertbanners);
        }else{
            return array('response' => 0,'message'=>'Gallery details as failed to update.','data'=>$insertbanners);
        }
    }
}
