<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Movie extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->helper(array('url','html','form'));
  }

  public function index() {
    $this->load->view('movie');
  }

  public function add_video(){
    if (isset($_FILES['video']['name']) && $_FILES['video']['name'] != '') {
        unset($config);
        $date = date("ymd");
        $configVideo['upload_path'] = './video';
        $configVideo['max_size'] = '60000';
        $configVideo['allowed_types'] = 'avi|flv|wmv|mp3|mp4';
        $configVideo['overwrite'] = FALSE;
        $configVideo['remove_spaces'] = TRUE;
        $video_name = $date.$_FILES['video']['name'];
        $configVideo['file_name'] = $video_name;

        $this->load->library('upload', $configVideo);
        $this->upload->initialize($configVideo);
        if(!$this->upload->do_upload('video')) {
            echo $this->upload->display_errors();
        }else{
            $videoDetails = $this->upload->data();
            $data['video_name']= $configVideo['file_name'];
            $data['video_detail'] = $videoDetails;
            $this->load->view('movie/show', $data);
        }
        
    }else{
        echo "Please select a file";
    }
  }


}