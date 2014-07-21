<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_us extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('content_model','content');
    $this->load->model('config_website_model','config_website');
    $this->load->model('contact_us_model','contact');
    $this->load->library('breadcumb','breadcumb');
    $this->load->helper('language');
    $this->load->helper('url');
    $this->lang->load('home');
    // $this->output->enable_profiler(TRUE);
  }

  public function index()
  {
    $bhs = $this->lang->lang();
    $data_content['content'] = $this->content->get_by_alias('contact-us-page',$bhs)->row();
    $data_content['config'] = $this->config_website->get_by_id('1', $bhs)->row();
    $data['about_us'] = $this->content->get_by_alias('about-us',$bhs)->row();
    $data['vision'] = $this->content->get_by_alias('vision',$bhs)->row();
    $data['mission'] = $this->content->get_by_alias('mision',$bhs)->row();
    $data['config'] = $this->config_website->get_by_id('1', $bhs)->row();
    $this->load->view('shared/head');
    $this->load->view('shared/top_bar', $data);
    $this->load->view('contact_us/contact_us', $data_content);
    $this->load->view('shared/footer', $data);
  }

  public function save_data()
  {
      $bhs = $this->lang->lang();
      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('subject', 'Subject', 'required');
      $this->form_validation->set_rules('description', 'Description', 'required');

      if ($this->form_validation->run() == FALSE)
      {
        gagal_front(validation_errors());
        redirect("$bhs/contact_us/");
      }
      else
      {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $description = $this->input->post('description');
        $created_at = date('Y-m-d');
        $data = array('nama_pengirim'=>$name,'email_pengirim' => $email,'judul_contact' => $subject,
            'description_contact' => $description, 'date_post' => $created_at);
        $simpan = $this->contact->insert_data($data);
        if($simpan==TRUE){
          sukses_front('Thanks, We Will Reply Your Post');
        }else{
          gagal_front('Something Wrong');
        }
        redirect("$bhs/contact_us/");
      }
  }

}

/* End of file career.php */
/* Location: ./application/controllers/career.php */
