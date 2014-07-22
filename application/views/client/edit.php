 <div id="wrapper">

  <div id="rightContent">
  <div id="navigasi">
    <table width="100%" border="0">
      <tr>
        <td width="70%">&nbsp;</td>
        <td width="6%"><div align="center"><a href="<?php echo base_url('admin/client/');?>"><img src="<?php echo base_url('asset/images/admin/img/close.png');?>" width="40"></a></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center" id="blue">Close</div></td>
      </tr>
    </table>
  </div>
  <?php
  echo $this->session->flashdata('msg'); ?>
  <div id="tbl" style="float:left;">
  <h3>Form</h3>
   <?php if($rows->num_rows()>0){
    $row = $rows->row();
    $id = $this->encrypt->encode($row->id_client);
  ?>
  <div id="content_left">
  <form id="client" method="post" name="client" action="<?php echo base_url('index.php/admin/client/update_data/'.$id); ?>" enctype="multipart/form-data">
    <table width="95%">
      <tr><td><b>Title Client</b></td><td><input type="text" name="judul" value="<?php echo $row->judul_client ?>" /></td></tr>
      <tr><td><b>Image Client</b></td><td><input type="file" name="image" /><input type="hidden" name="image2" value="<?php echo $row->image; ?>" />
        </td></tr>
      <tr><td><b>Scope</b></td><td><input type="text" name="scope" value="<?php echo $row->scope; ?>" /></td></tr>
      <tr><td><b>Link Client</b></td><td><input type="text" name="link" value="<?php echo $row->link ?>" /></td></tr>
      <tr><td><b>Active</b></td><td>
        <select name='active'>
          <option value='1'>Yes</option>
          <option value='0' <?php if($row->active_client == '0') echo 'selected=selected' ?>>No</option>
        </select>
      </td></tr>
      <tr><td></td><td><input type="submit" class="button" value="Save">
      <input type="reset" class="button" value="Reset">
      </td></tr>
    </table>
  </form>
  </div>

  <div id="content_right">
    <div id="smallRight">
      <h3>Detail </h3>
      <table style="border: none;font-size: 12px;color: #5b5b5b;width: 100%;margin: 10px 0 10px 0;">
        <tr><td style="border: none;padding: 4px;"><p>No Description</p></td></tr>
      </table>
    </div>
  </div>
  <?php } else { echo informasi('Data Tidak Ada!'); } ?>

</div>
</div>
