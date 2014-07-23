<?php

  function sukses($message = '')
  {
    $CI =& get_instance();
    return $CI->session->set_flashdata("msg", "<div class='sukses'> $message</div>");
  }

  function gagal($message = '')
  {
    $CI =& get_instance();
    return $CI->session->set_flashdata("msg", "<div class='gagal'> $message</div>");
  }

  function informasi($message = '')
  {
    $CI =& get_instance();
    return "<div class='informasi'> $message</div>";
  }

  function informasi_front($message = '')
  {
    $CI =& get_instance();
    return "<div class='informasi_front'> $message</div>";
  }

  function sukses_front($message = '')
  {
    $CI =& get_instance();
    return $CI->session->set_flashdata("msg", "<div class='container'><div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>$message</div></div>");
  }

  function gagal_front($message = '')
  {
    $CI =& get_instance();
    return $CI->session->set_flashdata("msg", "<div class='container'><div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>$message</div></div>");
  }

?>
