<?php
include '../koneksi.php';
$no = $_GET['no']; //get the no which will updated
$query = "SELECT * FROM tabel_perusahaan WHERE no = $no"; //get the data that will be updated
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
?>
<form method="post" action="edit2.php">
<table width="500" border="0" cellpadding="2" cellspacing="2">
  <tr bgcolor="orange">
	<td height="21" colspan="3">
     <strong> Form Update</strong>
    </td>

  <tr>
  	<td width="23%"> no </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="no"  value="<?php echo $data['no']; ?>"> </td>
  </tr>

  <tr>
  	<td>nama perusahaan</td>
    <td>:</td>
    <td> <input type="text" name="nama_perusahaan" value="<?php echo $data['nama_perusahaan']; ?>"> </td>
  </tr>

  <tr>
  	<td>email</td>
    <td>:</td>
    <td> <textarea name="email"><?php echo $data['email']; ?></textarea></td>
  </tr>
  
  <tr>
  	<td>password</td>
    <td>:</td>
    <td> <textarea name="password"><?php echo $data['password']; ?></textarea></td>
  </tr>
   
 <tr>
  	<td></td> <td></td> <td> <input type="hidden" name="no" value="<?php echo $data['no']; ?>">
  	<input type="SUBMIT" name="SUBMIT" value="Save"></td>
  </tr>
</table>
</form>