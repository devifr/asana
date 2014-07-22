<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('content_model','content');
    $this->load->model('partner_model','partner');
    $this->load->model('client_model','client');
    $this->load->model('config_website_model','config_website');
    $this->load->helper('language');
    $this->load->helper('url');
    $this->lang->load('home');
    // $this->output->enable_profiler(TRUE);
  }

  public function about_us()
  {
    $bhs = $this->lang->lang();
    $data_content['rows'] = $this->content->get_by_alias('about-us',$bhs);
    $data['about_us'] = $this->content->get_by_alias('about-us-footer',$bhs)->row();
    $data['vision'] = $this->content->get_by_alias('vision',$bhs)->row();
    $data['mission'] = $this->content->get_by_alias('mision',$bhs)->row();
    $data['config'] = $this->config_website->get_by_id('1', $bhs)->row();
    $data_partner['partners'] = $this->partner->get_all($bhs);
    $data_sol_ser['rows'] = $this->content->get_all_by_kategori('1',$bhs);
    $this->load->view('shared/head');
    $this->load->view('shared/top_bar', $data);
    $this->load->view('page/show',$data_content);
    $this->load->view('shared/solutions_services',$data_sol_ser);
    $this->load->view('shared/footer', $data);
  }

  public function solution()
  {
    $bhs = $this->lang->lang();
    $data_content['rows'] = $this->content->get_by_alias('solution',$bhs);
    $data_client['clients'] = $this->client->get_all_active()->result();
    $data['about_us'] = $this->content->get_by_alias('about-us-footer',$bhs)->row();
    $data['vision'] = $this->content->get_by_alias('vision',$bhs)->row();
    $data['mission'] = $this->content->get_by_alias('mision',$bhs)->row();
    $data['config'] = $this->config_website->get_by_id('1')->row();
    $data_partner['partners'] = $this->partner->get_all($bhs);
    $this->load->view('shared/head');
    $this->load->view('shared/top_bar', $data);
    $this->load->view('page/show',$data_content);
    $this->load->view('shared/clients', $data_client);
    $this->load->view('shared/footer', $data);
  }

  public function service()
  {
    $bhs = $this->lang->lang();
    $data_content['rows'] = $this->content->get_by_alias('service',$bhs);
    $data_client['clients'] = $this->client->get_all_active()->result();
    $data['about_us'] = $this->content->get_by_alias('about-us-footer',$bhs)->row();
    $data['vision'] = $this->content->get_by_alias('vision',$bhs)->row();
    $data['mission'] = $this->content->get_by_alias('mision',$bhs)->row();
    $data['config'] = $this->config_website->get_by_id('1')->row();
    $data_partner['partners'] = $this->partner->get_all($bhs);
    $this->load->view('shared/head');
    $this->load->view('shared/top_bar', $data);
    $this->load->view('page/show',$data_content);
    $this->load->view('shared/clients', $data_client);
    $this->load->view('shared/footer', $data);
  }

}
/* End of file about_us.php */
/* Location: ./application/controllers/about_us.php */
