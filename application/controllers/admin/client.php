<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('client_model','client');
    $this->load->library('simpleAuth');
    // $this->output->enable_profiler(TRUE);
  }

  public function index()
  {
    $cekLogin = $this->simpleauth->cekBelumLogin();
    $data['result'] = $this->client->get_all();
    $this->load->view('admin/head');
    $this->load->view('admin/header');
    $this->load->view('admin/menu');
    $this->load->view('client/view_all',$data);
    $this->load->view('admin/footer');
  }

  public function input()
  {
    $cekLogin = $this->simpleauth->cekBelumLogin();
    $this->load->view('admin/head');
    $this->load->view('admin/header');
    $this->load->view('admin/menu');
    $this->load->view('client/input');
    $this->load->view('admin/footer');
  }

  public function edit($id_encrypt)
  {
    $id = $this->encrypt->decode($id_encrypt);
    $cekLogin = $this->simpleauth->cekBelumLogin();
    $data['rows'] = $this->client->get_by_id($id);
    $this->load->view('admin/head');
    $this->load->view('admin/header');
    $this->load->view('admin/menu');
    $this->load->view('client/edit',$data);
    $this->load->view('admin/footer');
  }

  public function view()
  {
    $id = $this->encrypt->decode($id_encrypt);
    $this->load->view('client/view');
  }

  public function save_data()
  {
    $this->form_validation->set_rules('judul', 'Title', 'required');
    // $this->form_validation->set_rules('client', 'Image client', 'required');
    if ($this->form_validation->run() == FALSE)
    {
      gagal(validation_errors());
      redirect('admin/client/input/');
    }
    else
    {
      $judul = $this->input->post('judul');
      $image = $this->input->post('image');
      $link = $this->input->post('link');
      $scope = $this->input->post('scope');
      $active = $this->input->post('active');
      $created = date("y-m-d");
      //upload gambar
        $config['upload_path'] = './client/';
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
          redirect('admin/client/input/');
        }

      $data = array('judul_client' =>$judul,'image' =>$image,'created_at' =>$created,'active_client' =>$active,
        'link' =>$link, 'scope'=>$scope);
      $update = $this->client->insert_data($data);
      if($update==TRUE){
          sukses('Data has Saved');
        }else{
          gagal('Data Failed to Save');
        }
        redirect('admin/client/input/');
    }
  }

  public function update_data($id_encrypt)
  {
    $id = $this->encrypt->decode($id_encrypt);
    $this->form_validation->set_rules('judul', 'Title', 'required');
    if ($this->form_validation->run() == FALSE)
    {
      gagal(validation_errors());
      redirect('admin/client/edit/'.$id_encrypt);
    }
    else
    {
      $judul = $this->input->post('judul');
      $image = $this->input->post('image');
      $image2 = $this->input->post('image2');
      $scope = $this->input->post('scope');
      $link = $this->input->post('link');
      $active = $this->input->post('active');
      //upload gambar
        $config['upload_path'] = './client/';
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
            redirect('admin/client/edit/'.$id_encrypt);
          }
        }else{
          $this->client->delete_img($id);
        }
      }

      $data = array('judul_client' =>$judul,'image' =>$image,'created_at' =>$created,'active_client' =>$active,
        'link' =>$link, 'scope'=>$scope);
      $update = $this->client->update($id,$data);
      if($update==TRUE){
          sukses('Data has Saved');
        }else{
          gagal('Data Failed to Save');
        }
        redirect('admin/client/edit/'.$id_encrypt);
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
         $data = array('active_client' => $aktif);
         $update = $this->client->update($idcheck,$data);
       }

       if($update){
        sukses("$msgsukes");
      }else{
        gagal("$msggagal");
      }
    }else{
      $id = $this->encrypt->decode($id);
      $data = array('active_client' => $aktif);
      $update = $this->client->update($id,$data);
      if($update){
        sukses("$msgsukes");
      }else{
        gagal("$msggagal");
      }
      redirect('admin/client/');
      }
  }

  public function delete_data($id)
  {
  if($id!='all')
   {
    $id = $this->encrypt->decode($id);
    $delete = $this->client->delete($id);
      if($delete){
        sukses("Data Has Deleted!");
      }else{
        gagal("Data Failed to Deleted!");
      }
      redirect('admin/client/');
   }
   else
   {
      $check = $this->input->post('checkid');
      $checkid = explode(',', $check);
      $jml = count($checkid);

       for($i=0; $i<=$jml-1;$i++){
         $idcheck = $this->encrypt->decode($checkid[$i]);
         $delete = $this->client->delete($idcheck);
       }
    if($delete){
      sukses("Data Has Deleted!");
    }else{
      gagal("Data Failed to Deleted!");
    }
   }
  }
}

/* End of file client.php */
/* Location: ./application/controllers/admin/client.php */
