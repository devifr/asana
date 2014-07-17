<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('content_model','content');
    $this->load->model('banner_slideshow_model','banner');
    $this->load->helper('language');
    $this->load->helper('url');
    // $this->output->enable_profiler(TRUE);
  }

  public function about_us()
  {
    $bhs = $this->lang->lang();
    $data_banner['banners'] = $this->banner->get_all($bhs);
    $data_content['rows'] = $this->content->get_by_alias('about-us');
    $this->load->view('home/head');
    $this->load->view('home/header');
    $this->load->view('home/menu');
    $this->load->view('home/banner',$data_banner);
    $this->load->view('page/show',$data_content);
    $this->load->view('home/footer');
  }

  public function solution()
  {
    $bhs = $this->lang->lang();
    $data_banner['banners'] = $this->banner->get_all($bhs);
    $data_content['rows'] = $this->content->get_by_alias('solution');
    $this->load->view('home/head');
    $this->load->view('home/header');
    $this->load->view('home/menu');
    $this->load->view('home/banner',$data_banner);
    $this->load->view('page/show',$data_content);
    $this->load->view('home/footer');
  }

  public function service()
  {
    $bhs = $this->lang->lang();
    $data_banner['banners'] = $this->banner->get_all($bhs);
    $data_content['rows'] = $this->content->get_by_alias('service');
    $this->load->view('home/head');
    $this->load->view('home/header');
    $this->load->view('home/menu');
    $this->load->view('home/banner',$data_banner);
    $this->load->view('page/show',$data_content);
    $this->load->view('home/footer');
  }

}
/* End of file about_us.php */
/* Location: ./application/controllers/about_us.php */
