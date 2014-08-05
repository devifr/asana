<?php $row = $rows->row(); ?>
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h3><?php echo "$row->position ($row->title)"; ?></h3>
</div>
<div class="modal-body">
  <div id="isi">
    <div align="center">
      <div id="result"></div>
    </div>
    <form id="apply_job" name="apply_job" action="<?php echo base_url($this->lang->lang().'/careers/save_data/'.$id_encrypt);?>" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label class="control-label" for="name">Name</label>
        <input type="text" name="name_lamaran" id="name" class="form-control">
      </div>
      <div class="form-group">
        <label class="control-label" for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control">
      </div>
      <div>
        <label class="form-group">No Phone</label>
        <input type="text" name="no_phone" id="no_phone" class="form-control">
      </div>
      <div class="form-group">
        <label class="control-label">Address</label>
        <textarea name="address" id="address" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label class="control-label">Education</label>
        <input type="text" name="education" id="education" class="form-control">
      </div>
      <div class="form-group">
        <label class="control-label">Attachment *zip, doc, docx</label>
        <input type="file" name="attach" id="attach" class="form-control">
      </div>
      <div class="form-group">
        <label class="control-label">Cover Letter</label>
        <textarea name="cover" id="cover" class="form-control" style="height: 250px;">
              Dear Sir/Madam,

              I wish to apply for the position above, as advertised on arsanajaya.com on <?php echo date('d F Y') ?>.

              [Please add your message here.]

              Thank you.

              Sincerely
              [Your Name]
          </textarea>
      </div>
      <div class="form-group">
        <label class="control-label"><?php echo $captcha; ?></label>
        <input type="text" name="captcha" value="" class="form-control" />
      </div>
      <div class="form-group">
        <div class="pull-right">
          <input type="submit" class="btn btn-primary" name="simpan" id="button" value="Apply" />
          <input type="button" data-dismiss="modal" aria-hidden="true" class="btn btn-danger" value="Close" />
        </div>
      </div>
    </form>
  </div>
</div>
