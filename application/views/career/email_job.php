!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title></title>
  </head>
<body>
  <h3>Application Form</h3>
  <table>
    <tr>
      <td>Title Job</td>
      <td>:</td>
      <td><?php echo $job->title; ?></td>
    </tr>
    <tr>
      <td>Position</td>
      <td>:</td>
      <td><?php echo $job->position; ?></td>
    </tr>
    <tr>
      <td>Divisi</td>
      <td>:</td>
      <td><?php echo $job->devisi; ?></td>
    </tr>
    <tr>
      <td>Name</td>
      <td>:</td>
      <td><?php echo $email['name']; ?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td>:</td>
      <td><?php echo $email['email']; ?></td>
    </tr>
    <tr>
      <td>No Phone</td>
      <td>:</td>
      <td><?php echo $email['no_phone']; ?></td>
    </tr>
    <tr>
      <td>Address</td>
      <td>:</td>
      <td><?php echo $email['no_phone']; ?></td>
    </tr>
    <tr>
      <td>Education</td>
      <td>:</td>
      <td><?php echo $email['no_phone']; ?></td>
    </tr>
    <tr>
      <td>Attachment</td>
      <td>:</td>
      <td><?php echo lamaran_url(); ?></td>
    </tr>
    <tr>
      <td colspan="3"></td>
    </tr>
  </table>
</body>
</html>
