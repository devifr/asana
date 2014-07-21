<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Section extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('section_model','section');
    $this->load->model('bahasa_model','bahasa');
    $this->load->library('simpleAuth');
  }
  public function index()
  {
    $cekLogin = $this->simpleauth->cekBelumLogin();
    $data['result'] = $this->section->get_all();
    $this->load->view('admin/head');
    $this->load->view('admin/header');
    $this->load->view('admin/menu');
    $this->load->view('section/view_all',$data);
    $this->load->view('admin/footer');
  }

  public function edit($id_encrypt)
  {
    $cekLogin = $this->simpleauth->cekBelumLogin();
    $id = $this->encrypt->decode($id_encrypt);
    $data['bahasa'] = $this->bahasa->get_all()->result();
    $data['rows'] = $this->section->get_by_id($id);
    $this->load->view('admin/head');
    $this->load->view('admin/header');
    $this->load->view('admin/menu');
    $this->load->view('section/edit',$data);
    $this->load->view('admin/footer');
  }

  public function update_data($id_encrypt)
  {
      $cekLogin = $this->simpleauth->cekBelumLogin();
      $id = $this->encrypt->decode($id_encrypt);
      $this->form_validation->set_rules('title', 'Category Name', 'required');
      $this->form_validation->set_rules('description', 'Description', 'required');
      $this->form_validation->set_rules('bahasa', 'Language', 'required');

      if ($this->form_validation->run() == FALSE)
      {
        gagal(validation_errors());
        redirect('admin/section/edit/'.$id_encrypt);
      }
      else
      {
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $bahasa = $this->input->post('bahasa');
        $data = array('title' => $title ,'description' => $description, 'bahasa_id' => $bahasa);
        $simpan = $this->section->update($id, $data);
        if($simpan==TRUE){
          sukses('Section has Saved');
        }else{
          gagal('Section Failed to Save');
        }
        redirect('admin/section/edit/'.$id_encrypt);
      }
  }

}

/* End of file menu.php */
/* Location: ./application/controllers/menu.php */
