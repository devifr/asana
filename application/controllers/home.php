<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('banner_slideshow_model','banner');
		$this->load->model('partner_model','partner');
    $this->load->model('content_model','content');
		$this->load->model('section_model','section');
    $this->load->model('config_website_model','config_website');
		$this->load->model('testimonial_model','testimonial');
		$this->load->library('breadcumb','breadcumb');
		$this->load->helper('language');
  	$this->load->helper('url');
  	$this->lang->load('home');
  	// $this->output->enable_profiler(TRUE);
	}

	public function index()
	{
		$bhs = $this->lang->lang();
    $data_banner['banners'] = $this->banner->get_all($bhs);
		$data_partner['partners'] = $this->partner->get_all($bhs);
    $data_sol_ser['rows'] = $this->content->get_all_by_kategori('1',$bhs);
    $data_section['section1'] = $this->section->get_by_alias('section1',$bhs)->row();
    $data_section['section2'] = $this->section->get_by_alias('section2',$bhs)->row();
    $data_section['section3'] = $this->section->get_by_alias('section3',$bhs)->row();
    $data_section['about_us'] = $this->content->get_by_alias('about-us',$bhs)->row();
    $data['about_us'] = $this->content->get_by_alias('about-us-footer',$bhs)->row();
    $data['vision'] = $this->content->get_by_alias('vision',$bhs)->row();
		$data['mission'] = $this->content->get_by_alias('mision',$bhs)->row();
    $data['config'] = $this->config_website->get_by_id('1')->row();
		// $data_content['latest_news'] = $this->content->get_all_by_kategori('2',$bhs,'5')->result();
		// $data_content['corporate_info'] = $this->content->get_all_by_kategori('3',$bhs,'5')->result();
		// $data_content['testimonial'] = $this->testimonial->get_all_limit('3');
    $this->load->view('shared/head');
		$this->load->view('shared/top_bar', $data);
		$this->load->view('shared/slider', $data_banner);
		$this->load->view('shared/section', $data_section);
		$this->load->view('shared/solutions_services', $data_sol_ser);
    $this->load->view('shared/section_partner', $data_partner);
		$this->load->view('shared/footer',$data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
