<?php
session_start();
include('connection.php');
include('user_menu.php');
$i=$_SESSION['uid'];
$sql=mysql_query("select * from user where uid='$i'");
$arr=mysql_fetch_array($sql);
?>
<form action="u_edit_ac.php" method="post" enctype="multipart/form-data">
<table>
<tr>
<td>NAME:</td>
<td><input type="text" name="nm"  value="<?php echo $arr['name'];?>" /></td>
</tr>
<tr>
<td>USERNAME:</td>
<td><input type="text" value="<?php echo $arr['u_username'];?>" disabled="disabled"></td>
</tr>
<tr>
<td>PASSWORD:</td>
<td><input type="password" name="pwd" value="<?php echo $arr['password'];?>" /></td>
</tr>
<tr>
<td>DOB:</td>
<td><input type="text" name="dob"  value="<?php echo $arr['dob'];?>" /></td>
</tr>
<tr>
<td>CONTACT:</td>
<td><input type="text" name="con"  value="<?php echo $arr['contact'];?>" /></td>
</tr>

<tr>
<td>ADDRESS:</td>
<td><textarea name="addr"><?php echo $arr['address'];?></textarea></td>
</tr>
<tr>
<td>OCCUPATION:</td>
<td><input type="text" name="ocp"  value="<?php echo $arr['occupation'];?>" /></td>
</tr>
<tr>
<td>PROFILE PIC:</td>
<td><input type="file" name="img" /></td>
</tr>

<tr>
<td>SUBMIT</td>
<td><input type="submit" value="Update">
</td></tr>
</table>
</form>
