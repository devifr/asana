 <div id="">
  <div id="rightContent">
  <div id="navigasi">
    <table width="100%" border="0">
      <tr>
        <td width="70%">&nbsp;</td>
        <td width="6%"><div align="center"><a href="<?php echo base_url('admin/section/');?>"><img src="<?php echo base_url('asset/images/admin/img/close.png');?>" width="40"></a></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center" id="blue">Close</div></td>
      </tr>
    </table>
  </div>
  <?php echo $this->session->flashdata('msg'); ?>
  <div id="tbl" style="float:left;">
  <h3>Edit Section</h3>
  <div id="content_left">
  <form id="edit_section" name="edit_section" method="post" action="<?php echo base_url('admin/section/save_data/'); ?>">
    <table width="95%">
      <tr><td><b>Section Title</b></td><td>
        <input type="text" name="title" id="title" class="sedang" value="<?php echo set_value('title'); ?>">
      </td></tr>
      <tr><td width="100px"><b>Description</b></td><td>
        <textarea name="description" id="content"><?php echo set_value('description'); ?></textarea>
        </td></tr>
      <tr><td><b>Language</b></td><td>
        <select name='bahasa'>
          <?php foreach ($bahasa as $key => $bhs) {
          echo "<option value='$bhs->id_bahasa'>$bhs->nama_bahasa</option>";
          } ?>
        </select></td></tr>
      <tr><td></td><td><input type="submit" class="button" value="Save">
      <input type="reset" class="button" value="Reset">
      </td></tr>
    </table>
  </form>
  </div>
  </div>
</div>
</div>
