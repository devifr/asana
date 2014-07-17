<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_partner extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('client_model','client');
    $this->load->model('partner_model','partner');
    $this->load->model('banner_slideshow_model','banner');
    $this->load->helper('language');
    $this->load->helper('url');
    // $this->output->enable_profiler(TRUE);
  }

  public function index()
  {
    $bhs = $this->lang->lang();
    $data_banner['banners'] = $this->banner->get_all($bhs);
    $data['client'] = $this->client->get_all();
    $data['partner'] = $this->partner->get_all();
    $this->load->view('home/head');
    $this->load->view('home/header');
    $this->load->view('home/menu');
    $this->load->view('home/banner',$data_banner);
    $this->load->view('client_partner/index',$data);
    $this->load->view('home/footer');
  }

}
/* End of file about_us.php */
/* Location: ./application/controllers/about_us.php */
