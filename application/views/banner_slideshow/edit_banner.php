 <div id="">
  <div id="rightContent">
  <div id="navigasi">
    <table width="100%" border="0">
      <tr>
        <td width="70%">&nbsp;</td>
        <td width="6%"><div align="center"><a href="<?php echo base_url('admin/banner_slideshow/');?>"><img src="<?php echo base_url('asset/images/admin/img/close.png');?>" width="40"></a></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center" id="blue">Close</div></td>
      </tr>
    </table>
  </div>
  <?php
  echo $this->session->flashdata('msg');
  if($rows->num_rows()>0){
    $row = $rows->row();
    $id = $this->encrypt->encode($row->id_banner_slide);
  ?>
  <div id="tbl" style="float:left;">
  <h3>Insert Banner</h3>
  <div id="content_left">
  <form id="banner" method="post" name="banner" action="<?php echo base_url('admin/banner_slideshow/update_data/'.$id); ?>" enctype="multipart/form-data">
    <table width="95%">
      <tr><td><b>Title</b></td><td>
        <input type="text" name="title" id="title" value="<?php echo $row->title_banner_slide; ?>">
      </td></tr>
      <tr><td><b>Banner</b></td><td>
        <input type="file" name="banner" id="banner">
        <input type="hidden" name="banner2" class="sedang" value="<?php echo $row->banner_slide_name; ?>">
      </td></tr>
      <tr><td><b>Language</b></td><td>
        <select name='bahasa'>
          <?php foreach ($bahasa as $key => $bhs) {
          echo "<option value='$bhs->id_bahasa'  "; if($row->bahasa_id == $bhs->id_bahasa) echo "selected=selected"; echo ">$bhs->nama_bahasa</option>";
          } ?>
        </select></td></tr>
<!--       <tr><td><b>Tag</b></td><td>
        <input type="text" name="tag_banner" id="tag" value="<?php echo $row->tag_banner; ?>">
      </td></tr> -->
      <tr><td><b>Description</b></td><td>
        <textarea name="description" id="description"><?php echo $row->description_banner; ?></textarea>
      </td></tr>
      <tr><td><b>Active</b></td><td>
        <select name='active'>
          <option value='1'>Yes</option>
          <option value='0' <?php if($row->active_banner_slide == '0') echo 'selected=selected' ?>>No</option>
        </select>
      </td></tr>
      <tr><td></td><td><input type="submit" class="button" value="Save">
      <input type="reset" class="button" value="Reset">
      </td></tr>
      <tr><td></td><td> <br><br>
      </td></tr>
      <?php
      // if($rows->num_rows() > 0){
      ?>
      <!-- <tr><td><b>Current Background</b></td><td><img src="<?php echo base_url()."asset/images/web/banner/".$row->banner_name; ?>" height="100px" width="100px" /></td></tr> -->
      <?php // } ?>
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
