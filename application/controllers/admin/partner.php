<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partner extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('partner_model','partner');
    $this->load->library('simpleAuth');
    // $this->output->enable_profiler(TRUE);
  }

  public function index()
  {
    $cekLogin = $this->simpleauth->cekBelumLogin();
    $data['result'] = $this->partner->get_all();
    $this->load->view('admin/head');
    $this->load->view('admin/header');
    $this->load->view('admin/menu');
    $this->load->view('partner/view_all',$data);
    $this->load->view('admin/footer');
  }

  public function input()
  {
    $cekLogin = $this->simpleauth->cekBelumLogin();
    $this->load->view('admin/head');
    $this->load->view('admin/header');
    $this->load->view('admin/menu');
    $this->load->view('partner/input');
    $this->load->view('admin/footer');
  }

  public function edit($id_encrypt)
  {
    $id = $this->encrypt->decode($id_encrypt);
    $cekLogin = $this->simpleauth->cekBelumLogin();
    $data['rows'] = $this->partner->get_by_id($id);
    $this->load->view('admin/head');
    $this->load->view('admin/header');
    $this->load->view('admin/menu');
    $this->load->view('partner/edit',$data);
    $this->load->view('admin/footer');
  }

  public function view()
  {
    $id = $this->encrypt->decode($id_encrypt);
    $this->load->view('partner/view');
  }

  public function save_data()
  {
    $this->form_validation->set_rules('judul', 'Title', 'required');
    // $this->form_validation->set_rules('partner', 'Image partner', 'required');
    if ($this->form_validation->run() == FALSE)
    {
      gagal(validation_errors());
      redirect('admin/partner/input/');
    }
    else
    {
      $judul = $this->input->post('judul');
      $image = $this->input->post('image');
      $link = $this->input->post('link');
      $description = $this->input->post('description');
      $active = $this->input->post('active');
      $created = date("y-m-d");
      //upload gambar
        $config['upload_path'] = './partner/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '10240';
        $config['max_width'] = '2400';
        $config['max_height'] = '2400';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $upload1 = $this->upload->do_upload('image');
        $file1 = $this->upload->data();
        $image = $file1['file_name'];
        if (!$upload1)
        {
          gagal($this->upload->display_errors());
          redirect('admin/partner/input/');
        }

      $data = array('judul_partner' =>$judul,'image' =>$image,'created_at' =>$created,'active_partner' =>$active,
        'link' =>$link, 'description' => $description);
      $update = $this->partner->insert_data($data);
      if($update==TRUE){
          sukses('Data has Saved');
        }else{
          gagal('Data Failed to Save');
        }
        redirect('admin/partner/input/');
    }
  }

  public function update_data($id_encrypt)
  {
    $id = $this->encrypt->decode($id_encrypt);
    $this->form_validation->set_rules('judul', 'Title', 'required');
    if ($this->form_validation->run() == FALSE)
    {
      gagal(validation_errors());
      redirect('admin/partner/edit/'.$id_encrypt);
    }
    else
    {
      $judul = $this->input->post('judul');
      $image = $this->input->post('image');
      $image2 = $this->input->post('image2');
      $link = $this->input->post('link');
      $description = $this->input->post('description');
      $active = $this->input->post('active');
      $created = date("y-m-d");

      //upload gambar
        $config['upload_path'] = './partner/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '10240';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $upload1 = $this->upload->do_upload('image');
        $file1 = $this->upload->data();
        $image = $file1['file_name'];
        if (!$upload1)
        {
          if ($image=='') {
            $image = $image2;
          }else{
            gagal($this->upload->display_errors());
            redirect('admin/partner/edit/'.$id_encrypt);
          }
        }else{
          $this->partner->delete_img($id);
        }
      }

      $data = array('judul_partner' =>$judul,'image' =>$image,'created_at' =>$created,'active_partner' =>$active,
        'link' =>$link, 'description' => $description);
      $update = $this->partner->update($id,$data);
      if($update==TRUE){
          sukses('Data has Saved');
        }else{
          gagal('Data Failed to Save');
        }
        redirect('admin/partner/edit/'.$id_encrypt);
    }

public function publish($ket,$id='')
  {

    if($ket=='yes'){
      $aktif = '1';
      $msgsukes = "Data Has Published";
      $msggagal = "Data Failed to Published";
    }else{
      $aktif = '0';
      $msgsukes = "Data Has Unpublished";
      $msggagal = "Data Failed to Unpublished";
    }

    if($id==''){
      $check = $this->input->post('checkid');
      $checkid = explode(',', $check);
      $jml = count($checkid);

       for($i=0; $i<=$jml-1;$i++){
         $idcheck = $this->encrypt->decode($checkid[$i]);
         $data = array('active_partner' => $aktif);
         $update = $this->partner->update($idcheck,$data);
       }

       if($update){
        sukses("$msgsukes");
      }else{
        gagal("$msggagal");
      }
    }else{
      $id = $this->encrypt->decode($id);
      $data = array('active_partner' => $aktif);
      $update = $this->partner->update($id,$data);
      if($update){
        sukses("$msgsukes");
      }else{
        gagal("$msggagal");
      }
      redirect('admin/partner/');
      }
  }

  public function delete_data($id)
  {
  if($id!='all')
   {
    $id = $this->encrypt->decode($id);
    $delete = $this->partner->delete($id);
      if($delete){
        sukses("Data Has Deleted!");
      }else{
        gagal("Data Failed to Deleted!");
      }
      redirect('admin/partner/');
   }
   else
   {
      $check = $this->input->post('checkid');
      $checkid = explode(',', $check);
      $jml = count($checkid);

       for($i=0; $i<=$jml-1;$i++){
         $idcheck = $this->encrypt->decode($checkid[$i]);
         $delete = $this->partner->delete($idcheck);
       }
    if($delete){
      sukses("Data Has Deleted!");
    }else{
      gagal("Data Failed to Deleted!");
    }
   }
  }
}

/* End of file partner.php */
/* Location: ./application/controllers/admin/partner.php */
