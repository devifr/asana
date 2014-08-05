<!DOCTYPE html>
<html class="no-js">
<head>
  <title>
  <?php
   if($this->uri->segment(5)!='') { echo ucwords(str_replace('_', ' ', $this->uri->segment(5))); }
   else if($this->uri->segment(4)!='') { echo ucwords(str_replace('_', ' ', $this->uri->segment(4))); }
   else if($this->uri->segment(3)!='') { echo ucwords(str_replace('_', ' ', $this->uri->segment(3))); }
   else if($this->uri->segment(2)!='') { echo ucwords(str_replace('_', ' ', $this->uri->segment(2))); }
   else { echo " Home "; }
  ?>
  || PT.ARSANA JAYA UTAMA
  </title>
  <meta charset="utf-8">
  <?php $this->load->model('config_website_model','config_website'); ?>
  <?php $bhs = $this->lang->lang(); ?>
  <?php $config = $this->config_website->get_by_id('1', $bhs)->row(); ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $config->meta_description ; ?>">
  <meta name="author" content="<?php echo $config->website_name; ?>">
  <link rel="shortcut icon" href="<?php echo images_url('favicon.png'); ?>">
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
  <!-- Bootstrap core CSS -->
  <link href="<?php echo css_url('frontend/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
  <!-- Custom CSS -->
  <link href="<?php echo css_url('frontend/animate.css'); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo css_url('frontend/jquery.mCustomScrollbar.css'); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo css_url('frontend/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo css_url('frontend/colorbox-skins/4/colorbox.css') ?>" type="text/css">
  <link href="<?php echo css_url('frontend/main.css'); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo css_url('frontend/header/h1.css'); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo css_url('frontend/responsive.css'); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo css_url('frontend/color1.css'); ?>" rel="stylesheet" type="text/css" id="envor-site-color">
  <link href="<?php echo css_url('frontend/rivathemes.css'); ?>" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo css_url('frontend/layerslider/css/layerslider.css'); ?>" type="text/css">
  <script src="<?php echo js_url('frontend/vendor/modernizr-2.6.2-respond-1.1.0.min.js'); ?>"></script>
</head>
<body>
